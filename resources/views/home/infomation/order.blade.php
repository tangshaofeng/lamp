@extends('home.layout.geren')

@section('content')
<!-- <div class="user-order"> -->

						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">订单管理</strong> / <small>Order</small></div>
						</div>
						<hr>

						<div data-am-tabs="" class="am-tabs am-tabs-d2 am-margin">

							<ul class="am-avg-sm-5 am-tabs-nav am-nav am-nav-tabs">
								<li class="am-active"><a href="#tab1">所有订单</a></li>
								<li><a href="#tab2">待付款</a></li>
								<li><a href="#tab3">待发货</a></li>
								<li><a href="#tab4">待收货</a></li>
								<li><a href="#tab5">待评价</a></li>
							</ul>

							<div class="am-tabs-bd">
									<!-- 所有订单 -->
								<div id="tab1" class="am-tab-panel am-fade am-in am-active">
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

										<div class="order-list">
											
											<!--交易成功-->@foreach($data as $k=>$v)
											<div class="order-status5">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="javascript:;">{{$v['ordernum'] }}</a></div>
													<span>成交时间：{{$v['otime'] }}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="#" class="J_MakePoint">
																<img src="/upload/image/{{$v['gpic']}}" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="#">
																			<p>{!!$v['ginfo']!!}</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br/>包装：正规包装 </p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																	{{$v['gprice'] }}
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$v['gnum'] }}
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">
																	
																</div>
															</li>
														</ul>

														
													</div>
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
																合计：{{$v['gprice']*$v['gnum']+10 }}
																<p>含运费：<span>10.00</span></p>
															</div>
														</li>
														<div class="move-right">
															<li class="td td-status">
																<div class="item-status">
																	<p class="Mystatus">{{$v['ostatus']}}</p>
																	<p class="order-info"><a href="orderinfo.html">订单详情</a></p>
																	<p class="order-info"><a href="logistics.html">查看物流</a></p>
																</div>
															</li>
															<li class="td td-change">
																<div class="am-btn am-btn-danger anniu">
																<a href="/home/infomation/delete/{{$v['id']}}">删除订单</a>	</div>
															</li>
														</div>
													</div>
												</div>
											</div>
											@endforeach
											
											
											
										 
										</div>

									</div>

								</div>
								<!-- 待付款 -->
								<div id="tab2" class="am-tab-panel am-fade">

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
										<div class="order-list">
											@foreach($data as $kk=>$vv)
											@if($vv['ostatus'] == '待付款')
											<div class="order-status1">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="javascript:;">{{ $vv['ordernum']}}</a></div>
													<span>成交时间：{{ $vv['otime']}}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a class="J_MakePoint" href="#">
																		<img class="itempic J_ItemImg" src="/upload/image/{{$vv['gpic']}}">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="#">
																			<p>{{ $vv['ginfo']}}</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：正品包装 </p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																	{{$vv['gprice']}}
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$vv['gnum']}}
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">

																</div>
															</li>
														</ul>

														
													
													</div>
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
																合计：{{$vv['gprice']*$vv['gnum']+10 }}
																<p>含运费：<span>10.00</span></p>
															</div>
														</li>
														<div class="move-right">
															<li class="td td-status">
																<div class="item-status">
																	<p class="Mystatus">等待买家付款</p>
																	<!-- <p class="order-info"><a href="#">取消订单</a></p> -->

																</div>
															</li>
															<li class="td td-change">
																<a href="pay.html">
																<div class="am-btn am-btn-danger anniu">
																<a href="/home/infomation/pay/{{$vv['id']}}">一键支付</a>	</div></a>
															</li>
														</div>
													</div>

												</div>
											</div>
											@endif
												@endforeach
										</div>

									</div>
								</div>
								<!-- 待发货 -->
								<div id="tab3" class="am-tab-panel am-fade">
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
										<div class="order-list">
											@foreach($data as $kkk=>$vvv)
											@if($vvv['ostatus'] == '待发货')
											<div class="order-status2">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="javascript:;">{{$vvv['ordernum'] }}</a></div>
													<span>成交时间：{{$vvv['otime'] }}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a class="J_MakePoint" href="#">
																		<img class="itempic J_ItemImg" src="/upload/image/{{$vvv['gpic']}}">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="#">
																			<p>{!!$vvv['ginfo']!!}</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																	{{$vvv['gprice'] }}
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$vvv['gnum'] }}
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">
																	<a href="refund.html">退款</a>
																</div>
															</li>
														</ul>

														
													</div>
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
																合计：{{$vvv['gprice']*$vvv['gnum']+10 }}
																<p>含运费：<span>10.00</span></p>
															</div>
														</li>
														<div class="move-right">
															<li class="td td-status">
																<div class="item-status">
																	<p class="Mystatus">买家已付款</p>
																	<p class="order-info"><a href="orderinfo.html">订单详情</a></p>
																</div>
															</li>
															<li class="td td-change">
																<div class="am-btn am-btn-danger anniu">
																	提醒发货</div>
															</li>
														</div>
													</div>
												</div>
											</div>
											@endif
											@endforeach

										</div>
									</div>
								</div>
								<!-- 待收货 -->
								<div id="tab4" class="am-tab-panel am-fade">
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
										<div class="order-list">
											@foreach($data as $q=>$a)
											@if($a['ostatus'] == '待收货')
											<div class="order-status2">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="javascript:;">{{$a['ordernum'] }}</a></div>
													<span>成交时间：{{$a['otime'] }}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a class="J_MakePoint" href="#">
																		<img class="itempic J_ItemImg" src="/upload/image/{{$a['gpic']}}">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="#">
																			<p>{!!$a['ginfo']!!}</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																	{{$a['gprice'] }}
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$a['gnum'] }}
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">
																	<a href="refund.html">退款</a>
																</div>
															</li>
														</ul>

														
													</div>
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
																合计：{{$a['gprice']*$a['gnum']+10 }}
																<p>含运费：<span>10.00</span></p>
															</div>
														</li>
														<div class="move-right">
															<li class="td td-status">
																<div class="item-status">
																	<p class="Mystatus">买家已付款</p>
																	<p class="order-info"><a href="orderinfo.html">订单详情</a></p>
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
											@endif
											@endforeach										</div>
									</div>
								</div>
								<!-- 待评价 -->
								<div id="tab5" class="am-tab-panel am-fade">
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
										<div class="order-list">
											<!--不同状态的订单	-->
											@foreach($data as $w=>$z)
											@if($z['ostatus'] == '待评价' ||  $z['ostatus'] == '已收货')
											<div class="order-status2">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="javascript:;">{{$z['ordernum'] }}</a></div>
													<span>成交时间：{{$z['otime'] }}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a class="J_MakePoint" href="#">
																		<img class="itempic J_ItemImg" src="/upload/image/{{$z['gpic']}}">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="#">
																			<p>{!!$z['ginfo']!!}</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																	{{$z['gprice'] }}
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$z['gnum'] }}
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">
																	<a href="refund.html">退款</a>
																</div>
															</li>
														</ul>

														
													</div>
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
																合计：{{$z['gprice']*$z['gnum']+10 }}
																<p>含运费：<span>10.00</span></p>
															</div>
														</li>
														<div class="move-right">
															<li class="td td-status">
																<div class="item-status">
																	<p class="Mystatus">买家已收货</p>
																	<p class="order-info"><a href="home/comment/add/{{ $z['gid']}}">订单详情</a></p>
																</div>
															</li>
															<li class="td td-change">
																<div class="am-btn am-btn-danger anniu">
																	评价商品</div>
															</li>
														</div>
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