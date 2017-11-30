<?php
Route::get('/','Controller@index');
Route::get('index','LoginController@index');   //这是主页面  进入首页
Route::any('question_index','QuestionController@index');//猿问
Route::any('login',"LoginController@login");//这是主页面  登录
Route::any('loginout',"LoginController@loginOut");//这是主页面  退出
Route::any("question","QuestionController@qusetion"); //这是猿问

Route::any("weiboUrl","LoginController@weiboUrl");//这是微博登录