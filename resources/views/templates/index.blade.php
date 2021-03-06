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
                <div class="col-lg-6">
                    <ul class="list-group admin_list">
                        <li class="list-group-item text-left">
                            <span class="entypo-user"></span>&nbsp;&nbsp;姓名</li>
                        <li class="list-group-item text-center">
                            <img src="http://api.randomuser.me/portraits/men/10.jpg" alt="" class="img-circle img-responsive img-profile">
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>评分</strong>
                            </span>
                            <div>
                                <div id="raty1" class="target-demo" data-id="myID1"></div>
                                <div id="function-hint" class="hint"></div>
                            </div>
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>公司</strong>
                            </span>公司
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>性别</strong>
                            </span>男
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>入职</strong>
                            </span>2017-05-05
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>职务</strong>
                            </span>工程师
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>职称</strong>
                            </span>工程师
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>联系方式</strong>
                            </span>15615651556
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>备注</strong>
                            </span>工程师
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6" id="weather_box">
                    <div class="weather-wrap">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="temperature"><b id="Date1"></b></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 weather_img">
                                <div class="weather-icon" style="margin-left: 55px;"></div>
                            </div>
                            <div class="col-lg-8">
                                <div class="weather-text">
                                    <h2 class="weather_city" style="font-size: 40px"></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weather-text">
                                    <h4 class="weather_city_text"></h4>
                                    <h3>
                                        <i class="wi-thermometer"></i><i class="weather_city_temperature"></i>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="weather-dash">
                            <div class="row" id="weather_city_box">
                                <div class="col-lg-3 weather_everyday">
                                    <div class="daily-weather ">
                                        <h2></h2>
                                        <h3 style="font-size: 18px"></h3>
                                        <h4 style="margin: 15px 0;"></h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrap">
            <div class="row">
                <div class="col-lg-3">
                    <div class="revenue Margin_top" id="revenueClose1">
                        <div class="headline ">
                            <h3>
                                <span><i class="maki-aboveground-rail"></i>&nbsp;&nbsp;数据&nbsp;&nbsp;</span>
                            </h3>
                            <div class="titleClose">
                                <a href="#revenueClose1" class="gone">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <div class="value">
                            <span class="pull-left"><i class="entypo-gauge gauge-position"></i></span>
                            22
                            <i class="pull-right">/条</i>
                        </div>
                        <div class="progress-tinny">
                            <div style="width: 25%" class="bar"></div>
                        </div>
                        <div class="profit-line">
                            <i class="fa fa-caret-down fa-lg"></i>&nbsp;&nbsp;信息</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="revenue Margin_top" id="revenueClose2">
                        <div class="headline ">
                            <h3>
                                <span><i class="maki-aboveground-rail"></i>&nbsp;&nbsp;数据&nbsp;&nbsp;</span>
                            </h3>
                            <div class="titleClose">
                                <a href="#revenueClose2" class="gone">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <div class="value">
                            <span class="pull-left"><i class="entypo-gauge gauge-position"></i></span>
                            22
                            <i class="pull-right">/条</i>
                        </div>
                        <div class="progress-tinny">
                            <div style="width: 25%" class="bar"></div>
                        </div>
                        <div class="profit-line">
                            <i class="fa fa-caret-down fa-lg"></i>&nbsp;&nbsp;信息</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class=" member Margin_top" id="memberClose3">
                        <div class="headline ">
                            <h3>
                                <span><i class="fa fa-truck"></i>&nbsp;&nbsp;数据</span>
                            </h3>
                            <div class="titleClose">
                                <a href="#memberClose3" class="gone">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <div class="value">
                            <span><i class="maki-warehouse"></i></span>45%
                        </div>
                        <div class="progress-tinny">
                            <div style="width: 50%" class="bar"></div>
                        </div>
                        <div class="profit-line">
                            <span class="entypo-down-circled"></span>&nbsp;信息</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class=" member Margin_top" id="memberClose4">
                        <div class="headline ">
                            <h3>
                                <span><i class="fa fa-truck"></i>&nbsp;&nbsp;数据</span>
                            </h3>
                            <div class="titleClose">
                                <a href="#memberClose4" class="gone">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <div class="value">
                            <span><i class="maki-warehouse"></i></span>45%
                        </div>
                        <div class="progress-tinny">
                            <div style="width: 50%" class="bar"></div>
                        </div>
                        <div class="profit-line">
                            <span class="entypo-down-circled"></span>&nbsp;信息</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div id="siteClose" class="nest">
                        <div class="title-alt">
                            <h6>
                                <span class="fontawesome-truck"></span>&nbsp;数据</h6>
                            <div class="titleClose">
                                <a class="gone" href="#siteClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#site">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div id="site" class="body-nest" style="min-height:296px;">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>项目</th>
                                        <th>项目</th>
                                        <th >项目</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="armada-devider">
                                            <div class="armada">
                                                <span style="background:#65C3DF"><i class="maki-bus"></i>&nbsp;&nbsp;项目</span>
                                                <p><span class="entypo-gauge"></span>&nbsp;数据</p>
                                            </div>
                                        </td>
                                        <td class="driver-devider">
                                            <img class="armada-pic img-circle" alt="" src="http://api.randomuser.me/portraits/thumb/men/14.jpg">
                                            <h3>姓名</h3>
                                            <br>
                                            <p>工程师</p>
                                        </td>
                                        <td class="progress-devider" style="font-weight: bold">
                                            参数
                                            <div class="layui-progress layui-progress-big" lay-showpercent="true">
                                                <div class="layui-progress-bar layui-bg-blue" lay-percent="70%" style="width: 70%;"><span class="layui-progress-text">70%</span></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="armada-devider">
                                            <div class="armada">
                                                <span style="background:#45B6B0"><i class="fontawesome-plane"></i>&nbsp;&nbsp;项目</span>
                                                <p><span class="entypo-gauge"></span>&nbsp;数据</p>
                                            </div>
                                        </td>
                                        <td class="driver-devider">
                                            <img class="armada-pic img-circle" alt="" src="http://api.randomuser.me/portraits/thumb/men/38.jpg">
                                            <h3>姓名</h3>
                                            <br>
                                            <p>工程师</p>
                                        </td>
                                        <td class="progress-devider" style="font-weight: bold">
                                            参数
                                            <div class="layui-progress layui-progress-big" lay-showpercent="true">
                                                <div class="layui-progress-bar layui-bg-red" lay-percent="70%" style="width: 70%;"><span class="layui-progress-text">70%</span></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="armada-devider">
                                            <div class="armada">
                                                <span style="background:#FF6B6B"><i class="maki-aboveground-rail"></i>&nbsp;&nbsp;项目</span>
                                                <p><span class="entypo-gauge"></span>&nbsp;数据</p>
                                            </div>
                                        </td>
                                        <td class="driver-devider">
                                            <img class="armada-pic img-circle" alt="" src="http://api.randomuser.me/portraits/thumb/men/39.jpg">
                                            <h3>姓名</h3>
                                            <br>
                                            <p>工程师</p>
                                        </td>
                                        <td class="progress-devider" style="font-weight: bold">
                                            参数
                                            <div class="layui-progress layui-progress-big" lay-showpercent="true">
                                                <div class="layui-progress-bar layui-bg-cyan" lay-percent="70%" style="width: 70%;"><span class="layui-progress-text">70%</span></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="RealTimeClose" class="nest">
                        <div class="title-alt">
                            <h6>
                                <span class="fontawesome-resize-horizontal"></span>&nbsp;数据</h6>
                            <div class="titleClose">
                                <a class="gone" href="#RealTimeClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#RealTime">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div id="RealTime" style="min-height:296px;padding-top:20px;padding-bottom: 0" class="body-nest">
                            <ul class="direction" style="margin-bottom: 0">
                                <li class="direction_li">
                                    <span class="direction-icon maki-fuel" style="background:#FF6B6B"></span>
                                    <h3>
                                        <span>数据</span>
                                    </h3>
                                    <p><i>姓名 </i>:&nbsp;&nbsp;<i class="fa fa-reply"></i>&nbsp;&nbsp;用户</p>
                                    <p><i>日期 </i>:&nbsp;<i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-05-05</p>
                                </li>
                                <li class="divider"></li>
                                <li class="direction_li">
                                    <span class="direction-icon maki-fast-food" style="background:#65C3DF"></span>
                                    <h3>
                                        <span>数据</span>
                                    </h3>
                                    <p><i>姓名 </i>:&nbsp;&nbsp;<i class="fa fa-reply"></i>&nbsp;&nbsp;用户</p>
                                    <p><i>日期 </i>:&nbsp;<i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-05-05</p>
                                </li>
                                <li class="divider"></li>
                                <li class="direction_li">
                                    <span class="direction-icon maki-giraffe" style="background:#45B6B0"></span>
                                    <h3>
                                        <span>数据</span>
                                    </h3>
                                    <p><i>姓名 </i>:&nbsp;&nbsp;<i class="fa fa-share"></i>&nbsp;&nbsp;用户</p>
                                    <p><i>日期 </i>:&nbsp;<i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-05-05</p>
                                </li>
                                <li class="divider divider_last"></li>
                                <li class="direction_li_last" style="text-align: center">
                                    <a class="btn btn-block btn_more">查看更多...</a>
                                </li>
                            </ul>
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
<script>
    function myFun(result){

        var cityName = result.name;
        console.log("当前定位:"+cityName);
        $("#localCtiy").text("当前定位:"+cityName);

        var weather_city_box=$('#weather_city_box');
        var weather_everyday=weather_city_box.find(".weather_everyday");
        weather_everyday.remove();

        $.ajax({
            url:"http://api.map.baidu.com/telematics/v3/weather",
            type:"get",
            data:{
                location:cityName,
                output:'json',
                ak:'6tYzTvGZSOpYB5Oc2YGGOKt8'
            },
            /*预期服务器端返回的数据类型，假设我现在跨域了，我就改成jsonp 就可以了 */
            dataType:"jsonp",
            success:function(data){
                //console.log(data);
                //百度那边的 数据已经回来，我现在要解析这个数据.
                var weather_box=$("#weather_box");

                var weatherImg_arr=['<i class="wi-day-cloudy"></i>','<i class="wi-fog"></i>','<i class="wi-rain"></i>','<i class="wi-snow"></i>'];

                var weather_text=data.results[0].weather_data[0].weather;

                function WeatherCheck(weather_text){
                    if(weather_text.indexOf("雪")!=-1 ){
                        return "3";
                    }else if(weather_text.indexOf("雨")!=-1){
                        return "2";
                    }else if(weather_text.indexOf("雾")!=-1){
                        return "1";
                    } else{
                        return "0";
                    }
                }

                var WeatherCheck=WeatherCheck(weather_text);

                weather_box.find(".weather_img .weather-icon").append(weatherImg_arr[WeatherCheck]);

                weather_box.find(".weather_city").html(data.results[0].currentCity + "&nbsp;&nbsp;<span>PM 2 . 5 :&nbsp;&nbsp;&nbsp;" + data.results[0].pm25 + "</span>" );

                weather_box.find(".weather_city_text").html(weather_text);

                weather_box.find(".weather_city_temperature").html(data.results[0].weather_data[0].temperature);



                $.each(data.results[0].weather_data,function(i,v){
                    if(i==4){
                        return false;
                    }

                    function WeatherCheck(weather_text){
                        if(weather_text.indexOf("雪")!=-1 ){
                            return "3";
                        }else if(weather_text.indexOf("雨")!=-1){
                            return "2";
                        }else if(weather_text.indexOf("雾")!=-1){
                            return "1";
                        } else{
                            return "0";
                        }
                    }

                    //console.log(v);
                    var weather_everyday_clone=weather_everyday.clone();

                    weather_everyday_clone.find("h2").html(v.date.slice(0,2));

                    weather_everyday_clone.find("h3").html(v.temperature);

                    var WeatherCheck1=WeatherCheck(v.weather);
                    weather_everyday_clone.find("h4").html(weatherImg_arr[WeatherCheck1]);

                    weather_everyday_clone.find("h5").html(v.weather+"<br>"+v.wind);


                    weather_city_box.append(weather_everyday_clone);
                })

            }
        })
    }
    var myCity = new BMap.LocalCity();
    myCity.get(myFun);


    $(".search_btn").click(function(){
        var str = $(".search_input").val();
        if($.trim(str)!=""){
            layer.msg(str),{
                offset:['400px']
            };
        }
    });


    /*打分*/
    $('#raty1').raty({
        number: 5, //多少个星星设置
        score:2.5, //初始值是设置
        targetType: 'hint', //类型选择，number是数字值，hint，是设置的数组值
        path: 'img/raty',
        hints: ['差', '一般', '好', '非常好', '满分'],
        cancelOff: 'cancel-off.png',
        cancelOn: 'cancel-on.png',
        size: 24,
        starHalf: 'star-half.png',
        starOff: 'star-off.png',
        starOn: 'star-on.png',
        target: '#function-hint',
        cancel: false,
        targetKeep: true,
        targetText: '请选择评分',
        precision: false, //是否包含小数
        click: function(score, evt) {
            alert('ID: ' + $(this).data('id') + "\nscore: " + score + "\nevent: " + evt.type);
            //console.log(score);
            //console.log(evt);
        }
    }).find("img").css({width:"18px"});
</script>
