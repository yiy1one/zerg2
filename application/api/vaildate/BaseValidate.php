<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/18
 * Time: 10:32
 */

namespace app\api\vaildate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{

    public function goCheck(){
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);

        if(!$result){
            $e = new ParameterException([
                'msg' => $this->getError(),
            ]);

            throw $e;

        }else{

            return true;

        }

    }
}