

@extends('master/masterpage1')
  @section('Home')
<style type="text/css" media="screen"> 
  img{width: 100%;}

  h2.ten_sp{text-align: center;
        height: 2em;
    margin: 10px 0px 0px 0px;
    font-size:18px;
    font-family: sans-serif;
    color: black;}
  h4.gia{text-align: center;}
  .add_cart{text-align: center;
    background: black;}
    .add_cart a{color:white;
    font-family: fantasy;
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
  footer#aa-footer {
    margin-top: 265px;
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

.col-sm-3.sp { width: 60%; margin: auto; background: white; padding-left: 30px; padding-right: 30px; margin-top: 50px; margin-bottom: 50px; 
}
.o-hinh{height:auto}
}
}
</style>
<div class="container HomeSp">
      <div class="row">
         <h5 class="icon">--<i class="fas fa-star"></i>--</h5>
        <h5 class="sanphammoi">{{count($sptk)}} sản phẩm</h5>
         @foreach($sptk as $sp)
         	   <div class="col-sm-3 sp">
            <div class="o-hinh">
               <a href="{{url('chitietsanpham',[$sp->id])}}" ><img src="{{asset('imgshoptt/'.$sp->image)}}" alt=""></a> 
            </div>
            
          
             <h2 class="ten_sp">{{$sp->name}}</h2>
            <h4 class="gia">{{number_format($sp->price,0,",",".")}}</h4>
            <div class="add_cart">
               <a href="{{url('chitietsanpham',[$sp->id])}}">Chi tiết</a>
            </div>     
          </div>
        @endforeach
      </div>
     
</div>
@endsection