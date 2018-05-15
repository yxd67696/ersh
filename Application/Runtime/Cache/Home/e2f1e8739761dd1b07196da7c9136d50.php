<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
    <head>
    <script type="text/javascript">
    </script>
    <meta charset="UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="copyright" content="mogujie.com"/>
    <link rel="stylesheet" type="text/css" href="/ersh/Public/mls/css/index.bundle.css" media="all">
    <link href="/ersh/Public/mls/css/index.css-614d9b3e.css" rel="stylesheet" type="text/css"/>
    <link href="/ersh/Public/mls/css/index.css-6f9e6f5a.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div id="body_wrap">
        <div class="login_wrap">
    <div class="logo_wrap">
       <div class="logo">
          <a title="蘑菇街" href="#" class="mainlogo logo_mgj_img"></a>
       </div>
    </div>
    <div id="tplContainer">
      <div class="content clearfix" style="background:url(/ersh/Public/mls/images/upload_7398a9hl359jhe5deej5f7gh0chf3_1920x600.png) no-repeat center center;">
        <div class="lg_banner">
            <a href="" target="_blank" class="banner1"></a>
        </div>
        <div class="rg_left rg_content" id="rg_content">
            <div class="regist">
                <h3>新用户注册</h3>
            </div>
            <form action="<?php echo U('Index/doregister');?>" method="post">
            <div id="signform" class="formbox mod_box rg_mod_box" data-isshow="0">
                <div class="ui-sign-item ui-name-item clearfix mb">
                <p class="error_tip" id="error_phone1" style="display:none;">请输入手机号码</p>
                <p class="error_tip" id="error_phone2" style="display:none;">请填写正确的手机号</p>
                <p class="error_tip" id="error_code" style="display:none;">验证码错误</p>
                    <input id="userphone" type="text" maxlength="11" data-type="mobile" class="ui-input pwd_text js_phoneInput" name="tel"  placeHolder="手机号码" style="border-color:#CFCFCF;">
                </div>
                <div class="ui-sign-item ui-sign-common-item checkword clearfix mb">
                    <a href="javascript:void(0);" class="getCode js_getphonecode" onclick="settime(this);">点击获取验证码</a>
                    <input type="text" maxlength="32" data-type='code' id="code" class="ui-input short_text js_checkcode" name="checkCode"  placeHolder="验证码" style="border-color:#CFCFCF;height:40px;">
                </div>
                <div id="_content"></div>
                <input type="hidden" class="imgchecklevel">
                <div id="appendchk" class="rg_submit mb">
                    <input type="submit" value="立即注册" onclick="return false" class="sub" id="checkCodeBtn">
                </div>
                <div class="rg_rule mb">
                    <label>
                      <input type="checkbox" value="1" name="read" class="check" checked="checked" />
                      <span id="register-service-tip">
                        <span>我已阅读并且同意</span>
                      </span>
                    </label>
                </div>
                <div class="rg_login">
                    <a href="javascript:void;" class="registerToLogin">< 已有账号登录</a>
                </div>
            </div>
            </form>
        </div>
        <input type="hidden" value="" id="imgcheckvalue">
      </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="/ersh/Public/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">  
//倒计时+手机验证
var countdown=60;  

function settime(val) {  
    var userphone = $('#userphone').val();
    var reg = /^1[3|4|5|7|8][0-9]{9}$/;
    // alert(reg.test(userphone));
        if (countdown == 0) {  
            val.removeAttribute("disabled");  
            val.innerHTML="获取验证码";  
            countdown = 60;  
            return false;  
        }else if(userphone != '' && reg.test(userphone) == true){
            val.setAttribute("disabled", true);  
            val.innerHTML="重新发送(" + countdown + ")";  
            countdown--; 
        }else if(userphone == ''){
            $('#error_phone1').show();
            return false;  
        }else{
            $('#error_phone2').show();
            return false;  
        } 
        setTimeout(function() {  
            settime(val);  
        },1000);
        //手机验证
    } 
$('#userphone').focus(function(){
    $('.error_tip').hide();
});
$('.getCode').click(function(){
    var userphone = $('#userphone').val();
    var reg = /^1[3|4|5|7|8][0-9]{9}$/;
    if(userphone == '' || reg.test(userphone) == false){
        return false;
    }else{
        $.ajax({
            url:"<?php echo U('Index/register_sdk');?>",
            data:{tel:userphone},
            type:'post',
            dataType:'json',
            success:function(data){
                console.log(data);
                $('#code').blur(function(){
                    var code = $('#code').val();
                    if(code == data['num']){
                        $('#checkCodeBtn').attr('onclick','return true');
                    }else{
                        $('#error_code').show();
                    }
                })
                
               
            }
        })
    }
    $('#code').focus(function(){
        $('#error_code').hide();
    })




})
</script>