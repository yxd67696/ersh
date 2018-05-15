<?php if (!defined('THINK_PATH')) exit();?><!--header start -->
<!DOCTYPE html>
<html><head>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?0dcf521975fe845b115cc223da5ad9e6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="//ersh/Public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/ersh/Public/css/cheer100.css">
    <link rel="stylesheet" type="text/css" href="/ersh/Public/css/base.css">
    <link rel="stylesheet" type="text/css" href="/ersh/Public/css/sfq.css">
    <link rel="stylesheet" type="text/css" href="/ersh/Public/css/lrtk.css">
	<link rel="stylesheet" type="text/css" href="/ersh/Public/css/city-picker.css">
	<link href="/ersh/Public/css/main.css" type="text/css" rel="stylesheet">
    <script src="/ersh/Public/js/jquery33.js" type="text/javascript"></script>
    <script src="/ersh/Public/js/bbase.js" type="text/javascript"></script>
	<script type="text/javascript" src="/ersh/Public/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/ersh/Public/js/global.js"></script>
    <script type="text/javascript" src="/ersh/Public/js/jquery_002.js"></script>

     <script language="javascript" src="/ersh/Public/js/procity.js"></script>
	<script>
	$(function(){
		$(window).scroll(function(){
			if($(window).scrollTop()>100){  //距顶部多少像素时，出现返回顶部按钮
				$("#side-bar .gotop").fadeIn();	
			}
			else{
				$("#side-bar .gotop").hide();
			}
		});
		$("#side-bar .gotop").click(function(){
			$('html,body').animate({'scrollTop':0},500); //返回顶部动画 数值越小时间越短
		});
	});
    </script>

<script src="/ersh/Public/js/iplookup.js" type="text/ecmascript"></script>
<script type="text/javascript">
function getIpPlace() {
var province = remote_ip_info["province"];
var city = remote_ip_info["city"];

if(province=="北京" || province=="天津" || province=="上海" || province=="重庆"){
document.write(province);
}else{
document.write(city);
}
 
} 

</script>
<title>校园二手交易市场</title>
<meta name="keywords" content="校园二手交易市场">
<meta name="description" content="校园二手交易市场！">
<meta name="mobile-agent" content="format=html5; url=http://m.shujia365.com"> </head>
<body id="bbg" onload="initProvince()">

 <div class="page-top">
    <div class="w1190">
        <table class="topMenu">
            <tbody>
       
            <tr>
            <td id="JS_head_login" class="login"><span>您好，欢迎来校园二手交易市场！</span></td>
                <td><em class="line"></em></td>
                <td><a href="<?php echo U('Index/login');?>">登录</a></td>
                <td><em class="line"></em></td>
                <td><a href="<?php echo U('Index/register');?>">注册</a></td>
                <td><em class="line"></em></td>
                <td><a href="/zhaoshangjiameng/" target="_blank" title="招商加盟" rel="nofollow">招商加盟</a></td>
                <td><em class="line"></em></td>
                <td style="width:200px;position:relative;z-index:100;">
                    服务热线：<span class="hotLine">17730316334</span></td>
              
            </tr></tbody>

</table>
    <ul class="fleft">
       <li id="citylist">
       <em></em>
       <span class="citys"><?php echo ($mycity["name"]); if(empty($mycity['name']) == true): ?><script type='text/javascript'> getIpPlace();</script><?php endif; ?></span>
       <a class="qhcs" href="javascript:void(0)" >[切换城市]</a>
       </li>
    </ul>
    <form action="">
    <div class="city-select">
        <!-- <div class="city-picker-select"></div> -->
            <select name="province" id="pro">
                <option>--请选择省份--</option>
                <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" id="#pro"><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>  
            </select>
            <select name="city" id="city">
                <option>--请选择市区--</option>
             <!--    <?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>  -->
            </select>
        <input type="button" id="city-btn" value="确定">
    </div>
    </form>
    </div>
</div>
<script>
//ajax城市地址联动
$('#pro').change(function(){
    $.ajax({
        url:"<?php echo U('Index/ajaxpro');?>",
        data:'id='+$('#pro').val(),
        dataType:'json',
        type:'post',
        success:function(obj){
            console.log(obj);
            $('#city').html(obj);
        }
    })
})

//ajax切换城市
$('#city-btn').click(function(){
    $.ajax({
        url:"<?php echo U('Index/ajaxcity');?>",
        data:'id='+$('#city').val(),
        dataType:'json',
        type:'post',
        success:function(obj){
            console.log(obj);
            $('.citys').html(obj);
        }
    })
})
//ajax清空城市
$(window).unload(function(){
     $.ajax({
        url:"<?php echo U('Index/ajaxdelcity');?>",
     
    })
})
</script>
<div class="clear"></div>
<div class="page-header">
    <div class="w1190 clearfix">
        <div class="logo left"><a href="/" title="舒家365"><img id="JS_Header_Logo_img" src="/ersh/Public/picture/logo.png" alt="舒家365"  height="72" width="350"></a></div>
       
        <form class="left search_top ifl" action="/e/sch/index.php" method="get" name="schform" id="schform">
           <div class="search_inner">
                <button id="searchButton" type="submit" class="submit">搜 索</button >
                <input name="keyboard" id="searchWords" value="格力中央空调" onBlur="if (value=='') {value='格力中央空调'}" onFocus="if(value=='格力中央空调') {value=''}" class="acInput" type="text">
            </div>
            <p>热门搜索：<a href="/zhongyangkongdiao/33-1-0-0-0.html" target="_blank" title="大金中央空调">大金中央空调</a>
                <a href="/zhongyangkongdiao/33-5-0-0-0.html" target="_blank" title="格力中央空调">格力中央空调</a>
                <a href="/dinuan/" target="_blank" title="地暖">地暖</a>
                <a href="/zhongyangxinfeng/" target="_blank" title="新风系统">新风系统</a>
                <a href="/diyuanrebeng/" target="_blank" title="地源热泵">地源热泵</a>
            </p>
        </form>
       

        <div class="btMap Right clearfix">
           
			 <div class="cart Right mymll">
				<img src="/ersh/Public/picture/bear.gif" alt="线上报价">
            </div>
			 <div class="cart2 Right mymll">
                <a href="/e/DoInfo/AddInfo.php?classid=2&mid=8&ecmscheck=1" target="_blank" title="舒家365欢迎您" rel="nofollow"><img src="/ersh/Public/picture/tuangou.jpg" alt="舒家365欢迎您"></a>
            </div>
        </div>

    </div>
</div>

<div class="daohang">
<div class="navigation w1190 cfx">
    <div class="nav_cate">
        <h3>舒适系统分类</h3>
        <div class="sub_cate ">
              <ul class="lv1_ul">
                    <?php if(is_array($lie1)): $i = 0; $__LIST__ = $lie1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="lv1_li menu<?php echo ($v["id"]); ?>" id="<?php echo ($v["id"]); ?>">
                        <a class="lv1_a" href="" title="中央空调" target="_blank"><?php echo ($v["name"]); ?></a>
                        <div class="menu_sub">
                            <div class="inner cfx">
                                <div class="menu_sub_list">
                                    <dl class="tjpt">
                                        <dt><?php echo ($v["names"]["0"]); ?></dt>
                                        <dd class="lie1">
                                        </dd>
                                    </dl>

                                    <dl class="tjpt">
                                        <dt><?php echo ($v["names"]["1"]); ?></dt>
                                        <dd class="lie2">
                                        </dd>
                                    </dl>
                                      <dl class="tjpt">
                                        <dt><?php echo ($v["names"]["2"]); ?></dt>
                                        <dd class="lie3">
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <script>
    //首页产品列表ajax展示
    $('.lv1_li').mouseenter(function(){
        var lid = $(this).attr('id');
        // alert(lid);
        $.ajax({
            url:"<?php echo U('Index/ajaxlie');?>",
            data:'id='+$(this).attr('id'),
            dataType:'json',
            type:'post',
            success:function(obj){
                // console.log(obj);
                $('.lie1').html(obj[0]);
                $('.lie2').html(obj[1]);
                $('.lie3').html(obj[2]);

            }
        });
    });
    //
    // alert($('.lv1_a').html());
    $(function(){
        var lv = $('.lv1_a').html();
        var lv1 = lv.split('/');
        // alert(lv1[0]);

    })
