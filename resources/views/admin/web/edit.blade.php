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
        	<span>配置修改</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/web/update" method="post" enctype="multipart/form-data">
        	{{ csrf_field() }}

        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">网站名称</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="webname" value="{{$data['webname'] }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">网站关键字</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="keyword" value="{{$data['keyword'] }}">
        				</div>
        			</div>
        			<input type="hidden" name="id" value="{{$data['id'] }}">
        			<div class="mws-form-row">
                        <label class="mws-form-label">网站logo</label>
                        <div class="mws-form-item" style="width:250px;">
                            <img src="/d/images/{{$data['logo']}}" alt="" width="100" height="100">
                            <input type="file" name="logo">
                        </div>
                    </div>
        			<div class="mws-form-row">
                        <label class="mws-form-label">网站关键字</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name="webcontent" value="{{ $data['webcontent'] }}">
                        </div>
                    </div>
        			<div class="mws-form-row"> 
        				<label class="mws-form-label">网站状态</label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><input type="radio" name="webstatus" value="1" @if($data['webstatus'] == 1) checked @endif> <label>开</label></li>
        						<li><input type="radio" name="webstatus" value="2" @if($data['webstatus'] == 2) checked @endif> <label>维护</label></li>
        						
        					</ul>
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
	