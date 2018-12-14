<!DOCTYPE html>
<html lang="en" data-dpr="1" style="font-size: 36px;"><head>
    <meta charset="utf-8">
    <meta content="telephone=no,email=no" name="format-detection">
    <script src="//hm.baidu.com/hm.js?e5883283abd0285c634898e065e21499"></script><script src="{{URL::asset('muban/')}}/js/flexible.0.3.4.js"></script><style>@charset "utf-8";html{color:#000;background:#fff;overflow-y:scroll;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}html *{outline:0;-webkit-text-size-adjust:none;-webkit-tap-highlight-color:rgba(0,0,0,0)}html,body{font-family:sans-serif}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td,hr,button,article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{margin:0;padding:0}input,select,textarea{font-size:100%}table{border-collapse:collapse;border-spacing:0}fieldset,img{border:0}abbr,acronym{border:0;font-variant:normal}del{text-decoration:line-through}address,caption,cite,code,dfn,em,th,var{font-style:normal;font-weight:500}ol,ul{list-style:none}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:500}q:before,q:after{content:''}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}a:hover{text-decoration:underline}ins,a{text-decoration:none}</style><meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link href="https://s.zhulang.com/images/zl-logo114.png" rel="apple-touch-icon-precomposed">
    <title>充值</title>
    <meta name="keywords" content="小说,小说网,逐浪手机版,充值,逐浪币充值">
    <meta name="description" content="逐浪网手机版逐浪币充值页面，为你的逐浪账户充值，提供微信，支付宝，手机支付等主流支付方式。">
    <link rel="stylesheet" href="{{URL::asset('muban/')}}/css/zlm-b4a23cdd8b.css" type="text/css">
    <script type="text/javascript" src="{{URL::asset('muban/')}}/js/lib.js"></script>
    <script type="text/javascript" src="https://s.zhulang.com/wap/pub/v2/js/bundle/charge-9b02cd133d.js"></script>
</head>
<body ontouchstart="" class="chn-undefined" style="font-size: 12px;">
<div class="wrap">
    <header class="pg-hd">
        <a href="javascript:void(0)" class="icon fl backicon"><i class="iconfont">返回</i></a>
        <h2>充值</h2>
        <a href="/index" class="icon fr"><i class="iconfont">首页</i></a>
    </header>

    <div class="cm-box ac-info">
        <p>账户：小海豚_66148802</p>
        <p>余额：<strong>0</strong> 逐浪币</p>
    </div>




    <h3 class="ch3">
        选择支付方式
    </h3>
    <div class="cm-box cm-mb">
        <ul class="pay-way" id="pay-way">

            <li class="alipay">
                <a href="https://m.zhulang.com/pay/index/alipay.html">
                    <em></em><label>支付宝</label>
                </a>
            </li>
            <li class="weixin" id="app-wx" style="display: none;">
                <a href="https://m.zhulang.com/pay/index/wx.html">
                    <em></em><label>微信支付</label>
                </a>
            </li>
            <li class="weixin" id="wap-wx">
                <a href="https://m.zhulang.com/pay/index/wap_wx.html">
                    <em></em><label>微信支付</label>
                </a>
            </li>
            <!-- <li class="qpay">
            <a href="https://m.zhulang.com/pay/index/qq.html">
                <em></em><label>QQ钱包</label>
            </a>
        </li> -->


        </ul>
    </div>

    <div class="cm-box cm-mb cm-txt">
        <h4>提示</h4>
        <ol>
            <li>您所充值的只限本站使用</li>
            <li>可用于打赏作者、小说VIP章节订阅等，通过手机充值的逐浪奖金币不能用于打赏</li>
            <li>若支付完成后，长时间未接收到充值结果的系统提示，且账户余额没有变化，请联系客服：025-66670800</li>
        </ol>
    </div>
</div>


<script>
    $(function(){

        if(navigator.userAgent.match(/MicroMessenger/i)){
            $('#app-wx').length && $('#app-wx').show();
            $('#wap-wx').length && $('#wap-wx').hide();
            $('#scan-wx').length && $('#scan-wx').show();
        }else{
            $('#app-wx').length && $('#app-wx').hide();
            $('#wap-wx').length && $('#wap-wx').show();
            $('#scan-wx').length && $('#scan-wx').hide();
        };


        $('#pay-way').find('li a').on('click',function(e){
            e.stopPropagation()
        });

    })
</script>


</body></html>