</script>
	<div class="nav_menu">
          <ul>
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li class="prd"><b></b><a href="/redianzixun/" target="_blank">舒适攻略</a>
               <dld class="pa subd dn" style="display: none;">
                    <dd><a href="/article/" style="background:none;" target="_blank">系统知识</a></dd>
                    <dd><a href="/zhuanlan/" style="background:none;" target="_blank">文章专栏</a></dd>
                </dld>
            </li>
            <li class="pr"><b></b><a href="/gongchenganli/" target="_blank">工程案例</a>
                <dl style="display: none;" class="pa sub dn">
                    <dd><a href="/gongchenganli/kongdiaoanli/" style="background:none;" target="_blank">中央空调</a></dd>
                    <dd><a href="/gongchenganli/dinuananli/" style="background:none;" target="_blank">地暖案例</a></dd>
                    <dd><a href="/gongchenganli/diyuanrebenganli/" style="background:none;" target="_blank">地源热泵</a></dd>
                </dl>
            </li>
            
            <li><a href="/e/DoInfo/AddInfo.php?classid=2&mid=8&ecmscheck=1" target="_blank">免费设计</a><em class="hoot"></em></li>
            <li><a href="http://www.shujia365.com/zyktpcxg/" target="_blank">干货精华</a><em class="neew"></em></li>
           <li><a href="/quanguo/" target="_blank"><script type='text/javascript'> getIpPlace();</script>服务中心</a></li>
        </ul>
		
        <script type="text/javascript">
            $(function(){
               
                $('.nav_menu .pr').hover(
                        function(){
                            $('dl.sub').show();
                        },
                        function(){
                            $('dl.sub').hide();
                        }
                )
                 $('.nav_menu .prd').hover(
                        function(){
                            $('dld.subd').show();
                        },
                        function(){
                            $('dld.subd').hide();
                        }
                )

            })
        </script>
    </div> 
     
</div>
</div>
<!--header end -->

<div class="banner cfx">
    <div class="banner_img">
          <ul>
		<li style="position: absolute; z-index: 1; opacity: 0;" class="pa">
		  <a href="/zhongyangkongdiao/" target="_blank" style="background: url(/ersh/Public/images/ban1.jpg) center top no-repeat; display:block;" title="中央空调"></a>
		</li>	
        <li style="position: absolute; z-index: 1; opacity: 0;" class="pa">
		  <a href="/shuichuli/" target="_blank" style="background:url(/ersh/Public/images/ban2.jpg) center top no-repeat; display:block;" title="中央净水"></a>
		</li>
		<li style="position: absolute; z-index: 1; opacity: 0;" class="pa">
		  <a href="/dinuan/27-3-0-0-0.html" target="_blank" style="background: url(/ersh/Public/images/ban3.jpg) center top no-repeat; display:block;" title="暖气片"></a>
		</li>
		<li style="position: absolute; z-index: 1; opacity: 0;" class="pa">
		  <a href="/zhongyangxinfeng/" target="_blank" style="background: url(/ersh/Public/images/ban4.jpg) center top no-repeat; display:block;" title="中央新风系统"></a>
		</li>
	    <li style="position: absolute; z-index: 1; opacity: 0;" class="pa">
		  <a href="/dinuan/27-1-0-0-0.html" target="_blank" style="background: url(/ersh/Public/images/ban5.jpg) center top no-repeat; display:block;" title="地暖"></a>
		</li>
        <li style="position: absolute; z-index: 9; opacity: 1;" class="pa">
		  <a href="/zhongyangkongdiao/33-1-0-0-0.html" target="_blank" style="background: url(/ersh/Public/images/ban6.jpg) center top no-repeat; display:block;" title="家用中央空调解析"></a>
		</li>
</ul>
    </div>
    <div class="banner_btn">
        <ul><li class=""></li><li class=""></li><li class=""></li><li class=""></li><li class=""></li><li class="curr"></li></ul>
    </div>
	
	
	<div class="b_baojia">
         
		<ul id="apply">
    <form name='feedback' method='post'  action='/e/enews/index.php' >
    <input name="bid" type="hidden" value="1">
    <input type="hidden" name="ecmsfrom" value="/">
    <input name='enews' type='hidden' value='AddFeedback'>
    <li class="desgin_title">方案设计及报价</li>
    <li class="desgin_input">
	   
        <input name="title" type="text" onFocus="if(value=='您的称呼') {value=''}" onBlur="if (value=='') {value='您的称呼'}" value="您的称呼" /></li>
    <li class="desgin_input">
        <input name="mycall" type="text" onFocus="if(value=='您的电话') {value=''}" onBlur="if (value=='') {value='您的电话'}" value="您的电话" /></li>
    <li class="desgin_select">
         <select name="province" id="selProvince" onChange = "getCity(this.options[this.selectedIndex].value)">  </select>  
         <select name="city" id="selCity">  
            <option>省市</option>  
        </select> 
	 </li>	
    <li class="desgin_submit">
        <input type='submit' name='submit' value="免费获取安装方案及报价"  />
	
		<p id="btn-tips"></p>
    </li>
    <li class="desgin_num">已有<strong>3467</strong>人申请成功</li>
    <li class="design_expr"><a href="/quanguo/" title="找我家附近的体验店" target="_blank"><em></em>找我家附近的体验店</a></li>
	 </form>
</ul>


	</div>
	
</div>

<div class="quick-links">
    <ul class="w_new lh">
        <li>
            <a href="/zhongyangkongdiao/" target="_blank" title="线上选购">
                <i class="index-icons design-icon"></i>
                <dl>
                    <dt>线上选购</dt>
                    <dd>多品牌选购<br/>
                        正品保证
                    </dd>
                </dl>
            </a>
        </li>
        <li>
            <a href="/e/DoInfo/AddInfo.php?classid=2&mid=8&ecmscheck=1" target="_blank" title="方案设计" rel="nofollow">
                <i class="index-icons baojia-icon"></i>
                <dl>
                     <dt>方案设计</dt>
                    <dd>免费获取设计方案<br/>
                        及预算报价
                    </dd>
                </dl>
            </a>
        </li>
        <li>
            <a href="/quanguo/" target="_blank" title="线下确认" rel="nofollow">
                <i class="index-icons anzhuang-icon"></i>
                <dl>
                     <dt>线下确认</dt>
                    <dd>全国服务站点<br/>
                        门店确定方案
                    </dd>
                </dl>
            </a>
        </li>
        <li class="last-list">
            <a href="/gongchenganli/" target="_blank" title="工程案例">
                <i class="index-icons ybf-icon"></i>
                <dl>
                  <dt>工程案例</dt>
                    <dd>看真实安装案例，<br/>
                        规范严谨给您保障
                    </dd>
                </dl>
            </a>
        </li>
    </ul>
</div>

