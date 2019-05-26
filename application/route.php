<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::rule('show_item/:id','index/goodsdetail/show_item');

Route::rule('show_register/:id','index/register/show_register');

Route::rule('show_adress/:uid', 'index/adress/show_adress');

Route::rule('insert_adress/:id', 'index/insert_adress/insert_adress');

Route::rule('updateRegister/:uid', 'index/updateRegister/change_register');

Route::rule('myCoupon/:uid', 'index/myCoupon/my_coupon');

Route::rule('insertUser/:uid', 'index/InsertUser/insert_user');

Route::rule('author/', 'index/author/get_open_id');

Route::rule('login/', 'index/author/login');

Route::rule('teachDetail/:uid', 'index/teachDetail/teachDetail');

Route::rule('show_index/:id', 'index/Index/show_index');

Route::rule('pre_pay/:open_id/:order_id', 'index/Pay/unifiedorder');

Route::rule('pay/:open_id/:order_id', 'index/Pay/final_pay');

/*
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['Background/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['Index/hello', ['method' => 'post']],
    ]
];*/
