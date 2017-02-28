<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>会员注册成功页面</title>
<link href="http://image.go108.com.cn/title/20140328/css/home.css" rel="stylesheet" type="text/css" />
<link href="http://image.go108.com.cn/register/2014/css/css.css" rel="stylesheet" type="text/css" />
<style>
.rsm {
	/*background-color: #e68d3d;*/
	background-image: -o-linear-gradient(bottom,#f1c59f 0,#efaf76 100%);
	background-image: -moz-linear-gradient(bottom,#f1c59f 0,#efaf76 100%);
	background-image: -webkit-linear-gradient(bottom,#f1c59f 0,#efaf76 100%);
	background-image: -ms-linear-gradient(bottom,#f1c59f 0,#efaf76 100%);
	background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0,#f1c59f),color-stop(1,#efaf76));
	background-image: linear-gradient(bottom,#f1c59f 0,#efaf76 100%);
	-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.5);
	-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.5);
	box-shadow: inset 0 1px 0 rgba(255,255,255,0.5);
	background-color: #f1c59f;
	border-top: 1px solid #fb841b;
	border-right: 1px solid #fd9437;
	border-bottom: 1px solid #e58d3f;
	border-left: 1px solid #d9965a;
/*	margin-left: 30px;	*/
}
#rsmParent .btn {
	width: 75px;
	height: 22px;
	padding: 0;
	text-align: center;
	line-height: 22px;
	color: #fff;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-text-shadow: 0 -1px 0 rgba(0,0,0,0.1);
	-moz-text-shadow: 0 -1px 0 rgba(0,0,0,0.1);
	text-shadow: 0 -1px 0 rgba(0,0,0,0.1);
	filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=-1,Color='#1a000000',Positive='true');
	display: inline-block;
	_zoom: 1;
	_display: inline;
	text-decoration:none;
	cursor:wait;
}
#rsmParent a.btn { cursor: pointer; }
.foot{
	position: relative;
	top:30px;
	left:310px;
}
</style>
</head>
<body>
<div id="headPasswd">
	<a href="http://www.go108.com.cn">
	<img src="/h/images/logobig.png" class="fl" border=0 width="120px" height="60px" />
  </a>
	
</div>
<div id="wrapSuc">
	<div class="wsTop"></div>
	<div class="wsCen" style="padding:10px 0;">
		<div class="regSuc">
			<img src="http://image.go108.com.cn/register/2014/images/right.jpg" />
			<h4>恭喜!会员注册成功!</h4>
		</div>
        <div class="reg_email01" style="font-size:14px;">您注册的邮箱为：<b></b>，注册奖励20积分，已存入账户，查看请<a href="/home/home/index" target="_blank">进入商城首页</a>。</div>
        <div class="reg_email02">此外，我们已经发送了一封会员通知函到您的注册邮箱，现在登陆您的邮箱，并点击会员通知确认链接，即可验证邮箱并获得额外15积分奖励。</div>
        
        <div class="reg_email03">
			<a href="javascript:alert('您的邮箱不属于常用邮件提供商提供的邮箱，请自行登录邮箱查看！');" target="_self"><img src="http://image.go108.com.cn/register/2014/images/email_01.jpg" /></a>
			<a href="/home/home/index" target="_blank" class="a1">暂不验证，谢谢</a>
		</div>
        
        <div class="reg_email01">
           如果您没有收到通知函:<br />1、请仔细确认您所填写的邮箱地址是否正确，并稍等几分钟，若没有收到确认信，<span id="rsmParent"><a href="#" id="reSendMail" class="rsm btn">重发一份</a><span class="rsm btn" id="sendingMail">正在发送</span></span>。<br />2、若仍未收到通知函，请您移步到<a href="#" target="_blank">客服中心</a>了解更多。
        </div>
        
          
            
	</div>
	<div class="wsBot"></div>
</div>
<script language="JavaScript" ></script>
<script src="http://image.go108.com.cn/js/jquery.js"></script>
<script>
$(function(){
	$("#sendingMail").hide();
	$("#reSendMail").click(function(e){
		e.preventDefault();
		$.ajax({
			url: 'reg_asyn_mail.php',
			data: '',
			beforeSend: function(){
				$('#sendingMail').show();
				$('#reSendMail').hide();
			},
			success: function(data,status){
				$('#sendingMail').hide();
				$('#reSendMail').show();
				if(data == 1){
					alert('重发邮件成功，请登录您的邮箱查收！');
				}else{
					alert('重发邮件失败，请确认您填写的邮箱是否正确，若有问题，请与客服联系！');
				}
			}
		});
	});	
});
</script>
					<div class="foot">
						<div class="footer-hd ">
							<p>
								<a href="# ">恒望科技</a>
								<b>|</b>
								<a href="/home/home/index">商城首页</a>
								<b>|</b>
								<a href="# ">支付宝</a>
								<b>|</b>
								<a href="# ">物流</a>
							</p>
						</div>
						<div class="footer-bd ">
							<p>
								<a href="# ">关于恒望</a>
								<a href="# ">合作伙伴</a>
								<a href="# ">联系我们</a>
								<a href="# ">网站地图</a>
								<em>&copy; 2015-2025 Hengwang.com 版权所有</em>
							</p>
						</div>
					</div>
<!-- <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ffb1661bf8ea90bb9805fad0cbc9ca163' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src='http://www.go108.com.cn/js/trace.js' type='text/javascript'></script>
Start Alexa Certify Javascript
<script type="text/javascript">
_atrk_opts = { atrk_acct:"4L30k1a0CM00o6", domain:"go108.com.cn",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript> -->
<!-- End Alexa Certify Javascript -->  </body>
</html>
