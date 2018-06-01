<?php
namespace app\api\controller\ad\v1;
use app\api\controller\ad\v1\Init;
use app\common\traits\F;

class SellerAd extends Init {

    /**
     * 广告统计
     * @param string $_POST['openid']    用户openid
     */
    public function ad_total(){
        //必传参数检查
        $res = $this->check('appid,access_key,secret_key,sign_code,device_id',false);
//        return $res;die;
        if($res['code'] != 1){
            return $this->ret($res);
        }

        $res = $this->user_ad($this->user['user_id']);

        return $this->ret(['code' => 1, 'data' => $res]);
    }

    /**
     * 用户广告统计
     * @param int    $_POST['uid']   用户ID
     */
    public function user_ad($uid){
        //广告统计
        $adModel = db('ad');
        $result['status'][0]    = $adModel->where(['uid' => $uid,'status' => 0])->count();    //待付款
        $result['status'][1]    = $adModel->where(['uid' => $uid,'status' => 1])->count();    //已付款
        $result['status'][2]    = $adModel->where(['uid' => $uid,'status' => 2])->count();    //强制下架

        $result['status']['all']= array_sum($result['status']);

        $result['status'][3]    = $adModel->where(['uid' => $uid, 'status' => 1, 'days' => ['like','%'.date('Y-m-d').'%']])->count();   //投放中
        $result['status'][4]    = $adModel->where(['uid' => $uid, 'status' => 1, 'sday' => ['gt',date('Y-m-d')]])->count(); //待投放
        $result['status'][5]    = $adModel->where(['uid' => $uid, 'status' => 1, 'eday' => ['lt',date('Y-m-d')]])->count(); //已过期

        //素材统计
        $do= db('ad_sucai');
        $result['sucai'][0]     = $adModel->where(['uid' => $uid, 'status' => 0])->count();    //待审核
        $result['sucai'][1]     = $adModel->where(['uid' => $uid, 'status' => 1])->count();    //审核通过
        $result['sucai'][2]     = $adModel->where(['uid' => $uid, 'status' => 2])->count();    //审核未通过

        $result['sucai']['all'] = array_sum($result['sucai']);

        //消费
        $result['money']=  $adModel->where(['uid' => $uid,'status' => 1])->sum('money_pay');

        return $result;
    }

}