<div class="w">
   
    <div class="m1 project ft">
        <div class="mt">
            <h2><p class="lwx_h3_tag" style="background:#ff4163"></p>工程案例</h2>
            <div class="extra"><a href="/gongchenganli/" title="更多案例" target="_blank">更多案例&gt;&gt;</a></div>
        </div>
        <div class="mc">
            <div class="pro-fl">
                <ul class="lh" style="width: 2808px; margin-left: 0px;">
				<li class="ld"><a href="/gongchenganli/dinuananli/44.html" title="水地暖传递浓浓温情" target="_blank"><img src="/ersh/Public/picture/f1.jpg" width="214" height="240" alt="水地暖传递浓浓温情"></a><div class="block"><a href="/gongchenganli/dinuananli/44.html" title="水地暖传递浓浓温情" target="_blank"><span class="pro_tit">水地暖传递浓浓温情</span>北京丰台区·山语城·地暖</a></div></li>
				<li class="ld"><a href="/gongchenganli/kongdiaoanli/6.html" title="千年建筑背后的舒适家居系统" target="_blank"><img src="/ersh/Public/picture/f2.jpg" width="214" height="240" alt="千年建筑背后的舒适家居系统"></a><div class="block"><a href="/gongchenganli/kongdiaoanli/6.html" title="千年建筑背后的舒适家居系统" target="_blank"><span class="pro_tit">千年建筑背后的舒适家居系统</span>北京海淀区·龙泉寺·中央空调</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/xinfenganli/45.html" title="舒适家居生活下的养生之道" target="_blank"><img src="/ersh/Public/picture/f3.jpg" width="214" height="240" alt="舒适家居生活下的养生之道"></a><div class="block"><a href="/gongchenganli/xinfenganli/45.html" title="舒适家居生活下的养生之道" target="_blank"><span class="pro_tit">舒适家居生活下的养生之道</span>北京朝阳区·常春藤·新风系统</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/diyuanrebenganli/48.html" title="别墅里的地源热泵" target="_blank"><img src="/ersh/Public/picture/f4.jpg" width="214" height="240" alt="别墅里的地源热泵"></a><div class="block"><a href="/gongchenganli/diyuanrebenganli/48.html" title="别墅里的地源热泵" target="_blank"><span class="pro_tit">别墅里的地源热泵</span>上海·三湘海尚·地源热泵</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/kongdiaoanli/49.html" title="舒家365网让别墅生活表里如一" target="_blank"><img src="/ersh/Public/picture/f5.jpg" width="214" height="240" alt="舒家365网让别墅生活表里如一"></a><div class="block"><a href="/gongchenganli/kongdiaoanli/49.html" title="舒家365网让别墅生活表里如一" target="_blank"><span class="pro_tit">舒家365让别墅生活表里如一</span>上海·逸墅新苑别墅·别墅中央空调</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/dinuananli/50.html" title="钟情舒适家，怎么可能少地暖" target="_blank"><img src="/ersh/Public/picture/f6.jpg" width="214" height="240" alt="钟情舒适家，怎么可能少地暖"></a><div class="block"><a href="/gongchenganli/dinuananli/50.html" title="钟情舒适家，怎么可能少地暖" target="_blank"><span class="pro_tit">钟情舒适家，怎么可能少地暖</span>上海·万科假日风景·家庭采暖</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/dinuananli/51.html" title="复式楼里的舒适宁静" target="_blank"><img src="/ersh/Public/picture/f7.jpg" width="214" height="240" alt="复式楼里的舒适宁静"></a><div class="block"><a href="/gongchenganli/dinuananli/51.html" title="复式楼里的舒适宁静" target="_blank"><span class="pro_tit">复式楼里的舒适宁静</span>苏州·郁金香花苑·明装暖气片</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/dinuananli/52.html" title="钟情舒适家，怎么可能少地暖" target="_blank"><img src="/ersh/Public/picture/f8.jpg" width="214" height="240" alt="钟情舒适家，怎么可能少地暖"></a><div class="block"><a href="/gongchenganli/dinuananli/52.html" title="钟情舒适家，怎么可能少地暖" target="_blank"><span class="pro_tit">钟情舒适家，怎么可能少地暖</span>杭州·康城一品·地暖</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/xinfenganli/53.html" title="享受生活从选择舒家365开始" target="_blank"><img src="/ersh/Public/picture/f9.jpg" width="214" height="240" alt="享受生活从选择舒家365开始"></a><div class="block"><a href="/gongchenganli/xinfenganli/53.html" title="享受生活从选择舒家365开始" target="_blank"><span class="pro_tit">享受生活从选择舒家365开始</span>重庆·奥园国际城·中央新风/地暖</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/kongdiaoanli/54.html" title="IT精英的样板舒适家" target="_blank"><img src="/ersh/Public/picture/f10.jpg" width="214" height="240" alt="IT精英的样板舒适家"></a><div class="block"><a href="/gongchenganli/kongdiaoanli/54.html" title="IT精英的样板舒适家" target="_blank"><span class="pro_tit">IT精英的样板舒适家</span>重庆·万科颐府别墅·中央净水/中央空调</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/kongdiaoanli/55.html" title="我家装修也走上了混搭风" target="_blank"><img src="/ersh/Public/picture/f11.jpg" width="214" height="240" alt="我家装修也走上了混搭风"></a><div class="block"><a href="/gongchenganli/kongdiaoanli/55.html" title="我家装修也走上了混搭风" target="_blank"><span class="pro_tit">我家装修也走上了混搭风</span>武汉·复地东湖国际·中央空调</a></div>
				</li>
				<li class="ld"><a href="/gongchenganli/xinfenganli/46.html" title="中央空调+新风系统 混搭才有型" target="_blank"><img src="/ersh/Public/picture/f12.jpg" width="214" height="240" alt="中央空调+新风系统 混搭才有型"></a><div class="block"><a href="/gongchenganli/xinfenganli/46.html" title="中央空调+新风系统 混搭才有型" target="_blank"><span class="pro_tit">中央空调 混搭才有型</span>北京·天鹅堡别墅·中央空调</a></div>
				</li>
				</ul>
                <a href="javascript:void(0)" class="prev"></a>
                <a href="javascript:void(0)" class="next"></a>
            </div>
           <div class="pro-fr"><div class="pro-fr-tit"><h3>最近服务过的小区</h3><div class="extra">【全国】</div></div><div id="house-install">
		   <ul>
		   <li><span class="title_red"><span class="c1">合生东郊</span><span class="c2">别墅</span><span class="c2">地源热泵</span></span></li>
		   <li><span class="c1">家化滨江苑</span><span class="c2">复式楼</span><span class="c2">空调地暖</span></li>
		   <li><span class="title_red"><span class="c1">静安慕舍</span><span class="c2">三室两厅</span><span class="c2">中央空调</span></span></li>
		   <li><span class="c1">八达岭孔雀城</span><span class="c2">别墅</span><span class="c2">中央新风</span></li>
		   <li><span class="title_red"><span class="c1">龙湖好望山</span><span class="c2">别墅</span><span class="c2">中央净水</span></span></li>
		   <li><span class="c1">世茂滨江花园</span><span class="c2">三室两厅</span><span class="c2">空调新风</span></li>
		   </ul>
		   
		   <ul>
		   <li><span class="title_red"><span class="c1">合生东郊</span><span class="c2">别墅</span><span class="c2">地源热泵</span></span>
		   </li><li><span class="c1">家化滨江苑</span><span class="c2">复式楼</span><span class="c2">空调地暖</span></li>
		   <li><span class="title_red"><span class="c1">静安慕舍</span><span class="c2">三室两厅</span><span class="c2">中央空调</span></span></li>
		   <li><span class="c1">八达岭孔雀城</span><span class="c2">别墅</span><span class="c2">中央新风</span></li>
		   <li><span class="title_red"><span class="c1">龙湖好望山</span><span class="c2">别墅</span><span class="c2">中央净水</span></span></li>
		   <li><span class="c1">世茂滨江花园</span><span class="c2">三室两厅</span><span class="c2">空调新风</span></li>
		   <li><span class="title_red"><span class="c1">太利花园</span><span class="c2">别墅</span><span class="c2">地暖</span></span></li>
		   <li><span class="c1">康城瑞河兰乔</span><span class="c2">复式楼</span><span class="c2">中央新风</span></li>
		   
		   </ul></div></div>
<script type="text/javascript">startmarquee(30,20,3000,"house-install");</script>
        </div>
    </div>
<!--中央空调开始-->
     <div class="m1 m2 m-bp">
        <div class="mt">
            <h2><p class="lwx_h3_tag" style="background:#5faae4"></p>中央空调</h2>
            <div class="extra">
                <ul>
                    <li><a href="/zhongyangkongdiao/33-1-0-0-0.html" title="大金" target="_blank">大金</a></li>
                    <li><a href="/zhongyangkongdiao/33-2-0-0-0.html" title="东芝" target="_blank">东芝</a></li>
                    <li><a href="/zhongyangkongdiao/33-3-0-0-0.html" title="三菱" target="_blank">三菱</a></li>
                    <li><a href="/zhongyangkongdiao/33-4-0-0-0.html" title="日立" target="_blank">日立</a></li>
                    <li><a href="/zhongyangkongdiao/33-5-0-0-0.html" title="格力" target="_blank">格力</a></li>
                    <li><a href="/zhongyangkongdiao/33-6-0-0-0.html" title="美的" target="_blank">美的</a></li>
                    <li class="more"><a href="/zhongyangkongdiao/" title="更多" target="_blank">更多&gt;&gt;</a></li>
                </ul>
            </div>
        </div>
        <div class="mc">
            
            <div class="fl">
			  <div class="sm">
                <div class="item"><ul id="JS_pro_img1" style="width: 1644px; margin-left: 0;">
				  <li>
				     <a href="/zhongyangkongdiao/3.html" title="大金中央空调适用116-144m2-LMX50系列家用中央空调（三房两厅）" target="_blank">
					    <img width="472" height="304" alt="大金中央空调适用116-144m2-LMX50系列家用中央空调（三房两厅）" src="/ersh/Public/picture/zykt1.jpg" class="err-product">
					 </a>
				  </li>
				  <li>
				     <a href="/zhongyangkongdiao/4.html" title="东芝中央空调外机进口内机国产一拖五家用中央空调（三房两厅）" target="_blank">
					    <img width="472" height="304" alt="东芝中央空调外机进口内机国产一拖五家用中央空调（三房两厅）" src="/ersh/Public/picture/zykt2.jpg" class="err-product">
					 </a>
				  </li>
				 
				 </ul>
				 <div class="slide_handdler">
				   <div id="JS_pro_nav1">
				     <a class="current" href="javascript:;"></a>
					 <a href="javascript:;" class=""></a>
					
					</div>
				</div>
			</div>
                <div class="zt"><a href="/zhongyangkongdiao/10.html" title="大金中央空调PMXS402套餐系列家用中央空调（两房两厅）" target="_blank"><img width="230" height="300" alt="大金中央空调PMXS402套餐系列家用中央空调（两房两厅）" src="/ersh/Public/picture/zykt3.jpg" class="err-product"></a></div>
				<div class="zt bl"><a href="/zhongyangkongdiao/11.html" title="格力中央空调GMV STAR系列家用中央空调（三房两厅）" target="_blank"><img width="230" height="300" alt="格力中央空调GMV STAR系列家用中央空调（三房两厅）" src="/ersh/Public/picture/zykt4.jpg" class="err-product"></a></div>
				</div>
                <div class="p-list lh">

                    <div class="xmsg">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="三菱电机中央空调MXZ系列55㎡家用中央空调（二房一厅套餐）" href="/zhongyangkongdiao/14.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/zykt5.jpg" alt="三菱电机中央空调MXZ系列55㎡家用中央空调（二房一厅套餐）">
                                <p style="word-wrap: break-word;">三菱电机中央空调MXZ系列55㎡家用中央空调（二房一厅套餐）</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_new"></span>
                                  <span class="lwx_cheap_price_">￥34000</span>
                                </div>
                            </dd>
                          </dl>
					</div>
					  <div class="xmsg">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="美的中央空调尊享家系列95㎡家用中央空调（二房二厅套餐）" href="/zhongyangkongdiao/12.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/zykt6.jpg" alt="美的中央空调尊享家系列95㎡家用中央空调（二房二厅套餐）">
                                <p style="word-wrap: break-word;">美的中央空调尊享家系列95㎡家用中央空调（二房二厅套餐）</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_great"></span>
                                  <span class="lwx_cheap_price_">￥31000</span>
                                </div>
                            </dd>
                          </dl>
					</div>
					  <div class="zxmsg">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="日立中央空调EX-PRO系列97㎡家用中央空调（二房二厅套餐）" href="/zhongyangkongdiao/13.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/zykt7.jpg" alt="日立中央空调EX-PRO系列97㎡家用中央空调（二房二厅套餐）">
                                <p style="word-wrap: break-word;">日立中央空调EX-PRO系列97㎡家用中央空调（二房二厅套餐）</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_new"></span>
                                  <span class="lwx_cheap_price_">￥39800</span>
                                </div>
                            </dd>
                          </dl>
					</div>
					  <div class="xmsg brn">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="大金中央空调适用116-144m2-LMX50系列家用中央空调（三房两厅）" href="/zhongyangkongdiao/3.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/zykt8.jpg" alt="大金中央空调适用116-144m2-LMX50系列家用中央空调（三房两厅）">
                                <p style="word-wrap: break-word;">大金中央空调适用116-144m2-LMX50系列家用中央空调（三房两厅）</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_hot"></span>
                                  <span class="lwx_cheap_price_">￥44000</span>
                                </div>
                            </dd>
                          </dl>
					</div>
                </div>
            </div>
			<div class="fr">
                <a title="大金中央空调适用120-150m2-LMXS51J系列家用中央空调（三房两厅）" href="/zhongyangkongdiao/15.html" target="_blank">
                             <img src="/ersh/Public/picture/zykt9.jpg" alt="大金中央空调适用120-150m2-LMXS51J系列家用中央空调（三房两厅）">
                </a>
                <p class="lwx_line_spr"></p>
				<a title="日本东芝中央空调外机进口内机国产一拖五家用中央空调120-150m2（三房两厅）)" href="/zhongyangkongdiao/32.html" target="_blank">
                             <img src="/ersh/Public/picture/zykt10.jpg" alt="日本东芝中央空调外机进口内机国产一拖五家用中央空调120-150m2（三房两厅）">
                </a>
            </div>
        </div>
    </div>
