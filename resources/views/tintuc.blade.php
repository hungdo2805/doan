@extends('master/masterpage1')
  @section('Home')
  <style type="text/css" media="screen">
    div.icon img{
        width: 94%;
}
  	.o-hinh img{
  		width: 60%;
  	}
  	.o-hinh{
      height: 300px;
        text-align:center;
  	}
  	.noi-dung h4{
  	font-family: sans-serif;
    text-align: center;
    font-weight: 600;
  	}
    .noi-dung p{
    font-family: initial;
    font-size: 17px;
    }
  	.tintuc{
  		float: left;
    width: 30%;
    margin-left: 3%;
  	}
  </style>
  
  <div class="container" style="margin-top:50px;margin-bottom:50px">
  	<div class="row"> 
      <h1 style="text-align:center;margin-bottom:50px">Trang tin tức</h1>
        @foreach($tintuc as $tintuc)
    		<div class="tintuc">
    			<div class="o-hinh">
    				<a href="{{url('chitiettintuc/'.$tintuc->id)}}" title=""><img src="{{asset('imgtintuc/'.$tintuc->image)}}" alt="{{$tintuc->title}}"></a>
    			</div>
    			<div class="noi-dung">
    				<h4>{{$tintuc->title}}</h4>
            
            <h6 style="font-family:;text-align:center">Tác giả: {{$tintuc->user_name}}</h6>
    				<p>{!!$tintuc->description!!}</p>
    			</div>
    		</div>
        @endforeach   
  </div>
</div>
  @endsection
