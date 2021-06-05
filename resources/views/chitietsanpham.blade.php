<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
		   <link rel="stylesheet" type="text/css" href="{{asset('css/chitietsanpham.css')}}">
		    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

<style type="text/css" media="screen">
div.icon img{
        width:100%;
}
.add_cart {
    background: black;
    text-align: center;
}
.add_cart a{
    color: white;
}
.add_cart a:hover{
	
    text-decoration:none
}

h5.gia {
	font-weight: 600;
    text-align: center;

}
h5.ten{
    font-weight: 600;
    text-align: center;
}
.col-sm-6.b {
	margin-top: 20px;
   
    width: 100%;
}
/* media (min-width: 768px){
.col-sm-6.b{
    height:250px
}
} */
h1.ten_sp{
	    font-family: sans-serif;
    color: black;
    font-weight: 700;
    font-size: 30px;
    text-transform: uppercase;
}
h2.ten_sp{text-align: center;
        height: 2em;
    margin: 10px 0px 0px 0px;
    font-size:18px;
    font-family: sans-serif;
    color: black;}
  h4.gia{font-size: 28px;
    font-family: sans-serif;
    font-weight: 500;
    }
   h4.gia1{
   	color: black;
    font-family: sans-serif;
    text-align: center;
   }
    h4.thuonghieu,.danhmuc {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 18px;
}
  .add_cart{text-align: center;
    background: black;}
    .add_cart a{color:white;
    font-family: initial;
    font-size: 19px;
    font-weight: 900;}
    .add_cart a:hover{text-decoration: none}

.col-sm-3.sp{background: white;
    margin: 50px 0px 50px 0px;
    padding-left: 30px;
    padding-right: 30px;}
    
    .col-sm-3.sp:hover .add_cart{
      background-color:#9c27b0de;
    }
  h5.sanphammoi{text-align: center;font-size: 25px;
    font-family: sans-serif;}
  .o-hinh{
  	text-align:center;
    height: 350px;
  }
  h5.icon{text-align:center;font-size:25px}
  h5.icon.i.fas.fa-star{text-align:center;font-size:25px}
  a{text-decoration:none}
button.them{
	margin-top: 20px;
    width: 100%;
    height: 32px;
    border: midnightblue;
    font-size: 22px;
    font-family: initial;
    font-weight: 800;
}
button.them:hover{
	background:#9c27b0de		
}
</style>
		         
</head>
<body>
 @extends('master/masterpage1')
  @section('Home')
<div >
	<div class="container chitiet">
		<div class="row top_1">
			<ul style="margin:0">
				<li ><a href="#"><h4>Home/</h4></a></li>
				<li style="margin-left: 10px;"><a href="{{url('loaisp',[$loaisp->id])}}"><h4>{{$loaisp->name}}/</h4></a></li>
				
				<li style="margin-left: 10px;"><a href="#"><h4>{{$dmsp->name}}</h4></a></li>
				
			
			</ul>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 Anh">
				<div class="a">
					<img src="{{asset('imgshoptt/'.$sp->image)}}" alt="" class="img_big">

				</div>
				<div class="col-sm-6 b">

					 @foreach($img as $i)<!--$sp->list_image as $i : co the truy van thang bang khoa ngoai -->
						<div class="col-sm-4 c">				      
							<img src="{{asset('imgshoptt_list/'.$i->image1)}}" alt="" class="img">						
						</div>
					@endforeach
						
				</div>
			</div>
		<form action="{{url('page/cart/them/'.$sp->id)}}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="col-sm-6 ThongTin">
				<div class="col-sm-12"><h1 class="ten_sp">{{$sp->name}}</h1></div>
				@if($sp->km == 0)
					<div class="col-sm-12"><h4 class="gia">{{number_format($sp->price,0,",",".")}}</h4></div>
				@else
					<div class="col-sm-12"><h4 class="gia">{{number_format($sp->price1,0,",",".")}}</h4></div>
				@endif
				
				<div class="col-sm-12"><div class="trangthai"><span>Còn hàng</span> </div></div>
				<div class="col-sm-12 hr"></div>
				<div class="col-sm-12"><h4 class="danhmuc">Danh mục: {{$dmsp->name}}</h4></div>
				
				<div class="col-sm-12"><h4 class="thuonghieu">Thương Hiệu:{{$thuonghieu->name}}</h4>
					
				</div>
			
				<div class="col-sm-12" style="font-size: 18px;"> <p style="text-decoration:none;color:black;">Điểm nổi bật:</p> {!!$sp->descriptions!!}</div>
				<div class="col-sm-12 hr"></div>
		
