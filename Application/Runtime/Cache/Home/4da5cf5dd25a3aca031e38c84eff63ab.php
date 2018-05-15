<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
    <head>
    <meta charset="UTF-8"/>
        <link href="/ersh/Public/mls/css/index.css-6f9e6f5a.css" rel="stylesheet" type="text/css"/>
        <link href="/ersh/Public/mls/css/index.css-05147aed.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="body_wrap">
    <div class="registerbox"> 
        <div class="reg_hd"> 
        <a href="#" title="首页" class="mainlogo logo_img"></a> 
        </div> 
        <div class="reg_bd find_pwd_wrap"> 
            <h3 class="findpwd-title">安全设置-设置密码</h3> 
            <div class="step_box step2_box"> 
            <ul class="clearfix nanji"> 
            <li class="no1"><span class="seqNumber">01/</span><span>输入登录名</span></li> 
            <li class="no2"><span class="seqNumber">02/</span><span>验证信息</span></li> 
            <li><span class="seqNumber">03/</span><span>重置密码</span></li> 
            </ul> 
        </div>  
        <h3 class="pwdsettip">*为了您的账户安全请设置密码</h3>  
        <div class="main_content info_verify_box formbox" id="modelform"> 
            <div class="content_form"> 
                <form action="<?php echo U('Index/asd');?>" method="post" class="formelem">
                <p class="ui-item validateitem inputbox passwordbox"> 
                <span class="uname-title">新密码</span> 
                <input type="password" class="ui-input normalText display_u js_text_input js-pwd" data-type="newpassword" id="pass" placeholder="设置您的密码">
                <span class="password-complex"></span> 
                <input type="hidden" class="passComplexLevel"> 
                <span class="tips display_u"></span> 
                <span class="newpasslevel error hide">密码需含英文及数字，长度为6位－20位</span> </p>  
                <div class="subbox"> 
                <button class="confirm_button" id="confirm_button">确认</button> 
                </div> 
                </form> 
            </div> 
        </div> 
    </div>
</div>
<div class="token" data-token=""></div>
<div id="M_PC_footer"></div>
</body>
</html>
<script type="text/javascript" src="/ersh/Public/js/jquery-1.11.1.min.js"></script>
<script>
   $(function() {
                // var aStr = ["弱", "中", "强", "牛逼"];
                function checkStrong(val) {
                    var modes = 0;
                    if (val.length < 6) return 0;
                    if (/\d/.test(val)) modes++; //数字
                    if (/[a-z]/.test(val)) modes++; //小写
                    if (/[A-Z]/.test(val)) modes++; //大写  
                    if (/\W/.test(val)) modes++; //特殊字符
                    // if (val.length > 12) return 4;
                    return modes;
                };
                $(":password").keyup(function() {
                    var val = $(this).val();
                    // $("p").text(val.length);
                    var num = checkStrong(val);
                    switch (num) {
                        case 0:
                            $('.password-complex').attr('class','password-complex weak');   
                            break;
                        case 1:
                        case 2:
                            // $('password-complex').attr('class','hide');
                            $('.password-complex').attr('class','password-complex weak');   
                            // $('.strong').attr('class','hide');
                            break;
                        case 3:
                            // $('password-complex').attr('class','hide');
                            $('.password-complex').attr('class','password-complex medium');
                            break;
                        case 4:
                            // $('.password-complex').attr('class','hide');
                            $('.password-complex').attr('class','password-complex strong');
                            break;
                        default:
                            break;
                    }
                })
            })
        </script>
</script>