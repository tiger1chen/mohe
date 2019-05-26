<?php
namespace app\index\model;

use think\Model;

/**
* 
*/
class mohe_magic_comment extends Model
{
	
	protected $table = "mohe_comment";

	protected function initialize() {
		parent::initialize();
	}

	public function show_magic_comment($comment_id) 
	{
		if (empty($comment_id)) {
			return false;
		}
		return $this -> where('id', $comment_id) -> find();
	}

	public function insert_magic_comment($data) {
		$user = new User();
		$user -> $data;
		$user -> save();
	}
}