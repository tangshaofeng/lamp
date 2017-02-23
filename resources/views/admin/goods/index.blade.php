@extends('admin.layout.index')
@section('css')
<link rel="stylesheet" href="/d/css/page_page.css">
@endsection
@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i> 商品列表</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form action="/admin/goods/index" method="get">
	            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
	            <div id="DataTables_Table_1_length" class="dataTables_length">
	            <label>显示 <select size="1" name="count" aria-controls="DataTables_Table_1">
	            <option value="5" @if(!empty($request['count']) && $request['count'] == 5) selected @endif>5</option>
	            <option value="10" @if(!empty($request['count']) && $request['count'] == 10) selected @endif>10</option>
	            <option value="15" @if(!empty($request['count']) && $request['count'] == 15) selected @endif>15</option>
	            <option value="20" @if(!empty($request['count']) && $request['count'] == 20) selected @endif>20</option>
	            </select> 条</label></div>
	            <div class="dataTables_filter" id="DataTables_Table_1_filter"><label>
	            关键字: <input aria-controls="DataTables_Table_1" value="{{$request['search'] or ''}}"name="search" type="text"></label>
	            <input type="submit" value="搜索">
	            </div>
	        </form>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                    <th class="sorting_asc" style="width: 156px;">ID</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 212px;">商品名称</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;">商品图片</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;">商品图片二</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;">商品图片三</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;">商品图片四</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">商品分类</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">商品介绍</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">商品价格</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">上架时间</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">商品库存</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">首页推荐</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">操作</th>                    
                </thead>
                
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            	@foreach($data as $k=>$v)
            	<tr class="odd">
                    <td class="sorting_1"style="text-align:center;">{{ $v['id'] }}</td>
                    <td class="sorting" style="text-align:center;">{{ $v['goodsname'] }}</td>
                    <td class="sorting"style="text-align:center;"><img src="/upload/image/{{ $v['gphoto'] }}" alt="" width="65" height='70'></td>
                    <td class="sorting"style="text-align:center;"><img src="/upload/image/{{ $v['gphoto2'] }}" alt="" width="65" height='70'></td>
                    <td class="sorting"style="text-align:center;"><img src="/upload/image/{{ $v['gphoto3'] }}" alt="" width="65" height='70'></td>
                    <td class="sorting"style="text-align:center;"><img src="/upload/image/{{ $v['gphoto4'] }}" alt="" width="65" height='70'></td>
                    <td class="sorting"style="text-align:center;">{{ $v['name'] }}</td>
                    <td class="sorting"style="text-align:center;">{!! $v['ginfo'] !!}</td>
                    <td class="sorting"style="text-align:center;">{{ $v['gmoney'] }}</td>
                    <td class="sorting"style="text-align:center;">{{ $v['gtime-up'] }}</td>
                    <td class="sorting"style="text-align:center;">{{ $v['kucun'] }}</td>
                    <td class="sorting"style="text-align:center;">@if ($v['grecom'] == 1) 不推荐 @else 推荐 @endif</td>
                    <td class="sorting"style="text-align:center;">
                    	<a href="/admin/goods/delete/{{$v['id']}}" style="color:black;font-size:20px;margin-left:5px;" title="删除"><i class="icon-trash"></i></a>
                    	<a href="/admin/goods/edit/{{$v['id']}}" style="color:black;font-size:20px;" title="修改"><i class="icon-pencil-2"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
                <div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>
                <div class="dataTables_paginate paging_full_numbers" id="page_page">
                	{!! $data->appends($request)->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection