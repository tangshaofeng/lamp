@extends ('admin.layout.index')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>分类列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>评论ID</th>
                    <th>商品名称</th>
                    <th>评论用户ID</th>
                    <th>评论路径</th>
                    <th>评论内容</th>
                    <th>操作</th>
                </tr>
            </thead>
				@foreach ($data as $k=>$v)
                    <tbody>
                        <tr>
                            <td>{{$v['id']}}</td>
                            <td>{{$v['goodsname']}}</td>
                            <td>{{$v['uid']}}</td>
                            <td>{{$v['path']}}</td>
                            <td>{{$v['content']}}</td>
                            <td>
                            	<a href="/admin/huishou/delete/{{$v['id']}}">删除</a>
                            	<a href="/admin/huishou/recovery/{{$v['id']}}">还原</a>
                            </td>
                        </tr>
                    </tbody>
				@endforeach
        </table>
    </div>
</div>

@endsection