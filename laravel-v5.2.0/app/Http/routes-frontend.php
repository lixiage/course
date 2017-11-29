<?php
Route::get('/','Controller@index');
Route::get('index','LoginController@index');

//购物车
Route::any('whdindex','ShopcarController@index');

//订单
Route::any('whdorder_list','OrderController@whdorder_list');