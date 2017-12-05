<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>课程列表</title>

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
            <h3><i class="fa fa-angle-right"></i> 课程展示列表 </h3>

            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> 课程列表 </h4>
                            <hr>
                            <thead>
                            <tr>
                                <th>课程ID</th>
                                <th>课程名称</th>
                                <th>课程价格</th>
                                <th>课程介绍</th>
                                <th>课程封面</th>
                                <th>访问人数</th>
                                <th>课程等级</th>
                                <th>是否免费</th>
                                <th>所属方向</th>
                                <th>是否分类</th>
                                <th>是否类型</th>
                                <th>添加时间</th>
                                <th>修改时间</th>
                                <th><i class=" fa fa-edit"></i>Status</th>
                                <th><i class="fa fa-bookmark"></i>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $k=>$v)
                                <tr>
                                    <td>{{ $v->cour_id }}</td>
                                    <td>{{ $v->cour_name }}</td>
                                    <td>{{ $v->cour_money }}</td>
                                    <td>{{ $v->cour_content }}</td>
                                    <td>
                                        <img src="{{ $v->cour_image }}" width="100px" height="50px"/>
                                    </td>
                                    <td>{{ $v->cour_number }}人</td>
                                    <td>
                                        @if($v->cour_level == 0)
                                            初级
                                        @elseif($v->cour_level == 1)
                                            中级
                                        @elseif($v->cour_level == 2)
                                            高级
                                        @endif
                                    </td>
                                    <td>
                                        @if($v->cour_is_free == 0)
                                            免费
                                        @else
                                            不免费
                                        @endif
                                    </td>
                                    <td>{{ $v->dir_name }}</td>
                                    <td>{{ $v->class_name }}</td>
                                    <td>{{ $v->type_name }}</td>
                                    <td>{{ $v->cour_addtime }}</td>
                                    <td>{{ $v->cour_updatetime }}</td>
                                    <td>
                                        @if($v->cour_status == 0)
                                            <span class="label label-success label-mini">显示</span>
                                        @else
                                            <span class="label label-warning label-mini">隐藏</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('delCourse',['cour_id'=>$v->cour_id]) }}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div align="center" class="page">
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

                        {{--{!! $directionData->render() !!}--}}
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

</script>

</body>
</html>
