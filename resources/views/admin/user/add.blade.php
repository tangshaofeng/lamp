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
        	<span>用户添加</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/user/insert" method="post" enctype="multipart/form-data">
        	{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">账号</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="username" value="{{ old('username') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">密码</label>
        				<div class="mws-form-item">
        					<input class="small" type="password" name="userpwd" value="{{ old('userpwd') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">确认密码</label>
        				<div class="mws-form-item">
        					<input class="small" type="password" name="userpwds" value="{{ old('userpwds') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">头像</label>
        				<div class="mws-form-item" style="width:250px;">
        					<input type="file" name="userpic">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">手机号</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="phonenum" value="{{ old('phonenum') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">权限</label>
        				<div class="mws-form-item">
        					<select name="userqx">
        						<option value="管理员">管理员</option>
        						<option value="普通用户">普通用户</option>
                                <option value="超级管理员">超级管理员</option>
        					</select>
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">性别</label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><input type="radio" name="sex" value="男"> <label>男</label></li>
        						<li><input type="radio" name="sex" value="女"> <label>女</label></li>
        						<li><input type="radio" name="sex"value="保密"> <label>保密</label></li>
        					</ul>
        				</div>
        			</div>
        		</div>
        		<div class="mws-button-row">
        			<input value="添加" class="btn btn-danger" type="submit">
        			<input value="重置" class="btn " type="reset">
        		</div>
        	</form>
        </div>    	
    </div>
@endsection