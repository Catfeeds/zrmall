<?php
namespace app\api\controller\ad\v1;
use app\api\controller\ad\v1\Init;
use app\common\traits\F;

class OpenShop extends Init {

    /**
     * 判断用户是否已开店
     * @param string $_POST['openid']    用户openid
     */
    public function is_open(){
        //必传参数检查
        $res = $this->check('appid,access_key,secret_key,sign_code,device_id',false);
        return $res;
        if($res['code'] != 1){
            return $this->ret($res);
        }

        if(empty($this->user)){
            return $this->ret(['code' => 3, 'msg' => '用户不存在']);
        }
        if($this->user['user_shop_id'] == 0){//未开店
            return $this->ret(['code' => 0]);
        }
        return $this->ret(['code' => 1]);
    }

}
