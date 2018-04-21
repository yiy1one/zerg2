<?php

namespace app\api\model;

use think\Model;

class Image extends BaseModel
{
    //
    protected $hidden = ['id','update_time','delete_time','from'];


    public function getUrlAttr($value,$data){
        return $this->prefixImgUrl($value,$data);
    }
}
