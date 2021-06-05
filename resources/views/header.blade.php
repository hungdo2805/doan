<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <style type="text/css" media="screen">
.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom:0;
    border: 1px solid transparent;
}


@media (max-width: 767px){
.navbar-nav .open .dropdown-menu
  {
    position: sticky;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: #101010;
    border: 0;
    box-shadow: none;
  }
}


nav.navbar.navbar-inverse {
    background-color: /* #bb2030 */ #101010;
    border-color: /* #bb2030 */ #101010 ;}
   .navbar-inverse .navbar-nav>li>a {
    color: white;}


nav.navbar.navbar-inverse {
    position: sticky;
    z-index: 900;
    width: 100%;
    top: 0;
}

    .col-md-6.lienhe {
    margin-top: 20px;
    text-align: center;
}
    i.fas.fa-mobile-alt{font-size:18px;color: #bb2030;}
    
   .col-md-6.giohang {

    margin-top: 20px;
    text-align: center;
}

    i.fas.fa-cart-arrow-down {
    font-size: 24px;
    padding-top: 5px;
    color: #333;
}
.navbar-nav>li {
    /* float: left; */
    height: 50px;
}



.item img{
  width:100%;
}
.carousel-inner{
  width:100%;
  
}
.item{
  height:100%
}
.item.active{
  height:100%;
}

.item.active img{
 
  background-size:100%;
}
input.form-control.timkiem {
    width: 400px;
}
.ls a{
  font-family: sans-serif;
  color:white;
  text-decoration:none;
}
.ls{
  line-height: 3;
   color: white;
   margin-left: 10px;
   height: 50px;
   font-size: 14px;
}

.lsgd{
  display:none;
}
ul .us:hover ul{
  display:block;
  margin:0;
}




  </style> 
</head>
<body>

<div style="background-color:begin">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="icon">
          <a href="{{route('home')}}"><img src="{{asset('imgtintuc/logo.png')}}" ></a>
        </div>
            
      </div>
      <div class="col-sm-6" style="line-height: 5;text-align: center;">
          <form class="navbar-form navbar-left" method="get" action="{{URL('Search')}}">
          <div class="form-group">
            <input type="text" class="form-control timkiem" placeholder="Search" name="key" required="">
           <button type="submit" class="btn btn-default">Tìm kiếm</button>
          </div>
           
          </form>
      </div>
      <div class="col-sm-3">
        <div style="width: 100%;
                    margin-top: 26px;
                    height: 36px;
                    text-align: center;">
        <span>
          <a href="{{url('page/cart/giohang')}}">
            <i class="fas fa-cart-arrow-down">{{Cart::count()}}</i>
          </a>
        </span>
        </div>
      </div>

      <!-- <div class="col-md-4">
         <div><h2 style="color:black;margin-right:1em;width:100%;text-align:center">Youth<b  style="color:blue;margin-left:1em">Fashion</b></h2></div>           
      </div>
       <div class="col-md-4">
          <h2 style="text-align: center;
                      font-family: sans-serif;
                      font-weight: 700;
                      color: #bb2030;">Thời Trang Trẻ</h2>
       </div>
        <div class="col-md-4">
          <div class="col-md-6 lienhe">
           <i class="fas fa-mobile-alt"></i><br>      
            <span>0121736963</span>
          </div>

           <div class="col-md-6 giohang">
           <span><a href="#"><i class="fas fa-cart-arrow-down"></i>{{Cart::count()}}</a></span>
          </div>
        </div> -->
    </div>
</div>
</div>

  <!--  -->

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <!--  <span class="navbar-brand" style="font-size: 25px;color:white;">T-Shop</span> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
      <li><a href="{{url('Home')}}">Home</a></li>
    @foreach($catalog as $loai)       
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{$loai->name}} <span class="caret"></span></a>
           @if(count($loai->catalog_detail)> 0)
             <ul class="dropdown-menu">
                  @foreach($loai->catalog_detail as $loai1) 
                       <li>
                       
                        <a href="{{url('loaisp',[$loai1->id])}}">{{$loai1->name}}</a>
                       
                      </li>
                    
                  @endforeach
             </ul>
           @endif
      </li>      
    @endforeach  
       <li><a href="{{url('tintuc')}}">Tin tức</a></li>
       <li><a href="{{url('lienhe')}}">Liên hệ</a></li> 
    </ul>
    <!-- <form class="navbar-form navbar-left" method="get" action="{{URL('Search')}}">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="key">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form> -->
    
      <ul class="nav navbar-nav navbar-right">
     @if(Auth::check())
       <li class="us"><a href="#"><span class="glyphicon glyphicon-user"></span>{{Auth::user()->name}}</a>
          <ul style="background-color:#101010" class="lsgd">
                              <li class="ls" style=""><a href="{{url('lichsugiaodich/'.Auth::user()->id)}}" title="">Lịch sử giao dịch</a></li>
          </ul>
       </li>
         <li><a href="{{url('dangxuat')}}"><span class="glyphicon glyphicon-log-in"></span>Đăng xuất</a></li> 
     @else
     <li><a href="{{url('dangki')}}"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
         <li><a href="{{url('dangnhap')}}"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li> 
     @endif
      
   
    </ul>
    </div>
  </div>
</nav>
  
<!--  -->
<!--  -->


</body>
 
</html>
