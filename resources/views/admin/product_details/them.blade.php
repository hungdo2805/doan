
@extends('admin/layout/giaodien')
@section('noidung')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Them chi tiet
                            <small>Sản phẩm</small>
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
                        <form action="admin/product_details/them/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            <div class="form-group">
                                <label>Ma sp</label>
                                <input class="form-control "type="number" name="masp" value="{{$sanpham->id}}" readonly="">                      
                            </div>


                            <div class="form-group">
                                <label>Ten sp</label>
                                <input class="form-control " type="text"  value="{{$sanpham->name}}" readonly="">                         
                            </div>



                            <div class="form-group">
                                <label>Size</label>
                                
                                <select name="size" class="form-control" id="id_size" >
                                  @foreach($chon_size as $cs)
                                    <option value="{{$cs->id}}">{{$cs->name}}</option>
                                  @endforeach
                                    
                                </select>                        
                            </div>
                            

                            <div class="form-group">
                                <label>so luong</label>
                                <input class="form-control" type="number" name="soluong" id="soluong" min="1" value="1">
                            </div>
                       
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                            
                        <form>
                             <a class="btn btn-success" href="{{url('admin/product_size/danhsach')}}" title="">Trở lại</a>
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