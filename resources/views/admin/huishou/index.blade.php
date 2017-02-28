@extends ('admin.layout.index')

@section('content')
@foreach($data as $k=>$v)
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table">

        </i>@if($k == 'comment') 评论 @else 公告 @endif回收列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>评论ID</th>
                    <th>商品名称</th>
                    <th>评论内容</th>
                    <th>操作</th>
                </tr>
            </thead>
				@foreach ($v as $kk=>$vv)
                    <tbody>
                        <tr>
                            <td>{{$vv['id']}}</td>
                            <td>{{$vv['goodsname']}}</td>
                            
                            <td>{{$vv['content']}}</td>
                            <td>
                            	<a href="/admin/huishou/delete/?id={{$vv['id']}}&name={{$k}}">删除</a>
                            	<a href="/admin/huishou/recovery/?id={{$vv['id']}}&name={{$k}}">还原</a>
                            </td>
                        </tr>
                    </tbody>
				@endforeach
        </table>
    </div>
</div>
@endforeach
@endsection