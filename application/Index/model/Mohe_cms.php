<?php
namespace app\Index\model;

use think\Model;

class Mohe_cms extends Model 
{
	protected $table = 'mohe_cms';

	protected function initialize()
	{
		parent::initialize();
	}
	//列表查询
	public function show_index() {
		return $this->select();
	}

	public function mohe_cms_id ($cms_id){

		if (empty($cms_id)) {
			return false;
		}
		return $this->where('id', $cms_id)->find();
	}

	public function change_mohe_cms($uid) {
		if (empty($uid)) {
			return false;
		}
		return $this->update(['agree_num' => intval('agree_num') + 1, 'id' => $uid]);
	}
}


