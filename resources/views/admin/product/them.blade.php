
@extends('admin/layout/giaodien')
@section('noidung')
<style type="text/css">
    label.km{margin-right: 30px;}
    input.form-control.a {
    width: 20px;
    margin: auto;
}
</style>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
            <form action="admin/product/them" method="POST" enctype="multipart/form-data">
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
                        
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            <div class="form-group">
                                <label>Danh mục</label>
                                
                                <select name="danhmuc" class="form-control" id="danhmuc">
                                   @foreach($danhmuc as $dm) 
                                    <option value="{{$dm['id']}}">{{$dm['name']}}</option>
                                    @endforeach

                                    
                                </select>                        
                            </div>

                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                
                                <select name="loai" class="form-control" id="loai" >
                                   @foreach($loaisp as $lsp) 
                                    <option value="{{$lsp['id']}}">{{$lsp['name']}}</option>
                                    @endforeach

                                    
                                </select>                        
                            </div>
                            <div class="form-group">
                                <label>Thương hiệu</label>
                                <select name="thuonghieu" class="form-control" >
                                   @foreach($thuonghieu as $th) 
                                    <option value="{{$th['id']}}">{{$th['name']}}</option>
                                    @endforeach

                                    
                                </select> 
                            </div>

                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                               <input type="text" class="form-control" name="ten" placeholder="Vui lòng nhập tên sản phẩm" />
                            </div>

                            <div class="form-group">
                                <label>Giá</label>
                                <input type="number" class="form-control" name="gia" placeholder="Vui lòng nhập giá tiền" value="{{old('gia')}}" />
                            </div>

                            <div class="form-group">
                                <label class="km">Khuyến mãi:<br>Nếu có thì nhập giá khuyến mãi!
                                    <br>Không thì không cần nhập!</label><br><br>              
                                <label class="km">
                                   Có
                                     <input type="radio" name="km" class="form-control a" value="1">
                                </label>

                                <label class="km">
                                    Không 
                                     <input type="radio" name="km" class="form-control a" value="0">
                                </label>
                                                
                            </div>  
                            
                            <div class="form-group">
                                <label>Giá km</label>
                                <input type="number" class="form-control" name="giakm" placeholder="Giá khuyến mãi" value="{{old('giakm')}}" />
                            </div>


                            <div class="form-group">
                                <label>Mô tả</label>
                               <textarea id="demo" class="ckeditor" name="mota"></textarea>
                            </div>

                            

                            <div class="form-group">
                                <label>Hình</label>
                               <input type="file" name="hinh" class="form-control" required="true">
                            </div>
                       
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                            

                             
                         <a class="btn btn-success" href="{{url('admin/product/danhsach')}}" title="">Trở lại</a>

                    </div>
                    
                    <div class="hinh_details" style="float:right">
                                     @for($i=0;$i<5;$i++)
                                            <div class="form-group">
                                                <label>Hình chi tiết {{$i+1}}</label>
                                                <input type="file" name="hinhchitiet[]">
                                            </div>
                                     @endfor
                    </div>
            <form>

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