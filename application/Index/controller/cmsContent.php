<?php
namespace app\index\controller;
use app\index\model\Mohe_cms_contents as mcc;
use app\index\model\Mohe_goods as mg;

/**
* 
*/
class showContent
{
	
	public function show_content($uid)
	{
		$result = [];
		$show_content = new mcc;
		$content = new mg;
		$show_content = $show_content -> show_cms_content($uid);
		$content = $content -> get_goods_detail_by_id($show_content->goods_sku_id);
		$result['show_content'] = $show_content;
		$result['content'] = $content;
		return ['error_code': 0, 'data':$result];
	}
}