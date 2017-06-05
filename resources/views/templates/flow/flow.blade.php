@include('head.header')
<style type="text/css">
</style>
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
                    <li><a href="javascript:void(0)" title="Sample page 1">辅助工具</a>
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

                {{--拖拽--}}
                <div class="col-sm-12">
                    <div class="nest">
                        <div class="title-alt">
                            <h6 id="example_id" data-id="1">拖拽排序</h6>
                            <div class="titleClose">
                                <a class="gone" href="#flow_content5">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#flow_content5">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div class="body-nest" id="flow_content5" >
                            <ul class="list-group" id="slider_sort_box" style="overflow-x: auto">
                                <li class="list-group-item slider_sort_item" style="height: 55px;line-height: 30px" data-sid="1">
                                    <span>1.序列排序</span>
                                    <dl class="pull-right slider_btnBox">
                                        <dd class="pull-right"><a href="javascript:void(0)" class="btn btn-sm btn-danger del_btn">删除</a></dd>
                                        <dt class="pull-right" style="margin-right: 8px"><a href="{{url('admin/webAdminDetailsSlider')}}" class="btn btn-sm btn-success edit_btn">详情</a></dt>
                                    </dl>
                                </li>
                                <li class="list-group-item slider_sort_item" style="height: 55px;line-height: 30px" data-sid="2">
                                    <span>2.序列排序</span>
                                    <dl class="pull-right slider_btnBox">
                                        <dd class="pull-right"><a href="javascript:void(0)" class="btn btn-sm btn-danger del_btn">删除</a></dd>
                                        <dt class="pull-right" style="margin-right: 8px"><a href="{{url('admin/webAdminDetailsSlider')}}" class="btn btn-sm btn-success edit_btn">详情</a></dt>
                                    </dl>
                                </li>
                                <li class="list-group-item slider_sort_item" style="height: 55px;line-height: 30px" data-sid="3">
                                    <span>3.序列排序</span>
                                    <dl class="pull-right slider_btnBox">
                                        <dd class="pull-right"><a href="javascript:void(0)" class="btn btn-sm btn-danger del_btn">删除</a></dd>
                                        <dt class="pull-right" style="margin-right: 8px"><a href="{{url('admin/webAdminDetailsSlider')}}" class="btn btn-sm btn-success edit_btn">详情</a></dt>
                                    </dl>
                                </li>
                                <li class="list-group-item slider_sort_item" style="height: 55px;line-height: 30px" data-sid="4">
                                    <span>4.序列排序</span>
                                    <dl class="pull-right slider_btnBox">
                                        <dd class="pull-right"><a href="javascript:void(0)" class="btn btn-sm btn-danger del_btn">删除</a></dd>
                                        <dt class="pull-right" style="margin-right: 8px"><a href="{{url('admin/webAdminDetailsSlider')}}" class="btn btn-sm btn-success edit_btn">详情</a></dt>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{--流布局--}}
                <div class="col-sm-12">
                    <div class="nest">
                        <div class="title-alt">
                            <h6>流布局，排序</h6>
                            <div class="titleClose">
                                <a class="gone" href="#flow_content4">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#flow_content4">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div class="body-nest" id="flow_content4">
                            <div id="filters" class="button-group">
                                <button data-filter="*" class="btn btn-danger">show all</button>
                                <button data-filter=".metal" class="btn btn-danger">metal</button>
                                <button data-filter=".transition" class="btn btn-danger">transition</button>
                                <button data-filter=".alkali, .alkaline-earth" class="btn btn-danger">alkali & alkaline-earth</button>
                                <button data-filter=":not(.transition)" class="btn btn-danger">not transition</button>
                                <button data-filter=".metal:not(.transition)" class="btn btn-danger">metal but not transition</button>
                                <button data-sort="number" class="btn btn-danger">sort by number</button>
                                <button data-sort="weight" class="btn btn-danger">sort by weight</button>
                                <button data-layout="masonry" class="btn btn-success">layoutMode by masonry</button>
                                <button data-layout="vertical" class="btn btn-success">layoutMode by vertical</button>
                            </div>
                            <div id="container">
                                <div class="item transition metal col-md-3" data-category="metalloid"><img src="{{url('img/pictures/picture1.jpg')}}" alt="1" class="img-responsive"><h1 class="weight">99</h1><p class="number">6</p></div>
                                <div class="item post-transition metal col-md-3" data-category="metalloid"><img src="{{url('img/pictures/picture1.jpg')}}" alt="2" class="img-responsive"><h1 class="weight">66</h1><p class="number">7</p></div>
                                <div class="item alkali metal col-md-3" data-category="metalloid"><img src="{{url('img/pictures/picture1.jpg')}}" alt="3" class="img-responsive"><h1 class="weight">44</h1><p class="number">2</p></div>
                                <div class="item transition metal col-md-3" data-category="metalloid"><img src="{{url('img/pictures/picture1.jpg')}}" alt="4" class="img-responsive"><h1 class="weight">11</h1><p class="number">4</p></div>
                                <div class="item lanthanoid metal inner-transition col-md-3" data-category="metalloid"><img src="{{url('img/pictures/picture1.jpg')}}" alt="5" class="img-responsive"><h1 class="weight">55</h1><p class="number">5</p></div>
                                <div class="item halogen nonmetal col-md-3" data-category="metalloid"><img src="{{url('img/pictures/picture1.jpg')}}" alt="6" class="img-responsive"><h1 class="weight">77</h1><p class="number">1</p></div>
                                <div class="item alkaline-earth metal col-md-3" data-category="metalloid"><img src="{{url('img/pictures/picture1.jpg')}}" alt="7" class="img-responsive"><h1 class="weight">99</h1><p class="number">3</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--打星--}}
                <div class="col-sm-12">
                    <div class="nest">
                        <div class="title-alt">
                            <h6>打分</h6>
                            <div class="titleClose">
                                <a class="gone" href="#flow_content0">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#flow_content0">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div class="body-nest" id="flow_content0" >
                            <div style="width:500px; margin:20px auto;">
                                <div id="raty1" class="target-demo" data-id="myID1"></div>
                                <div id="function-hint" class="hint"></div>
                            </div>
                        </div>
                    </div>
                </div>

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
    /*layui*/
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


    /*流布局*/
    setTimeout(function(){
        // init Isotope
        var $container = $('#container').isotope({
            getSortData: {
                name: '.name', // text from querySelector
                number: '.number parseInt',
                category: '[data-category]', // value of attribute
                weight: function( itemElem ) { // function
                    var weight = $( itemElem ).find('.weight').text();
                    return parseFloat( weight);
                }
            }
        });
        $('#filters').on( 'click', 'button', function() {
            /*筛选*/
            var filterValue = $(this).data('filter');
            if(filterValue){
                console.log(filterValue);
                $container.isotope({ filter : filterValue });
            }

            /*排序*/
            var SortValue = $(this).data('sort');
            if(SortValue){
                console.log(SortValue);
                $container.isotope({
                    sortBy : SortValue
                });
            }

            /*布局*/
            var layoutModeValue = $(this).data("layout");
            if(layoutModeValue){
                console.log(layoutModeValue);
                $container.isotope({
                    layoutMode: layoutModeValue
                });
            }
        });
    },1000)

    /*拖拽排序*/
    var sortList = $("#slider_sort_box"),
            sortItem = sortList.find(".slider_sort_item"),
            uploadArray=[];//排序后新数组

    //排序初始化
    Sortable.create(sortList[0], {
        group: "words",
        animation: 150,
        //onAdd: function (evt){ console.log('onAdd.foo:', [evt.item, evt.from]); },
        //onUpdate: function (evt){ console.log('onUpdate.foo:', [evt.item, evt.from]); },
        //onRemove: function (evt){ console.log('onRemove.foo:', [evt.item, evt.from]); },
        //onStart:function(evt){ console.log('onStart.foo:', [evt.item, evt.from]);},
        //onSort:function(evt){ console.log('onStart.foo:', [evt.item, evt.from]);},
        onEnd: function(evt){
            //console.log(evt.from);
            var newFormLists = $(evt.from).children();
            //console.log(newFormLists);

            newFormLists.each(function(i,v){
                //console.log($(v).data("sid"));
                uploadArray[i] = $(v).data("sid");
            });

            alert(uploadArray);
            console.log(uploadArray);
        }
    });
</script>


