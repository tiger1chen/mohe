<?php
namespace app\index\controller;
use app\index\model\Mohe_goods as Mg;
use app\index\model\Mohe_goods_sku as Mgs;


class Goodsdetail
{
    public function show_item($id)
    {
        $result = [];
        $item_detail = new Mg();
        $item_detail_sku = new Mgs();
        $sku_data = $item_detail_sku->get_goods_sku_by_id($id);
        $goods_data = $item_detail->get_goods_detail_by_id($sku_data->goods_id);
        $sku_data = $this->convert_sku_data($sku_data);
        $goods_data = $this->convert_goods_data($goods_data);
        $result['sku_data'] = $sku_data;
        $result['goods_data'] = $goods_data;
        return ['data'=>$result,'error_code'=>1001,'message'=>'成功'];
    }


    private function convert_sku_data($sku_data) {
        $obj = new \stdClass();
        $obj->goods_id = $sku_data->goods_id;
        $obj->sku_attribute = json_decode($sku_data->sku_attribute, TRUE);
        $obj->sale_num = $sku_data->sale_num;
        $obj->stock = $sku_data->stock;
        $obj->origin_price = $sku_data->origin_price;
        $obj->price = $sku_data->price;
        return $obj;
    }

    private function convert_goods_data($goods_data) {
        $obj = new \stdClass();
        $obj->title = $goods_data->title;
        $obj->goods_pic = $goods_data->goods_pic;
        $obj->attribute = json_decode($goods_data->attribute, TRUE);
        return $obj;
    }
}