<!--中央空调结束-->	
<!--家庭采暖开始-->
     <div class="m1 m2 m-bp">
        <div class="mt">
            <h2><p class="lwx_h3_tag" style="background:#ffa042"></p>家庭采暖</h2>
            <div class="extra">
                <ul>
                    <li><a href="/dinuan/27-0-1-0-0.html" title="威能" target="_blank">威能</a></li>
                    <li><a href="/dinuan/27-0-4-0-0.html" title="博世" target="_blank">博世</a></li>
                    <li><a href="/dinuan/27-0-2-0-0.html" title="雅克菲" target="_blank">雅克菲</a></li>
                    <li><a href="/dinuan/27-0-3-0-0.html" title="沃乐夫" target="_blank">沃乐夫</a></li>
                    <li><a href="/dinuan/27-3-0-0-0.html" title="暖气片" target="_blank">暖气片</a></li>
                    <li class="more"><a href="/dinuan/" title="更多" target="_blank">更多&gt;&gt;</a></li>                
				</ul>
            </div>
        </div>
        <div class="mc">
            
            <div class="fl">
			  <div class="sm">
                <div class="item"><ul id="JS_pro_img2" style="width: 1644px; margin-left: 0;">
				  <li>
				     <a href="/dinuan/4.html" title="德国博世欧洲精英ZWA24系列90-115㎡水地暖(适用于三室两厅)" target="_blank">
					    <img width="472" height="304" alt="德国博世欧洲精英ZWA24系列90-115㎡水地暖(适用于三室两厅)" src="/ersh/Public/picture/zyxf1.jpg" class="err-product">
					 </a>
				  </li>
				  <li>
				     <a href="/dinuan/3.html" title="德国威能VUW CN242/3-3-H系列90-115㎡水地暖(三室两厅)" target="_blank">
					    <img width="472" height="304" alt="德国威能VUW CN242/3-3-H系列90-115㎡水地暖(三室两厅)" src="/ersh/Public/picture/zyxf2.jpg" class="err-product">
					 </a>
				  </li>
				  
				 </ul>
				 <div class="slide_handdler">
				   <div id="JS_pro_nav2">
				     <a class="current" href="javascript:;"></a>
					 <a href="javascript:;" class=""></a>
					
					</div>
				</div>
			</div>
                <div class="zt"><a href="/dinuan/31.html" title="德国进口锅炉wolf沃乐夫24KW采暖热水地暖两用炉CGG-1K-24" target="_blank"><img width="230" height="300" alt="德国进口锅炉wolf沃乐夫24KW采暖热水地暖两用炉CGG-1K-24" src="/ersh/Public/picture/dnwlf.jpg" class="err-product"></a></div>
				<div class="zt bl"><a href="/dinuan/28.html" title="意大利雅克菲24KW地暖采暖两用锅炉AIRTUB 24M" target="_blank"><img width="230" height="300" alt="意大利雅克菲24KW地暖采暖两用锅炉AIRTUB 24M" src="/ersh/Public/picture/dnykf.jpg" class="err-product"></a></div>
				</div>
                <div class="p-list lh">
                    <div class="xmsg">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="德国威能VUW CN242/3-3-H系列90-115㎡水地暖(三室两厅)" href="/dinuan/22.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/wn.jpg" alt="德国威能VUW CN242/3-3-H系列90-115㎡水地暖(三室两厅)">
                                <p style="word-wrap: break-word;">德国威能VUW CN242/3-3-H系列90-115㎡水地暖(三室两厅)</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_new"></span>
                                  <span class="lwx_cheap_price_">￥24800</span>
                                </div>
                            </dd>
                          </dl>
					</div>
					  <div class="xmsg">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="博世欧洲精英ZWA24系列130-155㎡水地暖(适用于五室两厅)" href="/dinuan/11.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/bs1.jpg" alt="博世欧洲精英ZWA24系列130-155㎡水地暖(适用于五室两厅)">
                                <p style="word-wrap: break-word;">博世欧洲精英ZWA24系列130-155㎡水地暖(适用于五室两厅)</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_great"></span>
                                  <span class="lwx_cheap_price_">￥22000</span>
                                </div>
                            </dd>
                          </dl>
					</div>

					  <div class="zxmsg">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="雅克菲两用壁挂炉+雅克菲暖气片85㎡暗装采暖（适用于两室两厅一卫" href="/dinuan/5.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/ykfnq.jpg" alt="雅克菲两用壁挂炉+雅克菲暖气片85㎡暗装采暖（适用于两室两厅一卫）">
                                <p style="word-wrap: break-word;">雅克菲两用壁挂炉+雅克菲暖气片85㎡暗装采暖（适用于两室两厅一卫）</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_new"></span>
                                  <span class="lwx_cheap_price_">￥18800</span>
                                </div>
                            </dd>
                          </dl>
					</div>
					  <div class="xmsg brn">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="菲斯曼WH1C-20kw(K)55-80㎡水地暖(适用于两室一厅)" href="/dinuan/19.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/fsm1.jpg" alt="菲斯曼WH1C-20kw(K)55-80㎡水地暖(适用于两室一厅)">
                                <p style="word-wrap: break-word;">菲斯曼WH1C-20kw(K)55-80㎡水地暖(适用于两室一厅)</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_hot"></span>
                                  <span class="lwx_cheap_price_">￥16000</span>
                                </div>
                            </dd>
                          </dl>
					</div>
                </div>
            </div>
			<div class="fr">
                <a title="博世BOSCH壁挂炉地暖采暖两用锅炉新之星24KW-升级版" href="/dinuan/26.html" target="_blank">
                             <img src="/ersh/Public/picture/dnbs.jpg" alt="博世BOSCH壁挂炉地暖采暖两用锅炉新之星24KW-升级版">
                </a>
                <p class="lwx_line_spr"></p>
				<a title="Vaillant/德国威能壁挂炉24kW进口地暖两用采暖锅炉" href="/dinuan/27.html" target="_blank">
                             <img src="/ersh/Public/picture/dnwn.jpg" alt="Vaillant/德国威能壁挂炉24kW进口地暖两用采暖锅炉">
                </a>
            </div>
        </div>
    </div>
