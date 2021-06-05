
@extends('admin/layout/giaodien')
@section('noidung')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
{{--                         <h1 class="page-header">Cập nhật Size 
                             <small>{{$chon_size->name}}</small>
                              
                        </h1> --}}
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
                        <form action="admin/product_details/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            <div class="form-group">
                                <label>Ma sp</label>
                                <input class="form-control "type="hidden" name="masp" value="{{$sanpham->product_id}}" readonly="true">                      
                            </div>


{{--                             <div class="form-group">
                                <input type="hidden" name="size" class="form-control" id="id_size" value="{{$chon_size->id}}">
                               
                                
                               
                                     
                            </div> --}}
                            

                            <div class="form-group">
                                <label>Gía</label>
                                <input class="form-control" type="number" name="quantity" id="soluong" min="1" value="{{$sanpham->quantity}}" required="true">
                            </div>
                       
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                            
                        <form>
                             <a class="btn btn-success" href="{{url('admin/product_details/danhsach')}}" title="">Trở lại</a>
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