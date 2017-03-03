@extends('home.layout.geren')

@section('content')
		<link href="/h/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/h/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
		<link href="/h/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/h/css/appstyle.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="/h/js/jquery-1.7.2.min.js"></script>

	<!--<div class="main-wrap">-->

<div class="user-comment">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">发表评论</strong> / <small>Make&nbsp;Comments</small></div>
						</div>
						<hr>

						<div class="comment-main">
							<div class="comment-list">
								<div class="item-pic">
									<a href="#" class="J_MakePoint">
										<img src="/h/images/comment.jpg_400x400.jpg" class="itempic">
									</a>
								</div>

								<div class="item-title" style="">

									<div class="item-name" style="margin:0;padding:0;border:0;font-size: 100%;font-size: 12px;font: inherit;vertical-align: baseline;font-family: arial,"Lantinghei SC","Microsoft Yahei";">
										<a href="#">
											<p class="item-basic-info" style="height:18px;line-height:18px;overflow: hidden;font-size:14px;margin: 0;padding: 0;border: 0;    font: inherit;vertical-align: baseline;font-family: arial,"Lantinghei SC","Microsoft Yahei";">
												{{$data['goodsname']}}
											</p>
										</a>
									</div>
									<div class="item-info" style="margin:0;padding: 0;border: 0;font-size: 100%;font-size: 12px;font: inherit;vertical-align: baseline;font-family: arial,"Lantinghei SC","Microsoft Yahei";">
										<div class="info-little">
											<!-- <span>颜色：洛阳牡丹</span>
											<span>包装：裸装</span> -->
										</div>
										<div class="item-price">价格：<strong>{{$data['gmoney']}}</strong>
										</div>					
									</div>
								</div>
								<form action="/home/introduction/add/{{$data['id']}}}" enctype="multipart/form-data" method="post">
								{{ csrf_field() }}
								<div class="clear"></div>

								<div class="item-comment">
									<textarea name="content" placeholder="请写下对宝贝的感受吧，对他人帮助很大哦！"></textarea>
								</div>
								<div class="filePic">
									<!-- <input  type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*"> -->
									<span>晒照片(0/5)</span>
									<img src="images/image.jpg" alt="" name="commentpic">
								</div>
								<div class="item-opinion">
									<li><i class="op1"></i>好评</li>
									<li><i class="op2"></i>中评</li>
									<li><i class="op3"></i>差评</li>
								</div>
								<div class="info-btn">
									<input class="am-btn am-btn-danger" type="submit" value="发表评论">
								</div>
							</div>
							</form>
														
															
					<script type="text/javascript">
						$(document).ready(function() {
							$(".comment-list .item-opinion li").click(function() {	
								$(this).prevAll().children('i').removeClass("active");
								$(this).nextAll().children('i').removeClass("active");
								$(this).children('i').addClass("active");
								
							});
				     })
					</script>					
					
												
							
						</div>

					</div>

<!--</div>-->
@endsection