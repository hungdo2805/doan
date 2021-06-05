@extends('admin/layout/giaodien')
    @section('noidung')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cập nhật thương hiệu
                            <small>{{$thuonghieu->name}}</small>
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
                        <form action="admin/brand/sua/{{$thuonghieu->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên thương hiệu</label>
                                <input class="form-control" name="name" value="{{$thuonghieu->name}}" />
                            </div>
                           
                            
                             <button type="submit" class="btn btn-success">Cập nhật</button>
                            
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection