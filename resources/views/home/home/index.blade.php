@extends ('home.layout.index')

@section('title')
主页
@endsection

@section('css')
		<!-- <link href="/h/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="/h/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="/h/basic/css/demo.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="/h/css/hmstyle.css" rel="stylesheet" type="text/css"/> -->
		<!-- <link href="/h/css/skin.css" rel="stylesheet" type="text/css" /> -->
@endsection

@section('script')
		<!-- // <script src="/h/AmazeUI-2.4.2/assets/js/jquery.min.js"></script> -->
		<!-- // <script src="/h/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script> -->
		<script src="/h/js/jquery-1.8.3.min.js"></script>
@endsection

@section('contents')

</div>
<div class="banner">
          <!--轮播 -->

			<div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
				<ul class="am-slides">
					@foreach($lunbotu as $k=>$v)
					<li class="banner1"><a href="/home/introduction/index/{{$v['gid']}}"><img src="/upload/image/{{$v['pic']}}" /></a></li>
					@endforeach
					<!-- <li class="banner2"><a><img src="/upload/image/" /></a></li>
					<li class="banner3"><a><img src="/upload/image/" /></a></li>
					<li class="banner4"><a><img src="/upload/image/" /></a></li> -->
				</ul>
			</div>
			<div class="clear"></div>	
