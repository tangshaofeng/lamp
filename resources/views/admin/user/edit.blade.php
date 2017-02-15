@extends('admin.layout.index')

@section('container')

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
        	<span>用户修改</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/user/update" method="post" enctype="multipart/form-data">
        	{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
                    <input type="hidden" name="id" value="{{ $data['id'] }}">
        				<label class="mws-form-label">账号</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="username" value="{{ $data['username'] }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">头像</label>
        				<div class="mws-form-item" style="width:250px;">
                            <img src="/upload/pic/{{$data['userpic']}}" alt="" width="100" height="100">
        					<input type="file" name="userpic">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">手机号</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="phonenum" value="{{ $data['phonenum'] }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">权限</label>
        				<div class="mws-form-item">
        					<select name="userqx">
        						<option value="管理员" @if($data['userqx'] == '管理员') selected @endif>管理员</option>
        						<option value="普通用户" @if($data['userqx'] == '普通用户') selected @endif>普通用户</option>
        					</select>
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">性别</label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><input type="radio" name="sex" value="男" @if($data['sex'] == '男') checked @endif> <label>男</label></li>
        						<li><input type="radio" name="sex" value="女" @if($data['sex'] == '女') checked @endif> <label>女</label></li>
        						<li><input type="radio" name="sex"value="保密" @if($data['sex'] == '保密') checked @endif> <label>保密</label></li>
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