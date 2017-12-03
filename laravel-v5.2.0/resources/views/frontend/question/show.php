<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>猿问</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Cache-Control" content="no-transform ">
<link rel="dns-prefetch" href="http://www.imooc.com/">
<link rel="dns-prefetch" href="http://img.imooc.com/">
<link rel="dns-prefetch" href="http://img.mukewang.com/">
<link rel="apple-touch-icon" sizes="76x76" href="http://www.imooc.com/static/img/common/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="http://www.imooc.com/static/img/common/touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="http://www.imooc.com/static/img/common/touch-icon-ipad-retina.png">
<meta name="Keywords" content="IT程序员技术交流与问答,技术问答,慕课网社区,编程技术问答,技术问答平台,IT技术社区">
<meta name="Description" content="猿问是由慕课网为广大IT爱好者提供的专业问答交流平台,这里大牛云集,用户可根据自身需求,提出相关问题,也可为有问题同学进行解答,互帮互助,分享知识！">

<meta name="viewport" content="width=device-width,target-densitydpi=high-dpi,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">


<link rel="stylesheet" href="./frontend/css/yuanwen/moco.css" type="text/css">
<link rel="stylesheet" href="./frontend/css/yuanwen/a.css" type="text/css">
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

<div id="header">
    <div class="page-container" id="nav">
         <div id="logo" class="logo">
             <a href="index" target="_self" class="hide-text" title="首页" style="background-image: url('./frontend/images/index/logo.jpg')">慕课网</a>
         </div>

        <button type="button" class="navbar-toggle visible-xs-block js-show-menu">
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
            <li class="set-btn visible-xs-block js-header-avator"><a href="http://www.imooc.com/u/5767042" target="_self"><img src="./frontend/images/yuanwen/59a902890001f04901000100-100-100.jpg" height="40" width="40"></a></li>
                        
            <li>
                <a href="http://www.imooc.com/course/list" target="_self">免费课程</a>
            </li>           
            <li><a href="http://class.imooc.com/" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="http://coding.imooc.com/" target="_self">实战</a>
            </li>
            <li><a href="question_index" class="active" target="_self">猿问</a></li>
            <li><a href="note_index" target="_self">手记</a></li>
            <li class="visible-xs-block"><a href="http://www.imooc.com/user/setprofile" target="_self">我的设置</a></li>
            <li class="visible-xs-block">
                <a href="http://www.imooc.com/passport/user/logout?referer=//www.imooc.com" target="_self">退出</a>
            </li>
            
        </ul>
                <div id="login-area">
            <ul class="clearfix logined">
                
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span>购物车</span><span class="shopping_icon js-cart-num" data-ordernum="0" data-cartnum="0" style="display: none">0</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"><div class="cart-title-box clearfix">
                            <h2 class="l">我的购物车</h2>
                            <h5 class="r">已加入<span class="js-incart-num">0</span>门课程</h5>
                        </div>
                        <div class="cart-wrap">
                            <div class="clear-cart">
                                <span class="cartIcon icon-shopping-cart"></span>
                                <h3>购物车里空空如也</h3>
                                <div class="text">快去这里选购你中意的课程</div>
                                <p><a class="go-link" href="http://coding.imooc.com/" target="_blank">实战课程</a></p>
                                <p><a class="go-link" href="http://class.imooc.com/" target="_blank">职业路径</a></p>
                            </div>
                        </div>
                        <div class="more-box clearfix">
                            <div class="l show-box">
                                <span class="text"><a href="http://order.imooc.com/myorder" target="_blank">我的订单中心</a></span>
                            </div>
                            <a href="http://order.imooc.com/pay/cart" target="_blank" class="r moco-btn moco-btn-red go-cart">去购物车</a>
                        </div>
                    </div>
                </li>

                <script>
                    $(function(){
                        $('.shop-cart').mouseover(function(){
                            if($(this).hasClass('hover')){
                                $(this).removeClass('hover');
                            }else{
                                $(this).addClass('hover');
                            }
                        });
                        $('.my-cart').mouseover(function(){
                            if($('.shop-cart').hasClass('hover')){
                                $('.shop-cart').removeClass('hover');
                            }else{
                                $('.shop-cart').addClass('hover');
                            }
                        });
                    });
                </script>
               
                <li class="set_btn user-card-box" id="header-user-card">
                    <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="http://www.imooc.com/u/5767042" target="_self">
                        <img src="./frontend/images/yuanwen/59a902890001f04901000100-100-100.jpg" height="40" width="40">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card"><div class="card-inner">
                            <div class="card-top clearfix">
                                <a href="http://www.imooc.com/u/5767042" class="l"><img src="./frontend/images/yuanwen/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0"></a>
                                <div class="card-top-right-box l">
                                    <a href="http://www.imooc.com/u/5767042">
                                        <span class="name text-ellipsis">qq_夜的寂静_0</span>
                                    </a>
                                    <div class="meta">
                                        <a href="http://www.imooc.com/u/5767042/experience">经验<b id="js-user-mp">220</b></a>
                                        <a href="http://www.imooc.com/u/5767042/credit">积分<b id="js-user-credit">0</b></a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-center-box">
                                <ul class="clearfix">
                                    <li class="l">
                                        <a href="http://www.imooc.com/u/5767042/courses" target="_blank">
                                            <span class="user-center-icon icon-tick"></span>我的课程
                                        </a>
                                    </li>
                                    <li class="l">
                                        <a href="http://order.imooc.com/myorder" target="_blank">
                                            <span class="user-center-icon icon-receipt"></span>
                                            订单中心
                                        </a>
                                    </li>
                                    <li class="l">
                                        <a href="http://www.imooc.com/mall/index" target="_blank">
                                            <span class="user-center-icon icon-score_shop"></span>积分商城
                                        </a>
                                    </li>
                                    <li class="l"><a href="http://www.imooc.com/user/setbindsns" target="_blank">
                                            <span class="user-center-icon icon-set"></span>个人设置</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-history">
                                <span class="history-item">
                                    <span class="tit text-ellipsis">轻松学会Laravel-基础篇</span>
                                    <span class="media-name text-ellipsis">6-3 Eloquent ORM中新增数据、自定义时间戳及批量赋值的使用</span>
                                    <i class="icon-clock"></i>
                                    <a href="http://www.imooc.com/video/12507" class="continue" title="轻松学会Laravel-基础篇6-3  Eloquent ORM中新增数据、自定义时间戳及批量赋值的使用">继续</a>
                                </span>
                            </div>
                            <div class="card-sets clearfix">
                                <a href="http://www.imooc.com/passport/user/logout?referer=//www.imooc.com" class="l">安全退出</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>

