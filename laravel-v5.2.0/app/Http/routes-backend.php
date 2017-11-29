<?php
Route::get('/','Controller@index');
Route::get('welcome',function(){
    return '111';
});