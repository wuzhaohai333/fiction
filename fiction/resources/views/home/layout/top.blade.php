
<header class="nav" id="nav">
    <div class="nav-top">
        <a href="javascript:void(0);" class="nav-btn" id="navBtn"><span class="icon-nav"></span></a>
        <a href="/" class="nav-logo icon-logo"><h1>Guokr.com</h1></a>
        @if(!session('name'))
            <span style="color:#FFFFFF;float:right;font-size: 12px;padding-top: 3px;">个人中心</span>
            <a href="/login" class="nav-right">
                <span class="icon-user"></span>
            </a>
        @else
            <span style="color:#FFFFFF;float:right;font-size: 12px;padding-top: 3px;">个人中心</span>
            <a href="person" class="nav-right">
                <span class="icon-user"></span>
            </a>
        @endif


    </div>
    <nav class="nav-btm"><div class="nav-unlogin">
            @if(!session('name'))
                <a href="login"><span class="icon-user"></span>用户登录</a>
                <a href="register"><span class="icon-reg"></span>用户注册</a>
            @else
                <a href="person"><span class="icon-user"></span>欢迎：{{session('name')}}</a>
                <a href="quit"><span class="icon-reg"></span>退出登录</a>
            @endif

        </div><ul id="navMenu" class="tab tab-fixed">
            <li class="current"><a href="index.html">首页</a></li>
            <li><a href="zhuti.html">主题站</a></li>
            <li><a href="xiaozu.html">小组</a></li>
            <li><a href="wenda.html">问答</a></li>
        </ul>
    </nav>
</header>