<div class="bindHintBox js-bindHintBox hide">
    <div class="pr">
        为了账号安全，请及时绑定邮箱和手机
        <a href="http://www.imooc.com/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>


<div id="main">


<div class="wenda clearfix">

    <div class="js-layout-change">
        <div class="l wenda-main">
            <div class="wd-top-slogan" style="background-image: url('./frontend/images/wenda_title_bg.png')">
                <span>程序员自己的问答社区</span>
                <a class="js-quiz" href="question_insert">我要提问</a>
            </div>
            <div class="nav">
                <a href="question_index" class="<?= empty($_SERVER['QUERY_STRING'])?'active':'' ?>">推荐</a>
                <a href="question_index?type=new" class="<?= substr($_SERVER['QUERY_STRING'],-3)=='new'?'active':'' ?>">最新</a>
                <a href="question_index?type=wait" class="<?= substr($_SERVER['QUERY_STRING'],-4)=='wait'?'active':'' ?>">等待回答</a>

            </div><!--.nav end-->

            
            <!--推荐位-->
            <ul class="recommend">
                <li>
                    <span class="recommend-tag">推荐</span>
                    <a href="http://www.imooc.com/wenda/detail/383123" class="recommend-link" data-ast="yuanwenindex_1_1461" target="_blank" title="【有奖问答】与技术大咖探讨前端JavaScript开发">【有奖问答】与技术大咖探讨前端JavaScript开发</a>
                </li>
            </ul>
            <!--recommend end-->
                                   


            <!--左侧列表内容-->
            <div class="wenda-list">


