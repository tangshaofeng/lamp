@extends('home.layout.geren')

@section('content')
	<!-- <div class="main-wrap"> -->

					<div class="am-cf am-padding">
						<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">修改密码</strong> / <small>Password</small></div>
					</div>
					<hr>
					<!--进度条-->
					<div class="m-progress">
						<div class="m-progress-list">
							<span class="step-1 step">
                                <em class="u-progress-stage-bg"></em>
                                <i class="u-stage-icon-inner">1<em class="bg"></em></i>
                                <p class="stage-name">重置密码</p>
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
					<form class="am-form am-form-horizontal" method="post" action="/home/infomation/passwords">
									{{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $id }}">
						<div class="am-form-group">
							<label class="am-form-label" for="user-old-password">原密码</label>
							<div class="am-form-content">
								<input type="password" placeholder="请输入原登录密码" id="user-old-password" name="password">
							</div>
						</div>
						<div class="am-form-group">
							<label class="am-form-label" for="user-new-password">新密码</label>
							<div class="am-form-content">
								<input type="password" placeholder="由数字、字母组合" id="user-new-password" name="xinpassword">
							</div>
						</div>
						<div class="am-form-group">
							<label class="am-form-label" for="user-confirm-password">确认密码</label>
							<div class="am-form-content">
								<input type="password" placeholder="请再次输入上面的密码" id="user-confirm-password" name="repassword">
							</div>
						</div>
						<div class="info-btn">
							<div class="am-btn am-btn-danger"><input type="image" src="/h/image/submit1.jpg"></div>
						</div>

					</form>

				<!-- </div> -->
@endsection