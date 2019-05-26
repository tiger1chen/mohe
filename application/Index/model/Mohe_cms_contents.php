<?php
namespace app\index\Model;

use think\model;

/**
* 
*/
class Mohe_cms_contents extends Model
{
	
	protected $table = "mohe_cms_contents";

	protected function initialize() {
		parent::initialize();
	}

	public function show_cms_contents ($contents_id) {
		if (empty($contents_id)) {
			return false;
		}
		return $this -> where('id', $contents_id) -> find();
	}
}