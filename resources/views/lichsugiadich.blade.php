@extends('master/masterpage1')
@section('Home')
<script  src="{{asset('css/jquery.min.js')}}"></script>
<script type="text/javascript">
		function updateCart(qty,rowId){
			$.get(
				// url
				"{{url('page/cart/capnhat')}}",
				// doi tuong
				{qty:qty,rowId:rowId},
				// phuong thuc
				function(){
					location.reload();
				}
				);
		}
</script>
<style type="text/css" media="screen">
div.icon img{
	    width:100%;
}
.check-out h2 {
    font-size:2em;
    color:black;
    margin: 0px 0px 4em;
    text-align: center;
}
table {
    width: 100%;
}
a.to-buy {
    padding: 0.3em 0.7em;
    color: #FFF;
    background: #403b37;
    margin: 0.5em 0 0;
    font-size: 1em;
    display: inline-block;
    line-height: 1.6em;
    text-align: center;
    text-decoration: none;
}
tr.span{
	background: dimgrey;
}
tr>th{
	color:white;
    font-size: 1.2em;
    font-weight: 400;
	padding: 10px;
	text-align:center;
}
tr>td{
	border: 3px solid beige;
    text-align: center;
	text-align:center;
}
input.form-control.soluong {
    text-align: center;
    border: none;
}
.check-out{
    margin-bottom:100px;
    margin-top: 90px;
}

i.fa.fa-trash-o.fa-fw {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto; 
}
button.nutthanhtoan,.muathem,.xoaall{
	display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    border-radius: 4px;
}
button.muathem a{
	color: white;
}
button.muathem a:hover{
	text-decoration:none;

}
button.xoaall a{
	color: white;
}
button.xoaall a:hover{
	text-decoration:none;

}
.thanhtoan{ margin-top: 90px;text-align: center;}
.thanhtoan h2{font-size: 2em;
    color: black;
    margin: 0px 0px 4em;
    text-align: center;
}
.khung{float:right}
footer#aa-footer {
    margin-top: 17px;
}
</style>
<div class="container">
	<div class="check-out">
		<h2>Lịch sử giao dịch</h2>
	
	
		<table>
			<tbody>
				  	<tr class="span">
						<th>Số thứ tự hóa đơn</th>
						<th>Tên khách hàng</th>
						<th>Email</th>
						<th>Sđt</th>
						<th>Ngày lập</th>	
						<th>Tổng tiền</th>
						<th>Trạng thái</th>
						<th>Chi tiết hóa đơn</th>

				 	 </tr>
				 	 @foreach($bill as $bill)
				  <tr>
				 	 <td>{{$bill->id}}</td>
				 	  <td>{{$bill->user_name}}</td>
				 	   <td>{{$bill->user_email}}</td>
				 	    <td>{{$bill->user_phone}}</td>
				 	     <td>{{$bill->create_time}}</td>
				 	     <td>{{$bill->bill_total}} đ</td>
				 	      
				 	      @if($bill->status==0)
				 	      	<td>Đã nhận</td>
				 	      @elseif($bill->status==1)
				 	      	<td>Đã thanh toán</td>
				 	      @elseif($bill->status==-1)
				 	      	<td>Đã hủy</td>
				 	      @else
				 	      <td>Đang vận chuyển</td>
				 	      @endif
				 	     <td><a href="{{url('chitiethoadonkh/'.$bill->id)}}" title="" style="color:black;text-decoration:none"><i class="fa fa-eye" aria-hidden="true" style="color:black;margin-right:5px"></i>Xem chi tiết</a></td>
				 </tr>
				  @endforeach
			</tbody>
		</table>

		
	
	
	</div>

	
</div>


<!--  -->

<!--  -->
@endsection
