@extends('home.layout.index')

@section('title')
商品搜索页
@endsection

@section('css')
		<!-- <link href="/h/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="/h/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="/h/basic/css/demo.css" rel="stylesheet" type="text/css" /> -->
		<link href="/h/css/seastyle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/h/css/page_page.css">
@endsection

@section('script')
		<script type="text/javascript" src="/h/basic/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="/h/js/script.js"></script>
@endsection

@section('contents')
	<div class="am-g am-g-fixed">
						<div class="am-u-sm-12 am-u-md-12">
							<div class="search-content">
								<div class="sort">
									<li class="first"><a title="综合">综合排序</a></li>
									<li><a href="/home/search/index/{{ $id }}/xiaoliang" title="销量">销量排序</a></li>
									<li><a href="/home/search/index/{{ $id }}/gmoney" title="价格">价格优先</a></li>
								</div>
								<div class="clear"></div>

								<ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
									@foreach($data as $k => $v)
									<li>
										<a href="/home/introduction/index/{{ $v['id'] }}"><div class="i-pic limit">
											<img src="/upload/image/{{ $v['gphoto'] }}" style="height:250px;">											
											<p class="title fl">{{ $v['goodsname'] }}</p>
											<p class="price fl">
												<b>¥</b>
												<strong>{{ $v['gmoney'] }}</strong>
											</p>
											<p class="number fl">
												销量<span>{{ $v['xiaoliang'] }}</span>
											</p>
										</div></a>
									</li>
									@endforeach
								</ul>
							</div>
							<div class="search-side">

								<div class="side-title">
									经典搭配
								</div>

								<li>
									<div class="i-pic check">
										<img src="/h/images/cp.jpg" />
										<p class="check-title">萨拉米 1+1小鸡腿</p>
										<p class="price fl">
											<b>¥</b>
											<strong>29.90</strong>
										</p>
										<p class="number fl">
											销量<span>1110</span>
										</p>
									</div>
								</li>
								<li>
									<div class="i-pic check">
										<img src="/h/images/cp2.jpg" />
										<p class="check-title">ZEK 原味海苔</p>
										<p class="price fl">
											<b>¥</b>
											<strong>8.90</strong>
										</p>
										<p class="number fl">
											销量<span>1110</span>
										</p>
									</div>
								</li>
								<li>
									<div class="i-pic check">
										<img src="/h/images/cp.jpg" />
										<p class="check-title">萨拉米 1+1小鸡腿</p>
										<p class="price fl">
											<b>¥</b>
											<strong>29.90</strong>
										</p>
										<p class="number fl">
											销量<span>1110</span>
										</p>
									</div>
								</li>

							</div>
							<div class="clear"></div>
							<!--分页 -->

								<div class="am-disabled" id="page_page">{!! $data->appends($request)->render() !!}</div>
						
						</div>
					</div>
@endsection