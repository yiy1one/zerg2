<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/18
 * Time: 15:02
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;

    public $msg = '请求的banner不存在';

    public $errorCode = 40000;

}