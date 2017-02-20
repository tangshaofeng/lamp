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
        	<span>修改链接</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/flink/update" method="post" enctype="multipart/form-data">
        	{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
                    <input type="hidden" name="id" value="{{ $data['id'] }}">
        				<label class="mws-form-label">链接名称</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="linkname" value="{{ $data['linkname'] }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">链接图片</label>
        				<div class="mws-form-item" style="width:250px;">
                            <img src="/upload/linkpic/{{$data['linkpic']}}" alt="" width="100" height="100">
        					<input type="file" name="linkpic">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">链接地址</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="linkurl" value="{{ $data['linkurl'] }}">
        				</div>
        			</div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">链接描述</label>
                        <div class="mws-form-item">
                            <input class="small" type="text" name="description" value="{{ $data['description'] }}">
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