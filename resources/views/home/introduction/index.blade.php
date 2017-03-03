@extends ('home.layout.index')

@section('title')
商品详情页
@endsection

@section('css')
		<!-- <link href="/h/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />
		<link href="/h/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="/h/basic/css/demo.css" rel="stylesheet" type="text/css" /> -->
		<link type="text/css" href="/h/css/optstyle.css" rel="stylesheet" />
		<link type="text/css" href="/h/css/style.css" rel="stylesheet" />
<<<<<<< HEAD
@endsection

@section('script')
=======
		<script type="text/javascript" src="/h/js/jquery-1.8.3.min.js"></script>
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
		<script type="text/javascript" src="/h/basic/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="/h/basic/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/h/basic/js/quick_links.js"></script>
<<<<<<< HEAD
=======

>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
		<script type="text/javascript" src="/h/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		<script type="text/javascript" src="/h/js/jquery.imagezoom.min.js"></script>
		<script type="text/javascript" src="/h/js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="/h/js/list.js"></script>
@endsection

@section('contents')

			<div class="clear"></div>
			<b class="line"></b>
           <div class="search">
			<div class="search-list">
			<div class="nav-table">
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="#">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
						</div>
			</div>
	<ol class="am-breadcrumb am-breadcrumb-slash">
		<li><a href="#">首页</a></li>
		<li><a href="#">分类</a></li>
		<li class="am-active">内容</li>
	</ol>
	<script type="text/javascript">
		$(function() {});
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<div class="scoll">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="/h/images/01.jpg" title="pic" />
					</li>
					<li>
						<img src="/h/images/02.jpg" />
					</li>
					<li>
						<img src="/h/images/03.jpg" />
					</li>
				</ul>
			</div>
		</section>
	</div>

	<!--放大镜-->
	
	<div class="item-inform">
		<div class="clearfixLeft" id="clearcontent">

			<div class="box">
				<script type="text/javascript">
					$(document).ready(function() {
						$(".jqzoom").imagezoom();
						$("#thumblist li a").click(function() {
							$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
							$(".jqzoom").attr('src', $(this).find("img").attr("mid"));
							$(".jqzoom").attr('rel', $(this).find("img").attr("big"));
						});
					});
				</script>
				<div class="tb-booth tb-pic tb-s310">
					<a href="/upload/image/{{ $data['gphoto'] }}"><img src="/upload/image/{{ $data['gphoto'] }}" alt="细节展示放大镜特效" rel="/upload/image/{{ $data['gphoto'] }}" class="jqzoom" /></a>
				</div>
				<ul class="tb-thumb" id="thumblist">
					<li class="tb-selected">
						<div class="tb-pic tb-s40">
							<a href="#"><img src="/upload/image/{{ $data['gphoto'] }}" mid="/upload/image/{{ $data['gphoto'] }}" big="/upload/image/{{ $data['gphoto'] }}"></a>
						</div>
					</li>
					@if($data['gphoto2'])
					<li>
						<div class="tb-pic tb-s40">
							<a href="#"><img src="/upload/image/{{ $data['gphoto2'] }}" mid="/upload/image/{{ $data['gphoto2'] }}" big="/upload/image/{{ $data['gphoto2'] }}"></a>
						</div>
					</li>
					@endif
					@if($data['gphoto3'])
					<li>
						<div class="tb-pic tb-s40">
							<a href="#"><img src="/upload/image/{{ $data['gphoto3'] }}" mid="/upload/image/{{ $data['gphoto3'] }}" big="/upload/image/{{ $data['gphoto3'] }}"></a>
						</div>
					</li>
					@endif
					@if($data['gphoto3'])
					<li>
						<div class="tb-pic tb-s40">
							<a href="#"><img src="/upload/image/{{ $data['gphoto4'] }}" mid="/upload/image/{{ $data['gphoto4'] }}" big="/upload/image/{{ $data['gphoto4'] }}"></a>
						</div>
					</li>
					@endif
				</ul>
			</div>

			<div class="clear"></div>
		</div>

		<div class="clearfixRight">

			<!--规格属性-->
			<!--名称-->
			<div class="tb-detail-hd">
				<h1>	
	 {{ $data['goodsname'] }}
  </h1>
			</div>
			<div class="tb-detail-list">
				<!--价格-->
				<div class="tb-detail-price">
					<li class="price iteminfo_price">
						<dt>价格</dt>
						<dd><em>¥</em><b class="sys_item_price">{{ $data['gmoney'] }}</b>  </dd>                                 
					</li>
					
					<div class="clear"></div>
				</div>

				<!--地址-->
				<dl class="iteminfo_parameter freight">
					<dt>快递</dt><div class="pay-logis">
							<b class="sys_item_freprice">10</b>元
						</div>
					
				</dl>
				<div class="clear"></div>

				<!--销量-->
				<ul class="tm-ind-panel">
					<li class="tm-ind-item tm-ind-sumCount canClick">
						<div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count">{{ $data['xiaoliang'] }}</span></div>
					</li>
					<li class="tm-ind-item tm-ind-reviewCount canClick tm-line3">
						<div class="tm-indcon"><span class="tm-label">累计评价</span><span class="tm-count">640</span></div>
					</li>
				</ul>
				<div class="clear"></div>

				<!--各种规格-->
				<dl class="iteminfo_parameter sys_item_specpara">
					<dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>
					<dd>
						<!--操作页面-->

						<div class="theme-popover-mask"></div>

						<div class="theme-popover">
							<div class="theme-span"></div>
							<div class="theme-poptit">
								<a href="javascript:;" title="关闭" class="close">×</a>
							</div>
							<div class="theme-popbod dform">
								<form class="theme-signin" name="loginform" action="/home/infomation/index" method="post">
									{{csrf_field()}}
									<div class="theme-signin-left">
										<div class="theme-options">
											<div class="cart-title number">数量</div>
											<dd>
												<input id="min" class="am-btn am-btn-default" name="" type="button" value="-" />
												<input id="text_box" name="numeric" type="text" value="1" style="width:30px;" />
												<input id="add" class="am-btn am-btn-default" name="" type="button" value="+" />
												<span id="Stock" class="tb-hidden">库存<span class="stock">{{ $data['kucun'] }}</span>件</span>
											</dd>
									
										</div>
										<div class="clear"></div>

										<div class="btn-op">
											<div class="btn am-btn am-btn-warning">确认</div>
											<div class="btn close am-btn am-btn-warning">取消</div>
										</div>
									</div>
									<div class="theme-signin-right">
										<div class="img-info">
											<img src="images/songzi.jpg" />
										</div>
										<div class="text-info">
											<span class="J_Price price-now">¥39.00</span>
											<span id="Stock" class="tb-hidden">库存<span class="stock">111</span>件</span>
										</div>
									</div>

								
							</div>
						</div>

