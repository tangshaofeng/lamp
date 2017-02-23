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
        	<span>地址修改</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/address/update" method="post" enctype="multipart/form-data">
        	{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
                    <input type="hidden" name="id" value="{{ $data['id'] }}">
        				<label class="mws-form-label">收件人</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="oname" value="{{ $data['oname'] }}">
        				</div>
        			</div>
        			
        			<div class="mws-form-row">
        				<label class="mws-form-label">收件人地址</label>
        				<div >
                            <input  type="text" name="province" value="{{ $data['province'] }}">
                            <input  type="text" name="city" value="{{ $data['country'] }}">
                            <input  type="text" name="area" value="{{ $data['town'] }}">
        					<input  type="text" name="addr" value="{{ $data['addr'] }}">
        				</div>
        			</div>
        		  <div class="mws-form-row">
                        <label class="mws-form-label">收件人联系方式</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name="ophone" value="{{ $data['ophone'] }}">
                        </div>
                    </div>	
                    <div class="mws-form-row">
        				<label class="mws-form-label">用户留言</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="liuyan" value="{{ $data['liuyan'] }}">
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
