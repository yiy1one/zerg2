<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/16
 * Time: 16:40
 */

namespace app\api\vaildate;



class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
        'num' => 'in:1,2,3'
    ];

    protected function isPositiveInteger($value,$rule='',$data='',$filed=''){

        if(is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
            return true;
        }else{
            return $filed . "必须是正整数";
        }
    }

}