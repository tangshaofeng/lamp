
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>购物车页面</title>

		<link href="/h/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/h/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/h/css/cartstyle.css" rel="stylesheet" type="text/css" />
		<link href="/h/css/optstyle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/h/js/jquery-1.8.3.min.js" />
		<script type="text/javascript" src="/h/js/jquery.js"></script>

	</head>

	<body>

		<!--顶部导航条 -->
		<div class="am-container header">
			<ul class="message-l">
				<div class="topMessage">
					<div class="menu-hd">
						<a href="#" target="_top" class="h">亲，请登录</a>
						<a href="#" target="_top">免费注册</a>
					</div>
				</div>
			</ul>
			<ul class="message-r">
				<div class="topMessage home">
					<div class="menu-hd"><a href="#" target="_top" class="h">商城首页</a></div>
				</div>
				<div class="topMessage my-shangcheng">
					<div class="menu-hd MyShangcheng"><a href="#" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
				</div>
				<div class="topMessage mini-cart">
					<div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
				</div>
				<div class="topMessage favorite">
					<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
			</ul>
			</div>

			<!--悬浮搜索框-->

			<div class="nav white">
				<div class="logo"><img src="/h/images/logo.png" /></div>
				<div class="logoBig">
					<li><img src="/h/images/logobig.png" /></li>
				</div>

				<div class="search-bar pr">
					<a name="index_none_header_sysc" href="#"></a>
					<form>
						<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
						<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
					</form>
				</div>
			</div>

			<div class="clear"></div>

			<!--购物车 -->
			<div class="concent">
				<div id="cartTable">
					<div class="cart-table-th">
						<div class="wp">
							<div class="th th-chk">
								<div id="J_SelectAll1" class="select-all J_SelectAll">

								</div>
							</div>
							<div class="th th-item">
								<div class="td-inner">商品信息</div>
							</div>
							<div class="th th-price">
								<div class="td-inner">单价</div>
							</div>
							<div class="th th-amount">
								<div class="td-inner">数量</div>
							</div>
							<div class="th th-sum">
								<div class="td-inner">金额</div>
							</div>
							<div class="th th-op">
								<div class="td-inner">操作</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>

					<tr class="item-list">
						<div class="bundle  bundle-last ">
							<div class="bundle-hd">
								<div class="bd-promos">
									<div class="bd-has-promo">已享优惠:<span class="bd-has-promo-content">省￥5</span>&nbsp;&nbsp;</div>
									<div class="act-promo">
										<a href="#" target="_blank">欢迎您查看购物车<span class="gt">&gt;&gt;</span></a>
									</div>
									<span class="list-change theme-login">ddd</span>
								</div>
							</div>
							<div class="clear"></div>
							<div class="bundle-main">
<<<<<<< HEAD
							<form action="/home/infomation/add" method="post">
							{{ csrf_field() }}
=======
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
							@foreach($data as $k=>$v)
								<ul class="item-content clearfix">
									<li class="td td-chk">
										<div class="cart-checkbox ">
<<<<<<< HEAD
											<input class="check abcd" id="J_CheckBox_170037950254"  value="" type="checkbox">
											<input type="hidden" name="{{ $v['id'] }}" />
=======
											<input class="check abcd" id="J_CheckBox_170037950254" name="xxoo[]" value="" type="checkbox">
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
											<label for="J_CheckBox_170037950254"></label>
										</div>
									</li>
									<li class="td td-item">
										<div class="item-pic">
											<a href="/home/introduction/index/{{ $v['id'] }}" target="_blank" data-title="{{ $v['goodsname'] }}" class="J_MakePoint" data-point="tbcart.8.12">
												<img src="/upload/image/{{ $v['gphoto'] }}" class="itempic J_ItemImg" width="150" height="150"></a>
										</div>
										<div class="item-info">
											<div class="item-basic-info">
												<a href="/home/introduction/index/{{ $v['id'] }}" target="_blank" title="{{ $v['goodsname'] }}" class="item-title J_MakePoint" data-point="tbcart.8.11">{{ $v['goodsname'] }}</a>
											</div>
										</div>
									</li>
									<li class="td td-info">
										<div class="item-props item-props-can">
											
										</div>
									</li>
									<li class="td td-price">
										<div class="item-price price-promo-promo">
											<div class="price-content">
											
												<div class="price-line">
													<em class="J_Price price-now" tabindex="0">{{ $v['gmoney'] }}</em>
												</div>
											</div>
										</div>
									</li>
									<li class="td td-amount">
										<div class="amount-wrapper ">
											<div class="item-amount ">
												<div class="sl">
													<!-- <a href="/home/shopcar/update1?gmoneys={{ $v['gmoneys'] }}&gmoney={{ $v['gmoney'] }}&id={{ $v['carid'] }}&count={{ $v['count'] }}"> --><input class="min am-btn jian" name="" type="button" value="-" /><!-- </a> -->
