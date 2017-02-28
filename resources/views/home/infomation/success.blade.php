@extends('home.layout.geren')

@section('content')
		<div class="take-delivery">
	 <div class="status">
	   <h2>您已成功付款</h2>
	   <div class="successInfo" style="position: relative;left:47px;">

	     <ul>

	       <li>付款金额<em>{{$arr['gprice']*$arr['gnum']+10 or '' }}</em></li>
	       <div class="user-info">
	         <p>收货人：{{$data['oname'] or ''}}</p>
	         <p>联系电话：{{$data['ophone'] or ''}}</p>
	         <p>收货地址：{{$data['province'].$data['country'].$data['town'].$data['addr'] or ''}}</p>
	       </div>
	             请认真核对您的收货信息，如有错误请联系客服
	                               
	     </ul>
	     <div class="option">
	       <span class="info">您可以</span>
	        <a class="J_MakePoint" href="/home/infomation/order">查看<span>已买到的宝贝</span></a>
	        <a class="J_MakePoint" href="/home/infomation/xxoo/{{$data['id']}}">查看<span>交易详情</span></a>
	     </div>
	    </div>
	  </div>
</div>
@endsection