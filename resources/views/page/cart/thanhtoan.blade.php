@extends('master/masterpage1')
@section('Home')
<style type="text/css">
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
div.icon img {
    width: 100%;
}
</style>
<div class="container">
	<div class="row">
		<div class="thanhtoan">
		<h2>Xác nhận mua hàng</h2>
		</div>
		<div class="col-sm-12">
			@if(Auth::check())
			<form action="" method="post" accept-charset="utf-8" style="margin-bottom:100px">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>Tên khách hàng</label>
						<input class="form-control" type="text" name="name" value="{{Auth::user()->name}}">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" name="email" value="{{Auth::user()->email}}">
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input class="form-control" type="number" name="phone" value="{{Auth::user()->phone}}">
					</div>
					<div class="form-group">
						<label>Địa chỉ</label>
						<input class="form-control" type="text" name="address"  value="{{Auth::user()->address}}">
					</div>

					<button class="btn-primary nutthanhtoan">Thanh toán</button>
			</form>
			@endif
		</div>
	</div>
</div>
@endsection