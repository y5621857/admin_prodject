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
                    <li><a href="javascript:void(0)" title="Sample page 1">惰性加载</a>
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
                {{--惰性加载--}}
                <div class="col-sm-12">
                    <div class="nest">
                        <div class="title-alt">
                            <h6>惰性加载</h6>
                            <div class="titleClose">
                                <a class="gone" href="#flow_content1">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#flow_content1">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div class="body-nest" id="flow_content1" >
                            <ul id="lay_lazy1" style="height: 400px;overflow-y: scroll">
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                                <li>7</li>
                                <li>8</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{--折叠面板--}}
                <div class="col-sm-12">
                    <div class="nest">
                        <div class="title-alt">
                            <h6>折叠面板</h6>
                            <div class="titleClose">
                                <a class="gone" href="#fold_content1">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#fold_content1">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div class="body-nest" id="fold_content1" >
                            <div class="layui-collapse" lay-filter="test">
                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">标题一</h2>
                                    <div class="layui-colla-content">
                                        <p>
                                            参数一
                                        </p>
                                    </div>
                                </div>
                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">标题二</h2>
                                    <div class="layui-colla-content">
                                        <p>
                                            参数二
                                        </p>
                                    </div>
                                </div>
                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">标题三</h2>
                                    <div class="layui-colla-content">
                                        <p>
                                            参数三
                                        </p>
                                    </div>
                                </div>
                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">标题四</h2>
                                    <div class="layui-colla-content">
                                        <p>
                                            参数四
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--补助--}}
                <div class="col-sm-12">
                    <div class="nest">
                        <div class="title-alt">
                            <h6>辅助元素</h6>
                            <div class="titleClose">
                                <a class="gone" href="#fold_content2">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#fold_content1">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div class="body-nest" id="fold_content2" >
                            <fieldset class="layui-elem-field">
                                <legend>爱好</legend>
                                <div class="layui-field-box">
                                    参数
                                </div>
                            </fieldset>
                            <br>
                            <br>
                            <blockquote class="layui-elem-quote layui-quote-nm">
                                引用
                                <br>——孟子
                            </blockquote>
                            <br>
                            <br>
                            <pre class="layui-code" lay-title="JavaScript" lay-skin="notepad">
    Lay.fn.event = function(modName, events, params){
      var that = this, result = null, filter = events.match(/\(.*\)$/)||[];
      var set = (events = modName + '.'+ events).replace(filter, '');
    };
                            </pre>
                            <br>
                            <br>
                            <div id="view"></div>
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
<script id="tpl" type="text/html">
    <h3>@{{ d.title }}</h3>
    <ul>
        @{{#  $.each(d.list, function(i, v){ }}
        <li>
            <span>@{{ v.modname }}</span>
            <span>@{{ v.alias }}：</span>
            <span>@{{ v.site || '' }}</span>
        </li>
        @{{#  }); }}

        @{{#  if(d.list.length === 0){ }}
        <li style="text-align: center">
            无数据暂无数据...
        </li>
        @{{#  } }}
    </ul>
</script>

<script>
    var lay_offset=['400px'];

    layui.use(['element', 'layer', 'flow', 'code', 'laytpl'], function(){
        var flow = layui.flow,
                element = layui.element(),
                layer = layui.layer,
                code = layui.code(),
                laytpl = layui.laytpl; //引用code方法;

        /*惰性加载*/
        flow.load({
            elem: '#lay_lazy1'
            ,scrollElem: '#lay_lazy1'
            ,done: function(page, next){
                console.log(page);
                //模拟数据插入
                setTimeout(function(){
                    var lis = [];
                    for(var i = 0; i < 8; i++){
                        lis.push('<li>'+ ( (page-1)*8 + i + 1 ) +'</li>')
                    }
                    //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
                    //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
                    next(lis.join(''), page < 10); //假设总页数为 10
                }, 500);
            }
        });


        /*折叠面板*/
        element.on('collapse(test)', function(data){
            layer.msg('展开状态：'+ data.show,{
                offset:lay_offset
            });
            console.log(data);
        });


        //渲染模板
        var demo_data = {
            "title": "Layui常用模块"
            ,"list": [
                {
                    "modname": "弹层"
                    ,"alias": "layer"
                    ,"site": "layer.layui.com"
                }
                ,{
                    "modname": "表单"
                    ,"alias": "form"
                }
                ,{
                    "modname": "分页"
                    ,"alias": "laypage"
                }
                ,{
                    "modname": "日期"
                    ,"alias": "laydate"
                }
                ,{
                    "modname": "上传"
                    ,"alias": "upload"
                }
            ]
        };

        var tpl = document.getElementById('tpl').innerHTML;   //获取拼接部分的内容
        laytpl(tpl).render(demo_data, function(render){
            document.getElementById('view').innerHTML = render;
        });

    });
</script>

