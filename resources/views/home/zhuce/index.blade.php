<!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title>注册</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script src="/ajax3.0-min.js"></script>
		<script type="text/javascript" src="/jquery.js"></script>
		<link rel="stylesheet" href="/h/AmazeUI-2.4.2/assets/css/amazeui.min.css" />
		<link href="/h/css/dlstyle.css" rel="stylesheet" type="text/css">
		<script src="/h/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/h/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>
		<link href="/h/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />

		<link href="/h/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/h/css/cartstyle.css" rel="stylesheet" type="text/css" />

		<link href="/h/css/jsstyle.css" rel="stylesheet" type="text/css" />

		<script type="/h/text/javascript" src="js/address.js"></script>

	</head>

	<body>

		<div class="login-boxtitle">
			<a href="home/demo.html"><img alt="" src="/h/images/logobig.png" /></a>
		</div>

		<div class="res-banner">
			<div class="res-main">
				<div class="login-banner-bg"><span></span><img src="/h/images/big.jpg" /></div>
				<div class="login-box">

						<div class="am-tabs" id="doc-my-tabs">
							<ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
								<li class="am-active"><a href="">邮箱注册</a></li>
								<li><a href="">手机号注册</a></li>
							</ul>

							<div class="am-tabs-bd">
								<div class="am-tab-panel am-active">
									<form method="post" action="/home/zhuce/insert">
											{{ csrf_field() }}
										<div class="user-email">
											<label for="email"><i class="am-icon-envelope-o"></i></label>
											<input type="email" name="email" id="email" placeholder="请输入邮箱账号">
										</div>										
										<div class="user-pass">
											<label for="password"><i class="am-icon-lock"></i></label>
											<input type="password" name="userpwd" id="password" placeholder="设置密码">
										</div>										
										<div class="user-pass">
											<label for="passwordRepeat"><i class="am-icon-lock"></i></label>
											<input type="password" name="reuserpwd" id="passwordRepeat" placeholder="确认密码">
										</div>		
										<div class="user-pass">
											<img src="/code" alt="" title="点击刷新" onclick="this.src=this.src+'?a=1'">
											<input type="text" name="code"  placeholder="验证码">
										</div>	
										<div class="am-cf" style="position:relative;top:25px;">
											<input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
										</div>
										@if(session('error'))
										<div class="am-cf" onclick="this.style.display='none'"style="position:relative;top:15px;">
											<input type="text" name="" value="{{ session('error')}}" class="" style="color:red;">
										</div>
										@endif

									</form>
                 
								 <!-- <div class="login-links">
	 										<label for="reader-me">
	 											<input id="reader-me" type="checkbox"> 点击表示您同意商城《服务协议》
	 										</label>
								 							  	</div> -->
										
								</div>
								
								<script language="javascript">
									function get_mobile_code(){
										$.ajaxSetup({
										        headers: {
										            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
										        }
										});
								        $.post('/home/zhuce/phone', {mobile:$('#phone').val()}, function(msg) {
								            alert(jQuery.trim(unescape(msg)));
											if(msg=='提交成功'){
												RemainTime();
											}
								        });
									};
									var iTime = 59;
									var Account;
									function RemainTime(){
										document.getElementById('zphone').disabled = true;
										var iSecond,sSecond="",sTime="";
										if (iTime >= 0){
											iSecond = parseInt(iTime%60);
											iMinute = parseInt(iTime/60)
											if (iSecond >= 0){
												if(iMinute>0){
													sSecond = iMinute + "分" + iSecond + "秒";
												}else{
													sSecond = iSecond + "秒";
												}
											}
											sTime=sSecond;
											if(iTime==0){
												clearTimeout(Account);
												sTime='获取手机验证码';
												iTime = 59;
												document.getElementById('zphone').disabled = false;
											}else{
												Account = setTimeout("RemainTime()",1000);
												iTime=iTime-1;
											}
										}else{
											sTime='没有倒计时';
										}
										document.getElementById('zphone').value = sTime;
									}
									// // 发送post方式
									// $('input').eq(7).onfocus=function(){
									//  // var xml= new XMLHttpRequest();
									// }
									// $('id=phone').eq(7).onblur=function(){
									//  // var xml= new XMLHttpRequest();
									// Ajax('HTML',false).post('/home/zhuce/ajax',{name:$('#phone').val()},function(str){
									// 					alert(str);
									// 				});

									// }
											
									

										
									

								</script>


								<div class="am-tab-panel">
								<form method="post" action="/home/zhuce/insert2">
										{{ csrf_field() }}
									<div class="user-phone">
										<label for="phone"><i class="am-icon-mobile-phone am-icon-md"></i></label>
										<input type="tel" name="phonenum" id="phone" placeholder="请输入手机号">
									</div>																			
									<div class="verification">
										<label for="code"><i class="am-icon-code-fork"></i></label>
										<input type="tel" name="code" id="code" placeholder="请输入验证码">
										<a class="btn" href="javascript:void(0);" onClick="get_mobile_code();" id="sendMobileCode">
										<span id="dyMobileButton">获取</span></a>
									</div>
									<div class="user-pass">
										<label for="password"><i class="am-icon-lock"></i></label>
										<input type="password" name="userpwd" id="password" placeholder="设置密码">
									</div>										
									<div class="user-pass">
										<label for="passwordRepeat"><i class="am-icon-lock"></i></label>
										<input type="password" name="reuserpwd" id="passwordRepeat" placeholder="确认密码">
									</div>	
								
				<!-- 			<div class="login-links">
										<label for="reader-me">
											<input id="reader-me" type="checkbox"> 点击表示您同意商城《服务协议》
										</label>
							  	</div> -->
										<div class="am-cf">
											<input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
										</div>
								
									<hr>
								</div>
										</form>
								<script>
									$(function() {
									    $('#doc-my-tabs').tabs();
									  })
								</script>

							</div>
						</div>

				</div>
			</div>
			
					<div class="footer ">
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
								<em>© 2015-2025 Hengwang.com 版权所有</em>
							</p>
						</div>
					</div>
	</body>

</html>