</div>
<div class="shopNav">
	<div class="slideall">
		
		   <div class="long-title"><span class="all-goods">全部分类</span></div>
		   <div class="nav-cont">
				<ul>
					<li class="index"><a href="#">首页</a></li>
                    <li class="qc"><a href="#">闪购</a></li>
                    <li class="qc"><a href="#">限时抢</a></li>
                    <li class="qc"><a href="#">团购</a></li>
                    <li class="qc last"><a href="#">大包装</a></li>
				</ul>
			    <div class="nav-extra" id="fuli" style="margin-bottom:-10px">
			    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
			    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
			    </div>
			</div>					
    				
			<!--侧边导航 -->
			<div id="nav" class="navfull">
				<div class="area clearfix">
					<div class="category-content" id="guide_2">
						
						<div class="category">
							<ul class="category-list" id="js_climit_li">
								@foreach($data as $k=>$v)
								<li class="appliance js_toggle relative first">
									<div class="category-info">
										<h3 class="category-name b-category-name"><i><img src="/h/images/cake.png"></i><a class="ml-22" title="{{$v['name']}}">{{$v['name']}}</a></h3>
										<em>&gt;</em></div>
									<div class="menu-item menu-in top">
										<div class="area-in">
											<div class="area-bg">
												<div class="menu-srot">
													<div class="sort-side">
														@foreach($v['sub'] as $kk=>$vv)
														<dl class="dl-sort">
															<dt><span title="{{$vv['name']}}">{{$vv['name']}}</span></dt>
															@foreach($vv['sub'] as $kkk=>$vvv)
															<dd><a title="{{$vvv['name']}}" href="/home/search/index/{{$vvv['id']}}"><span>{{$vvv['name']}}</span></a></dd>
															@endforeach
														</dl>
														@endforeach
														<!-- <dl class="dl-sort">
															<dt><span title="蛋糕">点心</span></dt>
															<dd><a title="蒸蛋糕" href="#"><span></span></a></dd>
															
														</dl> -->

													</div>
													<!-- <div class="brand-side">
														<dl class="dl-sort"><dt><span>实力商家</span></dt>
															<dd><a rel="nofollow" title="呵官方旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >呵官方旗舰店</span></a></dd>
															
														</dl>
													</div> -->
												</div>
											</div>
										</div>
									</div>
								<b class="arrow"></b>	
								</li>
								@endforeach
							</ul>
						</div>
					</div>

				</div>
			</div>
			
			
			<!--轮播-->
			
			<script type="text/javascript">
				(function() {
					$('.am-slider').flexslider();
				});
				$(document).ready(function() {
					$("li").hover(function() {
						$(".category-content .category-list li.first .menu-in").css("display", "none");
						$(".category-content .category-list li.first").removeClass("hover");
						$(this).addClass("hover");
						$(this).children("div.menu-in").css("display", "block")
					}, function() {
						$(this).removeClass("hover")
						$(this).children("div.menu-in").css("display", "none")
					});
				})
			</script>



		<!--小导航 -->
		<div class="am-g am-g-fixed smallnav">
			<div class="am-u-sm-3">
				<a href="sort.html"><img src="/h/images/navsmall.jpg" />
					<div class="title">商品分类</div>
				</a>
			</div>
			<div class="am-u-sm-3">
				<a href="#"><img src="/h/images/huismall.jpg" />
					<div class="title">大聚惠</div>
				</a>
			</div>
			<div class="am-u-sm-3">
				<a href="#"><img src="/h/images/mansmall.jpg" />
					<div class="title">个人中心</div>
				</a>
			</div>
			<div class="am-u-sm-3">
				<a href="#"><img src="/h/images/moneysmall.jpg" />
					<div class="title">投资理财</div>
				</a>
			</div>
		</div>

		<!--走马灯 -->
	<!--<div class="marqueen" style="height:450px;width:220px;">	-->
		<div class="marqueen">
			
				
			

				<ul>
					<span class="marqueen-title">商城头条</span>
			<div class="demo">
				    
			<div class="mod-vip">
				<div class="m-baseinfo">
					<a href="/home/infomation/">
						 @if(session('xx'))
		                    <img src="/upload/pic/{{session('xx') }}" alt="User Photo">
		                @else
		                    <img src="/touxiang.jpg" alt="User Photo">
		                @endif
					</a>
					<em>
						Hi,<span class="s-name">@if(session('aaa')['id']) @if(session('aaa')['phonenum']) {{session('aaa')['phonenum'] }} @else {{ session('aaa')['email'] }} @endif @else 小叮当 @endif</span>
						<a href="#"><p>点击更多优惠活动</p></a>									
					</em>
				</div>
				<div class="member-logout">
					@if(session('aaa')['id'])
					<div class="menu-hd">
								@if(session('aaa')['phonenum'])	
								<a href="/home/home/index" target="_top" class="am-btn-warning btn">欢迎</a>
								@else
								<a href="/home/home/index" target="_top" class="am-btn-warning btn">欢迎</a>
								@endif

								<a href="/home/zhuce/paolu" target="_top" class="am-btn-warning btn">退出</a>
						<!-- <a href="/home/home/index" target="_top" class="am-btn-warning btn">欢迎{{session('aaa')['phonenum'] or session('aaa')['email'] }}</a>
						<a href="/home/zhuce/paolu" target="_top" class="am-btn-warning btn">退出</a> -->
					</div>
					@else
					<div class="menu-hd">
							<a href="/home/login/index" target="_top" class="am-btn-warning btn">登录</a>
							<a href="/home/zhuce/index" target="_top" class="am-btn-warning btn">注册</a>
					</div>
					@endif


					<!-- <a class="am-btn-warning btn" href="/home/login/index" target="_top">登录</a>
					<a class="am-btn-warning btn" href="/home/zhuce/index" target="_top">注册</a> -->
				</div>

				
				<div class="member-login">
					<a href="#"><strong>0</strong>待收货</a>
					<a href="#"><strong>0</strong>待发货</a>
					<a href="#"><strong>0</strong>待付款</a>
					<a href="#"><strong>0</strong>待评价</a>
				</div>
				<div class="clear"></div>	
			</div>	
				@foreach($gonggao as $k=>$v)																    
				    <li class="title-first"><a target="_blank" href="#">
						<img src="/h/images/TJ2.jpg"></img>
						<span>[公告]</span>{{$v['content']}}								
					</a></li>
				@endforeach
				<!-- 	<li class="title-first"><a target="_blank" href="#">
						<span>[公告]</span>商城与广州市签署战略合作协议
					     <img src="/h/images/TJ.jpg"></img>
					     <p>XXXXXXXXXXXXXXXXXX</p>
				    </a></li>
					<li><a target="_blank" href="#"><span>[特惠]</span>洋河年末大促，低至两件五折</a></li>
					<li><a target="_blank" href="#"><span>[公告]</span>华北、华中部分地区配送延迟</a></li>
					<li><a target="_blank" href="#"><span>[特惠]</span>家电狂欢千亿礼券 买1送1！</a></li> -->
					
				</ul>
            <div class="advTip"><img src="/h/images/advTip.jpg"/></div>
			</div>
		</div>
	<!--</div>-->

		<div class="clear"></div>
	<!-- 鼠标移入移出事件 -->
		<!--<script type="text/javascript">
			$(document).ready(function(){  
			    $("#fuli").hover(  
			    function(){  
			        $('.marqueen:animated').stop().hide();
			        $('.marqueen').slideDown('fast');  
			    },  
			    function () { 
			        // $('.marqueen').delay(800);              
			        $('.marqueen').slideUp('fast');              
			    });  
			});  
			$(document).ready(function(){  
			    $(".marqueen").hover(  
			    function(){  
			        $('#gonggao:animated').stop().hide();
			        $('.marqueen').slideDown('fast');  
			    },  
			    function () {  
			        $('.marqueen').slideUp('fast');              
			    });  
			});  
		</script>-->
	</div>
	
	<script type="text/javascript">
		if ($(window).width() < 640) {
			function autoScroll(obj) {
				$(obj).find("ul").animate({
					marginTop: "-39px"
				}, 500, function() {
					$(this).css({
						marginTop: "0px"
					}).find("li:first").appendTo(this);
				})
			}
			$(function() {
				setInterval('autoScroll(".demo")', 3000);
			})
			
		}
	</script>