<!--家庭采暖结束-->	
<!--中央新风开始-->
     <div class="m1 m2 m-bp">
        <div class="mt">
            <h2><p class="lwx_h3_tag" style="background:#73c468"></p>中央新风</h2>
            <div class="extra">
                <ul>
                    <li><a href="/zhongyangxinfeng/28-4-0-0-0.html" title="曼瑞德" target="_blank">曼瑞德</a></li>
                    <li><a href="/zhongyangxinfeng/28-2-0-0-0.html" title="博乐" target="_blank">博乐</a></li>
                    <li><a href="/zhongyangxinfeng/28-5-0-0-0.html" title="爱优特" target="_blank">爱优特</a></li>
                    <li><a href="/zhongyangxinfeng/28-6-0-0-0.html" title="远大" target="_blank">远大</a></li>
                    <li><a href="/zhongyangxinfeng/28-3-0-0-0.html" title="松下" target="_blank">松下</a></li>
                    <li class="more"><a href="/zhongyangxinfeng/" title="更多" target="_blank">更多&gt;&gt;</a></li>
                </ul>
            </div>
        </div>
        <div class="mc">
            
            <div class="fl">
			  <div class="sm">
                <div class="item"><ul id="JS_pro_img3" style="width: 1644px; margin-left: 0;">
				  <li>
				     <a href="/zhongyangxinfeng/7.html" title="松下中央新风系统FY-E25PMA(L) 家用全热交换器100㎡以下" target="_blank">
					    <img width="472" height="304" alt="松下中央新风系统FY-E25PMA(L) 家用全热交换器100㎡以下" src="/ersh/Public/picture/zyxf2.jpg" class="err-product">
					 </a>
				  </li>
				  <li>
				     <a href="/zhongyangxinfeng/6.html" title="德国曼瑞德中央新风系统全热交换器NAE300过滤PM2.5" target="_blank">
					    <img width="472" height="304" alt="德国曼瑞德中央新风系统全热交换器NAE300过滤PM2.5" src="/ersh/Public/picture/zyxf1.jpg" class="err-product">
					 </a>
				  </li>
				  
				 </ul>
				 <div class="slide_handdler">
				   <div id="JS_pro_nav3">
				     <a class="current" href="javascript:;"></a>
					 <a href="javascript:;" class=""></a>
					
					</div>
				</div>
			</div>
                <div class="zt"><a href="/zhongyangxinfeng/12.html" title="松下空气净化器（Panasonic）F-31C6VX除甲醛烟雾霾尘异雾霾pm2.5" target="_blank"><img width="230" height="300" alt="松下空气净化器（Panasonic）F-31C6VX除甲醛烟雾霾尘异雾霾pm2.5" src="/ersh/Public/picture/zyxf3.jpg" class="err-product"></a></div>
				<div class="zt bl"><a href="/zhongyangxinfeng/11.html" title="大金空气净化器MC70KMV2家用除甲醛杀菌办公室净化机除PM2.5烟尘" target="_blank"><img width="230" height="300" alt="大金空气净化器MC70KMV2家用除甲醛杀菌办公室净化机除PM2.5烟尘" src="/ersh/Public/picture/zyxf4.jpg" class="err-product"></a></div>
				</div>
                <div class="p-list lh">
                    <div class="xmsg">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="松下中央新风系统FY-10LD3CL家用家居智能换气机全热交换器新风机40㎡以下" href="/zhongyangxinfeng/5.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/zyxf5.jpg" alt="松下中央新风系统FY-10LD3CL家用家居智能换气机全热交换器新风机40㎡以下">
                                <p style="word-wrap: break-word;">松下中央新风系统FY-10LD3CL家用家居智能换气机全热交换器新风机40㎡以下</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_new"></span>
                                  <span class="lwx_cheap_price_">￥6200</span>
                                </div>
                            </dd>
                          </dl>
					</div>
					  <div class="xmsg">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="松下中央新风系统FY-E15PMA(L) 家用全热交换器80㎡以下" href="/zhongyangxinfeng/4.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/zyxf6.jpg" alt="松下中央新风系统FY-E15PMA(L) 家用全热交换器80㎡以下">
                                <p style="word-wrap: break-word;">松下中央新风系统FY-E15PMA(L) 家用全热交换器80㎡以下</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_great"></span>
                                  <span class="lwx_cheap_price_">￥8800</span>
                                </div>
                            </dd>
                          </dl>
					</div>
					  <div class="zxmsg">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="松下室内新风系统FY-E35DZ1A家用家居智能换气机全热交换器新风机120㎡以上" href="/zhongyangxinfeng/8.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/zyxf7.jpg" alt="松下室内新风系统FY-E35DZ1A家用家居智能换气机全热交换器新风机120㎡以上">
                                <p style="word-wrap: break-word;">松下室内新风系统FY-E35DZ1A家用家居智能换气机全热交换器新风机120㎡以上</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_new"></span>
                                  <span class="lwx_cheap_price_">￥9200</span>
                                </div>
                            </dd>
                          </dl>
					</div>
					  <div class="xmsg brn">
					     <dl class="lwx_td_content">
                            <dd>
                                <a class="block_a" title="松下中央新风系统FY-10LD3C家用家居智能换气机全热交换器新风机40㎡以下" href="/zhongyangxinfeng/3.html" target="_blank"></a>
                                     <img src="/ersh/Public/picture/zyxf5.jpg" alt="松下中央新风系统FY-10LD3C家用家居智能换气机全热交换器新风机40㎡以下">
                                <p style="word-wrap: break-word;">松下中央新风系统FY-10LD3C家用家居智能换气机全热交换器新风机40㎡以下</p>
                                <div class="lwx_td_price">
                                  <span class="lwx_master1_icon lwx_price_hot"></span>
                                  <span class="lwx_cheap_price_">￥6500</span>
                                </div>
                            </dd>
                          </dl>
					</div>
                </div>
            </div>
			<div class="fr">
                <a title="松下中央新风系统" href="/zhongyangxinfeng/3.html" target="_blank">
                             <img src="/ersh/Public/picture/zyxf9.jpg" alt="松下中央新风系统">
                </a>
                <p class="lwx_line_spr"></p>
				<a title="大金中央新风系统" href="/zhongyangxinfeng/11.html" target="_blank">
                             <img src="/ersh/Public/picture/zyxf10.jpg" alt="大金中央新风系统">
                </a>
            </div>
        </div>
    </div>
<!--中央新风结束-->	
<script src="/ersh/Public/js/index3.js" type="text/javascript"></script>  
<script src="/ersh/Public/js/eebuylib.js" type="text/javascript"></script>  

 
</div>



<!--col6 S-->
 <div class="w1200">
  <div class="rgcon">
    <div class="col6">
    <div class="tab">
        <ul>
            <li class="active">热点资讯<i class="icon g_arrow_icon"></i></li>
            <li class="">工程案例<i class="icon g_arrow_icon"></i></li>
            <li class="">专题知识<i class="icon g_arrow_icon"></i></li>
             
        </ul>
    </div>
    <div class="inner cfx">
    <div class="col6_item news show" style="display: block;">
        <div class="l_que">
            <div class="l_t_n cfx">
                <p class="l_t_n_img"><a href="/about/" target="_blank">
                    <img  src="/ersh/Public/picture/redian.jpg" alt="舒适365热点资讯"></a></p>
                 
            </div>
            <div class="l_m_n">
                <ul>
                         <li>
<span class="q_date">2017-06-19</span>
<a href="/article/zyktzs/1616.html" target="_blank" title="水冷中央空调多少钱？100平米水冷中央空调价格分享">水冷中央空调多少钱？100平米水冷中央空</a>
</li><li>
<span class="q_date">2017-06-19</span>
<a href="/article/zyktzs/1627.html" target="_blank" title="家用中央空调安装过程中的详细注意事项介绍">家用中央空调安装过程中的详细注意事</a>
</li><li>
<span class="q_date">2017-06-18</span>
<a href="/article/zyktzs/1625.html" target="_blank" title="110㎡三室两厅博世中央空调需要多少钱？">110㎡三室两厅博世中央空调需要多少钱</a>
</li><li>
<span class="q_date">2017-06-17</span>
<a href="/article/zyktzs/1617.html" target="_blank" title="东芝中央空调三大系列产品解析">东芝中央空调三大系列产品解析</a>
</li>                          <li>
<span class="q_date">2017-05-04</span>
<a href="/article/dyrbzs/1561.html" target="_blank" title="大家对家用地源热泵的的一些常见问题汇总，解答地源热泵问题">大家对家用地源热泵的的一些常见问题</a>
</li><li>
<span class="q_date">2017-05-04</span>
<a href="/article/dyrbzs/1562.html" target="_blank" title="别墅地源热泵打井米数及价格影响因素，地源热泵打井施工规范">别墅地源热泵打井米数及价格影响因素，</a>
</li><li>
<span class="q_date">2017-05-04</span>
<a href="/article/dyrbzs/1434.html" target="_blank" title="【丹特卫顿地源热泵价格】6套英国丹特卫顿别墅地源热泵报价">【丹特卫顿地源热泵价格】6套英国丹特</a>
</li><li>
<span class="q_date">2017-05-04</span>
<a href="/article/dyrbzs/1435.html" target="_blank" title="别墅地源热泵的优点，别墅地源热泵成本回收介绍">别墅地源热泵的优点，别墅地源热泵成本</a>
</li>                        
                 </ul>
            </div>
			
        </div>
		<div class="tab-content-right">
			  <div class="right-text">
			   <h3><a title="各大品牌各种型号中央空调报价表！" target="_blank" href="http://www.shujia365.com/zhuanlan/zyktjgb/">各大品牌各种型号中央空调报价表！</a></h3>
			   <p>
