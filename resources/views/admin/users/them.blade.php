
@extends('admin/layout/giaodien')
@section('noidung')
<style type="text/css" media="screen">
label.quyen{margin-right: 30px;}
input.form-control.a {
    width: 20px;
    margin: auto;
}
</style>    
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài Khoản
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                        <form action="admin/users/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>


                            <div class="form-group">
                                <label>Tên(*)</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}">                   
                            </div>
                            <div class="form-group">
                                <label>Email(*)</label>
                                <input type="email" name="email" class="form-control" value="{{old('email')}}">                   
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại(*)</label>
                                <input type="text" name="phone" class="form-control" value="{{old('phone')}}">                   
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ(*)</label>
                                <input type="text" name="address" class="form-control" value="{{old('address')}}">                   
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu(*)</label>
                                <input type="password" name="password" class="form-control">                   
                            </div>
                            <div class="form-group">
                                <label class="quyen">Quyền :</label>

                                <label class="quyen">
                                    Admin 
                                     <input type="radio" name="quyen" class="form-control a" value="0">
                                </label>

                                <label class="quyen">
                                    Thành viên
                                     <input type="radio" name="quyen" checked="checked" class="form-control a" value="1">
                                </label>
                                                
                            </div>              
                            <button type="submit" class="btn btn-success">Thêm</button>
                            
                        <form>
                            <a class="btn btn-success" href="{{url('admin/users/danhsach')}}" title="">Trở lại</a>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection

@section('script')
 <script type="text/javascript">
     $(document).ready(function(){
        $("#danhmuc").change(function(){
            var iddanhmuc = $(this).val();
            $.get("admin/ajax/loai/" +iddanhmuc,function(data){
                
                $("#loai").html(data);
            });

        });

     });
 </script>

@endsection