<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>我的购物车_慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="./frontend/css/order_order_center/moco.css" type="text/css">


    <link rel="stylesheet" href="./frontend/css/order_order_center/a.css" type="text/css">

<body>

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo">
            <a href="https://www.imooc.com/whdorder_list" target="_self" title="首页" style="background-image: url('./frontend/images/index/logo.jpg')">

            </a>
        </div>
        <div class="l">
            <ul class="nav-item l">
                <li><a href="" target="_self">课程</a></li>
                <li><a class="program-nav" href="" target="_self">职业路径<i class="icn-new"></i></a></li>
                <li><a href="" target="_self">实战</a></li>
                <li><a href="" target="_self">猿问</a></li>
                <li><a href="" target="_self">手记</a></li>
            </ul>
        </div>



    </div>
</div>

<div class="body-main">

    <div class="order-main clearfix">

        <div class="slider l">
            <h1>购物车服务</h1>
            <ul class="nav-menu">
                <a href="http://order.imooc.com/myorder">
                    <li class="clearfix active">
                        <p class="nav-name l">我的购物车</p>
                        <span class="imv2-arrow2_r r"></span>
                    </li>
                </a>

            </ul>
        </div>
    <form action="{{ url('swhd_order') }}" method="post" class="from">
        <div class="right-container l">
            <h1>我的商品<span>共<i class="sum">{{ $num  }}</i>个商品</span></h1>
            <div class="myOrder">

                <ul class="myOrder-list">
                    <li data-flag="1711291441506746">
                        <p class="myOrder-number">
                            商品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;课程名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价格
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;操作&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<lable class="check_all" style="cursor: pointer;">全选口</lable>

                            <span class="date"></span>
                            <a href="/user/feedback" target="_blank" class="r"></a>
                        </p>
                    <div id="whd">
                        @if(!empty($data))
                        @foreach($data as $key => $val)
                        <div class="myOrder-course clearfix cart">
                            <dl class="course-del l">
                                <dd class="clearfix">
                                    <a href="{{ url('owhd_shop',['cour_id'=>$val->goods_id]) }}" class="l">
                                        <input type="hidden" name="cour_image[]" value="{{ $val->cour_image }}"/>
                                        <img class="l" src="{{ asset($val->cour_image) }}" width="160" height="90"/>
                                    </a>
                                    <div class="del-box l" style="margin-top: 25px">
                                        <input type="hidden" value="{{ $val->cour_name }}" name="cour_name[]"/>
                                        <a href=""><p class="course-name">{{ $val->cour_name }}</p></a>
                                        <p class="price-btn-box clearfix">
                                            <span class="l course-little-price">￥{{ $val->goods_price }}</span>
                                        </p>
                                    </div>
                                </dd>
                            </dl>
                            <div class="course-money l pt64">
                                <div class="total-box">
                                    <p class="type-price">
                                        <span class="RMB">&yen;</span>{{ $val->goods_price }}
                                    </p>
                                </div>
                            </div>
                            <div class="course-action l" style="margin-top: 50px">
                                <a>
                                    <input name="goods_id[]" type="hidden" value="{{ $val->goods_id }}"/>
                                    <font size="15"><lable class="del_one" style="cursor: pointer;">×</lable></font>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                                <input type="hidden" value="{{ $val->type_id }}" name="type_id[]"/>
                                <input type="hidden" value="{{ $val->goods_price }}" class="goods_price" name="goods_price[]"/>
                                <font size="15">
                                    <input type="checkbox" class="input-checkbox" value="false"/>
                                    <input type="hidden" name="status[]" value="false"/>
                                </font>
                            </div>
                        </div>
                        @endforeach
                        @elseif(empty($data))
                            <div class="myOrder-course clearfix cart">
                                <font size="5px"><strong>购物车内空空如也</strong></font>
                            </div>
                        @endif
                    </div>
                    </li>
                </ul>
            </div>
            <div class="jiesuan" style="margin-left: 800px">
                <div style="margin-left: -200px">
                    <p><font size="3">总金额:</font></p>
                    <p>
                        <font color="red" size="5">￥</font>
                        <font color="red" size="5" class="price">0</font>
                        <font color="red" size="5">.00</font>
                    </p>
                </div>
                <div style="width: 100px; height: 30px;">
                    <button class="sub" type="button" style="width: 100px; height: 30px; background-color: red">结算</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>



<div style="position: static;" id="footer">
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
                        <li><a href="" target="_blank">网站首页</a></li>
                        <li><a href="" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="" target="_blank">人才招聘</a></li>
                        <li> <a href="" target="_blank">联系我们</a></li>
                        <li> <a href="" target="_blank">讲师招募</a></li>
                        <li> <a href="" target="_blank">常见问题</a></li>
                        <li> <a href="" target="_blank">意见反馈</a></li>
                        <li><a href="" target="_blank">慕课大学</a></li>
                        <li> <a href="" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


</body></html>
<script src="{{ asset('jquery.min.js') }}"></script>
<script src="{{ asset('layer/layer.js') }}"></script>
<script>
    $(document).on('click','.del_one',function(){
        var cour_id = $(this).parent().prev().val();
        var num = $('.sum').html();
        var sum = num - 1;
        var obj = $(this);
        $.ajax({
            url:"{{ url('swhd_del') }}",
            type:"post",
            data:"cour_id="+cour_id,
            dataType:"json",
            success:function(msg)
            {
                if(msg.code==200){
                    obj.parents('.cart').remove();
                    layer.open({
                        content: '删除成功',
                        scrollbar: false
                    });
                    $('.sum').html(sum);
                }
            }
        })
    })
</script>

<script>
    $(document).on('click','.check_all',function() {
        //全选  全不选
        if ($(":checkbox").attr("checked") != "checked") {
            $(":checkbox").attr("checked", "checked");
            //如果全选  获取到每个商品的价钱   相加
            $('.input-checkbox').next().val('true');
            var new_price = $('.goods_price').val();
            //alert(new_price)
        }
        else {
            $(":checkbox").removeAttr("checked");
            $('.input-checkbox').next().val('false');
            var price = "0";
            $('.price').html(price);
        }
    });

    $(document).on('click','.input-checkbox',function(){

        $(this).next().val('true');
        var old_price = $('.price').html();
        var price = $(this).parent().prev().val();
        var value = $(this).val();
        //alert(price);
        if(value=='false'){
            var new_price = parseInt(old_price) + parseInt(price*1);
            $('.price').html(new_price);
            $(this).val('true');
        }else{
            var new_price = parseInt(old_price) - parseInt(price*1);
            $('.price').html(new_price);
            $(this).val('false');
        }

    });
</script>
<script>
    $(document).on('click','.sub',function(){
        var goods_price = $('.price').html();
        var u_id = "{{ $u_id }}";
        if(goods_price == '0'){
            layer.msg('请选择课程', {
                time: 0 //不自动关闭
                ,btn: ['确定', '取消']
            });
        }else if(u_id == ''){
            layer.msg('请先去登录', {
                time: 0 //不自动关闭
                ,btn: ['确定', '取消']
            });
        }else{
            $('.from').submit();
        }
    })
</script>