<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
</head>
<style type="text/css" media="screen"> 
  img{width: 100%;}

  h2.ten_sp{text-align: center;
        height: 2em;
    margin: 10px 0px 0px 0px;
    font-size:18px;
    font-family: sans-serif;
    color: black;}
  h4.gia{color: black;
    font-family: sans-serif;
    text-align: center;}
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
    height: 350px;
  }
  h5.icon{text-align:center;font-size:25px}
  h5.icon.i.fas.fa-star{text-align:center;font-size:25px}
  a{text-decoration:none}


  .sale{
  text-align: center;
    width: 40px;
    height: 24px;
    background-color: black;
    color: white;
    font-family: fantasy;
    font-weight: initial;
    position: absolute;
    top: 0;
    right:31px;
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


@media (max-width:767px){

.col-sm-3.sp { width: 60%; margin: auto; 
  background: white; padding-left: 30px;
 padding-right: 30px; margin-top: 50px;
  margin-bottom: 50px; 
}
.o-hinh{height:auto}
}



</style>
<body>
  
 @extends('master/masterpage1')
  @section('Home')
  @include('slide')
  <div class="container HomeSp">

     <div class="row">
    <div>
      <h5 class="icon">--<i class="fas fa-star"></i>--</h5>
      <h5 class="sanphammoi">Sản phẩm đang giảm giá</h5>
    </div>
    
      @foreach($khuyenmai as $km)
          <div class="col-sm-3 sp">
            <div class="o-hinh">
               <a href="{{url('chitietsanpham',[$km->id])}}" ><img src="{{asset('imgshoptt/'.$km->image)}}" alt=""></a> 
            </div>
            
            <div style="height: 105px;">
              <h2 class="ten_sp">{{$km->name}}</h2>
              @if($km->price1 == 0)
                  <h4 class="gia">{{number_format($km->price,0,",",".")}}</h4>
              @else
              
              <h4 class="gia"><strike>{{number_format($km->price,0,",",".")}}</strike></h4>
              <h4 class="gia">{{number_format($km->price1,0,",",".")}}</h4>
              @endif
                
            
            </div>
             
            <div class="add_cart">
               <a href="{{url('chitietsanpham',[$km->id])}}">CHI TIẾT</a>
            </div>    
            <div class="sale">
              Sale
             </div> 
          </div>
    @endforeach
  </div>  


  <div class="row">
    <div>
      <h5 class="icon">--<i class="fas fa-star"></i>--</h5>
      <h5 class="sanphammoi">Sản phẩm mới</h5>
    </div>
    
      @foreach($sanphamnammoi as $sp)
          <div class="col-sm-3 sp">
            <div class="o-hinh">
               <a href="{{url('chitietsanpham',[$sp->id])}}" ><img src="{{asset('imgshoptt/'.$sp->image)}}" alt=""></a> 
            </div>
            
            <div>
              <h2 class="ten_sp">{{$sp->name}}</h2>
            <h4 class="gia">{{number_format($sp->price,0,",",".")}}</h4>
            </div>
             
            <div class="add_cart">
               <a href="{{url('chitietsanpham',[$sp->id])}}">CHI TIẾT</a>
            </div>     
          </div>
    @endforeach
  </div>  
    
  <div class="row">
    <div>
      <h5 class="icon">--<i class="fas fa-star"></i>--</h5>
      <h5 class="sanphammoi">CÁC SẢN PHẨM KHÁC</h5>
    </div>
    
      @foreach($sanphamnu as $spn)
          <div class="col-sm-3 sp">
            <div class="o-hinh">
               <a href="{{url('chitietsanpham',[$spn->id])}}" ><img src="{{asset('imgshoptt/'.$spn->image)}}" alt=""></a> 
            </div>
            
          
             <h2 class="ten_sp">{{$spn->name}}</h2>
            <h4 class="gia">{{number_format($spn->price,0,",",".")}}</h4>
            <div class="add_cart">
                
                 <a href="{{url('chitietsanpham',[$spn->id])}}" >CHI TIẾT</a>
            </div>     
          </div>
   @endforeach
  </div>

</div>
@endsection
</body>
</html>

