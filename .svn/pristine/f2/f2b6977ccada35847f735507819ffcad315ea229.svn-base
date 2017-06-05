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

                        <div id="chart_main" style="width: 100%;;height:100%;">

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
        var option = {
            title: {
                text: '折线统计图表',
                textStyle: {
                    fontSize: 24
                },
                left:'35px'
            },
            legend: {
                data:['平台一'],
                textStyle: {
                    fontSize: 16,
                    fontWeight: 'bolder'
                },
                top:'30'
            },
            toolbox: {
                feature: {
                    saveAsImage: {
                        type: 'png',
                        name: '人员进出图表'
                    },
                    restore:{},
                    dataView:{},
                    magicType:{
                        type: ['line','stack','tiled','bar']
                    }
                },
                top:'50',
                right: '50'
            },
            grid: {
                top:'100',
                left: '20',
                right: '50',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                name: '日期',
                boundaryGap: false,
                data: ['2017-04-01','2017-04-02','2017-04-03','2017-04-04','2017-04-05','2017-04-06','2017-04-07']

            },
            yAxis: {
                type: 'value',
                name: '人数'
            },
            tooltip: {
                trigger: 'axis',
                axisPointer:{
                    type: 'cross'
                },
                padding: 15,
                textStyle: {
                    color: '#fff',
                    fontSize: 16
                }
            },
            dataZoom: [{
                type: 'inside',
                start: 0,
                end: 30
            }, {
                type: 'slider',
                start: 0,
                end: 50,
                handleIcon: 'M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z',
                handleSize: '70%',
                handleStyle: {
                    color: '#fff',
                    shadowBlur: 5,
                    shadowColor: 'rgba(0, 0, 0, 0.6)',
                    shadowOffsetX: 5,
                    shadowOffsetY: 2
                }
            }],
            series: [
                {
                    name:'平台一',
                    type:'line',
                    data:[120, 132, 101, 134, 90, 230, 210]
                }
            ],
            animationEasing: 'bounceIn'
        };

// 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.onresize = myChart.resize;
    },1000);


</script>