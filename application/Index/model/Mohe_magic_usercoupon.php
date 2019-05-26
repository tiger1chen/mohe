<?php
namespace app\index\model;

use think\Model;

/**
* 
*/
class Mohe_magic_usercoupon extends Model
{
	
	protected $table = "mohe_user_coupon";

	protected function initialize() {
		parent::initialize();
	}

	public function show_user_coupon($user_coupon_id) {
		if (empty($user_coupon_id)) {
			return false;
		}
		return $this -> where('uid', $user_coupon_id) ->find();
	}
}