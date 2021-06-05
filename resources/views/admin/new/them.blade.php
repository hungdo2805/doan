
@extends('admin/layout/giaodien')
@section('noidung')
 <style type="text/css" media="screen">
    button a:hover{
      text-decoration: none
    }
</style>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin tức
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
                <form action="{{url('admin/new/them')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            @if(Auth::check())
                            <div class="form-group">
                                <label>Tác giả</label>
                                
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="" readonly="" />              
                            </div>
                            @endif

                            <div class="form-group">
                                <label>Tiêu đề tin tức</label>
                               <input type="text" class="form-control" name="tieude" placeholder="Vui lòng nhập tiêu đề tin tức" />
                            </div>

                            


                            <div class="form-group">
                                <label>Nội dung</label>
                               <textarea  class="ckeditor" name="noidung"></textarea>
                            </div>

                            

                            <div class="form-group">
                                <label>Hình</label>
                               <input type="file" name="hinh" class="form-control" required="true" >
                            </div>
                       
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                            
                        <form>
                             <button  class="btn btn-success"><a href="{{url('admin/new/danhsach')}}" title="" style="color:white">Trở về</a></button>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