<?php foreach($data as $val){ ?>
    <div class="ques-answer <?= isset($val->answers[0])?'no-answer':'' ?>">
        <div class="tag-img">
            <a href="http://www.imooc.com/wenda/22" target="_blank">
                <img src="./frontend/images/yuanwen/59e96ed90001e4e702400240.jpg" title="AngularJS">
            </a>
        </div><!--.tag-img end-->
        <div class="from-tag">        来自
            <?php if(isset($val->class)){foreach($val->class as $v){ ?>
                <a href="http://www.imooc.com/wenda/5" target="_blank"><?= $v->class_name ?></a>
            <?php }} ?>
        </div><!--.from-tag end-->
        <div class="ques-con">
            <a href="question_info?q_id=<?= $val->question_id ?>" class="ques-con-content" target="_blank">
                <?= $val->question_title ?>
            </a>
        </div>
        <?php if(isset($val->answers[0])){ ?>
            <div class="answer-con first" data-answer-id="269840" id="answer-con">
                <div class="user">
                    <?= !empty($val->useid)?'<span class="had-solve">已采纳</span>':'' ?>
                    <a href="http://www.imooc.com/u/5787526/bbs" target="_blank"><?= $val->answers[0]->username ?></a>
                    <span class="signature">回答：</span>
                </div>
                <div class="answer-content">
                    <?= $val->answers[0]->answer_content ?>
                </div>
                <div class="answer-content-all rich-text aimgPreview"><p>我觉得不管学习哪门语言，到后面总还是要学习一下规范，程序员的素养必不可少啊！！</p></div>
                <div class="ctrl-bar clearfix">
                </div><!--.ctrl-bar end-->
            </div><!--.answer-con end-->
        <?php }else{ ?>
            <div class="info-bar clearfix">
                <a href="question_info?q_id=<?= $val->question_id ?>" class="to-answer">撰写答案</a>
                <p class="integral-info"><a href="javascript:void(0)">回答问题最高可获<span>2积分</span>哦！</a></p>
                <a href="http://www.imooc.com/wenda/detail/383115" class="answer-num"><?= $val->answer_num ?>个回答</a>
<!--                <a href="javascript:;" class="follow" data-ques-id="383115"><i class="heart">关注</i></a>-->
            </div><!--.info-bar end-->
        <?php } ?>
        <div class="reply-con">
            <div class="release-reply-con clearfix">
                <div class="user-pic">
                    <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                        <img src="./frontend/images/yuanwen/59a902890001f04901000100-100-100_002.jpg" alt="qq_夜的寂静_0">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                </div>
                <div class="textarea-con">
                    <textarea placeholder="写下你的回复"></textarea>
                </div>
                <p class="err-tip"></p>
                <div class="userCtrl clearfix">
                    <div class="verify-code"></div>
                    <div class="do-reply-btn" data-answer-id="269840" data-ques-uid="10000">回复</div>
                </div>
            </div><!--.release-reply-con end-->
        </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<?php } ?>


<div class="page">
    <a href="<?= $data->Url(1) ?>">首页</a>
    <a href="<?= $data->previousPageUrl() ?>">上一页</a>
    <?php for ($i = 1; $i <= $data->lastPage(); $i++){ ?>
    <a href="<?= $data->Url($i) ?>" class="text-page-tag <?= ($data->CurrentPage() == $i) ? ' active' : '' ?>">
        <?= $i ?>
    </a>
    <?php } ?>
    <a href="<?= $data->nextPageUrl() ?>">下一页</a>
    <a href="<?= $data->Url($data->lastPage()) ?>">尾页</a>
</div>
            </div>
        </div>
        <div class="r wenda-slider">
            
            
<div class="user-about">
    <div class="user-info">
        <div class="user-pic">
            <a href="http://www.imooc.com/u/5767042/bbs">
                <img src="./frontend/images/yuanwen/59a902890001f04901000100-100-100_002.jpg" alt="qq_夜的寂静_0">
            </a>
        </div>
        <div class="user-name">
            <a href="http://www.imooc.com/u/5767042/bbs">qq_夜的寂静_0</a>
                                </div>
        <div class="integral-info clearifx">
            <a href="http://www.imooc.com/u/5767042/credit" class="integral">积分：0</a>
            <a href="http://www.imooc.com/mall/index" class="integral-mall">积分商城</a>
        </div>
    </div><!--.user-info end-->
    <div class="user-action">
        <span class="ques"><a href="http://www.imooc.com/u/5767042/bbs">提问</a><!-- <i></i>--></span>
        <span class="reply"><a href="http://www.imooc.com/u/5767042/bbs?sort=reply">回答</a></span>
        <span class="follow"><a href="http://www.imooc.com/u/5767042/bbs?sort=follow">关注</a></span>
    </div><!--.user-action end-->
</div><!--.user-about end-->



        </div>
    </div>
</div>



</div>

<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;" target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973" target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="http://www.imooc.com/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="http://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="http://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <li> <a href="http://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="http://www.imooc.com/about/faq" target="_blank">常见问题</a></li>
                        <li> <a href="http://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                       <!--  <li><a href="/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>

