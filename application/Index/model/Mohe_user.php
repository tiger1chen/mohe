<?php
// namespace app\index\model;
namespace app\Index\model;

use think\Model;

/**
* 
*/
class Mohe_user extends Model
{
	
	protected $table = "mohe_user";

	protected function initialize() {
		parent::initialize();
	}

	public function user_list() {
		return $this->select();
	}

	public function show_user($user_id) {
		if (empty($user_id)) {
			return false;
		}
		return $this -> where ('id', $user_id) -> find();
	}
	//修改数据
	public function update_user($id,$data) {
		$User = M("User");
		$User->where('id', $id) ->setField($data);

	}

	//搜索
	public function likeSearch($phone, $card_id, $keyword, $tags) {
		return $this->where([
												['phone', 'like', $phone.'%'],
												['card_id', 'like', $card_id.'%'],
												['tags', 'like', $tags.'%'],
												['key_words', 'like', $keyword.'%']
												])->select();
	}

	public function insert_user($data) {
		// $user = new User();
		// $user -> $data;
		// $user -> save();
		return $this->save($data);
	}
}