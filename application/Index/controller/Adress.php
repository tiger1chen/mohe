<!--?≥ --><?php
namespace app\index\controller;
use app\index\model\Mohe_user_adress as Mua;
/**
* 
*/
class Adress
{
	
	public function show_adress($uid) {
		// $result = [];
		$show_adress = new Mua;
		$data = ss $show_adres  ss($uid);
		// $result['data'] = $data;
		return ["error_code" => 1001, "data" => $data, "message" => "获取收货地址成功"];
	} 
}