<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/19
 * Time: 6:32
 */

namespace app\lib\exception;



class ParameterException extends BaseException
{
    public $code = 400;

    public $msg = '参数错误';

    public $errorCode = 10000;



}