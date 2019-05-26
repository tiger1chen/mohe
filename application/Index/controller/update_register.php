<?php
namespace app\index\controller;

use app\index\model\Mohe_cms as Mc;

/**
 * 
 */
 class update_register()
 {
 	
 	function chage_register($uid)
 	{
 		$result = [];
 		$chage_date = new Mc;
 		$data = $chage_date->mohe_cms_id($uid);
 		$result['data'] = $data;
 		if (!empty($data)) {
 			return ["code" => 1002, "data" => $result, "message" => "已经点赞过了"];
 		} else {
 			$change_date = $chage_date -> chage_mohe_cms($uid);
 			return ["code" => 1001, "data" => $change_date, "message" => "点赞成功"];
 		}

 	}
 } 