<<<<<<< HEAD
					</dd>
				</dl>
				<div class="clear"></div>
				<!--活动	-->
				<div class="shopPromotion gold">
					<div class="hot">
						<dt class="tb-metatit">店铺优惠</dt>
						<div class="gold-list">
							<p>购物满2件打8折，满3件7折<span>点击领券<i class="am-icon-sort-down"></i></span></p>
=======
						<div class="pay">
							<div class="pay-opt">
							<a href="home.html"><span class="am-icon-home am-icon-fw">首页</span></a>
							<a><span class="am-icon-heart am-icon-fw">收藏</span></a>
							
							</div>
							<li>
								<div class="clearfix tb-btn tb-btn-buy theme-login">
									<a id="LikBuy" title="点此按钮到下一步确认购买信息" href="/home/infomation/add">立即购买</a>
								</div>
							</li>
							<li>
								<div class="clearfix tb-btn tb-btn-basket theme-login">
									<a id="LikBasket" title="加入购物车" href="/home/shopcar/add"><i></i>加入购物车</a>
								</div>
							</li>
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
						</div>
					</div>
					<div class="clear"></div>
					<div class="coupon">
						<dt class="tb-metatit">优惠券</dt>
						<div class="gold-list">
							<ul>
								<li>125减5</li>
								<li>198减10</li>
								<li>298减20</li>
							</ul>
						</div>
					</div>
				</div>
