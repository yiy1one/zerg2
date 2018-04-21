<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/16
 * Time: 11:28
 */

namespace app\api\vaildate;


use think\Validate;

class TestVaildate extends Validate
{


    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];

}