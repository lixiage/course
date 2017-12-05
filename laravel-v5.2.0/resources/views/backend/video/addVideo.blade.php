<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>添加视频</title>

    <!-- Bootstrap core CSS -->
    <link href="./backend/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="./backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./backend/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="./backend/js/bootstrap-daterangepicker/daterangepicker.css" />

    <!-- Custom styles for this template -->
    <link href="./backend/css/style.css" rel="stylesheet">
    <link href="./backend/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--引入webuploader插件-->
    <link rel="stylesheet" type="text/css" href="./backend/css/webuploader.css">
    <link rel="stylesheet" href="./backend/css/webuploadstyle.css">
    <!--引入JS-->
    <script type="text/javascript" src="./backend/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./backend/js/webuploader.js"></script>
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
            <h3><i class="fa fa-angle-right"></i>添加视频</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <form class="form-horizontal style-form" action="{{ url('addVideoDo') }}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请选择添加视频的小节名称</label>
                                <div class="col-sm-10">
                                    <select name="small_id" class="form-control">
                                        @foreach($data as $v)
                                            <option value="{{ $v->small_id }}">{{ $v->small_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请选择添加的视频</label>
                                <div id="uploader" style="width: 800px;margin: auto">
                                    <div id="thelist" class="uploader-list"></div>
                                    <div class="btns">
                                        <div id="picker" style="float:left">选择文件</div>
                                        <input type="text" name="fileName" id="fileName"/>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-theme">添加视频</button>
                        </form>
                    </div>
                </div><!-- col-lg-12-->
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
<script src="./backend/js/jquery-ui-1.9.2.custom.min.js"></script>

<!--custom switch-->
<script src="./backend/js/bootstrap-switch.js"></script>

<!--custom tagsinput-->
<script src="./backend/js/jquery.tagsinput.js"></script>

<!--custom checkbox & radio-->

<script type="text/javascript" src="./backend/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="./backend/js/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="./backend/js/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="./backend/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


<script src="./backend/js/form-component.js"></script>


<script>
    //custom select box

    $(function(){
        var $list=$("#thelist");   //这几个初始化全局的百度文档上没说明，好蛋疼。
        var $btn =$("#ctlBtn");   //开始上传

        var uploader = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,

            // swf文件路径
            swf: './webuploader-0.1.5/Uploader.swf',

            // 文件接收服务端。
            server: '{{ url('section') }}',

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#picker',

            chunked: true,//开启分片上传
            threads: 1,//上传并发数

            method:'POST',
        });
        // 当有文件添加进来的时候
        uploader.on( 'fileQueued', function( file ) {
//            console.log(file);return ;
            var name = file.name;
            $('#fileName').val(name);
            server: '{{ url('section') }}',
            // webuploader事件.当选择文件后，文件被加载到文件队列中，触发该事件。等效于 uploader.onFileueued = function(file){...} ，类似js的事件定义。
            $list.append( '<div id="' + file.id + '" class="item">' +
            '<h4 class="info">' + file.name + '</h4>' +
            '<p class="state">等待上传...</p>' +
            '</div>' );
        });
        // 文件上传过程中创建进度条实时显示。
        uploader.on( 'uploadProgress', function( file, percentage ) {
            var $li = $( '#'+file.id ),
                    $percent = $li.find('.progress .progress-bar');

            // 避免重复创建
            if ( !$percent.length ) {
                $percent = $('<div class="progress progress-striped active">' +
                '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                '</div>' +
                '</div>').appendTo( $li ).find('.progress-bar');
            }

            $li.find('p.state').text('上传中');

            $percent.css( 'width', percentage * 100 + '%' );
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        uploader.on( 'uploadSuccess', function( file ) {
            $( '#'+file.id ).addClass('upload-state-done');
        });

        // 文件上传失败，显示上传出错。
        uploader.on( 'uploadError', function( file ) {
            $( '#'+file.id ).find('p.state').text('上传出错');
        });

        // 完成上传完了，成功或者失败，先删除进度条。
        uploader.on( 'uploadComplete', function( file ) {
            $( '#'+file.id ).find('.progress').remove();
            $( '#'+file.id ).find('p.state').text('已上传');
        });
        $btn.on( 'click', function() {
            if ($(this).hasClass('disabled')) {
                return false;
            }
            uploader.upload();
        });
    });

</script>

</body>
</html>
