<?php
namespace app\index\model;

use think\Model;

/**
* 
*/
class Mohe_conf extends model
{
	
	protected $table = "mohe_conf";

	protected function initialize() {
		parent::initialize();
	}
	public function show_conf($conf_id) {
		if (empty($conf_id)) {
			return false;
		}
		return $this -> where('id', $conf_id) -> find();
	}
}