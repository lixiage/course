<?php
Route::get('/','Controller@index');

Route::get('index','LoginController@index');

//购物车
Route::any('whdindex','ShopcarController@index');

//订单
Route::any('whdorder_list','OrderController@whdorder_list');

Route::get('index','LoginController@index');   //这是主页面  进入首页
Route::any('question_index','QuestionController@show');//猿问
Route::any('login',"LoginController@login");//这是主页面  登录
Route::any('loginout',"LoginController@loginOut");//这是主页面  退出



Route::any("weiboUrl","LoginController@weiboUrl");//这是微博登录

//猿问
Route::any('question_index','QuestionController@show');//猿问展示
Route::any('question_insert','QuestionController@question');//提问
Route::get('question_verify','QuestionController@verify');//验证是否有足够的积分或是否免费
Route::get('question_info','QuestionController@answer');//问题详细信息

