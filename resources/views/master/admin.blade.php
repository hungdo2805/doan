<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<!-- <script type="text/javascript" src="{{asset('css/app.js')}}"></script> -->
	
	
<style type="text/css" media="screen">
	.alert-success {
    margin-bottom: 0px;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d;
}
	li{
	width:100%;
    height: 4em;
    background:lavender ;
    border: 0.5px solid #03A9F4;
	}
	ul{
		padding: 0;
		margin: 0;
		list-style: none;
	}
	.admin{
	height: 5em;
    border: 2px solid #03A9F4;
    background: lavender;
	}
	ul.menu li a{
	color: black;
	text-decoration: none;
	padding-left: 10px;
    text-align: left;
    font-size: 18px;
    font-family: sans-serif;
    font-weight: 400;
    line-height: 4;
	}
	ul.menu li:hover{background-color: white;}
	ul.menu li:hover a{color:blue;}
</style>

</head>
<body>
	<div class="container-fluid">
		<div class="row admin">
			<div class="col-md-12">
				<h3 style="font-family: sans-serif;
					    
					    color: black;">Administrator</h3>
			</div>

			
			
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"style="padding-right:0;padding-left:0">
				
				<ul class="menu">
					<li calss="user">
							<div class="trai" style="float:left;width:40%;height:4em;background-color:red"></div>
							<div class="phai" style="float:left;width:60%;height:4em;background-color:blue"></div>
					</li>
					<li><a href="#" class="trangchu">Trang Chu</a></li>
					<li><a href="#" class="sanpham">Danh muc san pham</a></li>
					<li><a href="#" class="loaisanpham">Quan ly loai san pham</a></li>
					<li><a href="#" class="tintuc">Quan ly san pham</a></li>
					<li><a href="#" class="loaitintuc">Quan ly loai tin tuc</a></li>
					<li><a href="#" class="binhluan">Quan ly binh luan</a></li>
					<li><a href="#" class="khachang">Quan ly khach hang</a></li>
					<li><a href="#" class="khuyenmai">Quan ly Khuyen mai</a></li>
					<li><a href="#" class="khuyenmai">Quan ly Khuyen mai</a></li>
					<li><a href="#" class="khuyenmai">Quan ly Khuyen mai</a></li>
				</ul>
			</div>
			<div class="col-md-9"style="padding-right:0;padding-left:0;">
						@yield('quanly')
			</div>
		</div>
	</div>
	
</body>
</html>