<<<<<<< HEAD
			</div>
=======
				<script>
					setInterval(function(){
						$('#LikBuy').html('<a id="LikBuy" title="点此按钮到下一步确认购买信息" href="/home/infomation/add?count='+$('#text_box').val()+'&gid='+{{ $data['id'] }}+'">立即购买</a>')
						$('#LikBasket').html('<a id="LikBasket" title="加入购物车" href="/home/shopcar/add?count='+$('#text_box').val()+'&gid='+{{ $data['id'] }}+'&gmoney='+{{ $data['gmoney'] }}+'"><i></i>加入购物车</a>')
					},500);
				
				</script>
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a

			<div class="pay">
				<div class="pay-opt">
				<a href="home.html"><span class="am-icon-home am-icon-fw">首页</span></a>
				<a><span class="am-icon-heart am-icon-fw">收藏</span></a>
				
				</div>
				<li>
					<a class="collection" href="javascript:;">
						<input type="hidden" class="gid" value="{{$gid}}">
						<img src="/h/images/collection.png" alt="" style="margin-top:6px;">
					</a>
				</li>
				<li>
					<div class="clearfix tb-btn tb-btn-buy theme-login" style="margin-left:10px">
						<a id="LikBuy" title="点此按钮到下一步确认购买信息" href="/home/infomation/add">立即购买</a>
					</div>
				</li>
				<li>
					<div class="clearfix tb-btn tb-btn-basket theme-login">
						<a id="LikBasket" title="加入购物车" href="/home/shopcar/add"><i></i>加入购物车</a>
						@if(session('error'))
							<div class="tixing" style="margin-left:120px;width:150px;background:red;height:30px;text-align:center;">
	    						{{ session('error') }}
				            </div>
			            @endif
			            @if(session('success'))
				            <div class="tixing" style="margin-left:120px;width:150px;background:green;height:30px;text-align:center;">
				                {{ session('success') }}
				            </div>
			            @endif
					</div>
				</li>
			</div>
				
		</div>
		</form>
		<div class="clear"></div>

	</div>
	<script>
		$('.tixing').click(function(){
			$(this).attr('style','display:none;');
		});
		setInterval(function(){
			$('#LikBuy').html('<a id="LikBuy" title="点此按钮到下一步确认购买信息" href="/home/infomation/add?count='+$('#text_box').val()+'&gid='+{{ $data['id'] }}+'">立即购买</a>')
						$('#LikBasket').html('<a id="LikBasket" title="加入购物车" href="/home/shopcar/add?count='+$('#text_box').val()+'&gid='+{{ $data['id'] }}+'&gmoney='+{{ $data['gmoney'] }}+'"><i></i>加入购物车</a>')
		},500);
		
		$('.collection').click(function(){
			// 获取商品的id值
			var i = $('.gid').val();
			// ajax进行商品id传输
			$.get('/home/collection/add/'+i,function(msg){
				alert(msg);
			});
		});
	</script>

	
				
	<!-- introduce-->

	<div class="introduce">
		<div class="browse">
		    <div class="mc"> 
			     <ul>					    
			     	<div class="mt">            
			            <h2>看了又看</h2>        
		            </div>					      
			     </ul>					
		    </div>
		</div>
		<div class="introduceMain">
			<div class="am-tabs" data-am-tabs>
				<ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs">
					<li class="am-active">
						<a href="#">

							<span class="index-needs-dt-txt">宝贝详情</span></a>

					</li>

					<li>
						<a href="#">

							<span class="index-needs-dt-txt">全部评价</span></a>

					</li>

					<li>
						<a href="#">

							<span class="index-needs-dt-txt">猜你喜欢</span></a>
					</li>
				</ul>

				<div class="am-tabs-bd">

					<div class="am-tab-panel am-fade am-in am-active">
						{!! $data['ginfo'] !!}

					</div>

					<div class="am-tab-panel am-fade">
						
                        <div class="actor-new">
                        	<div class="rate">                
                        		<strong>100<span>%</span></strong><br> <span>好评度</span>            
                        	</div>
                            <dl>                    
                                <dt>买家印象</dt>                    
                                <dd class="p-bfc">
                                			<q class="comm-tags"><span>味道不错</span><em>(2177)</em></q>
                                </dd>                                           
                             </dl> 
                        </div>	
                        <div class="clear"></div>
						<div class="tb-r-filter-bar">
							<ul class=" tb-taglist am-avg-sm-4">
								<li class="tb-taglist-li tb-taglist-li-current">
									<div class="comment-info">
										<span>全部评价</span>
										<span class="tb-tbcr-num">(32)</span>
									</div>
								</li>

								<li class="tb-taglist-li tb-taglist-li-1">
									<div class="comment-info">
										<span>好评</span>
										<span class="tb-tbcr-num">(32)</span>
									</div>
								</li>

								<li class="tb-taglist-li tb-taglist-li-0">
									<div class="comment-info">
										<span>中评</span>
										<span class="tb-tbcr-num">(32)</span>
									</div>
								</li>

								<li class="tb-taglist-li tb-taglist-li--1">
									<div class="comment-info">
										<span>差评</span>
										<span class="tb-tbcr-num">(32)</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="clear"></div>

