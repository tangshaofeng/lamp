@extends('home.layout.geren')

@section('content')
	<!-- <div class="main-wrap"> -->

					<div class="user-orderinfo">

						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">订单详情</strong> / <small>Order&nbsp;details</small></div>
						</div>
						<hr>
						<!--进度条-->
				
						<div class="order-infoaside">
							<div class="order-logistics">
								<a href="logistics.html">
									<div class="icon-log">
										<i><img src="/upload/image/{{$arr['gpic']}}"></i>
									</div>
									</a><div class="latest-logistics"><a href="logistics.html">
										<p class="text">已签收,签收人是青年城签收，感谢使用天天快递，期待再次为您服务</p>
										<div class="time-list">
											<span class="date">{{date('Y-m-d',time())}}</span><span class="week">周六</span><span class="time">{{date('H:i:s',time())}}</span>
										</div>
										</a><div class="inquire"><a href="logistics.html">
											<span class="package-detail">物流：天天快递</span>
											<span class="package-detail">快递单号: </span>
											<span class="package-number">{{$arr['ordernum']}}</span>
											<!-- </a><a href="chakan">查看</a> -->
										</div>
									</div>
									<span class="am-icon-angle-right icon"></span>
								
								<div class="clear"></div>
							</div>
							<div class="order-addresslist">
								<div class="order-address">
									<div class="icon-add">
									</div>
									<p class="new-tit new-p-re">
										<span class="new-txt">{{$data['oname']}}</span>
										<span class="new-txt-rd2">{{$data['ophone']}}</span>
									</p>
									<div class="new-mu_l2a new-p-re">
										<p class="new-mu_l2cw">
											<span class="title">收货地址：</span>
											<span class="province">{{$data['province']}}</span>
											<span class="city">{{$data['country']}}</span>
											<span class="dist">{{$data['town']}}</span>
											<span class="street">{{$data['addr']}}</span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="order-infomain">

							<div class="order-top">
								<div class="th th-item">
									商品
								</div>
								<div class="th th-price">
									单价
								</div>
								<div class="th th-number">
									数量
								</div>
								<div class="th th-operation">
									商品操作
								</div>
								<div class="th th-amount">
									合计
								</div>
								<div class="th th-status">
									交易状态
								</div>
								<div class="th th-change">
									交易操作
								</div>
							</div>

							<div class="order-main">

								<div class="order-status3">
									<div class="order-title">
										<div class="dd-num">订单编号：<a href="javascript:;">{{$arr['ordernum']}}</a></div>
										<span>成交时间：{{$arr['otime']}}</span>
										<!--    <em>店铺：小桔灯</em>-->
									</div>
									<div class="order-content">
										<div class="order-left">
											<ul class="item-list">
												<li class="td td-item">
													<div class="item-pic">
														<a class="J_MakePoint" href="#">
															<img class="itempic J_ItemImg" src="/upload/image/{{$arr['gpic']}}">
														</a>
													</div>
													<div class="item-info">
														<div class="item-basic-info">
															<a href="#">
																<p>{{$arr['ginfo']}}</p>
																<p class="info-little">颜色：12#川南玛瑙
																	<br>包装：裸装 </p>
															</a>
														</div>
													</div>
												</li>
												<li class="td td-price">
													<div class="item-price">
														{{$arr['gprice']}}
													</div>
												</li>
												<li class="td td-number">
													<div class="item-number">
														<span>×</span>{{$arr['gnum']}}
													</div>
												</li>
												<li class="td td-operation">
													<div class="item-operation">
														退款/退货
													</div>
												</li>
											</ul>

										
										</div>
										<div class="order-right">
											<li class="td td-amount">
												<div class="item-amount">
													合计：{{$arr['gprice']*$arr['gnum']+10}}
													<p>含运费：<span>10.00</span></p>
												</div>
											</li>
											<div class="move-right">
												<li class="td td-status">
													<div class="item-status">
														<p class="Mystatus">卖家已发货</p>
														<p class="order-info"><a href="logistics.html">查看物流</a></p>
														<p class="order-info"><a href="#">延长收货</a></p>
													</div>
												</li>
												<li class="td td-change">
													<div class="am-btn am-btn-danger anniu">
														确认收货</div>
												</li>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>

				<!-- </div> -->
@endsection