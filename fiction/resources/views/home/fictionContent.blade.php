<!DOCTYPE html>
<html>
<head>
    <title>果壳网微官网手机主题网站模板 问答正文页-蚂蚁html5社区手机模版</title>
    <meta charset="UTF-8" />
    <meta name="Description" content="有氧运动真的能增强心脏的功能吗？
果壳网是一个泛科技主题网站，提供负责任、有智趣、贴近生活的内容，你可以>在这里阅读、分享、交流、提问。果壳网致力于让科技兴趣成为人们文化生活和娱乐生活的重要元素。"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="msite/styles/f3d0a03a.m.css" />
    <link rel="stylesheet" href="msite/styles/34c4b789.ask.css" type="text/css" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="msite/images/43de0067.apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="msite/images/258bbb41.apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="msite/images/5da37614.apple-touch-icon-precomposed.png">
</head>
<body>

@include('home.layout.top')

<div>
    <div class="quality-answer">
        <aside class="current-path gclear">
            <a href="/" data-gaevent="mobile_breadcrumb_home:question">首页</a>
        </aside>

        <section class="content-block">
            <div class="block-title">
                <h2>最佳答案</h2>
            </div>
            <div id="answersList" class="content-main">


                <div id=answer547348 class="answer-padding15 answerItem">
                    <footer class="publish quality-answer-author">
                        <h6 class="author">{{$arr->s_name}}</h6>
                        <time class="date" datetime="{{$data['c_ctime']}}">{{$data['c_ctime']}}</time>
                    </footer>

                    <div class="askcontent">
                        {{$data['content']}}
                    </div>
                </div>




            </div>
            <a class="extend gclear get-comments" id="showRestBtn" href="javascript:"><b class="extend-icon extend-icon-down gfr"></b><span class="extend-txt gfl">查看更多答案</span></a>
        </section>

    </div>

</div>



<a href="javascript:void(0);" class="gotop-btn" id="to-top">
    <span class="icon-up"></span>回到顶部
</a>



<script type="text/javascript">
    var ukey=null,
            url_signup = "https:\/\/account.guokr.com\/sign_up\/?success=http%3A%2F%2Fm.guokr.com%2Fsso%2Fask%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Fgroup%252Fuser%252Frecent_replies%252F",
            url_signin = "../../sso/ask/mobile/@suppress_prompt=1&lazy=y&success=http_253A_252F_252Fm.guokr.com_252Fquestion_252F494251_252F";
</script>
<script src="msite/scripts/7e1793a0.zepto.js"></script>
<script src="msite/scripts/a9468bf8.m.js"></script>
<script src="msite/scripts/4c0f3579.askContent.js"></script>
<!--百度统计 //-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?cbf20f554ba43aeba396a009eb4ab5f7";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>