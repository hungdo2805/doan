
@extends('admin/layout/giaodien')
@section('noidung')
<style type="text/css" media="screen">
    img.hinh_sp{
        width:20%;
    }
    img.hinh_sp1{
        width:20%;
        margin-right:10px;
    }
</style>
<div id="page-wrapper">
     <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cập nhật ảnh sản phẩm
                            <small>

                            </small>
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
                        <form action="{{url('admin/list_image/sua/'.$hinh->id)}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            
                             <div class="form-group">
                                <label>Tên sản phẩm</label>
                                
                               <input type="text" name="tensp" class="form-control"  readonly="" value="{{$ten->name}}" />
                            </div>

                            <div class="form-group">
                                <label>Hình</label>
                                
                                <div>
                                    <img src="{{asset('imgshoptt_list/'.$hinh->image1)}}" alt="" class="hinh_sp">
                                </div>
                                
                               <input type="file" name="hinh" class="form-control" required="true" />
                            </div>
                           


                       
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                            
                        <form>
                             <a class="btn btn-success" href="{{url('admin/list_image/danhsach')}}" title="">Trở lại</a>
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