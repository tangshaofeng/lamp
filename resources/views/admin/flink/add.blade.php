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
        	<span>添加链接</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/flink/insert" method="post" enctype="multipart/form-data">
        	{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">链接名称</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="linkname" value="{{ old('linkname') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
                        <label class="mws-form-label">链接地址</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name="linkurl" value="{{ old('linkurl') }}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">链接描述</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name="description" value="{{ old('description') }}">
                        </div>
                    </div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">链接图片</label>
        				<div class="mws-form-item" style="width:250px;">
        					<input type="file" name="linkpic">
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