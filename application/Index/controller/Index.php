<?php
namespace app\index\controller;
use app\index\model\Mohe_conf as mc;
use app\index\model\Mohe_cms as mcm;

class Index
{
    public function index()
    {
        $data = ['name'=>'mytest','url'=>'www.mohe.com'];
        return ['data'=>$data,'code'=>1,'message'=>'成功'];
    }

    public function show_index($id){
    	$result = [];
    	$banner = new mc();
    	$goods_list = new mcm();
    	$banner_data = $banner->show_conf($id);
    	$list_data = $goods_list->show_index();
    	$result['banner_data'] = $banner_data;
    	$result['list_data'] = $list_data;
    	return['error_code'=>10000, 'data'=>$result]; 
    }
}
