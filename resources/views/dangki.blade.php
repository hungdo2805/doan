
<style type="text/css" media="screen">
div.icon img{
        width: 94%;
}
.register h2 
{
    color: #333;
    font-size: 3em;
    margin: 0 0 1em;
    text-align: center;
    /* font-family: 'Poiret One', cursive; */
    font-weight: 700;
}
.register
{
       padding: 1em 0;
}
.mation
{
    padding: 4em 0;
    width: 50%;
    margin: auto;
}
.register-top-grid input[type="text"], input[type="password"], input[type="email"] , input[type="number"] 
{
        border: 1px solid #EEE;
        outline-color: #fa03bb;
        width: 100%;
        font-size: 1em;
        padding: 0.5em;
        margin: 0.5em 0px;
}
.submit
{
    background: black;
    color: #FFF;
    font-size: 1em;
    padding: 0.4em 1em;
    display: inline-block;
    border: none;
    outline: none;
    margin-top: 2em;
}
.alert-danger
{
    margin: auto;
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
    width: 50%;
}
</style>
@extends('master/masterpage1')
@section('Home')
<div class="container">
    <div class="register">
         <h2>Đăng Kí Tài Khoản</h2>
                @if(count($errors) >0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)    

                            {{$err}}<br>

                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
            <form action="{{url('dangki')}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                 <div class="col-md-12  register-top-grid">
                            <div class="mation">
                                <span>Tên(*)</span>
                                <input type="text" name="name" value="{{old('name')}}"> 

                                 <span>Email(*)</span>
                                 <input type="email" name="email" value="{{old('email')}}"> 

                                <span>Số điện thoại(*)</span>
                                <input type="number" name="phone" value="{{old('phone')}}"/> 
                           
                                <span>Địa chỉ(*)</span>
                                <input type="text" name="address" value="{{old('address')}}"> 

                                <span>Mật khẩu(*)</span>
                                <input type="password" name="password">
                                <span>Nhập lại mật khẩu(*)</span>
                                <input type="password" name="password1">

                                <input type="submit" value="Đăng Kí" class="submit">
                            </div>
                          
                 </div>
                     
            </form>
                
                
    </div>
</div>
@endsection
