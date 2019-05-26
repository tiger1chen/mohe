<?php
namespace app\index\Model;

use think\Model;

/**
* 
*/
class insert_adress extends Model
{
	
	protected $table = "mohe_user_adress";
	protected function initialize() {
		parent::initialize();
	}

	public function insert_adress($data) {
		$user = new User();
		$user -> $data;
		$user -> save();
	}
}