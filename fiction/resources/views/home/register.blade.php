<!DOCTYPE html>
<html>
<head>
    <title>注册页面</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link href="css/register.css" type="text/css" rel="stylesheet">
    <link href="css/global.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="js/register.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
<div id="layout">
    <span>皮皮皮小说账号注册</span>
    <form  method="post">
        <ul>
            <p id="err_msg"></p>
            <li><i class="un"><img src="images/user_name.png"></i><input class="username" id="name" type="text" placeholder="请输入用户名" /></li>
            <li><i class="yz"><img src="images/msg.png"></i><input class="yzm" type="text" id="tel" placeholder="请输入手机验证码" /><input type="button" id="send" value="获取验证码" /></li>
            <li><i class="pw"><img src="images/msg.png"></i><input class="pwd" type="text" id="verif"  placeholder="请输入验证码" /></li>
            <li><i class="pw"><img src="images/pwd.png"></i><input class="pwd" type="password" id="pwd" placeholder="请输入密码" /></li>
            <li><i class="pw2"><img src="images/pwd.png"></i><input class="pwd2" type="password" id="pwds" placeholder="请输入确认密码" /></li>
            <div class="queren"><input class="fx" type="checkbox" id="ll" checked="checked" /><p>我已阅读并同意《用户协议》</p></div>
        </ul>
        <div class="reg_btn">
            <button class="submit" id="dl"  type="button">注册</button>
            <a href="login"><div class="reg-login"><p>已有帐号，立即登陆</p></div></a>
        </div>
    </form>
</div>
<script src="js/jquery-2.1.1.min.js"></script>
<script>
    $(function(){
        //同意用户协议注册
        $('#ll').click(function(){
            if($('#ll').prop('checked')==true){
                $('#dl').attr('disabled',false)
            }else{
                $('#dl').attr('disabled',true)
            }
        });
        //隐藏验证码框
        $('li').eq(2).hide();

        //获取验证码
        $('#send').click(function(){
            var tel=$('#tel').val();
            $('li').eq(2).show();
            var re = /^1\d{10}$/;
            if(!re.test(tel)){
                alert('请输入正确格式手机号！');
                return false;
            }
            $.get('verif',{tel:tel,'_token':'{{csrf_field()}}'},function(msg){
                if(msg==1){
                    alert('获取成功请查收短信！请在5分钟内完成注册');
                }else{
                    alert(msg)
                }
            });
        });

        //执行注册
        $('#dl').click(function(){
            var name=$('#name').val();
            var tel=$('#tel').val();
            var verif=$('#verif').val();
            var pwd=$('#pwd').val();
            var pwds=$('#pwds').val();
            $.post('register_do',{name:name,tel:tel,verif:verif,pwd:pwd,pwds:pwds,'_token':'{{csrf_token()}}'},function(msg){
                if(msg.status==200){
                    alert('注册成功 id为：'+msg.data);
                    location.href='login'
                }else{
                    alert(msg);
                }
            });


        })

    })
</script>
</body>
</html>