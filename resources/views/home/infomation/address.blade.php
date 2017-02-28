@extends('home.layout.geren')

@section('content')
	 
				<!-- <div class="main-wrap"> -->

	<div class="user-address">
		<!--标题 -->
		<div class="am-cf am-padding">
			<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">地址管理</strong> / <small>Address&nbsp;list</small></div>
		</div>
		<hr>
		

		
		<ul class="am-avg-sm-1 am-avg-md-3 am-thumbnails">
				@foreach($dat as $k => $v)
			<li class="user-addresslist">
				
				<span class="new-option-r"><i class="am-icon-check-circle"></i>设为默认</span>
				<p class="new-tit new-p-re">
					<span class="new-txt">{{$v['oname'] or ''}}</span>
					<span class="new-txt-rd2">{{$v['ophone'] or ''}}</span>
				</p>
				<div class="new-mu_l2a new-p-re">
					<p class="new-mu_l2cw">
						<span class="title">地址：</span>
						<span class="province">{{ $v['province'] or ''}}</span>
						<span class="city">{{ $v['country'] or ''}}</span>
						<span class="dist">{{ $v['town'] or ''}}</span>
						<span class="street"> {{ $v['addr'] or ''}}</span></p>
				</div>
				<!-- -->
				<div class="new-addr-btn">
					<a href="/home/infomation/edit1/{{$v['id']}}"><i class="am-icon-edit"></i>编辑</a>
					<span class="new-addr-bar">|</span>
					<a onclick="delClick(this);" href="/home/infomation/delete1/{{$v['id']}}"><i class="am-icon-trash"></i>删除</a>
				</div>
			</li>@endforeach
		</ul>
		
		<div class="clear"></div>
		<a data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}" class="new-abtn-type">添加新地址</a>
		<!--例子-->
		<div id="doc-modal-1" class="">

			<div class="add-dress">

				<!--标题 -->
				<div class="am-cf am-padding">
					<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add&nbsp;address</small></div>
				</div>
				<hr>

				<div  class="am-u-md-12 am-u-lg-8">
					<form class="am-form am-form-horizontal" action="/home/infomation/insert1" method="post">	{{ csrf_field() }}
						
						<div class="am-form-group">
							<label class="am-form-label" for="user-name">收货人</label>
							<div class="am-form-content">
								<input type="text" placeholder="收货人" id="user-name" name="oname" value="">
							</div>
						</div>

						<div class="am-form-group">
							<label class="am-form-label" for="user-phone">手机号码</label>
							<div class="am-form-content">
								<input type="text" placeholder="手机号必填" id="user-phone" name="ophone" value="">
							</div>
						</div>
						<div class="am-form-group">
							<label class="am-form-label" for="user-address">所在地</label>
							<div class="am-form-content address">
								<!-- <select data-am-selected="" style="display: none;">
									<option value="a">浙江省</option>
									<option selected="" value="b">湖北省</option>
								</select>
								<select id="Province" runat="server" name="province" style="width: 90px" ></select>
								<select id="Country" runat="server" name="country" style="width: 90px"></select>
								<select id="Town" runat="server" name="town" style="width: 90px"></select>
									

 -->								
							{!! include '/index.html'; !!}
			


							</div>
						</div>

						<div class="am-form-group">
							<label class="am-form-label" for="user-intro">详细地址</label>
							<div class="am-form-content">
								<!-- <textarea placeholder="输入详细地址" id="user-intro" rows="3" class="" name="addr"></textarea> -->
								<input type="text" name="addr" placeholder="输入详细地址" id="user-intro" rows="3">
								<small>100字以内写出你的详细地址...</small>
							</div>
						</div>

						<div class="am-form-group">
							<div class="am-u-sm-9 am-u-sm-push-3" style="position: relative;top:40px;">
							<a class="am-btn " ><input type="image" src="/h/images/submit1.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
								<a class="am-btn " href="javascript: void(0)" >取消</a>
							</div>
						</div>
					</form>
				</div>

			</div>

		</div>

	</div>

					<script type="text/javascript">
						$(document).ready(function() {							
							$(".new-option-r").click(function() {
								$(this).parent('.user-addresslist').addClass("defaultAddr").siblings().removeClass("defaultAddr");
							});
							
							var $ww = $(window).width();
							if($ww&gt;640) {
								$("#doc-modal-1").removeClass("am-modal am-modal-no-btn")
							}
							
						})
					</script>

					<div class="clear"></div>

				<!-- </div> -->

@endsection
