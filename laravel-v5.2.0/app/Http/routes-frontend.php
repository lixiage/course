<?php
Route::get('/','Controller@index');
Route::get('index','LoginController@index');
//免费课程的那个页面
Route::get('Freeindex','FreeController@Freeindex');
Route::any('Freeindex/{id}',['uses'=>'FreeController@Freeindex']);
Route::any('sclass/{id}',['uses'=>'FreeController@sclass']);