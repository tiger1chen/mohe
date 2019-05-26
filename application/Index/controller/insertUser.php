<?php
namespace app\index\controller;

use app\index\model\Mohe_user as mu;
use Think\Request;

/**
* 
*/
class insertUser
{
	
	public function insert_user()
	{
		$data = ([
			'name' => input('post.name'),
			'age' => input('post.age'),
			'tags' => input('post.tags')
			// 'desc' => input('post.desc')

		]);
		$insert_user = new mu;
		$insert_user = $insert_user -> insert_user($data);
		return ['error_code'=>1001, 'data'=>null, 'message'=>'信息存储成功'];
	}
}