<<<<<<< HEAD
						
						<!-- 评论内容遍历 -->
							@foreach($comment as $k=>$v)
							@foreach($user as $uk=>$uv)
							@endforeach
							<ul class="am-comments-list am-comments-list-flip">
							<li class="am-comment">
								<!-- 评论容器 -->
								<a href="">
									<img class="am-comment-avatar" src="/h/images/hwbn40x40.jpg" />
									<!-- 评论者头像 -->
								</a>

								<div class="am-comment-main">
									<!-- 评论内容容器 875px-->
									<header class="am-comment-hd">
										<!--<h3 class="am-comment-title">评论标题</h3>-->
										
										<div class="am-comment-meta">
										
											<!-- 评论元数据 -->
											<a href="#link-to-user" class="am-comment-author">@if($uv['id'] == $v['uid']) {{$uv['username']}} @else 匿名 @endif</a>
											<!-- 评论者 -->
											评论于
											<time datetime="">2015年11月02日 17:46</time>
										</div>
									</header>
									<div class="am-comment-bd">
										<div class="tb-rev-item " data-id="255776406962">
											<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
												{!! $v['content'] !!} 
												<a href="javascript:;" class="dui_hua" style="float:right">
													<img src="/h/images/duihua.png" alt="">
												</a>
											</div>
											<!-- <div class="tb-r-act-bar">
												颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
											</div> -->
										</div>
								
									</div>
									

									
									<div class = "huifu" style="display:none">
									@foreach($v['sub'] as $kk=>$vv)
										<header class="am-comment-hd moren">
											<!--<h3 class="am-comment-title">评论标题</h3>-->
											<div class="am-comment-meta">
												<!-- 评论元数据 -->
												<a href="#link-to-user" class="am-comment-author">@if($uv['id'] == $vv['uid']) {{$uv['username']}} @else 匿名 @endif</a>:回复 <a href="#" class="am-comment-author">@if($uv['id'] == $v['uid']) {{$uv['username']}} @else 匿名 @endif</a>
												<!-- 评论者 -->
												评论于
												<time datetime="">2015年11月02日 17:46</time>
												<div class="am-comment-bd">
													<div class="tb-rev-item " data-id="255776406962">
														<div class="J_TbcRate_ReviewContent tb-tbcr-content "  style="width:850px">
															{!! $vv['content'] !!}
														</div>
													
													</div>
												</div>
												
											</div>
										</header>
										@endforeach
										<!-- 评论内容 -->
										<!-- 回复框 -->
										<div style="height:28px;width:100%">
											<form action="/home/introduction/replay" method="post">
												{{ csrf_field() }}
												<div style="">
													<input type="hidden" value="{{$v['id']}}" name="pid">
													<input type="hidden" value="{{$v['gid']}}" name="gid">
													<input type="text" name="content" placeholder="&nbsp;&nbsp;&nbsp;请填写回复" style="float:left;height:28px;width:600px;border:1px solid #DEDEDE;border-radius:6px;margin-left:5px">
													<input type="image" src="/h/images/replay.png">
