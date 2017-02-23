@extends ('admin.layout.index')

@section('title')
	用户添加
@endsection

@section('content')
<!-- {{ session('error')}} -->
<!-- <div class="mws-form-message error">
    <ul>
    	<li>You are too fast</li>
        <li>You are too slow</li>
    </ul>
</div> -->

<!-- 自定义错误信息的显示方式 -->
@if (count($errors) > 0)
    <div class="mws-form-message error">
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
    	<form class="mws-form" action="/admin/user/insert" method="post">
    		{{ csrf_field() }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">用户名</label>
    				<div class="mws-form-item">
    					<input type="text" class="username" name="username" placeholder="请输入用户名" style="width:300px">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">密码</label>
    				<div class="mws-form-item">
    					<input type="password" value="{{ old('password') }}" class="medium" name="password" placeholder="请输入密码" style="width:300px">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">确认密码</label>
    				<div class="mws-form-item">
    					<input type="password" class="large" name="repassword" placeholder="请输入确认密码" style="width:300px">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">性别</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li><input type="radio" value="男" name="sex"> <label>男</label></li>
    						<li><input type="radio" value="女" name="sex"> <label>女</label></li>
    						<li><input type="radio" value="保密" name="sex"> <label>保密</label></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="提交" class="btn btn-danger">
    			<input type="reset" value="重置" class="btn ">
    		</div>
    	</form>
    </div>    	
</div>
@endsection