@extends ('admin.layout.index')

@section('title')
	分类管理
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
<!-- @if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>分类添加</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/cate/insert" method="post">
        		{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">分类名字</label>
        				<div class="mws-form-item">
        					<input type="text" class="small"  style="width:300px" name="name">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">分类</label>
        				<div class="mws-form-item">
        					<select class="large" style="width:300px" name="pid">
        						<option value="0">--请选择--</option>
        						@foreach($data as $k=>$v)

        							<option value="{{$v['id']}}" @if($id == ($v['id'])) selected @endif>{{$v['name']}}</option>

        						@endforeach
        					</select>
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