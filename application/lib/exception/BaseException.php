<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/18
 * Time: 14:57
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    public $code = 400;

    public $msg = '参数错误';

    public $errorCode = 10000;



}