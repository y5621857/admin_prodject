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
                    <li><a href="javascript:void(0)" title="Sample page 1">表格</a>
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
                <div class="col-sm-12 GCB_table_Box">
                    <div class="nest" id="FootableClose">
                        <div class="title-alt">
                            <h6>表格数据</h6>
                            <div class="titleClose">
                                <a class="gone" href="#FootableClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#table_body">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>
                        <div class="body-nest" id="table_body">
                            <p class="lead well">数据</p>
                            <div id="toolbar">
                                {{--<button id="btn_edit" type="button" class="btn btn-default" >--}}
                                    {{--<span class="glyphicon glyphicon-pencil"></span>修改--}}
                                {{--</button>--}}
                                <button id="btn_delete" type="button" class="btn btn-default">
                                    <span class="entypo-trash"></span>&nbsp;&nbsp;批量删除
                                </button>
                                {{--<select class="btn select_btn" style="font-size: 16px !important;">--}}
                                    {{--<option value="">下载全部资料</option>--}}
                                    {{--<option value="">下载当前页资料</option>--}}
                                    {{--<option value="">下载选中资料</option>--}}
                                {{--</select>--}}
                            </div>
                            <table id="data_table">
                            </table>
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
    var load_index=layer.load();

    var table_data=[
        {
            "id": 0,
            "name": "匿名1",
            "tel": "132424352240",
            "duty":'A'
        },
        {
            "id": 1,
            "name": "匿名2",
            "tel": "134234526241",
            "duty":'A'
        },
        {
            "id": 2,
            "name": "匿名3",
            "tel": "157452512",
            "duty":'D'
        },
        {
            "id": 3,
            "name": "匿名4",
            "tel": "1523452363",
            "duty":'A'
        },
        {
            "id": 4,
            "name": "匿名5",
            "tel": "1532452344",
            "duty":'D'
        },
        {
            "id": 5,
            "name": "匿名6",
            "tel": "1654563425",
            "duty":'B'
        },
        {
            "id": 6,
            "name": "匿名7",
            "tel": "1865734566",
            "duty":'A'
        },
        {
            "id": 7,
            "name": "匿名8",
            "tel": "1223577885",
            "duty":'A'
        },
        {
            "id": 8,
            "name": "匿名9",
            "tel": "1563426618",
            "duty":'C'
        },
        {
            "id": 9,
            "name": "匿名10",
            "tel": "15854543789",
            "duty":'D'
        },
        {
            "id": 10,
            "name": "匿名11",
            "tel": "15965578810",
            "duty":'A'
        },
        {
            "id": 11,
            "name": "匿名12",
            "tel": "1654894611",
            "duty":'B'
        },
        {
            "id": 12,
            "name": "匿名13",
            "tel": "194568753549",
            "duty":'B'
        },
        {
            "id": 13,
            "name": "匿名14",
            "tel": "1765553413",
            "duty":'A'
        },
        {
            "id": 14,
            "name": "匿名15",
            "tel": "177564314",
            "duty":'A'
        },
        {
            "id": 15,
            "name": "匿名16",
            "tel": "149888715",
            "duty":'C'
        },
        {
            "id": 16,
            "name": "匿名17",
            "tel": "1543324516",
            "duty":'B'
        },
        {
            "id": 17,
            "name": "匿名18",
            "tel": "123657895",
            "duty":'A'
        },
        {
            "id": 18,
            "name": "匿名19",
            "tel": "18653423518",
            "duty":'B'
        },
        {
            "id": 19,
            "name": "匿名20",
            "tel": "1543523419",
            "duty":'A'
        },
        {
            "id": 20,
            "name": "匿名21",
            "tel": "177546433",
            "duty":'C'
        },
        {
            "id": 21,
            "name": "匿名22",
            "tel": "18885634520",
            "duty":'A'
        },
        {
            "id": 22,
            "name": "匿名23",
            "tel": "133543544",
            "duty":'D'
        },
        {
            "id": 23,
            "name": "匿名24",
            "tel": "14678820",
            "duty":'D'
        },
        {
            "id": 24,
            "name": "匿名25",
            "tel": "165345347",
            "duty":'A'
        },
        {
            "id": 25,
            "name": "匿名26",
            "tel": "197635611",
            "duty":'B'
        },
        {
            "id": 27,
            "name": "匿名28",
            "tel": "16543452",
            "duty":'A'
        },
        {
            "id": 28,
            "name": "匿名29",
            "tel": "165344633",
            "duty":'b'
        },
        {
            "id": 29,
            "name": "匿名30",
            "tel": "1122323215",
            "duty":'A'
        },
        {
            "id": 30,
            "name": "匿名31",
            "tel": "1231233214",
            "duty":'D'
        },
        {
            "id": 31,
            "name": "匿名32",
            "tel": "123123126",
            "duty":'C'
        }
    ];


    /*按钮事件*/
    var operateEvents = {
        'click .RoleOfA': function (e, value, row, index) {
            layer.msg(JSON.stringify(row),{
                offset:['400px']
            });
        },
        'click .RoleOfB': function (e, value, row, index) {
            alert("B");
        }
    };

    /*绑定表单按钮*/
    function operateFormatter(value, row, index) {
        return [
            '<button type="button" class="RoleOfA btn btn-success" style="margin-right:15px;">A操作</button>',
            '<button type="button" class="RoleOfB btn btn-primary" style="margin-right:15px;">B操作</button>'
        ].join('');
    }

    /*切换下载格式*/


    /*初始化表单*/
    $('#data_table').bootstrapTable({
        //url: './js/data1.json',
        data:table_data,
        pageSize:15,
        pageList:[5, 10, 15, 25, 50,'All'],
        toolbar: '#toolbar', //工具按钮用哪个容器
        striped: true, //是否显示行间隔色
        cache: false, //是否使用缓存，默认为true，所以一般情况下需要设置一下这个属性（*）
        pagination: true, //是否显示分页（*）
        paginationLoop:false,
        search:true, //是否启用搜索框
        //searchOnEnterKey:true, //设置为 true时，按回车触发搜索方法，否则自动触发搜索方法
        strictSearch:true,
        showToggle:true,
        showColumns:true,
        minimumCountColumns:1,
        idField:'id',
        uniqueId:'id',
        showExport: true,                     //是否显示导出
        exportDataType: "all",              //basic', 'all', 'selected'.
        rowStyle: function (row, index) {
            //这里有5个取值代表5中颜色['active', 'success', 'info', 'warning', 'danger'];
            var strclass = "";
            if (row.duty == "A") {
                strclass = 'info';//还有一个active
            }
            return { classes: strclass }
        },
        onEditableSave: function (field, row, oldValue, $el) {
            console.log(row);
//      $.ajax({
//        type: "post",
//        url: "/Editable/Edit",
//        data: { strJson: JSON.stringify(row) },
//        success: function (data, status) {
//          if (status == "success") {
//            alert("编辑成功");
//          }
//        },
//        error: function () {
//          alert("Error");
//        },
//        complete: function () {
//
//        }
//
//      });
        },
        columns: [{
            checkbox: true
        }, {
            field: 'id',
            title: '用户ID',
            align: 'center',
            sortable:true
        }, {
            field: 'name',
            title: '姓名',
            align: 'center',
            editable:true
        }, {
            field: 'tel',
            title: '电话',
            align: 'center',
            editable:true
        }, {
            field: 'duty',
            title: '权限',
            align: 'center',
            sortable:true
        }, {
            field: 'Desc',
            title: '操作',
            align: 'center',
            events: operateEvents,
            formatter: operateFormatter
        }]
    });

    /*导航按钮编辑*/
    $("#btn_edit").click(function(){
        var Json=$('#data_table').bootstrapTable('getSelections');
        if(Json.length==1){
            var ids= $.map(Json,function(v){
                return v.id
            });
            console.log($(ids));

            var row_data=$("#data_table").bootstrapTable('getRowByUniqueId',ids);
            layer.msg(JSON.stringify(row_data),{
                offset:['400px']
            });
        }else{
            layer.msg("请选择一个数据单元，再进行编辑",{
                offset:['400px']
            },function(){

            })
        }
    });

    /*导航按钮删除*/
    $("#btn_delete").click(function(){
        var Json=$('#data_table').bootstrapTable('getSelections');
        if(Json.length){
            var ids= $.map(Json,function(v){
                return v.id
            });
            console.log($(ids));

            var row_data=$("#data_table").bootstrapTable('getRowByUniqueId',ids);

            $("#data_table").bootstrapTable('remove',{field:"id",values:ids});
            layer.msg('已删除 ',{
                offset:['400px']
            });
        }else{
            layer.msg("请选择一个数据单元,再进行删除",{
                offset:['400px']
            },function(){

            })
        }
    });

    layer.close(load_index);
</script>