<?php
Route::get('/','Controller@index');

Route::get('index','LoginController@index');

//购物车
Route::any('whdindex','ShopcarController@index');

//订单
Route::any('whdorder_list','OrderController@whdorder_list');
//修改订单状态
Route::any('owhd_saveorder','OrderController@owhd_saveorder');
//添加订单
Route::any('owhd_addorder','OrderController@owhd_addorder');
//购物车首页
Route::any('swhd_index','ShopcarController@swhd_index');
//购物车展示
Route::any('swhd_show','ShopcarController@swhd_show');
//购物车支付
Route::any('swhd_order','ShopcarController@swhd_order');
Route::any('swhd_payment/{order_id}','ShopcarController@swhd_payment');
//查询cookie
Route::any('owdh_showcookie','ShopcarController@owdh_showcookie');
//购物车提交订单
Route::any('swhd_order','ShopcarController@swhd_order');
//删除购物车
Route::any('swhd_del','ShopcarController@swhd_del');
//购买页面
Route::any('owhd_shop/{cour_id}','OrderController@owhd_shop');
//生成订单页面
Route::any('owhd_order/{cour_id}','OrderController@owhd_order');
//支付页面
Route::any('owhd_payment/{order_id}/{cour_name}','OrderController@owhd_payment');

Route::get('index','LoginController@index');   //这是主页面  进入首页

//猿问
Route::any('question_index','QuestionController@index');


