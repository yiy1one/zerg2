<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2018/4/16
 * Time: 10:34
 */

namespace app\api\controller\v1;

use app\api\vaildate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;


class Banner
{
    //banner的id号
    /**
     * @param $id
     * @return null
     * @throws BannerMissException
     * @throws \think\Exception
     */
    public function getBanner($id){



        (new IDMustBePostiveInt()) -> goCheck();


        $banner = BannerModel::getBannerById($id);

        if(!$banner){
            throw new Exception('内部错误');
        }


        return $banner;




    }

}