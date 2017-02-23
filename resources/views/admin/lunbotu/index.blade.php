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
                        <th>展示图片一</th>
                        <th>展示图片二</th>
                        <th>展示图片三</th>
                        <th>展示图片四</th>
                    </tr>
                </thead>
                   		<!-- 表格显示轮播图详细信息 -->
                        <tbody>
                            <tr>
                                <td>{{$data['id']}}</td>
                                <td style="width:200px;height:200px">
	                                <ul class="thumbnails mws-gallery" style="text-align:left;float:left;">
										<li border="1px solid red;">
							            	<span class="thumbnail"><img src="/upload/image/{{ $data['picone'] }}" alt=""></span>
							                <span class="mws-gallery-overlay">               
							                    <a href="/admin/lunbotu/reedit/{{'picone'}}" class="mws-gallery-btn" title="这是修改"><i class="icon-pencil"></i></a>    
							                    <a href="/admin/lunbotu/delete/{{'picone'}}" class="mws-gallery-btn" title="这是删除"><i class="icon-trash"></i></a>    
							                </span>
										</li>
										         			
									</ul>
								</td>
                                 <td style="width:200px;height:200px">
	                                <ul class="thumbnails mws-gallery" style="text-align:left;float:left;">
										<li border="1px solid red;">
							            	<span class="thumbnail"><img src="/upload/image/{{ $data['pictwo'] }}" alt=""></span>
							                <span class="mws-gallery-overlay">               
							                    <a href="/admin/lunbotu/reedit/{{'pictwo'}}" class="mws-gallery-btn" title="这是修改"><i class="icon-pencil"></i></a>    
							                    <a href="/admin/lunbotu/delete/{{'pictwo'}}" class="mws-gallery-btn" title="这是删除"><i class="icon-trash"></i></a>    
							                </span>
										</li>
										         			
									</ul>
								</td>
								 <td style="width:200px;height:200px">
	                                <ul class="thumbnails mws-gallery" style="text-align:left;float:left;">
										<li border="1px solid red;">
							            	<span class="thumbnail"><img src="/upload/image/{{ $data['picthree'] }}" alt=""></span>
							                <span class="mws-gallery-overlay">               
							                    <a href="/admin/lunbotu/reedit/{{'picthree'}}" class="mws-gallery-btn" title="这是修改"><i class="icon-pencil"></i></a>    
							                    <a href="/admin/lunbotu/delete/{{'picthree'}}" class="mws-gallery-btn" title="这是删除"><i class="icon-trash"></i></a>    
							                </span>
										</li>
										         			
									</ul>
								</td>
								 <td style="width:200px;height:200px">
	                                <ul class="thumbnails mws-gallery" style="text-align:left;float:left;">
										<li border="1px solid red;">
							            	<span class="thumbnail"><img src="/upload/image/{{ $data['picfour'] }}" alt=""></span>
							                <span class="mws-gallery-overlay">               
							                    <a href="/admin/lunbotu/reedit/{{'picfour'}}" class="mws-gallery-btn" title="这是修改"><i class="icon-pencil"></i></a>    
							                    <a href="/admin/lunbotu/delete/{{'picfour'}}" class="mws-gallery-btn" title="这是删除"><i class="icon-trash"></i></a>    
							                </span>
										</li>
									</ul>
								</td>
                            </tr>
                        </tbody>
            </table>
        </div>
    </div>

@endsection