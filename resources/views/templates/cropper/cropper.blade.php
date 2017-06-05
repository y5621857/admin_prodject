@include('head.header')
<link rel="stylesheet" href="http://cdn.bootcss.com/cropper/3.0.0-rc.1/cropper.min.css">
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
                    <li><a href="javascript:void(0)" title="Sample page 1">图片裁剪</a>
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
        <div class="content-wrap" id="contentPage">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="Blank_PageClose">
                        <div class="title-alt">
                            <h6>图片裁剪</h6>
                            <div class="titleClose">
                                <a class="gone" href="#Blank_Page_cropper">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Blank_Page_cropper">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div class="body-nest" id="Blank_Page_cropper">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" id="file_input">
                                    <br>
                                    <div id="cropper_container">
                                        <img src="">
                                    </div>
                                </div>
                                <div class="col-md-6  right_cropper_handle" style="display: none;">
                                    <br>
                                    <br>
                                    <br>
                                    <div>
                                        <img src="" alt="" id="example">
                                    </div>
                                    <br>
                                    <br>
                                    <button class="btn btn-success croppe_reset_btn"><i class="fontawesome-refresh"></i>&nbsp;重置</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success cropper_submit_btn" data-method="zoom">提交</button>
                                </div>
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
<script src="http://cdn.bootcss.com/cropper/3.0.0-rc.1/cropper.min.js"></script>
<script>
    var cropper_container=$('#cropper_container')
            , crop_img=cropper_container.find('img')
            ,example=$("#example")
            ,right_cropper_handle=$(".right_cropper_handle")
            ,imgName = null;

    $("#file_input").change(function(){
        var imgObj = this.files[0];
        var imgUrl = null;

        if(imgObj&&imgObj.length!=0){
            crop_img.cropper('destroy');
            crop_img.attr({src:""});
            right_cropper_handle.hide()

            if (/^image\/\w+$/.test(imgObj.type)) {
                right_cropper_handle.show();
                imgName = imgObj.name;

                if (window.createObjectURL != undefined) {
                    imgUrl = window.createObjectURL(imgObj)
                } else if (window.URL != undefined) {
                    imgUrl = window.URL.createObjectURL(imgObj)
                } else if (window.webkitURL != undefined) {
                    imgUrl = window.webkitURL.createObjectURL(imgObj)
                }

                //console.log(imgUrl);

                crop_img.attr({src:imgUrl});

                crop_img.cropper('destroy').cropper({
                    aspectRatio: 1 / 1,
                    dragMode : "move",
                    autoCropArea:.4,
                    crop: function(data) {
                        // 出来裁切后的图片数据.
                        //console.log(data);
                    }
                }).on('ready',function(e){
                    var data_url = crop_img.cropper("getCroppedCanvas",{
                        width: 100
                    });
                    var img_url = data_url.toDataURL("image/jpeg",0.3);

                    example.attr({src:img_url});
                }).on('cropmove', function (e) {
                     var data_url = crop_img.cropper("getCroppedCanvas",{
                     width: 100
                     });
                     var img_url = data_url.toDataURL("image/jpeg",0.3);

                     example.attr({src:img_url});
                });
            }else{
                $("#file_input").val("");
                layer.msg("文件格式不正确，请选择一张图片",{icon:5},function(){

                })
            }
        }
    });

    /*重置*/
    $(".croppe_reset_btn").click(function(){
        if($("#file_input")[0].files.length!=0){
            crop_img.cropper('reset');

            var data_url = crop_img.cropper("getCroppedCanvas",{
                width: 100
            });
            var img_url = data_url.toDataURL("image/jpeg",0.3);

            example.attr({src:img_url});

        }else{
            layer.msg('请先选择一张图片',{icon:5},function(){

            })
        }
    });

    /*提交*/
    $(".cropper_submit_btn").click(function(){
        if($("#file_input")[0].files.length!=0){
            var data_url = crop_img.cropper("getCroppedCanvas",{
                width: 100
            });
            var img_url = data_url.toDataURL("image/jpeg",0.3);
            var img_Blob = data_url.toBlob(function(blob){
                blob.name = imgName;
                console.log(blob);
                /*上传文件*/
            });

            console.log(img_url);
            console.log(imgName);

            example.attr({src:img_url});
        }else{
            layer.msg('请先选择一张图片',{icon:5},function(){

            })
        }
    })
</script>