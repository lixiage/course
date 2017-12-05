<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="#"><img src="./backend/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?php echo isset($_SESSION['username'])?$_SESSION['username']:""?></h5>
            <?php
                foreach($infoo as $key=>$val){
            ?>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span><?php echo $val['pname']?></span>
                </a>
                <ul class="sub">
                    <?php
                        foreach($val['son'] as $k=>$v){
                    ?>
                    <li><a  href="<?php echo $v['pcontroller']?>"><?php echo $v['pname']?></a></li>
                     <?php }?>
                    {{--<li><a  href="empower">角色管理</a></li>--}}
                    {{--<li><a  href="powerList">节点管理</a></li>--}}
                </ul>
            </li>
            <?php }?>
            {{--<li class="sub-menu">--}}
                {{--<a href="javascript:;" >--}}
                    {{--<i class=" fa fa-bar-chart-o"></i>--}}
                    {{--<span>订单管理</span>--}}
                {{--</a>--}}
                {{--<ul class="sub">--}}
                    {{--<li><a  href="calendar.html">Calendar</a></li>--}}
                    {{--<li><a  href="gallery.html">Gallery</a></li>--}}
                    {{--<li><a  href="todo_list.html">Todo List</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="sub-menu">--}}
                {{--<a href="javascript:;" >--}}
                    {{--<i class="fa fa-book"></i>--}}
                    {{--<span>评论管理</span>--}}
                {{--</a>--}}
                {{--<ul class="sub">--}}
                    {{--<li><a  href="blank.html">Blank Page</a></li>--}}
                    {{--<li><a  href="login.html">Login</a></li>--}}
                    {{--<li><a  href="lock_screen.html">Lock Screen</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="sub-menu">--}}
                {{--<a href="javascript:;" >--}}
                    {{--<i class="fa fa-tasks"></i>--}}
                    {{--<span>分类管理</span>--}}
                {{--</a>--}}
                {{--<ul class="sub">--}}
                    {{--<li><a  href="{{ url('addDirection') }}">添加方向</a></li>--}}
                    {{--<li><a  href="{{ url('addClassify') }}">添加分类</a></li>--}}
                    {{--<li><a  href="{{ url('addType') }}">添加类型</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="sub-menu">--}}
                {{--<a href="javascript:;" >--}}
                    {{--<i class="fa fa-th"></i>--}}
                    {{--<span>分类列表</span>--}}
                {{--</a>--}}
                {{--<ul class="sub">--}}
                    {{--<li><a  href="{{  url('directionList') }}">方向列表</a></li>--}}
                    {{--<li><a  href="{{  url('classifyList') }}">分类列表</a></li>--}}
                    {{--<li><a  href="{{  url('typeList') }}">类型列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="sub-menu">--}}
                {{--<a href="javascript:;" >--}}
                    {{--<i class="fa fa-tasks"></i>--}}
                    {{--<span>课程管理</span>--}}
                {{--</a>--}}
                {{--<ul class="sub">--}}
                    {{--<li><a  href="{{ url('addCourse') }}">添加课程</a></li>--}}
                    {{--<li><a  href="{{ url('courseList') }}">课程列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="sub-menu">--}}
                {{--<a href="javascript:;" >--}}
                    {{--<i class="fa fa-tasks"></i>--}}
                    {{--<span>章节管理</span>--}}
                {{--</a>--}}
                {{--<ul class="sub">--}}
                    {{--<li><a  href="{{ url('addChapter') }}">添加章节</a></li>--}}
                    {{--<li><a  href="{{ url('editChapter') }}">章节列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="sub-menu">--}}
                {{--<a href="javascript:;" >--}}
                    {{--<i class="fa fa-tasks"></i>--}}
                    {{--<span>小节管理</span>--}}
                {{--</a>--}}
                {{--<ul class="sub">--}}
                    {{--<li><a  href="{{ url('addSmallMatter') }}">添加小节</a></li>--}}
                    {{--<li><a  href="{{ url('editSmallMatter') }}">小节列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>