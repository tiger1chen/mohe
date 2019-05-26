<?php
namespace app\index\model;

use think\Model;

/**
* 
*/
class Mohe_magic_coupon extends Model
{
	
	protected $table = "mohe_coupon";

    protected function initialize() {
        parent::initialize();
    }
	//所有优惠券数据
	public function show_coupon() {
		return $this->select();
	}

	public function show_magic_coupon($magic_coupon_id) {
		if (empty($magic_coupon_id)) {
			return false;
		}
		return $this -> where('id', $magic_coupon_id) -> find();
	}

	//新增优惠券
	public function add_coupon($data) {
		return $this -> add($data);
	}
}