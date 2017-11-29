<?php
Route::get('/','Controller@index');
Route::get('index','LoginController@index');   //这是主页面  进入首页

//猿问
Route::any('question_index','QuestionController@index');


