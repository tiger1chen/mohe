<?php
namespace app\index\model;

use think\Model;

/**
* 
*/
class Mohe_user_integration extends Model
{
	
	protected $table = "mohe_user_integration";
	protected function initialize() {
		parent::initialize();
	}

	public function show_user_integration($user_integration_id) {
		if (empty($user_integration_id)) {
			return false;
		}
		return $this -> where('id', $user_integration_id) -> find();
	}
}