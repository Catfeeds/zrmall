<?php
namespace app\Ad\controller;

use think\Controller;
use think\Request;
use think\Config;
use think\Session;

class Auth extends Base {

    public function _initialize(){
        parent::_initialize();
        if(!session('?user')){
//            redirect(url('user/login/index'));exit;
        }

        //是否已开店
        $data = ['openid' => session('?user') ? session('user.openid') : ''];
        $res  = api('OpenShop/is_open', $data);
//        echo '<pre>';
//        print_r($res);die;
//        return $res;die;
//        if($res['code'] != 1){
//            return $this->ret($res);
//        }
    }
}