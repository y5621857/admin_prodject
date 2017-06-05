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
                    <li><a href="javascript:void(0)" title="Sample page 1">用户资料</a>
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
                    <div class="well profile">
                        <div class="col-sm-12 col-md-4 text-center">

                            <ul class="list-group">
                                <li class="list-group-item text-left">
                                    <span class="entypo-user"></span>&nbsp;&nbsp;简历</li>
                                <li class="list-group-item text-center">
                                    <img src="http://api.randomuser.me/portraits/men/10.jpg" alt="" class="img-circle img-profile">

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
                                            <strong>入职</strong>
                                        </span>
                                    <i>2017-05-05</i>
                                </li>
                                <li class="list-group-item text-right">
                                        <span class="pull-left">
                                            <strong>公司</strong>
                                        </span>
                                    <i>参数</i>
                                </li>
                                <li class="list-group-item text-right">
                                        <span class="pull-left">
                                            <strong>职务</strong>
                                        </span>
                                    <i>工程师</i>
                                </li>
                            </ul>

                        </div>
                        <div class="col-sm-12 col-md-8 profile-name">
                            <h2>
                                <i>用户名</i>
                                <a href="javascript:void(0)" class="pull-right fa fa-edit" style="font-size: 16px"></a>
                            </h2>

                            <table id="responsive-example-table" class="table large-only">
                                <tbody>
                                <tr>
                                    <td width="50%">用户ID</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>联系方式</td>
                                    <td>15615615615</td>
                                </tr>
                                <tr>
                                    <td>邮箱</td>
                                    <td>abc@qq.com</td>
                                </tr>
                                <tr>
                                    <td>参数</td>
                                    <td>参数</td>
                                </tr>
                                <tr>
                                    <td>参数</td>
                                    <td>参数</td>
                                </tr>
                                <tr>
                                    <td>参数</td>
                                    <td>参数</td>
                                </tr>
                                <tr>
                                    <td>备注</td>
                                    <td>详情详情详情详情详情详情详情详情详情详情详情详情详情详情详情详情详情详情详情详情</td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>

                            <hr>

                            <h5>
                                <span class="entypo-tools"></span>&nbsp;&nbsp;<i>工作经验，项目</i>
                                <a href="javascript:void(0)" class="pull-right fa fa-edit" style="font-size: 16px"></a>
                            </h5>

                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-condensed">
                                    <tbody>
                                    <tr>
                                        <td> 2017-05-05 ~ 2017-05-05  项目</td>
                                    </tr>
                                    <tr>
                                        <td> 2017-05-05 ~ 2017-05-05  项目</td>
                                    </tr>
                                    <tr>
                                        <td> 2017-05-05 ~ 2017-05-05  项目</td>
                                    </tr>
                                    <tr>
                                        <td> 2017-05-05 ~ 2017-05-05  项目</td>
                                    </tr>
                                    <tr>
                                        <td> 2017-05-05 ~ 2017-05-05  项目</td>
                                    </tr>
                                    <tr>
                                        <td> 2017-05-05 ~ 2017-05-05  项目</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-xs-12 divider text-center">
                            <div class="col-xs-12 col-sm-4 emphasis">
                                <h2>
                                    <strong>参数</strong>
                                </h2>
                                <p>
                                    <small>参数</small>
                                </p>
                                <button class="btn btn-success btn-block">
                                    <span class="fa fa-plus-circle"></span>&nbsp;&nbsp;参数
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-4 emphasis">
                                <h2>
                                    <strong>参数</strong>
                                </h2>
                                <p>
                                    <small>参数</small>
                                </p>
                                <button class="btn btn-info btn-block">
                                    <span class="fa fa-circle"></span>&nbsp;&nbsp;参数
                                </button>
                            </div>
                            <div class="col-sm-4 emphasis">
                                <h2>
                                    <strong>参数</strong>
                                </h2>
                                <p>
                                    <small>参数</small>
                                </p>
                                <button class="btn btn-default btn-block">
                                    <span class="fa fa-circle"></span>&nbsp;&nbsp;参数
                                </button>
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
    /*打分*/
    $('#raty1').raty({
        number: 5, //多少个星星设置
        score:2.5, //初始值是设置
        targetType: 'hint', //类型选择，number是数字值，hint，是设置的数组值
        path: 'img/raty',
        hints: ['差', '一般', '好', '非常好', '满分'],
        cancelOff: 'cancel-off.png',
        cancelOn: 'cancel-on.png',
        starHalf: 'star-half.png',
        starOff: 'star-off.png',
        starOn: 'star-on.png',
        target: '#function-hint',
        cancel: false,
        targetKeep: false,
        targetText: '请选择打分',
        precision: false, //是否包含小数
        click: function(score, evt) {
            alert('ID: ' + $(this).data('id') + "\nscore: " + score + "\nevent: " + evt.type);
            //console.log(score);
            //console.log(evt);
        }
    }).find("img").css({width:"18px"});

    console.log("userData");
</script>