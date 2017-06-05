@include('head.header')
</head>

<body id="loginBody">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<div style="height: 30px;" class="visible-xs"></div>
<div style="height: 150px;" class="hidden-xs"></div>
<div class="container login_container" aos="fade-zoom-in" aos-offset="200" aos-easing="ease-in-sine" aos-duration="600">
    <div class="" id="login-wrapper">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div id="logo-login" style="height: 77px;">
                    <h1 class="h1_1_animate" style="text-align: center;">工程管理系统
                        <span style="font-size: 14px">v 1.0</span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="account-box">
                    <form role="form" action="" class="layui-form">
                        <div class="form-group">
                            <label for="inputUsernameEmail">用户名</label>
                            <input type="text" class="layui-input form-control" name="name" maxlength="20" lay-verify="name" autocomplete="off" placeholder="请输入账号...">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">密码</label>
                            <input type="password" class="layui-input form-control" name="password" lay-verify="pass"  autocomplete="off" placeholder="请输入密码...">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" style="display: block;width: 100%;">验证码<span id="v_code" class="pull-right" style="margin-bottom: 10px"></span></label>
                            <input type="password" class="layui-input form-control" name="code" lay-verify="required" autocomplete="off" placeholder="请输入验证码...">
                        </div>
                        <div class="layui-form-item" pane="" style="width: 200px;display: inline-block;padding-top: 12px;" >
                            <input type="checkbox" name="remrember" lay-skin="switch" lay-filter="switchTest" lay-text="开 | &nbsp;&nbsp;&nbsp;&nbsp;关">
                            <label>记住密码</label>
                        </div>
                        <button class="btn btn btn-primary pull-right btn1_animate" type="submit" lay-submit="" lay-filter="demo2" onclick="javascript:window.location.href='{{url("index")}}'">登 录</button>
                    </form>
                    <div class="row-block">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br class="hidden-xs">
    <br class="hidden-xs">
    <div style="text-align:center;margin:0 auto;">
        <h4 class="p1_animate" style="color:#fff;">技术支持: <a href="http://www.ultron-soft.com/" class="error-link">奥创软件(镇江)云服务有限公司</a> </h4>
        <h4 class="p2_animate" style="color:#fff;">Copyright &copy; 工程管理  2017-2018 <a href="http://www.beian.gov.cn/portal/recordQuery" class="error-link">苏IP备07021605号</a></h4>
    </div>
</div>
@include('foot.footer')
<script>
    /*验证码*/
    var verifyCode = new GVerify({
        id:"v_code",
        type:"number"
    });


    $(".p1_animate,.p2_animate,.h1_1_animate,.btn1_animate").hide();

    $("#login-wrapper").velocity("transition.flipBounceYIn", { duration: 650 });

    $(".h1_1_animate").velocity("transition.bounceRightIn", {
        delay: 650,
        duration: 650
    });

    $(".btn1_animate").velocity("transition.shrinkIn", {
        delay: 1000,
        duration: 1200
    }).velocity("callout.bounce", {
        delay: 1800,
        duration: 650
    });

    $(".p1_animate").velocity("transition.shrinkIn", {
        delay: 1500,
        duration: 1500
    });
    $(".p2_animate").velocity("transition.shrinkIn", {
        delay: 2500,
        duration: 1500
    });

    layui.use(['form', 'laydate'], function(){
        var form = layui.form()
                ,layer = layui.layer
                ,laydate = layui.laydate;


        //自定义验证规则
        form.verify({
            name: function(value){
                if(value.length < 5){
                    return '账号至少得5个字符';
                }
            }
            ,pass: [/^[\w]{6,12}$/, '密码必须6到12位数字、字母、下划线']
        });

        form.on('switch(switchTest)', function(data){
            layer.tips('温馨提示：保存账号'+ ( this.checked ? '开启' : '关闭'), data.othis,{time:1500})
        });

        //监听提交
        form.on('submit(demo2)', function(data){
            var code_verify =  verifyCode.validate($("input[name='code']").val());
            //alert(code_verify);

            if(code_verify){
                layer.alert(JSON.stringify(data.field), {
                    title: '最终的提交信息',
                    offset:['400px']
                });
            }else{
                $("input[name='code']").val("");
            }

            return false;
        });

    });
</script>

