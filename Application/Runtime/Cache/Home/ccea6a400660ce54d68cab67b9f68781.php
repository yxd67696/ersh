<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
<style>
	.login_mod_tab{height:70px; border-bottom: 1px solid #ccc;margin-left:-38px;}
	.mod{
		width: 50%;
	}
	.lo_mod{
	 	font-size:14px; 
	    line-height: 42px;
	    text-align: center;
	    font-size: 14px;
	    font-weight: 700;   
	    height: 41px;
	    display: block;
    	width: 119px;
    	margin: 28px auto 0;
	}
	.tab_on{
		color: #fe617a;
	    border-bottom: 2px solid #ff4066;
	}
</style>
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
        	<div class="login_mod_tab">
                <div class="fl mod">
                    <a class="lo_mod mod1 tab_on" lo-mod="normal" href="javascript:;" title="普通登入">普通登录</a>
                </div>
                <div class="fl mod nopassword">
                    <a class="lo_mod mod2" lo-mod="ebmod" href="javascript:;" title="手机免密码登入">手机无密码登录</a>
                </div>
            </div>
            <div id="signform" class="formbox mod_box rg_mod_box" data-isshow="0">
                <div class="ui-sign-item ui-name-item clearfix mb">
                    <input type="text" maxlength="11" data-type="mobile" class="ui-input pwd_text js_phoneInput" name="tele"  placeHolder="用户名/邮箱/手机号" style="border-color:#CFCFCF;">
                </div>
                <div class="ui-sign-item ui-name-item clearfix mb">
                    <input type="text" maxlength="11" data-type="mobile" class="ui-input pwd_text js_phoneInput" name="pass"  placeHolder="密码" style="border-color:#CFCFCF;">
                </div>
                <div id="_content"></div>
                <input type="hidden" class="imgchecklevel">
                <div id="appendchk" class="rg_submit mb">
                    <input type="submit" value="立即登录" class="sub" id="checkCodeBtn">
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
            <div id="signsdk" class="formbox mod_box rg_mod_box" data-isshow="0" style="display:none">
                <div class="ui-sign-item ui-name-item clearfix mb">
                <p class="error_tip" id="error_phone1" style="display:none;">请输入手机号码</p>
                <p class="error_tip" id="error_phone2" style="display:none;">请填写正确的手机号</p>
                    <input id="userphone" type="text" maxlength="11" data-type="mobile" class="ui-input pwd_text js_phoneInput" name="tele"  placeHolder="手机号码" style="border-color:#CFCFCF;">
                </div>
                <div class="ui-sign-item ui-sign-common-item checkword clearfix mb">
                    <a href="javascript:void(0);" class="getCode js_getphonecode" onclick="settime(this);">点击获取验证码</a>
                    <input type="text" maxlength="32" data-type='code' class="ui-input short_text js_checkcode" name="checkCode"  placeHolder="验证码" style="border-color:#CFCFCF;height:40px;">
                </div>
                <div id="_content"></div>
                <input type="hidden" class="imgchecklevel">
                <div id="appendchk" class="rg_submit mb">
                    <input type="submit" value="立即注册" class="sub" id="checkCodeBtn">
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
</script>  
<script>
$('.mod1').click(function(){
	$(this).addClass('tab_on');
	$('.mod2').removeClass('tab_on');
	$('#signsdk').hide();
	$('#signform').show();
})
$('.mod2').click(function(){
	$(this).addClass('tab_on');
	$('.mod1').removeClass('tab_on');
	$('#signsdk').show();
	$('#signform').hide();
})
</script>