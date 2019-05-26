<?php
namespace app\index\controller;

/**
* 
*/
class insert_adress
{
	
	public function insert_adress() {
		$post = $this -> request -> post();
		$data = data([
			'uid' => $post['uid'],
			'receive_user' => $post['receive_user'],
			'receive_phone' => $post['receive_phone'],
			'receive_province' => $post['receive_province'],
			'receive_city' => $post['receive_city'],
			'receive_area' => $post['receive_area'],
			'receive_area_detail' => $post['receive_area_detail']

		]);
		$insert_adress = new Mohe_insert_adress;
		$insert_adress = $insert_adress -> insert_adress($data);
		return ['error_code':1001, 'data':{}, 'message': '添加收货地址成功'];
	}
}