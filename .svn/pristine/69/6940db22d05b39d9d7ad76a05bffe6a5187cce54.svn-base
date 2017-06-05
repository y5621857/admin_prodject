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
                    <li><a href="javascript:void(0)" title="Sample page 1">图表</a>
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="realtimeClose">
                        <div class="title-alt">
                            <h6>图表数据</h6>
                            <div class="titleClose">
                                <a class="gone" href="#realtimeClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#chart_main">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div id="chart_main" style="width: 100% !important;height:100%;">
                            </div>
                        </div>

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
    setTimeout(function(){
        var myChart = echarts.init(document.getElementById('chart_main'));

// 指定图表的配置项和数据
        option = {
            title: {
                text: '柱状统计图表',
                textStyle: {
                    fontSize: 24
                },
                right:'30px'
            },
            toolbox: {
                feature: {
                    saveAsImage: {
                        type: 'png',
                        name: '统计图表'
                    },
                    restore:{},
                    dataView:{}
                },
                top:'50',
                right: '30'
            },
            color: ['#3398DB'],
            tooltip : {
                trigger: 'axis',
                axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                    type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                top:'100px',
                containLabel: true
            },
            xAxis : [
                {
                    type : 'category',
                    data : ['周一', '周二', '周三', '周四', '周五', '周六', '周日'],
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'数据量',
                    type:'bar',
                    barWidth: '60%',
                    data:[10, 52, 200, 334, 390, 330, 220]
                }
            ]
        };

// 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.onresize = myChart.resize;
    },1000);



</script>