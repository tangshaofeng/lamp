@extends ('admin.layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="/d/css/page_page.css">
@endsection
@section('content')

	<div class="mws-panel grid_8">
		<div class="mws-panel-header">
	    	<span><i class="icon-table"></i>用户信息列表</span>
	    </div>
	    <div class="mws-panel-body no-padding">
	        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
		         <form action="/admin/user/index" method="get">
			        <div id="DataTables_Table_1_length" class="dataTables_length">
			        <label> 每页分 
				        <select size="1" name="count" aria-controls="DataTables_Table_1">
					        <option value="10" @if(!empty($request['count']) && $request['count'] == 10) selected @endif>10</option>
					        <option value="25" @if(!empty($request['count']) && $request['count'] == 25) selected @endif>25</option>
					        <option value="50" @if(!empty($request['count']) && $request['count'] == 50) selected @endif>50</option>
					        <option value="100" @if(!empty($request['count']) && $request['count'] == 100) selected @endif>100</option>
				        </select> 条显示
			        </label>
			        </div>
			        <div class="dataTables_filter" id="DataTables_Table_1_filter">
			        	<label>搜索: <input type="text" value="{{$request['search'] or ''}}" name="search"></label>
			        	<input type="submit" value="搜索">
			        </div>
		        </form>
	        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
	            <thead>
	                <tr role="row">
		                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 156px;">ID</th>
		                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">用户名</th>
		                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">性别</th>
		                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 136px;">创建时间</th>
		                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>
		            </tr>
	            </thead>
	            
	        <tbody role="alert" aria-live="polite" aria-relevant="all">
				<!-- var_dump($data);
				die(); -->
	        	@foreach($data as $k=>$v)
	
	        		<tr class="odd">
	                    <td class=" sorting_1">{{ $v['id'] }}</td>
	                    <td class=" ">{{ $v['username'] }}</td>
	                    <td class=" ">{{ $v['sex'] }}</td>
	                    <td class=" ">{{ $v['createTime'] }}</td>
	                    <td class=" ">
	                    	<a href="/admin/user/delete/{{$v['id']}}" style="color:black" onclick="return confirm('确认删除吗?')">删除</a>
	                    	<a href="/admin/user/edit/{{$v['id']}}" style="color:black">编辑</a>
	                    </td>
	                </tr>

                @endforeach
            </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>
            <!-- <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
	            <a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_1_first">First</a>
	            <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">Previous</a>
	            <span>
		            <a tabindex="0" class="paginate_active">1</a>
		            <a tabindex="0" class="paginate_button">2</a>
		            <a tabindex="0" class="paginate_button">3</a>
		            <a tabindex="0" class="paginate_button">4</a>
		            <a tabindex="0" class="paginate_button">5</a>
		            
	            </span>
	            <a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">Next</a>
	            <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">Last</a>
            </div> -->
            <div class="dataTables_paginate paging_full_numbers" id="page_page">
				{!! $data->appends($request)->render() !!}
            </div>
            </div>
	    </div>
	</div>

@endsection