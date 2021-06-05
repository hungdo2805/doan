
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
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) >0)
                    <div class="alert alert-success">
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
                        <form action="admin/users/sua/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>


                            <div class="form-group">
                                <label>Tên(*)</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}" 
                                @if($user["isadmin"]==1)
                                {
                                	readonly="true";
                                }
                               	@endif
                                >                   
                            </div>
                            <div class="form-group">
                                <label>Email(*)</label>
                                <input type="email" name="email" class="form-control" value="{{$user->email}}">                   
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại(*)</label>
                                <input type="text" name="phone" class="form-control" value="{{$user->phone}}">                   
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ(*)</label>
                                <input type="text" name="address" class="form-control" value="{{$user->address}}">                   
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu(*)</label>
                                <input type="password" name="password" class="form-control">                   
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu(*)</label>
                                <input type="password" name="password1" class="form-control">                   
                            </div>
                            @if(Auth::user()->id != $id)
                            <div class="form-group">
                                <label class="quyen">Quyền :</label>
                                @if(Auth::user()->isadmin !=0)
                                <label class="quyen">
                                    Admin 
                                     <input type="radio" name="quyen" class="form-control a" value="0" 
                                     @if($user["isadmin"] == 0)
                                     {
                                     	checked="checked" 
                                	 }
                                     @endif
                                     >
                                </label>
                                 @endif  
                               
                                <label class="quyen">
                                    Thành viên
                                     <input type="radio" name="quyen" class="form-control a" value="1"
                                     @if($user["isadmin"] == 1)
                                     {
                                     	checked="checked" 
                                	 }
                                     @endif>
                                </label>
                                             
                            </div> 
                            @else
                                <input type="hidden" name="quyen" class="form-control a" value="{{$user->isadmin}}">
                            @endif             
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                            
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