大家在选购中央空调的时候，肯定会面对很多品牌，包括国内的和外国的一些品牌，对于各种品牌中央空调的报价一定是不太了解的，本栏目将重点介绍各大品牌中央空调的报价信息。
			         <a title="各大品牌各种型号中央空调报价表！" target="_blank" href="http://www.shujia365.com/zhuanlan/zyktjgb/">[ 全文 ]</a>
              </p>
			   <div class="l_m_n">
                <ul class="lzxv">
			<li>
<span class="q_date">2017-06-18</span>
<a href="/article/jtcnzs/1626.html" target="_blank" title="别墅地暖方案设计需要考虑舒适美观节能">别墅地暖方案设计需要考虑舒适美观节能</a>
</li><li>
<span class="q_date">2017-06-17</span>
<a href="/article/jtcnzs/1624.html" target="_blank" title="别墅地暖系统设计，别墅地暖解决方案">别墅地暖系统设计，别墅地暖解决方案</a>
</li><li>
<span class="q_date">2017-06-03</span>
<a href="/article/jtcnzs/1621.html" target="_blank" title="上海合生东郊800平米别墅地暖方案设计和报价明细">上海合生东郊800平米别墅地暖方案设计和报价</a>
</li><li>
<span class="q_date">2017-06-03</span>
<a href="/article/jtcnzs/1620.html" target="_blank" title="别墅安装地暖多少钱，两套别墅地暖价格介绍">别墅安装地暖多少钱，两套别墅地暖价格介绍</a>
</li>                        <li>
<span class="q_date">2017-06-19</span>
<a href="/article/zyxfzs/1628.html" target="_blank" title="五大新风系统净化技术详细说明">五大新风系统净化技术详细说明</a>
</li><li>
<span class="q_date">2017-06-17</span>
<a href="/article/zyxfzs/1623.html" target="_blank" title="掌握七个关键点轻松选购新风系统">掌握七个关键点轻松选购新风系统</a>
</li><li>
<span class="q_date">2017-05-07</span>
<a href="/article/zyxfzs/1565.html" target="_blank" title="松下新风系统DZ1A+霍尼韦尔FC400电子净化箱安装日记">松下新风系统DZ1A+霍尼韦尔FC400电子净化箱</a>
</li><li>
<span class="q_date">2017-05-03</span>
<a href="/article/zyxfzs/1557.html" target="_blank" title="远大新风系统引领家装新风系统新潮流，远大洁净新风机">远大新风系统引领家装新风系统新潮流，远大洁</a>
</li>                        <li>
<span class="q_date">2017-05-06</span>
<a href="/article/zyjszs/1564.html" target="_blank" title="怡口净水器全屋净水解决方案，怡口净水给你健康用水">怡口净水器全屋净水解决方案，怡口净水给你健</a>
</li><li>
<span class="q_date">2017-04-15</span>
<a href="/article/zyjszs/1350.html" target="_blank" title="怡口直饮机的安装方法—怡口直饮机的好处">怡口直饮机的安装方法—怡口直饮机的好处</a>
</li><li>
<span class="q_date">2017-04-08</span>
<a href="/article/zyjszs/1050.html" target="_blank" title="华迈净水器好吗？华迈净水器打造高品质服务">华迈净水器好吗？华迈净水器打造高品质服务</a>
</li><li>
<span class="q_date">2017-03-18</span>
<a href="/article/zyjszs/1081.html" target="_blank" title="央视曝光净水器名单，净水器什么牌子好？">央视曝光净水器名单，净水器什么牌子好？</a>
</li>						
                 </ul>
            </div>
			  </div>
			</div>


         
    </div>

    <div class="col6_item case" style="display: none;">
        <ul>
            <li>
                <a href="/gongchenganli/jingshuianli/" target="_blank">
                    <img src="/ersh/Public/picture/anli3.jpg"  width="228" height="200 "alt="中央净水系统效果图"><span class="opa_bg"></span><span class="list_desc">中央净水系统效果图</span></a>
            </li>
			<li>
                <a href="/gongchenganli/xinfenganli/" target="_blank">
                    <img src="/ersh/Public/picture/anli4.jpg"  width="228" height="200" alt="中央新风系统效果图"><span class="opa_bg"></span><span class="list_desc">中央新风系统效果图</span></a>
            </li>
            <li class="li_sub_4">
                <a href="/gongchenganli/dinuananli/" target="_blank">
                    <img src="/ersh/Public/picture/anli2.jpg"  width="368" height="200 "alt="家庭采暖安装效果图"><span class="opa_bg"></span><span class="list_desc">家庭采暖安装效果图</span></a>
            </li>
            
        </ul>
        <ul>
            <li>
                <a href="/gongchenganli/kongdiaoanli/" target="_blank">
                    <img src="/ersh/Public/picture/anli1.jpg" width="463" height="235" alt="中央空调安装效果图"><span class="opa_bg"></span><span class="list_desc">中央空调安装效果图</span></a>
            </li>
			 <li>
                <a href="/gongchenganli/dinuananli/" target="_blank">
                    <img src="/ersh/Public/picture/anli5.jpg" width="180" height="235" alt="暖气片安装效果图"><span class="opa_bg"></span><span class="list_desc">暖气片安装效果图</span></a>
            </li>
			 <li>
                <a href="/gongchenganli/diyuanrebenganli/" target="_blank">
                    <img src="/ersh/Public/picture/anli6.jpg" width="180" height="235" alt="地源热泵安装效果图"><span class="opa_bg"></span><span class="list_desc">地源热泵安装效果图</span></a>
            </li>
             
            
        </ul>
    </div>

      <div class="col6_item know zhuanti" style="display: none;">
        <dl><dd>
	
