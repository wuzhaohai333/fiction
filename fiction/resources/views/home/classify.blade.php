<!DOCTYPE html>
<html>
<head>
    <title>分类视图</title>
    <meta charset="UTF-8" />
    <meta name="Description" content="果壳网是一个泛科技主题网站，提供负责任、有智趣、贴近生活的内容，你可以>在这里阅读、分享、交流、提问。果壳网致力于让科技兴趣成为人们文化生活和娱乐生活的重要元素。"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="msite/styles/f3d0a03a.m.css" />
    <link rel="stylesheet" href="msite/styles/bee116ff.site.css" type="text/css" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="msite/images/43de0067.apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="msite/images/258bbb41.apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="msite/images/5da37614.apple-touch-icon-precomposed.png">
</head>
<body>





@include('home.layout.top')

<nav class="content-block mobile-site gclear">
    @foreach($data as $k=>$v)
        <a class="gfl entry gellipsis" href="list?id={{$v['c_id']}}">{{$v['c_name']}}</a>
    @endforeach

</nav>



<a href="javascript:void(0);" class="gotop-btn" id="to-top">
    <span class="icon-up"></span>回到顶部
</a>

<script type="text/javascript">
    var ukey=null,GM_PAGE_TYPE = "minisiteList",
            url_signup = "https:\/\/account.guokr.com\/sign_up\/?success=http%3A%2F%2Fm.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Fgroup%252Fuser%252Frecent_replies%252F",
            url_signin = "../sso/mobile/@suppress_prompt=1&lazy=y&success=http_253A_252F_252Fm.guokr.com_252Fsite_252F";
</script>
<script src="msite/scripts/7e1793a0.zepto.js"></script>
<script src="msite/scripts/a9468bf8.m.js"></script>
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