<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/18
 * Time: 10:32
 */

namespace app\api\vaildate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{

    public function goCheck(){
        $request = Request::instance();
        $params = $request->param();



        $result = $this->check($params);

        if(!$result){
            $error = $this->error;
            throw new Exception($error);
        }else{
            return true;
        }

    }
}