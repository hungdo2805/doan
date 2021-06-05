<!DOCTYPE html>
<html lang="en">
<head>
  <title>GO SHOP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  



  <!--  -->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('js/app.js')}}"> -->
  <!--  -->

             
</head>
<body>
<a name="vedau"></a>
@include('header')

 <!-- Home -->
    @yield('Home')
  <!--  -->

@include('footer')
<div style="z-index: 100;
    position: fixed;
    bottom: 2em;
    right: 2em;">
<a href="#vedau"><i class='far fa-arrow-alt-circle-up' style='font-size: 3em;
    color: #ff6666;'></i></a>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Doi hinh trang chi tiet -->
  <script type="text/javascript">

  $('.c img').click(function() {///lay img  trong div hinh1
    var c = this;//tro den 
    var src = this.src;//tro den duong dan chua hinh
    $('.a img').fadeOut(400,function(){//sau khi an phan tu -> hien ra phan tu duoc chon o div.hinh1
        c.src = this.src;
        $(this).fadeIn(400)[0].src = src;///hinh thay the sau khi swap
        });
    });
    </script>
</html>

  


     


