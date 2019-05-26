<?php
namespace app\index\controller;

use app\index\model\Mohe_cms as Mc;

class Register
{
	public function show_register($id){
		// $result = [];
		$register = new Mc;
		$data = $register->mohe_cms_id($id);
		// $result['data'] = $data;
		return ["code" => 1001, "data" => $data, "message" => "成功"];
	}
}


