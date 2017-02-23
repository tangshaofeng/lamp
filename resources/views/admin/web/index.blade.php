@extends('admin.layout.index')
<!-- var_dump($data); -->

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i> 配置列表</span>
        </div>
        <div class="mws-panel-body no-padding">
            
            
           
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                    <th class="sorting_asc" style="width: 140px;">ID</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 212px;">网站名称</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;">网站logo</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">网站关键字</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">网站描述</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;">操作</th>                    
                </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
                 
                <tr class="odd">
                    <td class="sorting_1"style="text-align:center;">{{ $data['id'] }}</td>
                    <td class="sorting" style="text-align:center;">{{ $data['webname'] }}</td>
                    <td class="sorting"style="text-align:center;"><img src="/d/images/{{ $data['logo'] }}" alt="" width="120" height='70'></td>
                    <td class="sorting"style="text-align:center;">{{ $data['keyword'] }}</td>
                    
                    <td class="sorting"style="text-align:center;">{{ $data['webcontent'] }}</td>
                  
                    <td class="sorting"style="text-align:center;">
                        
                        <a href="/admin/web/edit" style="color:black;font-size:20px;margin-left:20px;" title="修改" onclick="return confirm('配置只有超级管理员可以修改修改')"><i class="icon-pencil"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
               
                
            </div>
        </div>
    </div>
@endsection