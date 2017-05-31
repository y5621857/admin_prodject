@include('head.header')
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- TOP NAVBAR -->
@include('templates.part.top_NavBar')

<!-- SIDE MENU -->
@include('templates.part.side_menu')

<!-- RIGHT SLIDER CONTENT -->
@include('templates.part.right_slider_content')

<!--  PAPER WRAP -->
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">
        <!-- BREADCRUMB -->
        <div class="row">
            <div id="paper-top">
                <ul id="breadcrumb">
                    <li><span class="entypo-home"></span></li>
                    <li><i class="fa fa-lg fa-angle-right"></i>
                    </li>
                    <li><a href="{{url('index')}}" title="Sample page 1">主页</a>
                    </li>
                    <li><i class="fa fa-lg fa-angle-right"></i>
                    </li>
                    <li><a href="javascript:void(0)" title="Sample page 1">时间轴</a>
                    </li>
                    <li class="pull-right hidden-xs">
                        <div class="input-group input-widget">
                            <input style="border-radius:15px;color: #000;" type="text" placeholder="查找..." class="form-control search_input">
                            <a href="javascript:void (0)" class="entypo-search search_btn" style="position: absolute;right: 10px;top: 8px;font-size: 25px;"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="content-wrap">
            <div class="time-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="timeline">
                            <li class="time-label">
                                <span class="bg-info">
                                    2017 年 6 月
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-envelope bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i>&nbsp; 06-10 12:05</span>
                                    <h3 class="timeline-header"><a href="javascript:void(0)" >数据</a> 参数</h3>
                                    <div class="timeline-body">
                                        <p>
                                            数据数据数据数据数据数据
                                        </p>
                                    </div>
                                    <div class="timeline-footer">
                                        <button class="btn btn-primary btn-xs">查看</button>
                                        <button class="btn btn-danger btn-xs">删除</button>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <i class="fa fa-user bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i>&nbsp; 06-05 10:05</span>
                                    <h3 class="timeline-header"><a href="javascript:void(0)" >数据</a> 参数</h3>
                                    <div class="timeline-body">
                                        <p>
                                            数据
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <i class="fa fa-comments bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i>&nbsp; 06-01 12:05</span>
                                    <h3 class="timeline-header"><a href="javascript:void(0)" >数据</a> 参数</h3>
                                    <div class="timeline-body">
                                        <p>
                                            数据
                                        </p>
                                    </div>
                                    <div class="timeline-footer">
                                        <button class="btn btn-warning btn-flat btn-xs">警告</button>
                                    </div>
                                </div>
                            </li>

                            <li class="time-label">
                                <span class="bg-info">
                                    2017 年 5 月
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-camera bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i>&nbsp; 05-10 12:05</span>
                                    <h3 class="timeline-header"><a href="javascript:void(0)" >数据</a> 参数</h3>
                                    <div class="timeline-body">
                                        <img src="http://api.randomuser.me/portraits/thumb/men/40.jpg" alt="..." class="margin">
                                        <img src="http://api.randomuser.me/portraits/thumb/women/41.jpg" alt="..." class="margin">
                                        <img src="http://api.randomuser.me/portraits/thumb/men/42.jpg" alt="..." class="margin">
                                        <img src="http://api.randomuser.me/portraits/thumb/women/43.jpg" alt="..." class="margin">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-video-camera bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i>&nbsp; 05-05 12:05</span>
                                    <h3 class="timeline-header"><a href="javascript:void(0)" >数据</a> 参数</h3>
                                    <div class="timeline-body">
                                        <p>
                                            数据
                                        </p>
                                    </div>
                                    <div class="timeline-footer">
                                        <button class="btn btn-xs bg-time">查看全文</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-clock-o bg-time"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--  FOOT-NAV -->
       @include('templates.part.footer_nav')
    </div>
</div>
@include('foot.footer')
<script src="http://api.map.baidu.com/api?v=2.0&ak=CznyYWs38gYInAANxUQubxZzEmIBpchQ"></script>
<script src="{{url('ultron/js/front/localCity.js')}}"></script>
<script>
    console.log("timeLine");
</script>