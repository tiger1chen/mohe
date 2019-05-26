<?php
namespace app\index\controller;
use app\index\libarary\WxPay;
use app\index\model\Mohe_order_item;
use app\index\model\Mohe_order;


class Pay
{
    public function unifiedorder($open_id, $order_id) {
        //确定用户是否支付
        if (empty($open_id) || empty($order_id)) {
            return ['data'=>[],'error_code'=>1000,'message'=>'失败'];
        }
        $order = new Mohe_order();
        $order_item = new Mohe_order_item();
        $order_data = $order_item->show_order_by_open_id($order_id);
        $order = $order->show_order($order_id);
        if (empty($order_data) || empty($order) || $order->status != 1) {
            return ['data'=>[],'error_code'=>1000,'message'=>'并未存在改订单'];
        }
        $price_array = array_column($order_data, 'price');
        $total_fee = array_sum($price_array);
        $attach = strval($order_id);
        $out_trade_no = $order->order_sn;
        $wx_pay = new WxPay(1,$open_id,3,4,$out_trade_no,6,$total_fee,$attach);
        $result_data = $wx_pay->pay();
        return ['data'=>$result_data,'error_code'=>1001,'message'=>'成功'];
    }
}
