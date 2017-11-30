<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>购物车_慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <link rel="stylesheet" href="./frontend/css/shopcar/moco.min.css" type="text/css" />

    <script type="text/javascript">
        var OP_CONFIG = {"module":"pay","page":"cart","userout":0,"userInfo":{"uid":"6169489","nickname":"qq_LinaD_0","head":"http:\/\/img.mukewang.com\/user\/5a13e9020001af9101000100-80-80.jpg","usertype":"1","roleid":0,"phone":"13311552192"}};
        OP_CONFIG.isLogin = 1;
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
        var requirejsTimestamp="v=201711231701";
    </script>



    <!--imooc-->

    <!--/imooc-->




    <link rel="stylesheet" href="/static/module/??common/css/common-less.css,pay/common/css/common-less.css,pay/cart/css/index-less.css?v=1509701228" type="text/css" />
</head>

<body>

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="" target="_self" class="hide-text" title="首页">慕课网</a></div>

        <div class="l">
            <ul class="nav-item l">
                <li><a href="http://www.imooc.com/course/list" target="_self">课程</a></li>
                <li><a class='program-nav' href="http://class.imooc.com" target="_self">职业路径<i class="icn-new"></i></a></li>
                <li><a href="http://coding.imooc.com" target="_self">实战</a></li>
                <li><a href="http://www.imooc.com/wenda" target="_self">猿问</a></li>
                <li><a href="http://www.imooc.com/article" target="_self">手记</a></li>

            </ul>
        </div>

        <div id="login-area">
            <ul class="clearfix logined">
                <li class="app-download" id="js-app-load">
                    <a href="http://www.imooc.com/mobile/app" target="_blank" style="width:60px;">下载APP</a>
                    <div class="app-load-box clearfix js-load-box">
                        <img src="http://www.imooc.com/static/img/common/appload.png" class="l">
                        <div class="r">
                            <p>扫描下载慕课网APP</p>
                            <a href="https://itunes.apple.com/cn/app/mu-ke-wang/id722179140?mt=8"><i class="imv2-ios"></i>App Store下载</a>
                            <a href="http://www.imooc.com/mobile/mukewang.apk"><i class="imv2-android"></i>Android下载</a>
                        </div>
                    </div>
                </li>

                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span class="icon-shopping-cart imv2-cart  js-endcart"></span><span>购物车</span><span class="shopping_icon js-cart-num" data-ordernum="0"  data-cartnum="0" style='display: none'>0</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"></div>
                </li>
                <li class='remind_warp'>
                    <i class="msg_remind"></i>
                    <a target="_blank" href='http://www.imooc.com/u/6169489/notices'>
                        <i class='imv2-notifications'></i>
                    </a>
                </li>

                <li class="set_btn user-card-box"  id="header-user-card">
                    <a id="header-avator" class="user-card-item" action-type="my_menu"  href="http://www.imooc.com/u/6169489/plans" target="_self">
                        <img src='http://img.mukewang.com/user/5a13e9020001af9101000100-40-40.jpg' width='40' height='40' />
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card"></div>
                </li>
            </ul>
        </div>

        <div class='search-warp clearfix' style='min-width: 32px;'>
            <div class="pa searchTags js-searchtags" ></div>

            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result"></ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='imv2-search'></i></div>
        </div>
    </div>
</div>

<div class='body-main'>


    <div class='cart-header'>
        <div class='cart-header-warp clearfix'>
            <div class='cart-title left clearfix'>
                <h1 class='left'>我的购物车</h1>


            </div>
            <div class='right'>

                <div class='clearfix'>
                    <span class='left'><a class='js-myorderbtn  myorder-history' href='/myorder'>我的订单历史</a></span>
                    <span class='left num js-order-num' style='display: none;'>0</span>
                </div>

            </div>
        </div>
    </div>


    <div class='cart-body' id='cartBody'>
        <p class='notdata'>购物车内空空如也</p>
    </div>
    <!-- 遮罩 -->
    <div class="block-package js-block-package"></div>
    <!-- loading -->
    <div class="loading">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
    <!-- 遮罩 end-->





</div>


<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;"  target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973"  target="_blank" title="新浪微博"></a>
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
                        <li> <a href="http://class.imooc.com/user/faq" target="_blank">常见问题</a></li>
                        <li> <a href="http://class.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>

<div id="J_GotoTop" class="elevator">
    <a href="/user/feedback" class="elevator-msg" target="_blank">
        <i class="imv2-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="http://www.imooc.com/about/faq" class="elevator-faq" target="_blank">
        <i class="imv2-help_outline"></i>
        <span class="">常见问题</span>
    </a>
    <a href="http://www.imooc.com/mobile/app" target="_blank" class="elevator-app" >
        <i class="imv2-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin" >
        <i class="imv2-weixigzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="imv2-arrow2_u"></i>
        <span class="">返回顶部</span>
    </a>
</div>



<script type="text/javascript" src="/static/lib/requirejs/2.1.20/require.js"></script>
<script src='/static/lib/jquery/1.11.3/jquery.min.js'></script>
<script src="//coding.imooc.com/passport/static/scripts/ssologin.js?v=2.0"></script>
<script type="text/javascript" src="/static/module/common/js/common.js"></script>
<script>
    requirejs.config({
        urlArgs: requirejsTimestamp,
        baseUrl: '/static/module/',
        skipDataMain: true,
        waitSeconds: 0,
        paths: {
            lib: '/static/lib',
            socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
            store: '/static/lib/store/store.min.js',
            ueditor: '/static/lib/ueditor/ueditor.final.min.js',
            moco: '/static/moco/v1.0/dist/js/moco.min.js',
            scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
            juicer: '/static/lib/juicer/juicer.min.js',
            ace: '/static/lib/ace/src-min-noconflict/ace.js',
            //ace: '/static/lib/ace/src/ace.js',
            pagination: '/static/lib/pagination/jquery.pagination.js',
            swfobject: '/static/lib/swfobject/2.2/swfobject.min.js',
            uploader: '/static/lib/webuploader/0.1.5/webuploader.js',

            jwplayer: '/static/lib/jwplayer/1.0.0/jwplayer.js',
            ide: '/static/lib/ide/dest/ide.min.js',
            autocomplete:'/static/lib/util/autocomplete.js',
            validate:'/static/lib/util/validate.js',
            placeholder:'/static/lib/util/placeholder.js',
            modalbutton:'/static/lib/util/modal.button.js',
            scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
            SyntaxHighlighter:'/static/lib/ueditor/third-party/SyntaxHighlighter/shCore.js',
            socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
            clipbord: '/static/lib/clipboard/dist/clipboard.min.js',
            jqueryValidate: '/static/lib/jquery-validate/jquery.validate.min.js'
        },
        shim: {
            'swfobject': {
                exports: 'swfobject'
            }
        }
    });
</script>





<script>/*RESOURCE_MAP*/</script>
<script data-entry="pay/cart/index">
    requirejs(['pay/cart/index']);
</script>



<div style="display: none">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?613bf05434ed4b759c19cea36f7193a0";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</div>
</body>
</html>