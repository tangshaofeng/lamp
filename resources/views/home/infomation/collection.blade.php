@extends('home.layout.geren')

@section('content')
	<!-- <div class="main-wrap"> -->
	<link href="/h/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
	<link href="/h/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
	<link href="/h/css/personal.css" rel="stylesheet" type="text/css">
	<link href="/h/css/colstyle.css" rel="stylesheet" type="text/css">

<div class="user-collection">
	<!--标题 -->
	<div class="am-cf am-padding">
		<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">我的收藏</strong> / <small>My&nbsp;Collection</small></div>
	</div>
	<hr>

	<div class="you-like">
		<div class="s-bar">
			我的收藏
			<a class="am-badge am-badge-danger am-round">降价</a>
			<a class="am-badge am-badge-danger am-round">下架</a>
		</div>
		<div class="s-content">
			<!--商品收藏div-->
			@foreach($data as $k=>$v)
			<div class="s-item-wrap" style="width:204px;height:283px;">
				<div class="s-item">

					<div class="s-pic">
						<a class="s-pic-link" href="#">
							<img class="s-pic-img s-guess-item-img" title="{{$v['goodsname']}}" alt="{{$v['goodsname']}}" src="/h/images/{{$v['gphoto']}}">
						</a>
					</div>
					<div class="s-info">
						<div class="s-title"><a title="{{$v['goodsname']}}" href="#">{{$v['goodsname']}}</a></div>
						<div class="s-price-box">
							<span class="s-price"><em class="s-price-sign">¥</em><em class="s-value">42.50</em></span>
							<span class="s-history-price"><em class="s-price-sign">¥</em><em class="s-value">68.00</em></span>
						</div>
						<div class="s-extra-box">
							<span class="s-comment">{{$v['xiaoliang']}}</span>
							<span class="s-sales">月销: 219</span>
						</div>
					</div>
					<div class="s-tp">
						<span class="ui-btn-loading-before">找相似</span>
						<i class="am-icon-shopping-cart"></i>
						<span class="ui-btn-loading-before buy">加入购物车</span>
						<p>
							<a class="c-nodo J_delFav_btn" href="javascript:;">取消收藏</a>
						</p>
					</div>
				</div>
			</div>
			@endforeach

		</div>

		

	</div>

</div>

<!-- </div> -->
@endsection
