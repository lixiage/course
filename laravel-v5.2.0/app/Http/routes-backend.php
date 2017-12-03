<?php
Route::get('/','Controller@index');
Route::get('welcome',function(){
    return '111';
});

//后台Index首页
 Route::any('index','PaticeController@index');


//direction--------------------start
//添加方向页面
Route::any('addDirection','IndexController@addDirection');
//执行添加方向
Route::any('addDirectionDo','IndexController@addDirectionDo');
//方向列表展示页面
Route::any('directionList','IndexController@directionList');
//删除方向
Route::any('delDirection/{dir_id}','IndexController@delDirection');
//修改方向
Route::any('editDirection','IndexController@editDirection');
//修改方向状态
Route::any('editDirectionStatus','IndexController@editDirectionStatus');
//direction--------------------end


//classify--------------------start
//添加分类页面
Route::any('addClassify','IndexController@addClassify');
//执行添加分类
Route::any('addClassifyDo','IndexController@addClassifyDo');
//分类列表展示页面
Route::any('classifyList','IndexController@classifyList');
//删除分类
Route::any('delClassify/{class_id}','IndexController@delClassify');
//修改分类
Route::any('editClassify','IndexController@editClassify');
//修改分类状态
Route::any('editClassifyStatus','IndexController@editClassifyStatus');
//classify--------------------end


//type--------------------start
//添加类型页面
Route::any('addType','IndexController@addType');
//执行添加类型
Route::any('addTypeDo','IndexController@addTypeDo');
//类型列表展示页面
Route::any('typeList','IndexController@typeList');
//删除类型
Route::any('delType/{type_id}','IndexController@delType');
//修改类型
Route::any('editType','IndexController@editType');
//修改类型状态
Route::any('editTypeStatus','IndexController@editTypeStatus');
//type--------------------end

//course-----------------start
//添加课程页面
Route::any('addCourse','IndexController@addCourse');

//接收课程数据并添加
Route::any('addCourseDo','IndexController@addCourseDo');

//课程展示页面
Route::any('courseList','IndexController@courseList');

//删除课程
Route::any('delCourse/{cour_id}','IndexController@delCourse');

//取课程表中一条
Route::any('editCourse/{cour_id}','IndexController@editCourse');

//修改课程
Route::any('editCourseDo','IndexController@editCourseDo');
//course-----------------end


//addChapter------------start
//添加章节页面
Route::any('addChapter','IndexController@addChapter');


Route::any('bandLogin','ManagementController@bandLogin');   //用户登录
Route::any('bandlist','PaticeController@bandlist');//用户管理
Route::any('empower','PaticeController@empower');  //用户列表
Route::any('privilege','PaticeController@privilege');  //节点管理
Route::any('usePower','PaticeController@usePower');  //为用户赋权
Route::any('addUser','PaticeController@addUser');  //为用户赋权
Route::any('powerList','PaticeController@powerList');  //权限列表
Route::any('charar','PaticeController@charar');  //权限列表
Route::any('givePrivilege','PaticeController@givePrivilege');  //为角色赋权


/***
 * 订单列表
 */
Route::any('orderList','OrderController@orderList');  //订单列表
Route::any('orderCount','OrderController@orderList');  //订单统计

Route::any('loginOut','PaticeController@loginOut');  //为角色赋权

