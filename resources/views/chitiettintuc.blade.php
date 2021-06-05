
@extends('master/masterpage1')
  @section('Home')
<style type="text/css" media="screen">
	img{width: 100%;}
	#aa-footer {
    margin-top: 265px;
    background-color: #222;
    display: inline;
    float: left;
    width: 100%;
}
.container.tintuc{
	margin-top:100px
}
</style>
   
<div class="container tintuc">
	<div class="col-sm-4" style="text-align:right">

		<div class="khung">
			<img src="{{asset('imgtintuc/'.$tintuc1->image)}}" alt="" style="width:60%;"><!-- padding-top: 27px; -->
		</div>
		
	</div>
	<div class="col-sm-8">
		<h2 style="padding-left:15px">{{$tintuc1->title}}</h2>
		<div class="col-sm-12">
			<p>{!!$tintuc1->description!!}</p>
		</div>
		<h4 style="text-align:left;padding-left: 15px;">Tác giả :{{$tintuc1->user_name}}</h4>
	</div>
</div>



@endsection
