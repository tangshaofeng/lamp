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
        	<span>商品修改</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/goods/update" method="post" enctype="multipart/form-data">
        	{{ csrf_field() }}
        		<div class="mws-form-inline">
                <input type="hidden" name="id" value="{{ $data['id'] }}">
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品名称</label>
        				<div class="mws-form-item">
        					<input class="small" type="text" name="goodsname" value="{{ $data['goodsname'] }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品介绍</label>
        				<div class="mws-form-item">
        					<!-- 加载编辑器的容器 -->
                            <script id="bianji" name="ginfo" type="text/plain">
                            {!! $data['ginfo'] !!}
                            </script>
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品图片</label>
        				<div class="mws-form-item" style="width:250px;">
                            <img src="/upload/image/{{$data['gphoto']}}" alt="" width="100" height="100">
        					<input type="file" name="gphoto">
                            <img src="/upload/image/{{$data['gphoto2']}}" alt="" width="100" height="100">
                            <input type="file" name="gphoto2">
                            <img src="/upload/image/{{$data['gphoto3']}}" alt="" width="100" height="100">
                            <input type="file" name="gphoto3">
                            <img src="/upload/image/{{$data['gphoto4']}}" alt="" width="100" height="100">
                            <input type="file" name="gphoto4">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品价格</label>
        				<div class="mws-form-item" style="width:100px;">
        					￥<input class="small" type="text" name="gmoney" value="{{ $data['gmoney'] }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品库存</label>
        				<div class="mws-form-item" style="width:100px;">
        					<input class="small" type="text" name="kucun" value="{{ $data['kucun'] }}">件
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">首页推荐</label>
        				<div class="mws-form-item">
        					<select name="grecom">
        						<option value="1" @if ($data['grecom'] == 1) selected @endif>不推荐</option>
        						<option value="2" @if ($data['grecom'] == 2) selected @endif>推荐</option>
        					</select>
        				</div>
        			</div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">商品分类</label>
                        <div class="mws-form-item">
                            <select name="cid">
                            @foreach($data2 as $k=>$v)
                            @foreach($v['sub'] as $kk=>$vv)
                            @foreach($vv['sub'] as $kkk=>$vvv)
                                <option value="{{ $vvv['id'] }}" @if ($data['cid'] == $vvv['id']) selected @endif>{{ $vvv['name'] }}</option>
                            @endforeach
                            @endforeach
                            @endforeach
                            </select>
                            
                            
                        </div>
                    </div>
        		</div>
        		<div class="mws-button-row">
        			<input value="修改" class="btn btn-danger" type="submit">
        			<input value="重置" class="btn " type="reset">
        		</div>
        	</form>

            <!-- 配置文件 -->
            <script type="text/javascript" src="/u/ueditor.config.js"></script>
            <!-- 编辑器源码文件 -->
            <script type="text/javascript" src="/u/ueditor.all.js"></script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('bianji');
            </script>
        </div>    	
    </div>
@endsection