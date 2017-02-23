@extends ('admin.layout.index')

@section('content')


<div class="mws-panel">
    <div class="mws-panel-header">
        <span><i class="icon-calculate"></i>轮播图图片</span>
    </div>
    <form action="/admin/lunbotu/edit" method="post" enctype="multipart/form-data">
    	{{ csrf_field() }}
    	<input type="hidden" name="picname" value="{{ $pic }}">
		<div class="mws-form-row">
	    	<label class="mws-form-label">选择图片</label>
	    	<div class="mws-form-item">
				<input type="file" name="pic" class="fileinput-preview" style="width: 100%; padding-right: 85px;" readonly="readonly" placeholder="选择图片">
			</div>
	    </div>
	    <div class="mws-button-row">
            <input type="submit" value="提交" class="btn btn-danger">
            <input type="reset" value="重置" class="btn ">
        </div>
     </form>
</div>
@endsection