<?php
namespace app\index\controller;
use app\index\model\Mohe_cms as mc;

/**
* 
*/
class teachDetail extends controller
{
	
	public function teachDetail($id) {
		$detail = new mc();
		$detail_data = $detail->mohe_cms_id($id);
		return ["error_code"=>1001, "data"=>$detail_data];

	}
}