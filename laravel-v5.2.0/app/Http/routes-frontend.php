<?php
Route::get('/','Controller@index');

Route::get('index','LoginController@index');//首页

//评论  回复   点赞
Route::any('zindex','CommentController@zindex');//评论
Route::any('zadd','CommentController@zadd');//添加评论
Route::any('zhits','CommentController@zhits');//点赞
Route::any('zreply','CommentController@zreply');//回复

//笔记
Route::any('noteindex','NotebookController@noteindex');
Route::any('courindex','CourController@courindex');



//免费课程的那个页面
Route::get('Freeindex','FreeController@Freeindex');
Route::any('Freeindex/{id}',['uses'=>'FreeController@Freeindex']);
Route::any('sclass/{id}',['uses'=>'FreeController@sclass']);
//职业课程视频
Route::any('Elastic','ElasticController@Elaindex');
Route::any('Elastic/{id}',['uses'=>'ElasticController@Elaindex']);
//实战的分类和视频
Route::any('Fight','FightController@Findex');
Route::any('Fight/{id}',['uses'=>'FightController@Findex']);
Route::any('Fightc/{id}',['uses'=>'FightController@Findexc']);
//首页的路由


Route::any('whdindex','ShopcarController@index');                       //购物车
Route::any('whdorder_list','OrderController@whdorder_list');            //订单
Route::get('index','LoginController@index');                            //这是主页面  进入首页
Route::any('login',"LoginController@login");                            //这是主页面  登录
Route::any('loginout',"LoginController@loginOut");                      //这是主页面  退出
Route::any('getmessage',"LoginController@weiboMessag")                 ;//微博获取用户信息
Route::any("weibo","LoginController@weibo");                            //这是微博登录
Route::any('question_insert','QuestionController@question');
Route::any('password','PasswordsController@index');
Route::any('savePassword',"PasswordsController@savePassword");
Route::any('password_url',"PasswordsController@SaveUrl");
Route::any('passwordSuccsee',"PasswordsController@passwordSuccsee");




//订单
Route::any('whdorder_list','OrderController@whdorder_list');
//修改订单状态
Route::any('owhd_saveorder','OrderController@owhd_saveorder');
//添加订单
Route::any('owhd_addorder','OrderController@owhd_addorder');
//购物车首页
Route::any('swhd_index','ShopcarController@swhd_index');
//购物车展示
Route::any('swhd_show','ShopcarController@swhd_show');
//购物车支付
Route::any('swhd_order','ShopcarController@swhd_order');

Route::any('swhd_payment/{order_id}','ShopcarController@swhd_payment');
//查询cookie
Route::any('owdh_showcookie','ShopcarController@owdh_showcookie');
//购物车提交订单
Route::any('swhd_order','ShopcarController@swhd_order');
//删除购物车
Route::any('swhd_del','ShopcarController@swhd_del');
//用户登录把购物车的商品入库
//Route::any('login_shopcar','LoginController@login_shopcar');
//购买页面
Route::any('owhd_shop/{cour_id}','OrderController@owhd_shop');
//生成订单页面
Route::any('owhd_order/{cour_id}','OrderController@owhd_order');
//支付页面
Route::any('owhd_payment/{order_id}/{cour_name}','OrderController@owhd_payment');



//猿问
Route::any('question_index','QuestionController@show');//猿问展示
Route::any('question_insert','QuestionController@question');//提问
Route::get('question_verify','QuestionController@verify');//验证是否有足够的积分或是否免费
Route::get('question_info','QuestionController@answer');//问题详细信息
Route::get('question_adopt','QuestionController@adopt');//采纳回复
Route::get('question_answer','QuestionController@q_answer');//回复
//手记
Route::any('note_index','NoteController@index');//手记展示
Route::any('note_insert','NoteController@insert');//手记添加
Route::get('note_info','NoteController@info');//查看详细手记信息
Route::get('note_hit','NoteController@hit');//点赞
Route::post('note_comment','NoteController@comment');//手记评论
//个人信息
Route::any('personal_index','PersonalController@index');//个人首页


Route::get('email','EmailController@email');//发送邮件


Route::any('pay','PayController@pay');//点击支付
Route::any('callReturn','PayController@callReturn');//回调
