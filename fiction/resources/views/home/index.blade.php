<!DOCTYPE html>
<html>
<head>
    <title>皮皮皮小说首页</title>
    <meta charset="UTF-8" />
    <meta name="Description" content="果壳网是一个泛科技主题网站，提供负责任、有智趣、贴近生活的内容，你可以在这里阅读、分享、交流、提问。果壳网致力于让科技兴趣成为人们文化生活和娱乐生活的重要元素。果壳网是一个泛科技主题网站，提供负责任、有智趣、贴近生活的内容，你可以>在这里阅读、分享、交流、提问。果壳网致力于让科技兴趣成为人们文化生活和娱乐生活的重要元素。"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="msite/styles/f3d0a03a.m.css" />
    <link rel="stylesheet" href="msite/styles/a0fc97c4.index.css" type="text/css" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="msite/images/43de0067.apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="msite/images/258bbb41.apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="msite/images/5da37614.apple-touch-icon-precomposed.png">
</head>
<body>




@include('home.layout.top')




<section class="content-block">
    <ul class="focus" id="focus">
        @foreach($data_sift as $k=>$v)
            <li>
                <a href="http://api.fictions.com/collect?url={{$v['book_url']}}&book_id={{$v['book_id']}}">
                    <img width="320" height="228" src="{{$v['book_img']}}">
                    <h4 class="gellipsis">{{$v['book_tilke']}}</h4>
                </a>
            </li>
        @endforeach

    </ul>
    <ul class="titles">
        @foreach($data_sift as $k=>$v)
            <li>
                <a href="http://api.fictions.com/collect?url={{$v['book_url']}}&book_id={{$v['book_id']}}" class="article">
                    <h4>{{$v['book_name']}}{{$v['book_tilke']}}</h4>
                </a>
            </li>
        @endforeach

    </ul>
</section>
<section class="content-block" id="askBlock">

    <div class="block-title">
        <h2>编辑推荐</h2>
        <a href="classify" data-gaevent="home_more_questions:home" class="icon-more">更多</a>
    </div>
    <nav>
        <ul class="tab">
                <li class="current">
                    <h3>历史军情</h3>
                </li>
                <li >
                    <h3>爱情小说</h3>
                </li>

                <li >
                    <h3>科技小说</h3>
                </li>
        </ul>
    </nav>
    <section class="titles-list">

        <ul class="titles">
            @foreach($data as $k=>$v)
                @if($v['c_name']=='历史军情')
                    <li>
                        <a href="http://api.fictions.com/collect?url={{$v['book_url']}}&book_id={{$v['book_id']}}">
                            <h4>{{$v['book_tilke']}}</h4>

                    <span class="title-detail">
                        <img src="{{$v['book_img']}}" />
                        <p>{{$v['book_name']}}</p>
                    </span>

                        </a>
                    </li>
                @endif
            @endforeach

        </ul>

        <ul class="titles">
            @foreach($data as $k=>$v)
                @if($v['c_name']=='游戏竞技')
            <li>
                <a href="http://api.fictions.com/collect?url={{$v['book_url']}}&book_id={{$v['book_id']}}">
                    <h4>{{$v['book_tilke']}}</h4>

                <span class="title-detail">
                    <img src="{{$v['book_img']}}" />
                    <p>{{$v['book_name']}}</p>
                </span>

                </a>
            </li>

                @endif
            @endforeach

        </ul>

        <ul class="titles">

            @foreach($data as $k=>$v)
                @if($v['c_name']=='历史军情')
                    <li>
                        <a href="http://api.fictions.com/collect?url={{$v['book_url']}}&book_id={{$v['book_id']}}">
                            <h4>{{$v['book_tilke']}}</h4>

                    <span class="title-detail">
                        <img src="{{$v['book_img']}}" />
                        <p>{{$v['book_name']}}</p>
                    </span>

                        </a>
                    </li>
                @endif
            @endforeach
        </ul>

        <ul class="titles">

            @foreach($data as $k=>$v)
                @if($v['c_name']=='历史军情')
                    <li>
                        <a href="http://api.fictions.com/collect?url={{$v['book_url']}}&book_id={{$v['book_id']}}">
                            <h4>{{$v['book_tilke']}}</h4>

                    <span class="title-detail">
                        <img src="{{$v['book_img']}}" />
                        <p>{{$v['book_name']}}</p>
                    </span>

                        </a>
                    </li>
                @endif
            @endforeach

        </ul>
        <ul class="titles">

            @foreach($data as $k=>$v)
                @if($v['c_name']=='历史军情')
                    <li>
                        <a href="http://api.fictions.com/collect?url={{$v['book_url']}}&book_id={{$v['book_id']}}">
                            <h4>{{$v['book_tilke']}}</h4>

                    <span class="title-detail">
                        <img src="{{$v['book_img']}}" />
                        <p>{{$v['book_name']}}</p>
                    </span>

                        </a>
                    </li>
                @endif
            @endforeach
        </ul>

    </section>

</section>




<div class="add-desktop" id="addDesktop">
    <img class="add-desktop-logo" src="msite/images/43de0067.apple-touch-icon-114x114-precomposed.png" width="57" height="57">
    <p>先点击<span class="icon-out"></span>，<br />再"添加至主屏幕"</p>
    <span class="arrow-down"></span>
    <div class="add-desktop-close" id="addDesktopClose"><span class="add-desktop-btn"></span></div>
</div>



<a href="javascript:void(0);" class="gotop-btn" id="to-top">
    <span class="icon-up"></span>回到顶部
</a>


<script type="text/javascript">
    var ukey=null,GM_PAGE_TYPE = "home",
            url_signup = "https:\/\/account.guokr.com\/sign_up\/?success=http%3A%2F%2Fm.guokr.com%2Fsso%2F%3Fsuppress_prompt%3D1%26lazy%3Dy%26success%3Dhttp%253A%252F%252Fwww.guokr.com%252Fgroup%252Fuser%252Frecent_replies%252F",
            url_signin = "sso/mobile/@suppress_prompt=1&lazy=y&success=http_253A_252F_252Fm.guokr.com_252F";
</script>
<script src="msite/scripts/7e1793a0.zepto.js"></script>
<script src="msite/scripts/a9468bf8.m.js"></script>
<script src="msite/scripts/4e06de78.index.js"></script>
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