<a href="/zhuanlan/dnjg/" target="_blank" title="铺地暖价格">铺地暖价格</a>
<a href="/zhuanlan/dnph/" target="_blank" class="light" title="地暖哪个品牌好">地暖哪个品牌好</a>
<a href="/zhuanlan/kyph/" target="_blank" title="中央空调什么品牌好">中央空调什么品牌好</a>
<a href="/zhuanlan/dnyqd/" target="_blank" title="家里装地暖好吗">家里装地暖好吗</a>
<a href="/zhuanlan/jykt/" target="_blank" title="安装中央空调多少钱">安装中央空调多少钱</a>
<a href="/zhuanlan/gljg/" target="_blank" title="格力中央空调价格表">格力中央空调价格表</a>
<a href="/zhuanlan/dyrb/" target="_blank" class="light" title="地源热泵品牌">地源热泵品牌</a>
<a href="/zhuanlan/nqpjg/" target="_blank" title="暖气片报价">暖气片报价</a>
<a href="/zhuanlan/dyrbjg/" target="_blank" title="地源热泵价格">地源热泵价格</a>
<a href="/zhuanlan/dyrbyl/" target="_blank" title="地源热泵原理">地源热泵原理</a>
<a href="/zhuanlan/dyrbaz/" target="_blank" class="light" title="地源热泵安装">地源热泵安装</a>
<a href="/zhuanlan/dyrbsg/" target="_blank" title="地源热泵施工">地源热泵施工</a>
<a href="/zhuanlan/zyktyl/" target="_blank"class="light" title="中央空调原理">中央空调原理</a>
<a href="/zhuanlan/dnyl/" target="_blank" title="地暖原理">地暖原理</a>
<a href="/zhuanlan/dnazsy/" target="_blank" title="地暖安装步骤">地暖安装步骤</a>
<a href="/zhuanlan/gblzh/" target="_blank" class="light" title="壁挂炉品牌">壁挂炉品牌</a>
<a href="/zhuanlan/djzykt/" target="_blank" title="大金中央空调">大金中央空调</a>
<a href="/zhuanlan/dnhnqp/" target="_blank" title="地暖和暖气片哪个好">地暖和暖气片哪个好</a>
<a href="/zhuanlan/zyktazlc/" target="_blank" class="light" title="中央空调安装流程">中央空调安装流程</a>
<a href="/zhuanlan/apsxf/" target="_blank" title="爱品生新风系统">爱品生新风系统</a>
<a href="/zhuanlan/dzzyktjg/" target="_blank" title="东芝中央空调">东芝中央空调</a>
<a href="/zhuanlan/zyktazlc/" target="_blank" class="light" title="中央空调安装流程">中央空调安装流程</a>
<a href="/zhuanlan/ykzyktjg/" target="_blank" title="约克中央空调">约克中央空调</a>
<a href="/zhuanlan/vrvzykt/" target="_blank" title="VRV空调系统">VRV空调系统</a>
<a href="/zhuanlan/lsxfxt/" target="_blank" class="light" title="兰舍新风系统">兰舍新风系统</a>
<a href="/zhuanlan/ymbgl/" target="_blank" title="依玛壁挂炉">依玛壁挂炉</a>
<a href="/zhuanlan/ddnhdl/" target="_blank" title="电地暖耗电量">电地暖耗电量</a>
<a href="/zhuanlan/mdzykt/" target="_blank" title="美的家用中央空调">美的家用中央空调</a>
<a href="/zhuanlan/jtzykt/" target="_blank" class="light" title="">家庭中央空调价格表</a>
<a href="/zhuanlan/rlktbj/" target="_blank" title="日立中央空调">日立中央空调</a>
<a href="/zhuanlan/sldjkt/" target="_blank" title="三菱电机">三菱电机</a>
<a href="/zhuanlan/tlktbj/" target="_blank" class="light" title="特灵中央空调">特灵中央空调</a>
<a href="/zhuanlan/lgktbj/" target="_blank" title="LG中央空调">LG中央空调</a>
<a href="/zhuanlan/hektbj/" target="_blank" title="海尔中央空调">海尔中央空调</a>
<a href="/zhuanlan/sxktbj/" target="_blank" title="松下中央空调">松下中央空调</a>
<a href="/zhuanlan/slzgbj/" target="_blank" class="light" title="三菱重工">三菱重工</a>
<a href="/zhuanlan/wnbgl/" target="_blank" title="威能壁挂炉">威能壁挂炉</a>
<a href="/zhuanlan/hxktjg/" target="_blank" title="海信中央空调">海信中央空调</a>
<a href="/daikinjg/" target="_blank" class="light" title="大金中央空调报价">大金中央空调报价</a>
<a href="/glktjg/" target="_blank" title="格力中央空调报价">格力中央空调报价</a>
<a href="/mdzyktjg/" target="_blank" title="美的中央空调报价">美的中央空调报价</a>
<a href="/zyzyktjg/" target="_blank" title="东芝中央空调报价">东芝中央空调报价</a>
<a href="/sldjktjg/" target="_blank" class="light" title="三菱电机中央空调报价">三菱电机空调报价</a>
<a href="/rlzyktjg/" target="_blank" title="日立中央空调报价">日立中央空调报价</a>
<a href="/zgzyktjg/" target="_blank" title="志高中央空调报价">志高中央空调报价</a>
<a href="/hxzyktjg/" target="_blank" class="light" title="海信中央空调报价">海信中央空调报价</a>
<a href="/zhuanlan/sddnngh/" target="_blank" title="电地暖和水地暖哪个好">电地暖和水地暖哪个好</a>
<a href="/zhuanlan/sdnhm/" target="_blank" title="水地暖优缺点">水地暖优缺点</a>
<a href="/zhuanlan/fsmbgl/" target="_blank" class="light" title="菲斯曼壁挂炉">菲斯曼壁挂炉</a>
<a href="/zhuanlan/ddnazjg/" target="_blank" title="电地暖每平米价格">电地暖每平米价格</a>
<a href="/zhuanlan/djlpbj/" target="_blank" class="light" title="大金中央空调一拖五6匹报价">大金一拖五6匹报价</a>
<a href="/zhuanlan/djbpjg/" target="_blank" title="大金中央空调一拖六8匹报价">大金一拖六8匹报价</a>
<a href="/zhuanlan/djytsjg/" target="_blank" title="大金中央空调一拖四5匹报价">大一拖四5匹报价</a>
<a href="/zhuanlan/djystjg/" target="_blank" title="大金中央空调一拖三4匹报价">大一拖三4匹报价</a>
<a href="/zhuanlan/dyrbzmaz/" target="_blank" title="地源热泵安装示意图">地源热泵安装示意图</a>
<a href="/zhuanlan/bgljgb/" target="_blank" title="壁挂炉报价表">壁挂炉报价表</a>
<a href="/zhuanlan/nqpbj/" target="_blank" class="light" title="暖气片报价表">暖气片报价表</a>
<a href="/dakinlp/" target="_blank" title="大金中央空调LP系列报价">大金中央空调LP</a>
<a href="/dakinpmx/" target="_blank" title="大金中央空调PMX系列报价">大金中央空调PMX</a>
<a href="/daikinlmx/" target="_blank" class="light" title="大金中央空调PMX系列报价">大金中央空调PMX</a>
<a href="/daikinvrvp/" target="_blank" title="大金中央空调VRV-P系列报价">大金中央空调VRV-P</a>
<a href="/sljdlr/" target="_blank" title="三菱电机菱睿PUMY系列价格表">三菱电机菱睿价格</a>
<a href="/dzjksmmsi/" target="_blank" class="light" title="东芝进口SMMS-I系列中央空调价格表">东芝进口SMMS-I价格</a>
<a href="/sldjly/" target="_blank" title="三菱电机中央空调菱耀型号价格表">三菱电机菱耀价格</a>
<a href="/dzjksmms/" target="_blank" title="东芝中央空调进口Mini-SMMS价格表">东芝进口Mini-SMMS价格</a>
<a href="/rlvam/" target="_blank" class="light" title="日立中央空调VAMmini产品型号价格">日立VAMmini价格表</a>
<a href="/sldjls/" target="_blank" title="三菱电机菱尚MXZ产品型号价格表">三菱电机菱尚MXZ产价格表</a>
<a href="/hzsmmsmn/" target="_blank" title="东芝国产Mini-SMMS系列产品价格表">东芝国产Mini-SMMS价格</a>
<a href="/rlexpro/" target="_blank" title="日立EX-PRO系列产品价格表">日立EX-PRO系列价格表</a>
<a href="/dzsmmc/" target="_blank" class="light" title="东芝中央空调国产合资SMMS-C系列报价">东芝国产SMMS-C报价</a>
<a href="/daikinxf/" target="_blank" title="大金新风系统报价">大金新风报价</a>
<a href="/bolexf/" target="_blank" title="博乐新风系统报价">博乐新风报价</a>
<a href="/songxiaxf/" target="_blank" title="松下新风系统报价">松下新风报价</a>
<a href="/manruidexf/" target="_blank" class="light" title="曼瑞德新风系统报价">曼瑞德新风报价</a>
<a href="/yuandaxf/" target="_blank" title="远大新风系统报价">远大新风系统报价</a>
<a href="/huoniweierxf/" target="_blank" title="霍尼韦尔新风系统报价">霍尼韦尔新风报价</a>
<a href="/broanxf/" target="_blank" title="百朗新风系统报价">百朗新风报价</a>
<a href="/dyrbzt/ersh/Public/js/" target="_blank" class="light" title="地源热泵专题知识">地源热泵专题</a>
<a href="/boschbgl/" target="_blank" title="博世壁挂炉价格">博世壁挂炉价格</a>

        </dd></dl>
    </div>

    
    </div>
    </div>
 </div>
 <div class="gg-img"><a href="/quanguo/" target="_blank" title="全国服务中心"><img alt="全国服务中心" src="/ersh/Public/picture/ditu.jpg"></a></div>	
</div>

<!--col6 E-->
<div class="clear"></div>


<script type="text/javascript">
    $(function(){
        $('.banner').PicPlay({
            pic:".banner_img",
            num:".banner_btn",
            type:3,
            intervalTime:5000
        });
    });
</script>
<script src="/ersh/Public/js/index.js"></script>
<script type="text/javascript">
        //左侧菜单
        $(".lv1_li").hover(function(){
            $(this).addClass("hover")
        },function(){
            $(this).removeClass("hover")

        });

</script>


  <div id="cont">
   <div class="m1">
        <div class="mt">
            <h2><p class="lwx_h3_tag" style="background:#f7bc9e"></p>舒适专栏</h2>
            <div class="extra"><a href="/zhuantilanmu/" title="获取系统知识" target="_blank">获取系统知识>></a></div>
        </div>
        <div class="mc">
            <div id="zhaunti" class="lh">
                <ul>
				 <li><a href="/zhuantilanmu/" title="舒家365-中央空调安装规范" target="_blank">
				 <img src="/ersh/Public/picture/ebbefe71-ce5b-4b4a-a13e-ec57492cf00b.jpg" width="285" height="230" alt="舒家365-中央空调安装规范" /></a>
				 </li>
				 <li><a href="/zhuantilanmu/" title="舒家365-地暖安装规范" target="_blank">
				 <img src="/ersh/Public/picture/d099d256-adcf-4b92-a4cd-70e55c057ef0.jpg" width="285" height="230" alt="舒家365-地暖安装规范" /></a>
				 </li>
				 <li><a href="/zhuantilanmu/" title="舒家365新风系统专题-穹顶之下远离雾霾" target="_blank">
				 <img src="/ersh/Public/picture/2ae53b43-b6ac-4189-93fd-3fd6666cdd9d.jpg" width="285" height="230" alt="舒家365新风系统专题-穹顶之下远离雾霾" /></a></li>
				 <li><a href="/zhuantilanmu/" title="舒家365-家用净水系统选购安装专题" target="_blank">
				 <img src="/ersh/Public/picture/a4e794e9-121f-47bd-b9fc-9943cc25b966.jpg" width="285" height="230" alt="舒家365-家用净水系统选购安装专题" /></a></li>
				 </ul>
            </div>
        </div>
    </div>

 </div>
