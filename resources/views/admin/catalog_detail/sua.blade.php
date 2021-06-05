@extends('admin/layout/giaodien')
    @section('noidung')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cập nhật
                            <small>{{$tam->name}}</small>
                            
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
                        <form action="admin/catalog_detail/sua/{{$tam->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                @foreach($danhmuc1 as $dm1)
                                <label>Tên danh mục:{{$dm1->name}}</label>
                                @endforeach
                                <select name="danhmuc" class="form-control" id="danhmuc">
                                  @foreach($danhmuc as $dm)
                                    @if($tam['parent_id']==$dm['id'])
                                    <option value="{{$dm->id}}"selected>{{$dm->name}}</option>
                                    @else
                                    <option value="{{$dm->id}}" >{{$dm->name}}</option>
                                    @endif
                                    
                                  @endforeach
                                </select> 
                            </div>
                            
                            <div class="form-group">
                                <label>Tên loại</label>
                                @foreach($loaisp as $lsp)
                                <input class="form-control" name="tenloai" value="{{$lsp->name}}"/>   @endforeach        
                            </div>
                           
                            
                             <button type="submit" class="btn btn-success">Cập nhật</button>
                            
                        <form>
                             <a class="btn btn-success" href="{{url('admin/catalog_detail/danhsach')}}" title="">Trở lại</a>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection