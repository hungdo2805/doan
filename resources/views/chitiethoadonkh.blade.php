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
						<th>Tên size</th>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
						<th>Số lượng</th>	
						<th>Ngày lập</th>
						
						
				 	 </tr>
				 	
				 
				 	 @foreach($bill as $bill)
				  <tr>
					
				 	 <td>{{$bill->id_bill}}</td>
				 	  <td>
                                   <?php
                                        $tensize=DB::table('product_size')->where('id',$bill['size_id'])->first();
                                        echo $tensize->name;
                                    ?>
                      </td>
				 	   
				 	    <td>{{$bill->product_name}}</td>
				 	     <td>{{number_format($bill->price,0)}} đ</td>
				 	     <td>{{$bill->quantity}}</td>
				 	     <td>{{$bill->create_time}}</td>
				 	    
				 </tr>
				  @endforeach

			</tbody>
		</table>
		 <a class="btn btn-success" href="{{url('lichsugiaodich/'.Auth::user()->id)}}" title="" style="background-color:dimgrey">Trở lại</a>

		
	
	
	</div>

	
</div>


<!--  -->

<!--  -->
@endsection
