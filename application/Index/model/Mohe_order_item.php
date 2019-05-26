<?php
namespace app\index\Model;

use think\Model;

/**
* 
*/
class Mohe_order_item extends model
{
	
	protected $table = "mohe_order_item";

	protected function initialize() {
		parent::initialize();
	}

	public function show_order_item($order_item_id) {
		if (empty($order_item_id)) {
			return false;
		}
		return $this -> where ('id', $order_item_id) -> find();
	}

    public function show_order_by_open_id($order_id) {
        if (empty($order_id)) {
            return false;
        }
        return $this -> where ('order_id', $order_id);
    }
}