=======
									<ul class="am-comments-list am-comments-list-flip">
										<li class="am-comment">
											<!-- 评论容器 -->
											<a href="">
												<img class="am-comment-avatar" src="images/hwbn40x40.jpg" />
												<!-- 评论者头像 -->
											</a>

											<div class="am-comment-main">
												<!-- 评论内容容器 -->
												<header class="am-comment-hd">
													<!--<h3 class="am-comment-title">评论标题</h3>-->
													<div class="am-comment-meta">
														<!-- 评论元数据 -->
														<a href="#link-to-user" class="am-comment-author">b***1 (匿名)</a>
														<!-- 评论者 -->
														评论于
														<time datetime="">2015年11月02日 17:46</time>
													</div>
												</header>
												<div class="am-comment-bd">
													<div class="tb-rev-item " data-id="255776406962">
														<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
															摸起来丝滑柔软，不厚，没色差，颜色好看！买这个衣服还接到诈骗电话，我很好奇他们是怎么知道我买了这件衣服，并且还知道我的电话的！
														</div>
														<div class="tb-r-act-bar">
															颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
														</div>
													</div>
												</div>
												<!-- 评论内容 -->
											</div>
										</li>
									</ul>
									<div class="clear"></div>
									<!--分页 -->
									<ul class="am-pagination am-pagination-right">
										<li class="am-disabled"><a href="#">&laquo;</a></li>
										<li class="am-active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">&raquo;</a></li>
									</ul>
									<div class="clear"></div>
									<div class="tb-reviewsft">
										<div class="tb-rate-alert type-attention">购买前请查看该商品的 <a href="#" target="_blank">购物保障</a>，明确您的售后保障权益。</div>
									</div>
								</div>
								<div class="am-tab-panel am-fade">
									<div class="like">
										<ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
											<li>
												<div class="i-pic limit">
													<img src="/h/images/imgsearch1.jpg" />
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
												</div>
											</form>
										</div>
									</div>
								</div>

							</li>
							
						</ul>
						
						@endforeach

						<script>
						
							 $(function()
							{   
								//标签对应切换
								$('.dui_hua').each(function(i)
								{
									$('.dui_hua').eq(i).click(function()
									{
									// $('.dui_hua').removeClass();
									// $(this).addClass('current'); 

									//  $('.huifu').hide();
									//  $('.huifu').eq(i).show();

									//alert(i);
									$('.huifu').eq(i).toggle();

									})
								})
							})
						
							
						</script>
						<div class="clear"></div>
						<!--分页 -->
						<ul class="am-pagination am-pagination-right">
							<li class="am-disabled"><a href="#">&laquo;</a></li>
							<li class="am-active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
						<div class="clear"></div>
						<div class="tb-reviewsft">
							<div class="tb-rate-alert type-attention">购买前请查看该商品的 <a href="#" target="_blank">购物保障</a>，明确您的售后保障权益。</div>
						</div>
					</div>
					<div class="am-tab-panel am-fade">
						<div class="like">
							<ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
								<li>
									<div class="i-pic limit">
										<img src="/h/images/imgsearch1.jpg" />
										<p>【良品铺子_开口松子】零食坚果特产炒货
											<span>东北红松子奶油味</span></p>
										<p class="price fl">
											<b>¥</b>
											<strong>298.00</strong>
										</p>
									</div>
								</li>
								
							</ul>
						</div>
						<div class="clear"></div>

						<!--分页 -->
						<ul class="am-pagination am-pagination-right">
							<li class="am-disabled"><a href="#">&laquo;</a></li>
							<li class="am-active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
						<div class="clear"></div>

					</div>

				</div>

			</div>
@endsection
	