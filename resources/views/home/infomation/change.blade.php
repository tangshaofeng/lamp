@extends('home.layout.geren')

@section('content')
	<!-- <div class="main-wrap"> -->

	<div class="user-order">

		<!--标题 -->
		<div class="am-cf am-padding">
			<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">退换货管理</strong> / <small>Change</small></div>
		</div>
		<hr>

		<div data-am-tabs="" class="am-tabs am-tabs-d2 am-margin">

			<ul class="am-avg-sm-2 am-tabs-nav am-nav am-nav-tabs">
				<li class="am-active"><a href="#tab1">退款管理</a></li>
				<li class=""><a href="#tab2">售后管理</a></li>

			</ul>

			<div class="am-tabs-bd">
				<div id="tab1" class="am-tab-panel am-fade am-active am-in">
					<div class="order-top">
						<div class="th th-item">
							商品
						</div>
						<div class="th th-orderprice th-price">
							交易金额
						</div>
						<div class="th th-changeprice th-price">
							退款金额
						</div>
						<div class="th th-status th-moneystatus">
							交易状态
						</div>
						<div class="th th-change th-changebuttom">
							交易操作
						</div>
					</div>
					
					<div class="order-main">
					@foreach($arr as $k=>$v)
					@if($v['ostatus'] == '退款')
						<div class="order-list">
							<div class="order-title">
								<div class="dd-num">退款编号：<a href="javascript:;">{{$v['ordernum']}}</a></div>
								<span>申请时间：{{$v['otime']}}</span>
								<!--    <em>店铺：小桔灯</em>-->
							</div>
							<div class="order-content">
								<div class="order-left">
									<ul class="item-list">
										<li class="td td-item">
											<div class="item-pic">
												<a class="J_MakePoint" href="#">
													<img class="itempic J_ItemImg" src="/upload/image/{{$v['gpic']}}">
												</a>
											</div>
											<div class="item-info">
												<div class="item-basic-info">
													<a href="#">
														<p>{{$v['ginfo']}}</p>
														<p class="info-little">颜色：12#川南玛瑙
															<br>包装：裸装 </p>
													</a>
												</div>
											</div>
										</li>

										<ul class="td-changeorder">
											<li class="td td-orderprice">
												<div class="item-orderprice" style="position: absolute;top:60px;text-align: center;">
													<span>交易金额：</span>{{$v['gprice']*$v['gnum']+10}}
												</div>
											</li>
											<li class="td td-changeprice">
												<div class="item-changeprice" style="position: absolute;top:60px;text-align: center;">
													<span>退款金额：</span>{{$v['gprice']*$v['gnum']}}
												</div>
											</li>
										</ul>
										<div class="clear"></div>
									</ul>

									<div class="change move-right">
										<li class="td td-moneystatus td-status">
											<div class="item-status" style="position: relative;top:40px;text-align: center;">
												<p class="Mystatus">退款成功</p>

											</div>
										</li>
									</div>
									<li class="td td-change td-changebutton">
										<a href="/home/infomation/record/{{$v['id']}}">
										<div class="am-btn am-btn-danger anniu" style="position: relative;top:50px;text-align: center;">
											钱款去向</div>
										</a>
									</li>

								</div>
							</div>
						</div>
						@endif
					@endforeach
					</div>
				

				</div>
				<div id="tab2" class="am-tab-panel am-fade">
					<div class="order-top">
						<div class="th th-item">
							商品
						</div>
						<div class="th th-orderprice th-price">
							交易金额
						</div>
						<div class="th th-changeprice th-price">
							退款金额
						</div>
						<div class="th th-status th-moneystatus">
							交易状态
						</div>
						<div class="th th-change th-changebuttom">
							交易操作
						</div>
					</div>

					<div class="order-main">
					@foreach($arr as $k=>$v)
					@if($v['ostatus'] == '退款')
						<div class="order-list">
							<div class="order-title">
								<div class="dd-num">退款编号：<a href="javascript:;">{{$v['ordernum']}}</a></div>
								<span>申请时间：{{$v['otime']}}</span>
								<!--    <em>店铺：小桔灯</em>-->
							</div>
							<div class="order-content">
								<div class="order-left">
									<ul class="item-list">
										<li class="td td-item">
											<div class="item-pic">
												<a class="J_MakePoint" href="#">
													<img class="itempic J_ItemImg" src="/upload/image/{{$v['gpic']}}">
												</a>
											</div>
											<div class="item-info">
												<div class="item-basic-info">
													<a href="#">
														<p>{{$v['ginfo']}}</p>
														<p class="info-little">颜色：蓝色玛瑙
															<br>包装：正规包装 </p>
													</a>
												</div>
											</div>
										</li>

										<ul class="td-changeorder">
											<li class="td td-orderprice" >
												<div class="item-orderprice" style="position: absolute;top:60px;text-align: center;" >
													<span>交易金额：</span>{{$v['gprice']*$v['gnum']+10}}
												</div>
											</li>
											<li class="td td-changeprice" style="position: absolute;top:60px;text-align: center;" >
												<div class="item-changeprice"  >
													<span>退款金额：</span>{{$v['gprice']*$v['gnum']}}
												</div>
											</li>
										</ul>
										<div class="clear"></div>
									</ul>

									<div class="change move-right">
										<li class="td td-moneystatus td-status">
											<div class="item-status">
												<p class="Mystatus" style="position: relative;top:50px;text-align: center;">退款成功</p>

											</div>
										</li>
									</div>
									<li class="td td-change td-changebutton">
										<a href="/home/infomation/record/{{$v['id']}}">
										<div class="am-btn am-btn-danger anniu" style="position: absolute;top: 60px;">
											钱款去向</div>
										</a>
									</li>

								</div>
							</div>
						</div>
						@endif
					@endforeach
					</div>

				</div>

			</div>

		</div>
	</div>

<!-- </div> -->
@endsection