<<<<<<< HEAD
													<input class="text_box" name="" type="text" value="{{ $v['count'] }}" style="width:30px;" />
=======
													<input class="text_box" name="num" type="text" value="{{ $v['count'] }}" style="width:30px;" />
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
													<!-- <a href="/home/shopcar/update2?gmoneys={{ $v['gmoneys'] }}&gmoney={{ $v['gmoney'] }}&id={{ $v['carid'] }}&count={{ $v['count'] }}"> --><input class="add am-btn jia" name="" type="button" value="+" /><!-- </a> -->
												</div>
											</div>
										</div>
									</li>
									<li class="td td-sum">
										<div class="td-inner">
											<em tabindex="0" class="J_ItemSum number">{{ $v['gmoneys'] }}</em>
										</div>
									</li>
									<li class="td td-op">
										<div class="td-inner">
											<a title="移入收藏夹" class="btn-fav" href="/home/collection/index?id={{ $v['id'] }}">
                  							移入收藏夹</a>
											<a href="/home/shopcar/delete?id={{ $v['carid'] }}" data-point-url="#" class="delete">
                  							删除</a>
										</div>
									</li>
								</ul>
								@endforeach
							</div>
						</div>
					</tr>
					<div class="clear"></div>
					<script>
						// 商品加
						for(var a = 0;a<$('.jia').length;a++){
							$('.jia').eq(a).click(function(){
								var dan = $(this).parent().parent().parent().parent().prev().find('.price-now').text();
								var count = $(this).prev().val();
								var zong = dan * (parseInt(count)+1);
								$(this).parent().parent().parent().parent().next().find('.number').text(zong);
							})
						}
						// 商品减
						for(var a = 0;a<$('.jian').length;a++){
							$('.jian').eq(a).click(function(){
								var dan = $(this).parent().parent().parent().parent().prev().find('.price-now').text();
								var count = $(this).next().val();
								if(parseInt(count) < 2){
									$(this).next().val(2);
									count = 2;
								}
								// alert(count);
								var zong = dan * (parseInt(count)-1);
								$(this).parent().parent().parent().parent().next().find('.number').text(zong);
							})
						}
					</script>
				</div>
<<<<<<< HEAD
				<div class="clear"></div>					
				<div class="float-bar-wrapper">
					
						<div id="J_SelectAll2" class="select-all J_SelectAll">
						<div class="cart-checkbox">
							<input class="check-all check aabb" id="J_SelectAllCbx2"  type="checkbox">
							<label for="J_SelectAllCbx2"></label>
						</div>
						<span>全选</span>
					
=======
				<div class="clear"></div>

				<div class="float-bar-wrapper">
					<div id="J_SelectAll2" class="select-all J_SelectAll">
						<div class="cart-checkbox">
							<input class="check-all check" id="J_SelectAllCbx2" name="select-all" value="全选" type="button">
							<label for="J_SelectAllCbx2"></label>
						</div>
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
						<!-- <span>全选</span> -->
					</div>
					<div class="operations">
						<a href="/home/shopcar/delete" hidefocus="true" class="deleteAll">删除</a>
						<a href="#" hidefocus="true" class="J_BatchFav">移入收藏夹</a>
					</div>
					<div class="float-bar-right">
						<div class="amount-sum">
							<span class="txt">已选商品</span>
							<em id="J_SelectedItemsCount">0</em><span class="txt">件</span>
							<div class="arrow-box">
								<span class="selected-items-arrow"></span>
								<span class="arrow"></span>
							</div>
						</div>
						<div class="price-sum">
							<span class="txt">合计:</span>
