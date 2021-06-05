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
		<h2>Giỏ Hàng</h2>
	@if(Cart::count())
	<form>
		<table>
			<tbody>
				  	<tr class="span">
						<th>Ảnh mô tả</th>
						<th>Tên</th>
						<th>Số lượng</th>	
				{{-- 		<th>Size</th> --}}
						<th>Giá tiền</th>
						<th>Tổng tiền</th>
						<th>Xóa</th>
				 	 </tr>
				 	 @foreach($item as $item)

				  <tr>
					<td><img src="{{asset('imgshoptt/'.$item->options->img)}}" alt="" style="width:40%"></td>	

					<td>{{$item->name}}</td>	

					<td class="check"><input class="form-control soluong" type="number" min="1" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')" /></td>
{{-- 					<td>
						{{$item->options->tsize}}
					</td> --}}
					<td>{{number_format($item->price,0,',','.')}}</td>

					<td>{{number_format($item->price*$item->qty,0,',','.')}}</td>
					 <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="xoagiohang/{{$item->rowId}}">Xóa</a></td>
				  </tr>

				  @endforeach
				 <tr>
				 	<td colspan="7" rowspan="" headers="" style="background-color:dimgrey;"><label style="font-size:20px;color:white">Tổng tiền:</label>
				 	 <label style="font-size:20px;color:white">
				 	 {{Cart::total(0,',','.')}}</label></td>
				 </tr>
			</tbody>
		</table>

		<div class="tongthanhtoan"> 
			<div class="khung">
				<button type="submit" class="btn-primary muathem">
					<a href="{{url('Home')}}" title="">Mua thêm</a>
				</button>

				<button type="submit" class="btn btn-danger xoaall">
					<a href="{{asset('page/cart/xoagiohang/all')}}" title="">Xóa giỏ hàng</a>
				</button>
				<button type="submit" class="btn-primary muathem">
					<a href="{{asset('page/cart/thanhtoan')}}" title="">Thanh toán</a>
				</button>
				
			</div>

		</div>
	</form>

	@else
		<h2>Giỏ hàng của bạn hiện đang trống!</h2>
	@endif
	</div>

	
</div>


<!--  -->

<!--  -->
@endsection
