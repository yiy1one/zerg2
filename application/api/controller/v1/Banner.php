<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/16
 * Time: 10:34
 */

namespace app\api\controller\v1;

use app\api\vaildate\IDMustBePostiveInt;


class Banner
{
    //banner的id号
    public function getBanner($id){


        (new IDMustBePostiveInt()) -> goCheck();


    }

}