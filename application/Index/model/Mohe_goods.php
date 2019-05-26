<?php
namespace app\Index\model;

use think\Model;

class Mohe_goods extends Model
{

    protected $table = 'mohe_goods';

    protected function initialize()
    {
        parent::initialize();
    }

    public function get_goods_detail_by_id($goods_id) {
        if (empty($goods_id)) {
            return FALSE;
        }
        return $this->where('id',$goods_id)->find();
    }



}