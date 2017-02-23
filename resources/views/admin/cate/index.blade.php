@extends ('admin.layout.index')

@section('css')
<!-- <link rel="stylesheet" type="text/css" href="/d/css/page_page.css"> -->
@endsection

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
                                    <th>分类名</th>
                                    <th>父级ID</th>
                                    <th>分类路径</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
	                            @foreach($data as $k=>$v)
		                            <tbody>
		                                <tr>
		                                    <td>{{$v['id']}}</td>
		                                    <td>{{$v['name']}}</td>
		                                    <td>{{$v['pid']}}</td>
		                                    <td>{{$v['path']}}</td>
		                                    <td>{{$v['status']}}</td>
		                                    <td>
		                                    	<a href="/admin/cate/delete/{{$v['id']}}">删除</a>
		                                    	<a href="/admin/cate/edit/{{$v['id']}}">修改</a>
		                                    	<a href="/admin/cate/add/{{$v['id']}}">添加子类</a>
		                                    </td>
		                                </tr>
		                            </tbody>
	                            @endforeach
                        </table>
                    </div>
                </div>

@endsection
