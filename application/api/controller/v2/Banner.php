<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/16
 * Time: 10:34
 */

namespace app\api\controller\v2;

use app\api\vaildate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;


class Banner
{

    public function getBanner($id){



        return "v2";

    }

}