{{-- 				<div class="row size"> 
					<div class="col-sm-7 size"> 
						<p style="text-align:right">Size<span>*</span></p> 
						<select name="size" id="size-select" style="width: 100%;font-size: 20px;font-family: sans-serif;">

							@foreach($tensize as $s) 	
								

								<option value="{{$s->id}}">{{$s->name}}</option> 
								
							@endforeach
						 	
						 	
						</select> 
						
					</div> 

					<div class="col-sm-5 soluong">
					 <p style="text-align:right">Số lượng <span>*</span></p> 
						<select name="soluong" id="soluong" style="width: 100%;font-size: 20px;font-family: sans-serif;">
						 	<option value="1">1</option> 
						 	<option value="2">2</option> 
						 	<option value="3">3</option> 
						 	<option value="4">4</option> 
						 	<option value="5">5</option> 
						 	
						</select> 
					</div> 
				</div --}}
				<div class="col-sm-12 hr"></div>
				<!-- <button type="button" id="add_cart" class="add_cart" href="#" style=""> <i class="fa fa-shopping-cart"></i></button> -->
				<!--  -->
				<button type="submit" class="them">THÊM VÀO GIỎ</button>
			</div>
		</form>
			<!--  -->
			
		</div>
	</div>
	
	@if(Auth::check())
	<div class="container">
	
	<div class="row">

		<div class="form-group">
			@foreach($comment as $cm)
			<div class="form-group" style="padding-left: 14px;">
							
							
							<label>{{$cm->user_name}}</label>
							<br>
							<p>{{$cm->mess}}</p>
							<!-- <input type="text" value="{{$cm->mess}}" readonly style="border:none;outline:none" /> -->
							
			</div>
			@endforeach
							
		</div>
	</div>
	</div>
	<div class="container">
		<div class="row">
			<!-- h2 style="padding-left: 14px;">Bình luận</h2> -->
			<div class="col-sm-12">
				<form  method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<!-- <div class="form-group">
						<label>Email</label>
						<input type="email" name="email" required="true" class="form-control">
					</div>
					<div class="form-group">
						<label>Tên</label>
						<input type="text" name="name" required="true" class="form-control">
					</div> -->
					<div class="form-group">
						<label>Bình luận</label>
						<textarea row="10" required="true" name="noidung" class="form-control" style="height:150px" placeholder="Viết bình luận..."></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Bình luận</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	@endif

</div>
<div class='container'>
	<div class="row">
    <div>
      <h5 class="icon">--<i class="fas fa-star"></i>--</h5>
      <h5 class="sanphammoi">Sản Phẩm {!!$loaisp->name!!}</h5>
    </div>
    
     @foreach($splq as $lq)
          <div class="col-sm-3 sp">
            <div class="o-hinh">
               <a href="{{url('chitietsanpham',[$lq->id])}}" ><img src="{{asset('imgshoptt/'.$lq->image)}}" alt="" style="width:100%"></a> 
            </div>
            
          
             <h2 class="ten_sp">{{$lq->name}}</h2>
            <h4 class="gia1" style="text-align:center;">{{number_format($lq->price,0,",",".")}}</h4>
            <div class="add_cart">
               <a href="{{url('chitietsanpham',[$lq->id])}}">Chi tiết</a>
            </div>     
          </div>
    @endforeach
  </div>
</div>





@endsection
</body>

</html>