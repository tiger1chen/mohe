<?php
namespace app\Index\model;

use think\Model;

/**
* 
*/
class Mohe_user_adress extends Model
{

	protected $table = 'mohe_user_address';
	protected function initialize()
	{
		parent::initialize();
	}

	public function post_user_adress($user_adress_id)
	{
		if (empty($user_adress_id)) {
			return false;
		}
		return $this->where('uid',$user_adress_id)->find();
	}

	//修改数据
	public function update_adress($id, $adress){
		$User = M("User");
		$User->where('id', $id) ->setField('receive_area_detail', $adress);
	}
} 