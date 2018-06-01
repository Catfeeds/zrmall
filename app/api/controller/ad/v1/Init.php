<?php
/**
 * ------------------------------
 * 公共文件
 * ------------------------------
 * Create by lazycat
 * 2017-06-01
 * ------------------------------
 */
namespace app\api\controller\ad\v1;
use think\Controller;
use think\Db;
use think\Exception;
use think\Log;
use think\Hook;

class Init extends Controller
{
    //protected $api_cfg;     //接口参数
    protected $token;       //token
    protected $post;        //post数据
    protected $get;         //get数据
    protected $put;         //put数据
    protected $need_field;  //必填字段
    protected $sw;          //事务执行结果
    protected $result;      //返回结果
    protected $dotime;      //执行时间
    protected $terminal;    //终端类型
    protected $admin;       //管理员资料
    protected $token_prefix = 'api_token_';  //token前缀
    protected $log_table    = 'method';   //存放日志的表，method表示用当前控制器名作为表名
    protected $is_log       = true; //是否记录日志，配合config('api_log_level')
    protected $attr         = ['R'];   //方法属性
    protected $user;

    public function _initialize(){
        debug('begin');
        //request()->filter('htmlspecialchars');  //数据过滤设置
        $this->post = input('post.');
        $this->terminal = $this->request->isMobile();
        config('api_log_level',3); //只记录更新数据的接口日志
        return $this->ret(['code' => 22, 'msg' => 'error']);
//        file_put_contents('dd.txt',$this->request->controller().'-'.$this->request->action().PHP_EOL,FILE_APPEND);
        if(request()->controller() == 'Ad.v1.auth' && request()->action() == 'token'){
            //创建token请求，跳过
        }else{
            //检查token
            if(!isset($this->post['token']) || empty($this->post['token'])) {
                echo json_encode(['code' => 0,'msg' => '缺少Token参数！']);
                exit();
            };
            if(!isset($this->post['sign']) || empty($this->post['sign'])) {
                echo json_encode(['code' => 0,'msg' => '缺少sign参数！']);
                exit();
            }

            $cache_token = $this->token_prefix . $this->post['token'];
            $this->token = cache($cache_token);
            if(empty($this->token)){
                echo json_encode(['code' => 0,'msg' => 'Token已失效！']);exit();
            }
            $this->terminal = $this->token['terminal'] ? $this->token['terminal'] : $this->terminal;
        }

        if(isset($this->post['openid']) && $this->post['openid']){
            $user = $this->_user($this->post['openid']);
            $this->user = $user['code'] == 1 ? $user['data'] : '';
//            return $this->user;
            if(empty($this->user)){
                echo json_encode(['code' => 0,'msg' => '用户不存在！']);exit();
            }
        }

        //file_put_contents('t.txt','A-'.debug('begin','end',6).PHP_EOL,FILE_APPEND);
        $this->_config();
    }

    public function _user($openid){
        $user = db('user')->where(array('openid' => $openid))->field('user_id,user_mobile,user_username,user_shop_id,user_level')->find();
        !$user && $this->ret(['code' => 0, 'msg' => '用户不存在']);
        return ['code' => 1, 'data' => $user];
    }


    /**
     * 签名校验
     */
    public function check_sign($nosign=''){
        if($this->post['sign'] != $this->_sign($nosign)){
            return ['code' => 0,'msg' => '签名校验失败！'];
        }

        return ['code' => 1];
    }

    /**
     * 生成签名
     * @param string|array $nosign 不参与签名的字段，如文件上传等
     */
    public function _sign($nosign=''){
        $not = ['random','sign'];   //不参与签名字段
        if($nosign){
            $nosign = explode(',',$nosign);
            $not    = array_merge($not,$nosign);
        }
        $not = array_unique($not);

        //签名字段
        $sign_field = array_keys($this->post);
        $sign_field = array_merge($sign_field,$this->need_field);
        $sign_field = array_unique($sign_field);

        //清除不参与签名字段
        foreach($sign_field as $key => $val){
            if(in_array($val,$not)) unset($sign_field[$key]);
        }
        $data = array();
        foreach($sign_field as $val){
            $data[$val] = $this->post[$val];
        }
        ksort($data);
        $query=http_build_query($data).'&'.($this->token['sign_code'] ? $this->token['sign_code'] : $this->post['sign_code']);
        $query=urldecode($query);
        return md5($query);
    }

    /**
     * 防止重复请求
     * @param float $time 允许重复请求的时间间隔
     */
    public function check_require($time=0.3){
        $cache_name = 'req_'.md5($this->post['sign'].'_'.$this->post['random']);

        $cache_time = cache($cache_name);
        $microtime=microtime(true);
        if($cache_time>0 && ($microtime-$cache_time < $time)){
            return ['code' => 0,'msg' => '请不要频繁请求！'];
        }

        cache($cache_name,$microtime,ceil($time)+1);
        return ['code' => 1];
    }

    /**
     * 请求方法前相关校验
     * @param string $need_field 必填字段
     * @param int $check_require 请求限制
     * @param string $nosign_field 不参与签名字段
     */
    public function check($field='',$check_require=1,$nosign_field=''){
        if($check_require !== false && $check_require !== 0) {
            $res = $this->check_require($check_require);
            if($res['code'] != 1) return $res;
        }


        $need   = [];   //必填字段
        if($field) {
            $need = explode(',', $field);
            foreach ($need as $val) {
                if (!isset($this->post[$val]) || is_null($this->post[$val]) || $this->post[$val] === '') {
                    return ['code' => 0, 'msg' => '参数' . $val . '不能为空！'];
                }
            }
        }



        $this->need_field = $need;

        //签名字段
        //$sign_field = array_keys($this->post);
        //$sign_field = array_merge($sign_field,$need);
        //$this->need_field = array_unique($sign_field);

        //签名校验
        $res = $this->check_sign($nosign_field);
        return $res;
    }



    /**
     * 接口数据返回
     * @param $data
     */
    public function ret($data,$return_type = 'json'){
        $msg = [
            0   => '操作失败！',
            1   => '操作成功！',
            3   => '找不到记录！',
        ];
        if(!isset($data['msg']) && isset($msg[$data['code']]))  $data['msg'] = $msg[$data['code']];
        if(!isset($data['data'])) $data['data'] = '';

        $this->result = $data;
        if($return_type == 'json') $this->result = json($data);
        $this->dotime = debug('begin','end',6);

        $params = ['handle' => $this];
        Hook::listen('api_ad_end', $params);
        dump($this->result);die;
        return $this->result;
    }

    /**
     * 获取配置
     */
    public function _config(){
        $list = db('config_category')->cache('site_config')->where(['status' => 1,'upid' => ['gt',0]])->field('group_name,config')->select();
        $cfg = [];
        foreach($list as $key => $val){
            if($val['config']){
                $val['config'] = unserialize(html_entity_decode($val['config']));
            }
            $cfg[$val['group_name']] = $val['config'];
        }
        config('cfg',$cfg);

        $suanfa = cache_suanfa();
        config('suanfa',$suanfa);
        return $cfg;
    }

    /**
     * 雇员权限
     */
    public function _power(){
        $power = db('admin_group')->where(['id' => $this->admin['group_id'],'status' => 1])->field('menu_id,action')->find();
        if(!$power) return ['code' => 0,'msg' => '无权限！'];

        $power['action'] = json_decode(strtolower(html_entity_decode($power['action'])),true);
        return ['code' => 1,'data' => $power];
    }
}
