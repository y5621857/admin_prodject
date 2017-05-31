<nav role="navigation" class="navbar navbar-static-top">
    <div class="container-fluid">

        <div class="navbar-header">
            <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="entypo-menu"></span>
            </button>
            <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                <span class="entypo-list-add"></span>
            </button>
            <div id="logo-mobile" class="visible-xs">
                <h1>工程管理系统<span>v1.0</span></h1>
            </div>
        </div>
        {{--信件--}}
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i data-toggle="tooltip" data-placement="bottom" title="信件"  style="font-size:19px;" class="icon-conversation tooltitle"></i><div class="noft-red">2</div></a>
                    <ul style="margin: 12px 0 0 0;" role="menu" class="dropdown-menu dropdown-wrap">
                        <li>
                            <a href="javascript:void(0)">
                                <img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/1.jpg">管理员 <b>2017-05-05</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)">
                                <img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/1.jpg">安全员 <b>2017-05-05</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)"><div>查看所有</div></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i data-toggle="tooltip" data-placement="bottom" title="通知" style="font-size:19px;" class="icon-warning tooltitle"></i><div class="noft-green">2</div></a>
                    <ul style="margin: 12px 0 0 0;" role="menu" class="dropdown-menu dropdown-wrap">
                        <li>
                            <a href="javascript:void(0)">
                                <span style="background:#DF2135" class="noft-icon maki-bus"></span><i>系统通知1</i>  <b>2017-05-05</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)">
                                <span style="background:#AB6DB0" class="noft-icon maki-ferry"></span><i>系统通知2</i>  <b>2017-05-05</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div>查看所有</div>
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:void (0)"><i data-toggle="tooltip" data-placement="bottom" title="公告" style="font-size:20px;" class="icon-feed tooltitle"></i></a>
                </li>
            </ul>
            <div id="nt-title-container" class="navbar-left running-text visible-lg">
                {{--date--}}
                <ul class="date-top">
                    <li class="entypo-calendar" style="margin-right:5px"></li>
                    <li id="Date"></li>
                </ul>
                <ul id="digital-clock" class="digital">
                    <li class="entypo-clock" style="margin-right:5px"></li>
                    <li class="hour"></li>
                    <li>:</li>
                    <li class="min"></li>
                    <li>:</li>
                    <li class="sec"></li>
                    <li class="meridiem"></li>
                </ul>
                {{--news--}}
                <ul id="nt-title">
                </ul>
            </div>
            <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)">
                        <img alt="" class="admin-pic img-circle" src="http://api.randomuser.me/portraits/thumb/men/10.jpg">
                        <i data-toggle="tooltip" data-placement="bottom" title="资料" class="tooltitle" style="font-style: normal">用户</i> <b class="caret"></b>
                    </a>
                    <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="entypo-user"></span>&#160;&#160;个人资料</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="entypo-lifebuoy"></span>&#160;&#160;帮助</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="entypo-logout"></span>&#160;&#160; 退出</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i data-toggle="tooltip" data-placement="bottom" title="设置" class="tooltitle" style="font-style: normal">
                            <span class="icon-gear"></span>&#160;&#160;设置
                        </i>
                    </a>
                    <ul role="menu" class="dropdown-setting dropdown-menu">
                        <li><h6 style="padding-left: 12px;font-size: 16px;color: #000000">皮肤主题</h6></li>
                        <li class="theme-bg">
                            <div id="button-bg5"></div>
                            <div id="button-bg6"></div>
                            <div id="button-bg7"></div>
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:void (0)" id="Refresh_Top_btn"><i data-toggle="tooltip" data-placement="bottom" title="刷新" style="font-size:20px;" class="entypo-arrows-ccw tooltitle"></i></a>
                <li><a href="javascript:void (0)"><i data-toggle="tooltip" data-placement="bottom" title="退出" style="font-size:20px;" class="entypo-logout tooltitle"></i></a>
                <li class="hidden-xs">
                    <a class="toggle-left" href="javascript:void(0)">
                        <span style="font-size:20px;" data-toggle="tooltip" data-placement="bottom" title="菜单" class="entypo-list-add tooltitle"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>