<?php
Route::get('/','Controller@index');

Route::get('index','LoginController@index');

//购物车
Route::any('whdindex','ShopcarController@index');

//订单
Route::any('whdorder_list','OrderController@whdorder_list');

Route::get('index','LoginController@index');   //这是主页面  进入首页
Route::any('question_index','QuestionController@index');//猿问
Route::any('login',"LoginController@login");//这是主页面  登录
Route::any('loginout',"LoginController@loginOut");//这是主页面  退出



Route::any("weiboUrl","LoginController@weiboUrl");//这是微博登录

//猿问
Route::any('question_index','QuestionController@index');
Route::any('question_insert','QuestionController@question');

