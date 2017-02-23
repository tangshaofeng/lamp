@extends('admin.layout.index')

@section('content')

@if (count($errors) > 0)
    <div class="mws-form-message error">
    	错误提醒
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>订单修改</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/dingdan/update" method="post" enctype="multipart/form-data">
        	{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
                    <input type="hidden" name="id" value="{{ $data['id'] }}">
        				<label class="mws-form-label">订单号</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="ordernum" value="{{ $data['ordernum'] }}">
        				</div>
        			</div>
        			
        			<div class="mws-form-row">
        				<label class="mws-form-label">订单状态</label>
        				<div class="mws-form-item">
        					<select name="ostatus">
        						<option value="待付款" @if($data['ostatus'] == '待付款') selected @endif>待付款</option>
        						<option value="待发货" @if($data['ostatus'] == '待发货') selected @endif>待发货</option>
        						<option value="待收货" @if($data['ostatus'] == '待收货') selected @endif>待收货</option>
        						<option value="待评价" @if($data['ostatus'] == '待评价') selected @endif>待评价</option>
        					</select>
        				</div>
        			</div>
        			
        			
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品的价格</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="gprice" value="{{ $data['gprice'] }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">订单创建时间</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="otime" value="{{ $data['otime'] }}">
        				</div>
        			</div>
        			
        			
        		</div>
        		<div class="mws-button-row">
        			<input value="修改" class="btn btn-danger" type="submit">
        			<input value="重置" class="btn " type="reset">
        		</div>
        	</form>
        </div>    	
    </div>
@endsection
