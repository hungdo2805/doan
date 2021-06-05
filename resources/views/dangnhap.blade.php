
<style type="text/css" media="screen">
div.icon img{
        width: 94%;
}
.register h2 {
color: #333;
font-size: 3em;
margin: 0 0 1em;
text-align: center;
/*  font-family: 'Poiret One', cursive; */
font-weight: 700;
                }
                .register {
                       padding: 1em 0;
}
        .mation {
            padding: 4em 0;
            width: 50%;
            margin: auto;
        }
    .register-top-grid input[type="text"], input[type="password"], input[type="email"] , input[type="number"] 
    {
        border: 1px solid #00000061;
    outline-color: #9E9E9E;
    width: 100%;
    font-size: 1em;
    padding: 0.5em;
    margin: 0.5em 0px;
    }
    .submit{
    background: black;
    color: #FFF;
    font-size: 1em;
    padding: 0.4em 1em;
    display: inline-block;
    border: none;
    outline: none;
    margin-top: 2em;
    }
    .alert-danger {
    margin: auto;
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
    width: 50%;
}
.register-top-grid p {
    margin: 0 0 10px;
    width: 25em;
}
</style>

<body>
@extends('master/masterpage1')
  @section('Home')
<div class="container">
    <div class="register">
         <h2>Đăng Nhập</h2>
                @if(count($errors) >0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)    

                            {{$err}}<br>

                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                <div class="alert alert-danger">
                    {{session('thongbao')}}
                </div>
                @endif
            <form action="{{url('dangnhap')}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                 <div class="col-md-6  register-top-grid">
                            <div class="mation">
                              
                                <span>Email(*)</span>
                                <input type="email" name="email"> 

                                <span>Password(*)</span>
                                <input type="password" name="password" placeholder="Từ 6 đến 20 kí tự">

                                <input type="submit" value="Đăng Nhập" class="submit">
                            </div>
                          
                 </div>
                 <div class="col-md-6 register-top-grid">
                            <div class="mation">
                                <h4>Khách hàng mới</h4>
				 <p>Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể chuyển qua quy trình thanh toán nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn hàng của bạn trong tài khoản của bạn và hơn thế nữa.</p>
				 <a class="Tao-btn" href="{{url('dangki')}}">Tạo tài khoản</a>
                            </div>
                          
                 </div>
                     
            </form>
                
                
    </div>
</div>
@endsection
