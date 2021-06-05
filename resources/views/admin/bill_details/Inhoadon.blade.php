<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Thông tin hóa đơn in</title>
<link rel="stylesheet" href="">
<style type="text/css" media="screen">
form{width: 40%;
 margin: auto;
 margin-top: 100px;
}
.ten-shop h1 {
	margin: 0;
    font-size: 50px;
    text-align: center;
}

hr{border: 1px solid black;
    margin: 0;}
h3,h4{
	margin:10px;
}

.a h3{text-align:right;}
.tieu-de{
	font-family: sans-serif;
    text-align: center;
    font-weight: 100;
}
span{
	font-size: 20px;
}
tr>td,th{text-align:center;}
tr>th{
	border-bottom: 1px solid #252323eb;
    font-size: 18px;
    font-family: initial;
    font-weight: 100;
}

table{
	margin-top: 20px;
    width: 100%;
}
.gach td{border-top:1px solid black;
font-size: 18px;
    font-family: initial;
    font-weight: 100;}
.back a{
	font-family: inherit;
    font-size: 16px;
    color: black;
    text-decoration:none;
}
.back a:hover{
	text-decoration:underline;
}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="Inhoadon_submit" method="get" accept-charset="utf-8">
					<div class="top">
						<div class="ten-shop"><h1>GO Shop</h1></div>
						<div class="a"><h3>ĐC:Số 075 Tổ 19 Phường Sông Hiến, Cao Bằng</h3></div>
						<div class="a"><h3>SĐT:0398217477</h3></div>
						<hr>
					</div>
					<div class="content">
						<h1 class="tieu-de">Hóa đơn thanh toán</h1>
						@foreach($bill as $bill)
						<div>
							<span>Khách hàng:</span><span style="margin-left:10px">{{$bill->user_name}}</span>
							<span style="float:right;">Ngày lập:{{$bill->create_time}}</span>
						</div>
					
						<div ><span >STT :</span><span style="margin-left:70px">{{$bill->id}}</span></div>
							@endforeach
						<div><span>Lập hóa đơn:</span><span style="margin-left:10px">Admin</span></div>

						<table>
						
							<tr>
								<th>Tên sản phẩm</th>
								<th>Size</th>
								<th>Số lượng</th>
								<th>Đơn giá</th>
								<th>Thành tiền</th>
							</tr>
							

							<tbody>
							@foreach($bill_details as $bill_details)
								<tr>
									<td class="tensp">{{$bill_details->product_name}}</td>
									<td>
										<?php 
											$tensize=DB::table('product_size')->where('id',$bill_details->size_id)->first();
											echo $tensize->name;
										 ?>
									</td>
									<td>{{$bill_details->quantity}}</td>
									<td>{{number_format($bill_details->price,0)}} đ</td>
									<td>{{number_format($bill_details->quantity * $bill_details->price,0)}} đ</td>
								</tr>
							
							@endforeach
								

								<tr class="gach">
									<td>Tổng tiền</td>	
									<td ></td>
									<td ></td>
									<td ></td>
									<td >{{$bill->bill_total}} đ</td>
								</tr>
							
							</tbody>
						</table>

						<h3 style="text-align:center;margin-top:50px">Cảm ơn bạn <br> Đã chọn mua sản phẩm cửa hàng của chúng tôi!</h3>
						<div class="back" style="text-align:center">
							<a href="{{url('admin/bill/danhsach-thanhtoan')}}" title="" >Trở về</a>
						</div>
					</div>

			</form>
			
		</div>
	</div>
</body>
</html>