<?php
namespace app\index\Model;

use think\Model;

/**
* 
*/
class Mohe_order extends Model
{
	
	protected $table = "mohe_order";

	protected function initialize() {
		parent::initialize();
	}

	//列表
	public function list_order() {
		return $this->select();
	}

	public function show_order($order_id) {
		if (empty($order_id)) {
			return false;
		}
		return $this -> where('id', $order_id) -> find();
	}

	//新增
	public function insert_order($result) {
		return $this -> save();
	}
}