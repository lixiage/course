<?php
Route::get('/','Controller@index');
Route::get('index','LoginController@index');
Route::get('index','IndexController@index');//首页

Route::any('zindex','CommentController@zindex');//评论
Route::any('zadd','CommentController@zadd');//添加评论
Route::any('zhits','CommentController@zhits');//点赞
Route::any('zreply','CommentController@zreply');//回复