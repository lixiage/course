<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>赋权</title>

    <!-- Bootstrap core CSS -->
    <link href="./backend/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="./backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./backend/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="./backend/js/bootstrap-daterangepicker/daterangepicker.css" />

    <!-- Custom styles for this template -->
    <link href="./backend/css/style.css" rel="stylesheet">
    <link href="./backend/css/style-responsive.css" rel="stylesheet">

    <!-- HML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container" >
    @include('backend.layouts.header');
    @include('backend.layouts.menu');
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>为角色赋权</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <form class="form-horizontal style-form" action="{{ url('givePrivilege') }}" method="post">
                            <table width="100%" id="general-table" class="table table-striped table-advance table-hover">
                                <tr>
                                    <th><i class="fa fa-bullhorn"></i><span style="width:50px;margin-left:30px;">根分类</span></th>
                                    <th><i class="fa fa-bullhorn"></i><span style="width:50px;margin-left:30px;">小分类</span></th>
                                </tr>
                                <tbody>
                                <?php foreach($row as $key=>$val){?>
                                <tr>
                                    <td width="20%"  valign="top"  class="first-cell" style="border-right: solid 1px rosybrown">
                                        <?php
                                        $tt = empty($val['curr'])?"":$val['curr'];
                                        if($tt==1){
                                        ?>
                                            <input type="checkbox" style="width: 10px;" value="<?php echo $val['pid']?>" name="pid[]" checked="checked" class="checkbox parentID" />
                                            <?php echo $val['pname']?>
                                    </td>
                                    <?php }else{?>
                                         <input type="checkbox" value="<?php echo $val['pid']?>" name="pid[]" class="checkbox parentID"/><?php echo $val['pname']?>
                                    <?php } ?>
                                    <td>
                                        <?php foreach($val['son'] as $k=>$v){?>
                                        <div style="width: 200px;float: left">
                                            <label>
                                                <?php
                                                   $tt = empty($v['curr'])?"":$v['curr'];
                                                if($tt==1){
                                                ?>
                                                <input type="checkbox" value="<?php echo $v['pid']?>" name="pid[]" checked class="checkbox sonID" parintId="<?php echo $v['parent_id']?>"/><?php echo $v['pname']?>
                                                <?php }else{?>
                                                <input type="checkbox" value="<?php echo $v['pid']?>" name="pid[]"  class="checkbox sonID"  parintId="<?php echo $v['parent_id']?>"/><?php echo $v['pname']?>
                                                <?php } ?>
                                            </label>
                                        </div>
                                        <?php }?>
                                    </td>
                                </tr>
                                <?php }?>
                                <input type="hidden" name="rid" value="<?php echo $info?>">
                                </tbody></table>
                            <button type="submit" class="btn btn-theme">添加类型</button>
                            <button type="reset"  class="btn btn-theme">重置</button>
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->
    @include('backend.layouts.footer');
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="./backend/js/jquery.js"></script>
<script src="./backend/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="./backend/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="./backend/js/jquery.scrollTo.min.js"></script>
<script src="./backend/js/jquery.nicescroll.js" type="text/javascript"></script>

<script src="./backend/js/common-scripts.js"></script>
<script src="./backend/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="./backend/js/bootstrap-switch.js"></script>
<script src="./backend/js/jquery.tagsinput.js"></script>
<script type="text/javascript" src="./backend/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="./backend/js/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="./backend/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="./backend/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="./backend/js/form-component.js"></script>
</body>
</html>
<script type="text/javascript" src="./backend/js/jquery.backstretch.min.js"></script>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(function(){
        //全选
        $("#btns").click(function(){
            var state = $(this).prop("checked");
            var inputList = $(".checkbox");
            $(inputList).each(function(k,v){
                $(v).prop("checked",state);
            })
        });
        //点击此元素下列元素全选
        $(".parentID").click(function(){
            //父级ID
            var parentID = $(this).val();
         //   alert(parentID);
            // alert(parentID);
            var state = $(this).prop("checked");
            var son = $(".sonID");
            $(son).each(function(k,v){
                var obj = $(son).eq(k).attr("parintId");
                if(parentID==obj){
                    $(son).eq(k).prop("checked",state);
                }
            })
        });
        $(".sonID").click(function(){
            var state = $(this).prop("checked");
            var checkbox =$(".parentID");
            var obj = $(this).attr("parintId");
            var  bool  = update(obj);
            $(checkbox).each(function(k,v){
                var zhi  = $(checkbox).eq(k).val();
                if(obj==zhi){
                    if(bool==true){
                        $(checkbox).eq(k).prop("checked",true);
                    }else{
                        $(checkbox).eq(k).prop("checked",false);
                    }

                }
            })
        });
        function update(obj){
            var docu = $(".sonID");
            var sign = false;
            $(docu).each(function(k,v){
                var ttt = $(docu).eq(k).attr("parintId");
                if(ttt==obj){
                    if($(docu).eq(k).prop("checked")){
                        sign = true;
                    }
                }
            });
            return sign;
        }
    })
</script>
