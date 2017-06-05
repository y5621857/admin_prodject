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
                    <li><a href="javascript:void(0)" title="Sample page 1">编辑</a>
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
                    <div class="nest" id="elementClose">
                        <div class="title-alt">
                            <h6>修改</h6>
                            <div class="titleClose">
                                <a class="gone" href="#form_body">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#form_body">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>

                        <div class="body-nest" id="form_body">
                            <div class="panel-body">
                                <form class="form-horizontal bucket-form edit_form layui-form" action="" enctype="multipart/form-data" id="form1" style="max-width: 1000px;margin: 0 auto;">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">姓名</label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" {{--lay-verify="required|name"--}} autocomplete="off" class="form-control" placeholder="参数...">
                                            <span class="help-block">提示：<span>数据</span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">联系方式</label>
                                        <div class="col-md-9">
                                            <input type="text" name="phone" {{--lay-verify="required|phone"--}} autocomplete="off" class="form-control" placeholder="参数...">
                                            <span class="help-block">提示：<span>数据</span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">单选</label>
                                        <div class="col-md-9">
                                            <select name="interest" lay-filter="aihao" lay-search>
                                                <option value="">搜索：输入你要搜索的内容...</option>
                                                <option value="0">写作</option>
                                                <option value="1">阅读</option>
                                                <option value="2">游戏</option>
                                                <option value="3">音乐</option>
                                                <option value="4">旅行</option>
                                            </select>
                                            <span class="help-block">提示：<span>输入你要搜索的内容</span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">复选</label>
                                        <div class="col-md-9">
                                            <div class="checkbox_box">
                                                <input type="checkbox" name="like[write]" lay-skin="primary" title="写作" checked="">
                                                <input type="checkbox" name="like[read]" lay-skin="primary" title="阅读">
                                                <input type="checkbox" name="like[game]" lay-skin="primary" title="游戏" disabled="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">单选</label>
                                        <div class="col-md-9">
                                            <input type="radio" name="sex" value="男" title="男" checked="">
                                            <input type="radio" name="sex" value="女" title="女">
                                            <input type="radio" name="sex" value="禁" title="禁用" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">邮箱</label>
                                        <div class="col-md-9">
                                            <input type="text" name="email" {{--lay-verify="email"--}} autocomplete="off" class="form-control" placeholder="参数...">
                                            <span class="help-block">提示：<span>数据</span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">城市</label>
                                        <div class="col-md-9">
                                            <div class="layui-input-inline">
                                                <select name="province" lay-filter="province">
                                                    <option value="">请选择省</option>
                                                </select>
                                            </div>
                                            <div class="layui-input-inline" style="display: none;">
                                                <select name="city" lay-filter="city">
                                                    <option value="">请选择市</option>
                                                </select>
                                            </div>
                                            <div class="layui-input-inline" style="display: none;">
                                                <select name="area" lay-filter="area">
                                                    <option value="">请选择县/区</option>
                                                </select>
                                            </div>
                                            <span class="help-block">提示：<span>数据</span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">日期</label>
                                        <div class="col-md-9">
                                            <input type="text" id="lay_date1" name="date" {{--lay-verify="date"--}} placeholder="yyyy-mm-dd" autocomplete="off" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">范围</label>
                                        <div class="col-md-9">
                                            <div class="layui-inline">
                                                <div class="layui-input-inline" style="width: 100px;">
                                                    <input type="text" name="price_min" placeholder="最小" autocomplete="off" class="layui-input">
                                                </div>
                                                %
                                                <div style="display: inline-block">—</div>
                                                <div class="layui-input-inline" style="width: 100px;">
                                                    <input type="text" name="price_max" placeholder="最大" autocomplete="off" class="layui-input">
                                                </div>
                                                %
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">提示</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static">数据</p>
                                        </div>
                                    </div>
                                    <div class="layui-form-item layui-form-text form-group">
                                        <label class="col-md-2 control-label">备注</label>
                                        <div class="col-md-9">
                                            <script id="UE_container" name="remarks" type="text/plain"></script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">文件</label>
                                        <div class="col-md-9">
                                            <input id="file-1" type="file" multiple class="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-2">
                                            <div class="layui-progress layui-progress-big" lay-showpercent="true" lay-filter="progress_pre" id="progress_pre">
                                                <div class="layui-progress-bar layui-bg-red" lay-percent="0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-9" style="text-align: right">
                                            <br>
                                            <button class="btn btn-primary btn_16px" lay-submit="" lay-filter="form1">提交</button>
                                            <button type="reset" class="btn btn-primary btn_16px">重置</button>
                                        </div>
                                    </div>
                                </form>
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
<script src="{{url('ultron/UEditor/ueditor.config.js')}}"></script>
<script src="{{url('ultron/UEditor/ueditor.all.js')}}"></script>
<script src="{{url('ultron/js/front/localCity.js')}}"></script>
<script src="{{url('ultron/layui-area/area.js')}}"></script>
<script src="{{url('ultron/layui-area/layui-area.js')}}"></script>
<script>
    $("#progress_pre").hide();
    var layOffset=['400px'];


    //UE_editor初始化
    var ue = UE.getEditor('UE_container' ,{
        toolbars:[
            [   'fullscreen', 'preview', 'print', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink', 'anchor', '|', 'scrawl', 'insertimage', 'emotion', 'map','insertcode', 'pagebreak', 'template', 'background', '|',
                'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
                'searchreplace', 'drafts', 'cleardoc'
            ]
        ],
        //关闭字数统计
        wordCount:true,
        //关闭elementPath
        elementPathEnabled:false,
        //默认的编辑区域高度
        initialFrameHeight:400,
        initialFrameWidth: "100%",
        emotionLocalization:true,
        maximumWords:"500",
        autoFloatEnabled:false,
        saveInterval:60000,
        wordOverFlowMsg:'<span style="color:red;">你输入的字符个数已经超出最大允许值，服务器可能会拒绝保存 ！</span>'
    });


    //fileinput 初始化
    $("#file-1").fileinput({
        language: 'zh',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        uploadAsync: false,
        showUpload: false, //是否显示上传按钮
        showCaption:true,
        showPreview:true,
        showRemove:true,
        showCancel:false,
        showClose:false,
        showUploadedThumbs:false,
        maxFileSize: 1000,
        minFileCount: 1,
        maxFileCount: 3
    });

    //上传文件数据
    var fileArray= [];

    /*删除文件*/
    $('#file-1').on('filebatchselected', function(event, files) {
        //console.log(files);
        fileArray = files ;
    });

    /*添加文件*/
    $('#file-1').on('filepreremove', function(event, id, index) {
        //console.log("id="+id +"\n" + "index="+index +"\n");
        fileArray.splice(index,1)
    });

    //表单控件
    layui.use(['form', 'laydate', 'layedit', 'element'], function(){
        var form = layui.form()
                ,layer = layui.layer
                ,laydate = layui.laydate
                ,layedit = layui.layedit
                ,element =layui.element()
                ,$ = layui.jquery,
                $form=$('#form1');

        //初始化日期
        var start = {
            //min: laydate.now(),//最小日期
            //max: '2099-12-31 23:59:59', //最大日期
            istoday: true, //是否显示今天
            format: 'YYYY-MM-DD', //日期格式 'YYYY-MM-DD hh:mm:ss'
            istime: false, //是否开启时间选择
            festival: true, //是否显示节日
            choose: function(data){
                //console.log(data)
            }
        };

        document.getElementById('lay_date1').onclick = function(){
            start.elem = this;
            laydate(start);
        };


        //初始化城市三联
        loadProvince(form,$form);


        //构建一个默认的编辑器
        var editIndex = layedit.build('LAY_demo1', {
            tool: ['strong' ,'italic' ,'underline' ,'del' ,'|' ,'left' ,'center' ,'right' ,'|' ,'link' ,'unlink' ,'face' ]
        });

        //自定义验证规则
        form.verify({
            name: function(value){
                if(value.length < 5){
                    return '账号至少得5个字符';
                }
            }
            ,remark: function(value){
                layedit.sync(editIndex);
            }
        });



        //监听提交
        form.on('submit(form1)', function(data){
            var final_data=data.field;

            //处理地区三级联动编码
            console.log(final_data);
            final_data.province=final_data.province.split('_')[0];
            final_data.city=final_data.city.split('_')[0];
            final_data.area=final_data.area.split('_')[0];

            //获取图片资源
            console.log(fileArray);

            //获得UE编辑器内容
            var UE_html = ue.getContent();
            var UE_text = ue.getContentTxt();

//            layer.alert(JSON.stringify(final_data), {
//                title: '最终的提交信息',
//                offset:['400px']
//            });

            /*进度处理*/
            function onprogress(evt){
                var loaded = evt.loaded;     //已经上传大小情况
                var tot = evt.total;      //附件总大小
                var per = Math.floor(100*loaded/tot);  //已经上传的百分比
                //console.log(per);
                /*动态进度*/
                $("#progress_pre").show();

                layui.element().progress('progress_pre', per+'%');

            }

            /*提交*/
            $.ajax({
                type: "POST",
                url: "#",
                data: final_data ,　　//这里上传的数据使用了formData 对象
                processData : false,
                //必须false才会自动加上正确的Content-Type
                contentType : false ,
                //这里我们先拿到jQuery产生的 XMLHttpRequest对象，为其增加 progress 事件绑定，然后再返回交给ajax使用
                xhr: function(){
                    var xhr = $.ajaxSettings.xhr();
                    if(onprogress && xhr.upload) {
                        xhr.upload.addEventListener("progress" , onprogress, false);
                        return xhr;
                    }
                },
                timeout:30000
                ,statusCode: {
                    500: function() {
                        layer.msg("系统错误 !",{
                            icon:5,
                            offset:layOffset
                        })
                    }
                }
                ,success:function(data){
                    console.log(data);
                }
            });
            return false;
        });

    });

</script>


