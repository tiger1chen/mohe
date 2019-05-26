<?php
namespace app\index\controller;

use app\index\model\Mohe_magic_usercoupoon as mgu;
use app\index\model\Mohe_magic_coupon as mgc;

/**
* 
*/
class my_coupon
{
	
	public function my_coupon($uid)
	{
		$result = [];
		$my_coupon = new mgu;
		$data = $my_coupon->show_user_coupon($uid);
		$coupon = new mgc;
		$c_data = $coupon->show_magic_coupon($data["id"]);
		$result['data'] = $data;
		$result['c_data'] = $c_data;
		return ["error_code": 1001, "data": {"list":$result}, "message": "信息展示成功"];
	}
}
