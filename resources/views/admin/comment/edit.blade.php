@extends ('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>评论添加</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/comment/add" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

        		<div class="mws-form-block">
        			<div class="mws-form-row">
                        <label class="mws-form-label">评论</label>
                        <div class="mws-form-item">
                            <textarea rows="" cols="" class="large" value="">{{ $data['content'] }}</textarea>
                        </div>
                    </div>
   
        			<div class="mws-form-row">
        				<label class="mws-form-label">追加评论</label>
        				<div class="mws-form-item">
        					 <!-- 加载编辑器的容器 -->
                            <script id="content" name="content" type="text/plain">
                                
                            </script>
                            <!-- 配置文件 -->
                            <script type="text/javascript" src="/u/ueditor.config.js"></script>
                            <!-- 编辑器源码文件 -->
                            <script type="text/javascript" src="/u/ueditor.all.js"></script>
                            <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                                var ue = UE.getEditor('content');
                            </script>
        				</div>
        			</div>
                    <input type="hidden" value="{{ $data['id'] }}" name="id">
        		</div>
        		<div class="mws-button-row">
        			<input type="submit" value="提交" class="btn btn-danger">
        			<input type="reset" value="重置" class="btn ">
        		</div>
        	</form>
        </div>
    </div>
@endsection