<<<<<<< HEAD
							<strong class="price">¥<em id="J_Total">0.00</em></strong>
						</div>
						<div class="btn-area">
							<input type="image" src="/upload/image/jiesuan.png"/>
						</div>
					</div>
					</form>
					<script>
					//总价与总量
					$('.abcd').attr('checked',false);
					for(var a = 0;a<$('.abcd').length;a++){
						var zong = 0;
						var count = 0;
						$('.abcd').eq(a).click(function(){
							if($(this).attr('checked')){
								var aa = $(this).parent().parent().next().next().next().next().find('.text_box').val();
								// alert(aa);
								$(this).next().attr("value",aa);
								// alert($('.abcd:checked').length);
								 var zhi = $(this).parent().parent().next().next().next().next().next().find('.number').text();	
								 zong += parseInt(zhi);
								$('#J_Total').text(zong);
								var liang = $(this).parent().parent().next().next().next().next().find('.text_box').val();
								count += parseInt(liang);
								$('#J_SelectedItemsCount').text(count);
								// for(var b = 0;b<$('.abcd:checked').length;b++){
								// 	var zhi = zong;
								// 	$('#J_Total').text(zhi);
								// }							
							}else{
								$(this).next().attr("value",null);
								var zhi = $(this).parent().parent().next().next().next().next().next().find('.number').text();
								zong -= parseInt(zhi);
								$('#J_Total').text(zong);
								var liang = $(this).parent().parent().next().next().next().next().find('.text_box').val();
								count -= parseInt(liang);
								$('#J_SelectedItemsCount').text(count);
							}
						}
						);		
					}
					$('.aabb').click(function (){
						// alert('1');
						var jin = 0;
						var shu = 0;
						if($(this).attr('checked')){
								for(var q = 0;q<$('.clearfix').length;q++){
									$('.clearfix').eq(q).find('.abcd').attr('checked',true);
									jin += parseInt($('.number').eq(q).text());
									$('#J_Total').text(jin);
									shu += parseInt($('.text_box').eq(q).val());
									$('#J_SelectedItemsCount').text(shu);
								};
								
							}else{
								for(var q = 0;q<$('.clearfix').length;q++){
									$('.clearfix').eq(q).find('.abcd').attr('checked',false);
									jin = 0.00;
									shu = 0;
									$('#J_Total').text(jin);
									$('#J_SelectedItemsCount').text(shu);
								};
							}
					});
=======
							<strong class="price">¥<em id="J_Total"></em></strong>
						</div>
						<div class="btn-area">
							<a href="pay.html" id="J_Go" class="submit-btn submit-btn-disabled" aria-label="请注意如果没有选择宝贝，将无法结算">
								<span>结&nbsp;算</span></a>
						</div>
					</div>
					<script>
					for(var a = 0;a<$('.abcd').length;a++){
						$('.abcd').eq(a).click(function(){
							if($(this).attr('checked')){
								
								var jie  += $(this).parent().parent().next().next().next().next().next().find('.number').text();
								alert(jie);
							}
						});
							// if($(this).attr('checked')){
							// 	var jie += $(this).parent().parent().next().next().next().next().next().find('.number').text();
							// 	alert('1');
							// 	// $('#J_Total').text()
							// }
						
					}
						
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
					</script>
				</div>
				
				<div class="footer">
					<div class="footer-hd">
						<p>
							<a href="#">恒望科技</a>
							<b>|</b>
							<a href="#">商城首页</a>
							<b>|</b>
							<a href="#">支付宝</a>
							<b>|</b>
							<a href="#">物流</a>
						</p>
					</div>
					<div class="footer-bd">
						<p>
							<a href="#">关于恒望</a>
							<a href="#">合作伙伴</a>
							<a href="#">联系我们</a>
							<a href="#">网站地图</a>
							<em>© 2015-2025 Hengwang.com 版权所有</em>
						</p>
					</div>
				</div>

			</div>

			<!--操作页面-->

			<div class="theme-popover-mask"></div>

			<div class="theme-popover">
				<div class="theme-span"></div>
				<div class="theme-poptit h-title">
					<a href="javascript:;" title="关闭" class="close">×</a>
				</div>
				<div class="theme-popbod dform">
					<form class="theme-signin" name="loginform" action="" method="post">

						<div class="theme-signin-left">

							<li class="theme-options">
								<div class="cart-title">颜色：</div>
								<ul>
									<li class="sku-line selected">12#川南玛瑙<i></i></li>
									<li class="sku-line">10#蜜橘色+17#樱花粉<i></i></li>
								</ul>
							</li>
							<li class="theme-options">
								<div class="cart-title">包装：</div>
								<ul>
									<li class="sku-line selected">包装：裸装<i></i></li>
									<li class="sku-line">两支手袋装（送彩带）<i></i></li>
								</ul>
							</li>
							<div class="theme-options">
								<div class="cart-title number">数量</div>
								<dd>
									<input class="min am-btn am-btn-default" name="" type="button" value="-" />
									<input class="text_box" name="" type="text" value="1" style="width:30px;" />
									<input class="add am-btn am-btn-default" name="" type="button" value="+" />
									<span  class="tb-hidden">库存<span class="stock">1000</span>件</span>
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
								<img src="/h/images/kouhong.jpg_80x80.jpg" />
							</div>
							<div class="text-info">
								<span class="J_Price price-now">¥39.00</span>
								<span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
							</div>
						</div>

					</form>
				</div>
			</div>
		<!--引导 -->
		<div class="navCir">
			<li><a href="home.html"><i class="am-icon-home "></i>首页</a></li>
			<li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
			<li class="active"><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>	
			<li><a href="person/index.html"><i class="am-icon-user"></i>我的</a></li>					
		</div>
	</body>

</html>