</div>
<div class="shopMainbg">
	<div class="shopMain" id="shopmain">

		<!--今日推荐 -->

		<div class="am-g am-g-fixed recommendation">
			<div class="clock am-u-sm-3" ">
				<img src="/h/images/2016.png "></img>
				<p>今日<br>推荐</p>
			</div>
			<div class="am-u-sm-4 am-u-lg-3 ">
				<div class="info ">
					<h3>真的有鱼</h3>
					<h4>开年福利篇</h4>
				</div>
				<div class="recommendationMain one">
					<a href="introduction.html"><img src="/h/images/tj.png "></img></a>
				</div>
			</div>						
			<div class="am-u-sm-4 am-u-lg-3 ">
				<div class="info ">
					<h3>囤货过冬</h3>
					<h4>让爱早回家</h4>
				</div>
				<div class="recommendationMain two">
					<img src="/h/images/tj1.png "></img>
				</div>
			</div>
			<div class="am-u-sm-4 am-u-lg-3 ">
				<div class="info ">
					<h3>浪漫情人节</h3>
					<h4>甜甜蜜蜜</h4>
				</div>
				<div class="recommendationMain three">
					<img src="/h/images/tj2.png "></img>
				</div>
			</div>

		</div>
		<div class="clear "></div>
		<!--热门活动 -->

		<div class="am-container activity ">
			<div class="shopTitle ">
				<h4>活动</h4>
				<h3>每期活动 优惠享不停 </h3>
				<span class="more ">
                  <a href="# ">全部活动<i class="am-icon-angle-right" style="padding-left:10px ;" ></i></a>
            </span>
			</div>
		  <div class="am-g am-g-fixed ">
			<div class="am-u-sm-3 ">
				<div class="icon-sale one "></div>	
					<h4>秒杀</h4>							
				<div class="activityMain ">
					<img src="/h/images/activity1.jpg "></img>
				</div>
				<div class="info ">
					<h3>春节送礼优选</h3>
				</div>														
			</div>
			
			<div class="am-u-sm-3 ">
			  <div class="icon-sale two "></div>	
				<h4>特惠</h4>
				<div class="activityMain ">
					<img src="/h/images/activity2.jpg "></img>
				</div>
				<div class="info ">
					<h3>春节送礼优选</h3>								
				</div>							
			</div>						
			
			<div class="am-u-sm-3 ">
				<div class="icon-sale three "></div>
				<h4>团购</h4>
				<div class="activityMain ">
					<img src="/h/images/activity3.jpg "></img>
				</div>
				<div class="info ">
					<h3>春节送礼优选</h3>
				</div>							
			</div>						

			<div class="am-u-sm-3 last ">
				<div class="icon-sale "></div>
				<h4>超值</h4>
				<div class="activityMain ">
					<img src="/h/images/activity.jpg "></img>
				</div>
				<div class="info ">
					<h3>春节送礼优选</h3>
				</div>													
			</div>

		  </div>
       </div>
		<div class="clear "></div>

<!-- 遍历来各楼层显示分类商品 -->
	@foreach($data as $k=>$v)
		<div id="f1" style="width:100%;height:520px;overflow:hidden">
		<!--甜点-->
		
		<div class="am-container ">
			<div class="shopTitle ">
				<h4>{{$v['name']}}</h4>
				<h3>每一道甜品都有一个故事</h3>
				<div class="today-brands ">
					<a href="# ">桂花糕</a>
					<a href="# ">奶皮酥</a>
					<a href="# ">栗子糕 </a>
					<a href="# ">马卡龙</a>
					<a href="# ">铜锣烧</a>
					<a href="# ">豌豆黄</a>
				</div>
				<span class="more ">
        <a href="# ">更多美味<i class="am-icon-angle-right" style="padding-left:10px ;"></i></a>
            </span>
			</div>
		</div>
		
		<div class="am-g am-g-fixed floodFour">
			<div class="am-u-sm-5 am-u-md-4 text-one list ">
				<div class="word">
				@foreach($v['sub'] as $kk=>$vv)
					<a class="outer" href="/home/search/index/{{$vv['id']}}"><span class="inner"><b class="text">{{$vv['name']}}</b></span></a>
				@endforeach								
				</div>
				<a href="# ">
					<div class="outer-con ">
						<div class="title ">
						开抢啦！
						</div>
						<div class="sub-title ">
							零食大礼包
						</div>									
					</div>
                      <img src="/h/images/act1.png ">								
				</a>
				<div class="triangle-topright"></div>						
			</div>
			
				@foreach($vv['sub'] as $kkk=>$vvv)
				@foreach($goods as $g=>$n)
				@if($n['cid'] == $vvv['id'])

				<div class="am-u-sm-7 am-u-md-4 text-two" style="float:left">
					<div class="outer-con ">
						<div class="title ">
							{{$n['goodsname']}}
						</div>
						<div class="sub-title ">
							¥{{$n['gmoney']}}
						</div>
						<i class="am-icon-shopping-basket am-icon-md  seprate"></i>
					</div>
					<a href="/home/introduction/index/{{$n['id']}}"><img src="/h/images/1.jpg"></a>
				</div>
				@endif
				@endforeach
				@endforeach

		</div>
     <div class="clear "></div>  
     </div>
		@endforeach

@endsection
