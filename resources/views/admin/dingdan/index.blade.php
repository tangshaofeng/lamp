@extends('admin.layout.index')

@section('css')
<link rel="stylesheet" href="/d/css/page_page.css">
@endsection
@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i> 订单列表</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form action="/admin/dingdan/index" method="get">
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
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 212px;">订单号</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;">订单状态</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">订单地址</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">联系方式</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">收货人</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">订单创建时间</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">操作</th>                    
                </thead>
                
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            	@foreach($data as $k=>$v)
            	<tr class="odd">
                    <td class="sorting_1"style="text-align:center;">{{ $v['id'] }}</td>
                    <td class="sorting" style="text-align:center;">{{ $v['ordernum'] }}</td>
                    <td class="sorting"style="text-align:center;">{{ $v['ostatus'] }}</td>
                    <td class="sorting"style="text-align:center;">{{ $v['oaddress'] }}</td>
                    <td class="sorting"style="text-align:center;">{{ $v['ophone'] }}</td>
                    <td class="sorting"style="text-align:center;">{{ $v['oname'] }}</td>
                    <td class="sorting"style="text-align:center;">{{ $v['otime'] }}</td>
                    <td class="sorting"style="text-align:center;">
                    	<a href="/admin/dingdan/delete/{{$v['id']}}" style="color:black;font-size:20px;margin-left:20px;" title="删除"><i class="icon-trash"></i></a>
                    	<a href="/admin/dingdan/edit/{{$v['id']}}" style="color:black;font-size:20px;margin-left:20px;" title="修改"><i class="icon-pencil-2"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
                <div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>
                <!-- <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                <a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_1_first">First</a>
                <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">Previous</a>
                <span><a tabindex="0" class="paginate_active">1</a>
                <a tabindex="0" class="paginate_button">2</a>
                <a tabindex="0" class="paginate_button">3</a>
                <a tabindex="0" class="paginate_button">4</a>
                <a tabindex="0" class="paginate_button">5</a>
                </span><a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">Next</a>
                <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">Last</a>
                </div> -->
                <div class="dataTables_paginate paging_full_numbers" id="page_page">
                	{!! $data->appends($request)->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection