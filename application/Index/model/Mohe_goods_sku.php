<?php
namespace app\Index\model;

use think\Model;

class Mohe_goods_sku extends Model
{

    protected $table = 'mohe_goods_sku';

    protected function initialize()
    {
        parent::initialize();
    }

    public function get_goods_sku_by_id($goods_sku_id) {
        if (empty($goods_sku_id)) {
            return FALSE;
        }
        return $this->where('id',$goods_sku_id)->find();
    }

}