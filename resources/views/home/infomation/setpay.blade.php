@extends('home.layout.geren')

@section('link')
	<script type="text/javascript" src="/jquery.js"></script>
@endsection
@section('content')
	<!-- <div class="main-wrap"> -->

					<div class="am-cf am-padding">
						<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">支付密码</strong> / <small>Set&nbsp;Pay&nbsp;Password</small></div>
					</div>
					<hr>
					<!--进度条-->
					<div class="m-progress">
						<div class="m-progress-list">
							<span class="step-1 step">
                                <em class="u-progress-stage-bg"></em>
                                <i class="u-stage-icon-inner">1<em class="bg"></em></i>
                                <p class="stage-name">设置支付密码</p>
                            </span>
							<span class="step-2 step">
                                <em class="u-progress-stage-bg"></em>
                                <i class="u-stage-icon-inner">2<em class="bg"></em></i>
                                <p class="stage-name">完成</p>
                            </span>
							<span class="u-progress-placeholder"></span>
						</div>
						<div class="u-progress-bar total-steps-2">
							<div class="u-progress-bar-inner"></div>
						</div>
					</div>
					<form class="am-form am-form-horizontal" action="/home/infomation/insert3" method="post">
						{{ csrf_field() }}
						<div class="am-form-group bind">
							<label class="am-form-label" for="user-phone">验证手机</label>
							<div class="am-form-content">
								
										<label for="phone"><i class="am-icon-mobile-phone am-icon-md"></i></label>
										<input type="tel" name="zhiphone" id="phone" placeholder="请输入手机号">
												
								<!-- <span id="user-phone" 
								style="position:relative;top:10px;left:20px;">186XXXX0531</span> -->
								<!-- <input type="tel" placeholder="请输入您要支付的手机号码" id="user-confirm-password" name="zhiphone" value="" id="phone"> -->
							</div>
						</div>
						<script language="javascript">
									function get_mobile_code(){
										$.ajaxSetup({
										        headers: {
										            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
										        }
										});
								        $.post('/home/infomation/phone', {mobile:$('#phone').val()}, function(msg) {
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
						<div class="am-form-group code">
							<label class="am-form-label" for="user-code">验证码</label>
							<div class="am-form-content" style="width:440px;">
								<input type="tel" placeholder="短信验证码" id="phone" name="zhi_code" style="width:340px;">
							</div>
							<a id="sendMobileCode" onclick="get_mobile_code();" href="javascript:void(0);" class="">
								<div class="am-btn am-btn-danger" style="position:relative;left:440px;top:-32px;"><span id="dyMobileButton">获取</span></a></div>
							</a>
						</div>
						<div class="am-form-group">
							<label class="am-form-label" for="user-password">支付密码</label>
							<div class="am-form-content">
								<input type="tel" placeholder="6位数字" id="user-password" name="zhipassword">
							</div>
						</div>
						<div class="am-form-group">
							<label class="am-form-label" for="user-confirm-password">确认密码</label>
							<div class="am-form-content">
								<input type="tel" placeholder="请再次输入上面的密码" id="user-confirm-password" name="rezhipassword">
							</div>
						</div>
						<div class="info-btn">
							<div class="am-btn "><input type="image" src="/h/images/xiugai.png"></div>
						</div>

					</form>

				<!-- </div> -->
@endsection
