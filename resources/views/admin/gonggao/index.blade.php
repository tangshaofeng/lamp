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
                        <th>ID</th>
                        <th>商品ID</th>
                        <th>描述</th>
                        <th>操作</th>
                    </tr>
                </thead>
                    @foreach($data as $k=>$v)
                        <tbody>
                            <tr>
                                <td>{{$v['id']}}</td>
                                <td>{{$v['goodsname']}}</td>
                                <td>{{$v['content']}}</td>
                                <td>
                                	<a href="/admin/gonggao/delete/{{$v['id']}}">删除</a>
                                	<a href="/admin/gonggao/edit/{{$v['id']}}">修改</a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
            </table>
        </div>
    </div>

@endsection