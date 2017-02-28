@extends('home.layout.geren')
@section('css')
	
@endsection
@section('content')
	<!-- <div class="main-wrap"> -->

	<div class="user-bill">
		<!--标题 -->
		<div class="am-cf am-padding">
			<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">账单</strong> / <small>Electronic&nbsp;bill</small></div>
		</div>
		<hr>

		<div class="ebill-section">
			<div class="ebill-title-section">
				<h2 class="trade-title section-title">
                                                                                                                     交易
            <span class="desc">（金额单位：元）</span>
        </h2>

				<div class=" ng-scope">
					<div class="trade-circle-select  slidedown-">
						<a class="current-circle ng-binding" href="javascript:void(0);">2017/02/01 -{{date('Y/m/d',time())}}</a>

					</div>
					<span class="title-tag"><i class="num ng-binding">{{date('m',time())}}</i>月</span>
				</div>
			</div>
			
			<div class="module-income ng-scope">
				<div class="income-slider ">
					
					
					<div class="block-income block  fn-left">
						<h3 class="income-title block-title">
                                                                                          支出
                      <span class="num ng-binding">
                              774.0
                       </span>
                    <span class="desc ng-binding">
                           <a href="billlist.html">查看支出明细</a>
                         </span>
                             </h3>

						<div class="catatory-details  fn-hide shopping" ng-class="shoppingChart">
							<!-- <div class="catatory-chart fn-left fn-hide">
								<div class="title">类型</div>
								<ul>


								</ul>
							</div> -->
							<div class="catatory-detail fn-left">
								<div class="title ng-binding">
									购买商品
								</div>
								
								<ul>
								@foreach($data as $k => $v)
								@if($v['ostatus'] != '待付款')
									<li class="ng-scope  delete-false">

										<div class="  ng-scope">
											<a title="呢子大衣" class="text fn-left " href="#">
												<span class="emoji-span ng-binding">{{$v['goodsname'] or ''}}</span>
												<span class="amount fn-right ng-binding">{{ $v['gprice']*$v['gnum']+10 or ''}}</span>
											</a>
										</div>
									</li>

									@endif
									@endforeach
								</ul>
								
							</div>
						</div>
					</div>
					
					<div class="block-expense block  fn-left">
						<div class="slide-button right"></div>
					</div>
					<div class="clear"></div>

					<!--收入-->
					<h3 class="expense income-title block-title">
                                                                   
                      <span class="num ng-binding">
                              7000.00
                       </span>
                    <span class="desc ng-binding">
                           <a href="billlist.html">查看收入明细</a>
                    </span>
                </h3>
				</div>

				<!--消费走势-->
				<!-- <div class="module-consumeTrend inner-module">
					<h3 class="module-title">消费走势</h3>
					<div class="consumeTrend-chart" id="consumeTrend-chart">

					</div>
				</div> -->

				<!--银行卡使用情况-->

				<div class="module-card inner-module">
					<h3 class="module-title">银行卡使用情况</h3>
					<div class="card-chart valid">
						<div class="cards-carousel">
							<div class="mask">

								<div class="bac fn-left"></div>
								<div style="background-image: url(/h/images/combo.png);" class="bank ng-binding">中国农业银行</div>
								<div class="details">
									<a>查看详情</a>
								</div>
							</div>
						</div>
						<div class="cards-details">
							<div class="bank-name">
								<div style="background-image: url(/h/images/combo.png);" class="name fn-left"></div>
								<span class="close fn-right"><a>X</a></span>
							</div>
							<div class="bank-detail">
								<div class="totalin fn-left">
									<span class="fn-left">流入</span>
									<span class="amount fn-right">7000.00</span>
								</div>
								<div class="totalout fn-left">
									<span class="fn-left">流出</span>
									<span class="amount fn-right">4500.00</span>
								</div>
								<div class="expand fn-left">
									<span class="fn-left">支出</span>
									<span class="amount fn-right">1200.00</span>
								</div>
								<div class="withdraw fn-left">
									<span class="fn-left">提现</span>
									<span class="amount fn-right">
			                                500.00
            						</span>
								</div>
								<div class="recharge fn-left">
									<span class="fn-left">充值</span>
									<span class="amount fn-right">
                                           1000.00
            						</span>
								</div>

								<div class="refund fn-left">
									<span class="fn-left">银行卡退款</span>
									<span class="amount fn-right ">200.00</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<script>
					$(document).ready(function (ev) {
				
					    $('.cards-carousel .details').on('click', function (ev) {
				             $('.cards-details').css("display","block");
				             $('.cards-carousel').css("display","none");								 
					    });									   									    
				
					    $('.cards-details .close').on('click', function (ev) {
				             $('.cards-details').css("display","none");
				             $('.cards-carousel').css("display","block");								 
					    });									    
					    									   								    
					});
				</script>

			</div>

		</div>

	</div>
<!-- </div> -->
@endsection