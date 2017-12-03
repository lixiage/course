<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>类型列表</title>

    <!-- Bootstrap core CSS -->
    <link href="./backend/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="./backend/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="./backend/css/style.css" rel="stylesheet">
    <link href="./backend/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    @include('backend.layouts.header');
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('backend.layouts.menu');
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> 类型展示列表 </h3>

            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> 类型列表 </h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i>类型ID</th>
                                <th class="hidden-phone"><i class="fa fa-bookmark"></i> 类型名称</th>
                                <th class="hidden-phone"><i class="fa fa-bookmark"></i> 所属方向</th>
                                <th class="hidden-phone"><i class="fa fa-bookmark"></i> 所属分类</th>
                                <th><i class="fa fa-bookmark"></i> 添加时间</th>
                                <th><i class="fa fa-bookmark"></i> 修改时间</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th><i class="fa fa-bookmark"></i> 操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($typeData as $k=>$v)
                                <tr>
                                    <td>{{ $v->type_id }}</td>
                                    <td>
                                        <span class="edit-span">{{ $v->type_name }}</span>
                                        <input type="hidden" class="edit-input" aa='{{ $v->type_id }}'>
                                    </td>
                                    <td>{{ $v->type_parent_id }}</td>
                                    <td>{{ $v->type_addtime }}</td>
                                    <td>{{ $v->type_updatetime }}</td>
                                    <td>
                                        @if($v->type_status == 0)
                                            <span class="label label-success label-mini status_display" type_status="{{ $v->type_status }}" id="{{ $v->type_id }}">显示</span>
                                        @else
                                            <span class="label label-warning label-mini status_hide" type_status="{{ $v->type_status }}" id="{{ $v->type_id }}">隐藏</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('delType',['type_id'=>$v->type_id]) }}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $typeData->render() !!}
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    @include('backend.layouts.footer');
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="./backend/js/jquery.js"></script>
<script src="./backend/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="./backend/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="./backend/js/jquery.scrollTo.min.js"></script>
<script src="./backend/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="./backend/js/common-scripts.js"></script>

<!--script for this page-->

<script>
    //custom select box

    $(function(){
        $('.edit-span').click(function(){
            var type_name = $(this).text();

            $(this).hide();
            $(this).next().attr('type','text').focus().val(type_name);
        });

        $('.edit-input').blur(function(){
            var _this=$(this);
            var type_id = $(this).attr('aa');
            var type_name = $(this).val();

            //获取上一级的值
            var nextName = $(this).prev().text();

            //判断文本框值是否与上级值相同
            if(type_name == nextName){
                //隐藏当前文本框
                $(this).attr('type','hidden').val('');
                //显示上级
                $(this).prev().show();
                return false;
            }

            $.ajax({
                type: "post",
                url: "{{ url('editType') }}",
                data: "type_id="+type_id+"&type_name="+type_name,
                dataType: "json",
                success:function(msg){
                    if(msg.code == 0){
                        alert('修改失败');
                        return false;
                    }
                    if(msg.code == 1){
                        _this.prop("type","hidden").val('');
                        _this.prev().show().text(type_name);
                    }
                }
            });
        });

        //修改为隐藏状态
        $('.status_display').click(function(){
            var type_id = $(this).prop('id');
            var type_status = $(this).attr('type_status');
            var type_text = $(this).text();
            $.ajax({
                type:"post",
                url:"{{ url('editTypeStatus') }}",
                data: "type_id="+type_id+"&type_status="+type_status,
                dataType:"json",
                success:function(msg){
                    if(msg.code == 0){
                        alert('修改失败');
                        return false;
                    }else{
                        location.href='';
                    }
                }
            });
        });

        //修改为显示状态
        $('.status_hide').click(function(){
            var type_id = $(this).prop('id');
            var type_status = $(this).attr('type_status');
            var type_text = $(this).text();

            $.ajax({
                type:"post",
                url:"{{ url('editTypeStatus') }}",
                data: "type_id="+type_id+"&type_status="+type_status,
                dataType:"json",
                success:function(msg){
                    if(msg.code == 0){
                        alert('修改失败');
                        return false;
                    }else{
                        location.href='';
                    }
                }
            });
        });
    });

</script>

</body>
</html>
