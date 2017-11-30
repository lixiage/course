<?php
Route::get('/','Controller@index');
Route::get('index','LoginController@index');
//免费课程的那个页面
Route::get('Freeindex','FreeController@Freeindex');
Route::any('Freeindex/{id}',['uses'=>'FreeController@Freeindex']);
Route::any('sclass/{id}',['uses'=>'FreeController@sclass']);

Route::get('index','LoginController@index');

Route::any('whdindex','ShopcarController@index');                       //购物车
Route::any('whdorder_list','OrderController@whdorder_list');            //订单
Route::get('index','LoginController@index');                            //这是主页面  进入首页
Route::any('question_index','QuestionController@index');                //猿问
Route::any('login',"LoginController@login");                            //这是主页面  登录
Route::any('loginout',"LoginController@loginOut");                      //这是主页面  退出
Route::any('getmessage',"LoginController@weiboMessag")                 ;//微博获取用户信息
Route::any("weibo","LoginController@weibo");                            //这是微博登录
Route::any('question_index','QuestionController@index');                //猿问
Route::any('question_insert','QuestionController@question');
Route::any('password','PasswordsController@index');

