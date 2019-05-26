<?php
namespace app\index\controller;

use app\index\model\Mohe_magic_comment as mgc;

/**
* 
*/
class comment
{
	
	public function insert_comment()
	{
		$post = $this -> request -> post();
		$data = data([
			'service_id' => $post['service_id'],
			'star_num' => $post['star_num'],
			'tags' => $post['tags'],
			'comment_content' => $post['comment_content']
			
		]);
		$insert_comment = new Mohe_magic_comment;
		$data = $insert_comment -> insert_comment($data);
		return ["error_code": 1001, "data": null, "message": "评价成功"];
	}
}