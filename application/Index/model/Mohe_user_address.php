<?php
namespace app\Index\model;

use think\Model;

/**
* 
*/
class Mohe_user_address extends Model
{

	protected $table = 'mohe_user_adress';
	protected function initialize()
	{
		parent::initialize();
	}

	public function post_user_adress($user_adress_id)
	{
		if (empty($user_adress_id)) {
			return false;
		}
		return $this->where('id',$user_adress_id)->find();
	}
}