<div class="mato1"></div>
<!--footer start -->
 <div class="hxlz">
    <div class="w1190">
<!--footerService start -->
<div class="footer"> 
    <!--友情链接-->
    <div class="fri_links ov">
       <div class="cityyq">
		<strong>热门城市:</strong>
        <ul>
            <li>
                    <a href="/shanghai/" target="_blank" title="上海">上海</a>
                    <a href="/wuhu/" target="_blank" title="芜湖">芜湖</a>
                    <a href="/nanjing/" target="_blank" title="南京">南京</a>
                    <a href="/xuancheng/" target="_blank" title="宣城">宣城</a>
                    <a href="/maanshan/" target="_blank" title="马鞍山">马鞍山</a>
<a href="/hefei/" target="_blank" title="合肥">合肥</a>
<a href="/luan/" target="_blank" title="六安">六安</a>
<a href="/chaohu/" target="_blank" title="巢湖">巢湖</a>
<a href="/bengbu/" target="_blank" title="蚌埠">蚌埠</a>
<a href="/huainan/" target="_blank" title="淮南">淮南</a>
<a href="/huaibei/" target="_blank" title="淮北">淮北</a>
<a href="/tongling/" target="_blank" title="铜陵">铜陵</a>
<a href="/anqing/" target="_blank" title="安庆">安庆</a>
<a href="/huangshan/" target="_blank" title="黄山">黄山</a>
<a href="/fuyang/" target="_blank" title="阜阳">阜阳</a>
<a href="/suzhou/" target="_blank" title="宿州">宿州</a>
<a href="/chuzhou/" target="_blank" title="滁州">滁州</a>
<a href="/chizhou/" target="_blank" title="">池州</a>
<a href="/bozhou/" target="_blank" title="">亳州</a>

                    
                     
            </li>
        </ul>
	   </div>	
<div class="cityyq">
		<strong>友情链接:</strong>
        <ul>
            <li>
                   <a href="http://www.hfktm.com/"target="_blank">合肥美的中央空调</a>
<a href="http://www.hefeigeli.com/"target="_blank">合肥格力中央空调</a>
<a href="http://www.sctnj.cn/"target="_blank">成都地暖安装</a>
<a href="http://www.cddnw.com/"target="_blank">成都地暖网</a>
<a href="http://www.dinuanw.cn/"target="_blank">南昌地暖公司</a>
<a href="http://www.quntan-gree.com/"target="_blank">格力中央空调</a>
<a href="http://www.wsk99.com/"target="_blank">广州防水厂家</a>
<a href="http://www.fssdpp.com/"target="_blank">防水十大品牌</a>
<a href="http://www.daikinsz.cn/"target="_blank">中央空调</a>
<a href="http://www.cd-hss.com/"target="_blank">成都暖通公司</a>
<a href="http://dengju.jc001.cn"target="_blank">灯具</a>
<a href="http://91xinshang.com/"target="_blank">奢侈品回收</a>
<a href="http://www.ztpingtai.com/"target="_blank">铸铁平板</a>
<a href="http://www.hongyaxuan.com/"target="_blank">中式装修</a>
<a href="http://www.jdzs.com"target="_blank">别墅装修公司</a>
<a href="http://www.lantiantun.com/"target="_blank">硅藻泥</a>
<a href="http://www.bjmijigui168.com"target="_blank">密集柜</a>
<a href="http://www.yajinsh.com/"target="_blank">电子秤</a>
<a href="http://dg.leju.com/"target="_blank">东莞房产网</a>
<a href="http://www.dlas17.com/"target="_blank">通风柜</a>



            </li>
        </ul>
	   </div>
	   
    </div>
	<div class="lxph">
	   
	   <p class="service-phone">17730316334</p>
       <p>周一至周日 9：00-20：00</p>
	</div>
</div>
</div>
<!--footerService end -->
<!--footer start-->
 

</div>

<!--客服开始 -->

<!-- 代码 开始 -->

 <ul id="side-bar" class="side-pannel side-bar">
<a class="text survey" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=766299827&site=qq&menu=yes" rel="nofollow">
<s class="g-icon-survey1"></s>
<span>在线咨询</span>
</a>
  <a href="javascript:;" class="qr"><s class="g-icon-qr1"></s></s><span>咨询电话</span><i></i></a>
  
    <a href="/e/DoInfo/AddInfo.php?classid=2&mid=8&ecmscheck=1" target="_blank" class="text weibo" rel="nofollow"><s class="g-icon-weibo1"></s><span>免费设计</span></a>
 
 
   <a href="javascript:;" class="gotop" style="display:none;"><s class="g-icon-top"></s> <span>回到顶部</span></a>
  
</ul> 
<!-- 代码 结束 -->


<!--客服结束-->


<div class="footer-box">
   <div class="footer-icon">
      <div class="iconMap">
	 
		<a href="/e/DoInfo/AddInfo.php?classid=2&mid=8&ecmscheck=1" target="_blank" rel="nofollow"><p><img class="ic6" src="/ersh/Public/picture/blank.gif" alt="免费定制" height="50" width="60"></p><p class="icon-title">免费定制</p><p class="icon-desc">针对性定制舒适方案</p></a>
		<a href="/zhongyangkongdiao/" target="_blank"><p><img class="ic3" src="/ersh/Public/picture/blank.gif" alt="集成方案" height="50" width="60"></p><p class="icon-title">集成方案</p><p class="icon-desc">多系统集成化设计</p></a>
		<a href="/gongchenganli/" target="_blank"><p><img class="ic1" src="/ersh/Public/picture/blank.gif" alt="规范施工" height="50" width="60"></p><p class="icon-title">规范施工</p><p class="icon-desc">高标准施工规范</p></a>
		<a href="#" target="_blank" rel="nofollow"><p><img class="ic4" src="/ersh/Public/picture/blank.gif" alt="工程联保" height="50" width="60"></p><p class="icon-title">工程联保</p><p class="icon-desc">设备工程全国联保</p></a>
		<a href="#" target="_blank" rel="nofollow"><p><img class="ic2" src="/ersh/Public/picture/blank.gif" alt="持续维护" height="50" width="60"></p><p class="icon-title">持续维护</p><p class="icon-desc">维护升级持续关注</p></a>
		<a href="/gongchenganli/" target="_blank"><p><img class="ic7" src="/ersh/Public/picture/blank.gif" alt="万千工程" height="50" width="60"></p><p class="icon-title">万千工程</p><p class="icon-desc">万千工程口口相传</p></a>
		<a href="#" target="_blank" rel="nofollow"><p><img class="ic8" src="/ersh/Public/picture/blank.gif" alt="用心打造" height="50" width="60"></p><p class="icon-title">用心打造</p><p class="icon-desc">用心打造良心工程</p></a>
		</div></div></div>
		
	<div class="footer-box2">
	   <div class="footer-copy">
<a href="/redianzixun/" target="_blank" title="资讯中心">资讯中心</a> | 
<a href="/article/" target="_blank" title="资讯中心">知识中心</a> | 
<a href="/tags/" target="_blank" title="网站地图" rel="nofollow">网站地图</a> | 
<a href="/about/" target="_blank" title="关于我们" rel="nofollow">关于我们</a> | 
<a href="/lianxiwomen/" target="_blank" title="联系我们" rel="nofollow">联系我们</a> |
<a href="/quanguo/"  target="_blank" title="全国服务中心" rel="nofollow">全国服务中心</a>|
<a href="/zhaoshangjiameng/"  target="_blank" title="招商加盟" rel="nofollow">招商加盟</a>
<br><span class="yen"> Copyright©2009-2016  ShuJia365 舒家365网（www.shujia365.com）  版权所有</span>
</div>
 
</div>

<script language="javascript" src="/ersh/Public/js/cityPicker-1.0.0.js"></script>
<script language="javascript" src="/ersh/Public/js/citydata.js"></script>
<script>
  $(function(){
    //原生城市-无联动
    var select = $('.city-picker-select').cityPicker({
      dataJson: cityData,
      renderMode: false,
      linkage: false
    });
    //城市下拉显示
    $('.qhcs').click(function(){
      $('.city-select').show();
    });
  })   
</script>

<!--footer end -->

</body></html>