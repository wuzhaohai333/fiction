<!DOCTYPE html>
<html lang="en" data-dpr="1" style="font-size: 36px;">
<head>
    <meta charset="utf-8">
    <meta content="telephone=no,email=no" name="format-detection">
    <script src="//hm.baidu.com/hm.js?e5883283abd0285c634898e065e21499"></script>
    <script src="{{URL::asset('muban/')}}/js/flexible.0.3.4.js"></script>
    <style>@charset "utf-8";
        html {
            color: #000;
            background: #fff;
            overflow-y: scroll;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        html * {
            outline: 0;
            -webkit-text-size-adjust: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        html, body {
            font-family: sans-serif
        }

        body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td, hr, button, article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
            margin: 0;
            padding: 0
        }

        input, select, textarea {
            font-size: 100%
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        fieldset, img {
            border: 0
        }

        abbr, acronym {
            border: 0;
            font-variant: normal
        }

        del {
            text-decoration: line-through
        }

        address, caption, cite, code, dfn, em, th, var {
            font-style: normal;
            font-weight: 500
        }

        ol, ul {
            list-style: none
        }

        caption, th {
            text-align: left
        }

        h1, h2, h3, h4, h5, h6 {
            font-size: 100%;
            font-weight: 500
        }

        q:before, q:after {
            content: ''
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        sub {
            bottom: -.25em
        }

        a:hover {
            text-decoration: underline
        }

        ins, a {
            text-decoration: none
        }</style>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link href="https://s.zhulang.com/images/zl-logo114.png" rel="apple-touch-icon-precomposed">
    <title>个人中心</title>
    <meta name="keywords" content="">
    <meta name="description" content="个人中心">
    <link rel="stylesheet" href="{{URL::asset('muban/')}}/css/zlm-b4a23cdd8b.css" type="text/css">
    <style>
        [class^='1600'] .usr-btm,
        [class^='1600'] .btm-nav,
        [class^='1600'] .app-down {
            display: none;
        }

        .app-bar {
            display: none;
        }

        [class^='1600'] .app-bar {
            display: block;
        }
    </style>
    <script>
        var userInfo = {
            uid: "66148802",
            nick: "小海豚_66148802"
        };
        var pageName = 'usercenter';
    </script>

</head>
<body ontouchstart="" class="chn-undefined" style="font-size: 12px;">
<div class="wrap">
    <header class="pg-hd wh-hd">
        <a href="javascript:void(0)" class="icon fl backicon" style="font-size: 20px"><i>返回</i></a>

        <h2>个人中心</h2>
        <a href="/" class="icon fr"><i class="iconfont">首页</i></a>
    </header>
    <div class="usr-flag">
        <div class="usr-fig">
            <img src="https://i.zhulang.com/avatar/200.gif" alt="">

            <div>
                <h3>{{session('name')}}<em></em></h3>

                <p>
                    <i></i>
                    <a href="/pay/index.html">激活VIP</a>
                    <a>ID: {{session('id')}}</a>
                </p>
            </div>
        </div>
        <div class="usr-acc">
            <div>
                <strong>0</strong>
                <span>逐浪币</span>
            </div>
            <div>
                <strong>0</strong>
                <span>奖金币</span>
                <!--span></span-->
            </div>
            <div>
                <strong>0</strong>
                <span>鲜花</span>
            </div>
        </div>
    </div>
    <ul class="usr-link">
        <li class="li-charge">
            <a href="/pay">
                <i></i>
                <span>充值</span>
            </a>
        </li>
        <li class="li-record">
            <a href="/user/record/recharge.html">
                <i></i>
                <span>充值记录</span>
            </a>
        </li>
        <li class="li-spend">
            <a href="/user/record/cost.html">
                <i></i>
                <span>消费记录</span>
            </a>
        </li>
    </ul>
    <ul class="usr-link">
        <li class="li-shelf">
            <a href="/user/shelf.html">
                <i></i>
                <span>我的书架</span>
                <em>0</em>
            </a>
        </li>
        <li class="li-recent">
            <a href="/user/shelf/history.html">
                <i></i>
                <span>最近阅读</span>
            </a>
        </li>
        <li class="li-guide">
            <a href="/user/index/guide.html">
                <i></i>
                <span>用户指南</span>

            </a>
        </li>

    </ul>
    <div class="usr-btm">
        <a href="/login/logout.html" class="blue fl">退出登录</a>
        <a href="#top" class="blue fr"><i class="icon iconfont"></i>返回顶部</a>
    </div>
</div>


<script type="text/javascript" src="{{URL::asset('muban/')}}/js/mlib.js"></script>
<script type="text/javascript" src="{{URL::asset('muban/')}}/js/swiper.min.js"></script>
<script type="text/javascript" src="{{URL::asset('muban/')}}/js/index-c32156fdb3.js"></script>


</body>
</html>