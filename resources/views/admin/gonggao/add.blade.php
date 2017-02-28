@extends ('admin.layout.index')


@section('content')
<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>公告添加</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/gonggao/readd" method="post">
        		{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">公告名称</label>
        				<div class="mws-form-item">
        					<input type="text" class="small"  style="width:300px" name="content">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品选择</label>
        				<div class="mws-form-item">
        					<select class="large" style="width:300px" name="gid">
        						<option value="0">--请选择--</option>
        						@foreach($data as $k=>$v)

        							<option value="{{$v['id']}}">{{$v['goodsname']}}</option>

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