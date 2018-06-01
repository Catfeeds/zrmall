<?php
namespace app\Ad\controller;

use think\Controller;
use think\Request;
use think\Config;
use think\Session;

class Index extends Auth {

    public function index(){
        $statistics = array();
        $data = ['openid' => session('?user') ? session('user.openid') : ''];
        $res = authApi('SellerAd/ad_total', $data);

        if($res['code'] == 1){
            $statistics = $res['data'];
        }else{
            dump($res['msg']);die;
        }
        $this->assign('statistics', $statistics);
    }

}