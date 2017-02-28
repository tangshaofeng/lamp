@extends('home.layout.geren')

@section('content')
	<!-- <div class="main-wrap"> -->

					<!--标题 -->
	<div class="user-safety">
		<div class="am-cf am-padding">
			<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">账户安全</strong> / <small>Set&nbsp;up&nbsp;Safety</small></div>
		</div>
		<hr>

		<!--头像 -->
		<div class="user-infoPic">

			<div class="filePic" style="width:140px;">
				@if(session('aaa')['userpic'])
				<img alt="" src="/upload/image/{{ session('aaa')['userpic'] }}" class="am-circle am-img-thumbnail">
				@else
				<img alt="" src="/touxiang.jpg" class="am-circle am-img-thumbnail" style="position:relative;left:20px;">
				@endif
			</div>

			<p class="am-form-help">头像</p>

			<div class="info-m">
				<div><b>用户名：<i>{{session('aaa')['phonenum'] or session('aaa')['phonenum']}}</i></b></div>
				<div class="u-level">
					<span class="rank r2">
	             <s class="vip1"></s><a href="#" class="classes">{{session('aaa')['userqx']}}</a>
		            </span>
				</div>
				<div class="u-safety">
					<a href="safety.html">
					 账户安全
					<span class="u-profile"><i width="0" style="width: 60px;" class="bc_ee0000">60分</i></span>
					</a>
				</div>
			</div>
		</div>

		<div class="check">
			<ul>
				<li>
					<i class="i-safety-lock"></i>
					<div class="m-left">
						<div class="fore1">登录密码</div>
						<div class="fore2"><small>为保证您购物安全，建议您定期更改密码以保护账户安全。</small></div>
					</div>
					<div class="fore3">
						<a href="/home/infomation/password/{{7}}">
							<div class="am-btn am-btn-secondary">修改</div>
						</a>
					</div>
				</li>
				<li>
					<i class="i-safety-wallet"></i>
					<div class="m-left">
						<div class="fore1">支付密码</div>
						<div class="fore2"><small>启用支付密码功能，为您资产账户安全加把锁。</small></div>
					</div>
					<div class="fore3">
						<a href="/home/infomation/setpay">
							<div class="am-btn am-btn-secondary">立即启用</div>
						</a>
					</div>
				</li>
				
			
				
				
			</ul>
		</div>

	</div>
<!-- </div> -->
@endsection