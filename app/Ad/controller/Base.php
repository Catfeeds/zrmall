<?php
namespace app\Ad\controller;

use think\Controller;
use think\Request;
use think\Config;
use think\Session;

class Base extends Controller
{

    protected $api_cfg;     //接口参数
    protected $token;       //授权token
    protected $apiurl;      //接口请求地址
    protected $post;
    protected $get;
    protected $param;
    protected $sw;          //记录事务执行结果
    protected $dotime;      //执行时间
    protected $terminal;    //终端类型
    protected $result;      //返回结果
    protected $log_table    = 'admin_logs';   //存放日志的表，method表示用当前控制器名作为表名
    protected $is_log       = true; //是否记录日志，配合config('api_log_level')
    protected $attr         = ['R'];   //方法属性,默认为读操作

    public function _initialize()
    {
        debug('begin');
        //request()->filter('htmlspecialchars');  //数据过滤设置
        $this->post     = input('post.');
        $this->get      = input('get.');
        $this->param    = $this->request->param();
        Session::init();
        $this->apiurl   = request()->scheme().'://api.'.config('url_domain_root').'/ad.v1.';
        $this->api_cfg  = $this->api_cfg();
        config('apiurl',  $this->apiurl);
        config('api_cfg', $this->api_cfg);

        //每隔10分钟生成一次token
        $cacheKey = 'api_ad_token_' . session_id();
//        cache($cacheKey, null);
        if(!$this->token = cache($cacheKey)) {
            //config('api_debug',true);
            $res = api('auth/token', $this->api_cfg);
            if ($res['code'] != 1) {
                return $res;
            }
            $this->token = $res['data'];
            cache($cacheKey, $this->token,1200);
        }

        session('user.openid', 'e8e8658f-24ea-2b0e-baa4-f65a504030dc');

        $this->data = array_merge($this->param, $this->api_cfg);

        config('token', $this->token);
        $this->_config();
    }

    /**
     * 接口参数
     * @return array
     */
    private function api_cfg() {
        $data = [
            'appid'         => 4,
            'access_key'    => 'd6614a8c76b834b1253662d93dd124b2',
            'secret_key'    => '3c9668a5bde83343f878f16dc0489a15',
            'sign_code'     => '7251f6d2ea5fa44e14990ebb653e3944',
            'device_id'     => session_id(),
            'ip'            => request()->ip(),
        ];

        return $data;
    }

    /**
     * 获取配置
     */
    public function _config(){
        $list = db('config_category')->cache('site_config')->where(['status' => 1,'upid' => ['gt',0]])->field('group_name,config')->select();
        $cfg  = [];
        foreach($list as $key => $val){
            $val['config'] && $val['config'] = unserialize(html_entity_decode($val['config']));
            $cfg[$val['group_name']] = $val['config'];
        }
        config('cfg',$cfg);
        return $cfg;
    }

    /**
     * 接口数据返回
     * @param $data
     */
    public function ret($data,$return_type = 'array'){
        $msg = [
            0   => '操作失败！',
            1   => '操作成功！',
            3   => '找不到记录！',
        ];

        (!isset($data['msg'])   && isset($msg[$data['code']])) && $data['msg'] = $msg[$data['code']];
        (!isset($data['data'])) && $data['data'] = '';

        $this->result = $data;
        $return_type  == 'json' && $this->result = json($data);
        $this->dotime = debug('begin','end',6);

        Hook::listen('ad_log', ['handle' => $this]);

        return $this->result;
    }

    public function autoLogin(){
        if (!$remember = cookie('remember')) {
            return;
        }

        $remember = unserialize($remember);
        if ($remember['ip'] != request()->ip()) {
            cookie('remember', null);
            return;
        }

        if (!$data = cache($remember['token'])) {
            session('user', $remember);
            //从UserApi 获取用户信息 需要openid
//            $this->authApi('/User/userinfo');
//            if (1 == $this->_data['code'] && isset($this->_data['data'])) {
//                $data = $this->_data['data'];
//            }
            cookie('remember', null);
            return;
        }

        session('user', $data);

        $this->assign('user', $data);
        //用于ERP同步登录
        cache(md5(session_id()), $remember['erp_uid'], 3600);
    }

}