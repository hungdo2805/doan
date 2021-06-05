
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
                            <small>Sửa</small>
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
                        <form action="admin/product/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            <div class="form-group">
                                @foreach($loaisp as $lsp) 
                                <label>Loại sản phẩm:{{$lsp['name']}}
                                </label>
                                @endforeach
                                
                                <select name="loai" class="form-control" id="loai" >
                                        @foreach($loaisp1 as $lsp1) 

                                            <!--  -->
                                           
                                        @if($lsp1['id'] == $sanpham['catalog_detail_id'])
                                            <option value="{{$lsp1['id']}}" selected>{{$lsp1['name']}}
                                            </option>
                                        @else
                                            <option value="{{$lsp1['id']}}">{{$lsp1['name']}}
                                            </option>
                                        @endif
                                           
                                        @endforeach

                                    
                                </select>                        
                            </div>
                            <div class="form-group">
                                @foreach($thuonghieu as $th) 
                                <label>Thương hiệu:{{$th['name']}}</label>
                                @endforeach

                                <select name="thuonghieu" class="form-control" >
                                    @foreach($thuonghieu1 as $th1)
                                        @if($th1['id'] == $sanpham['brand_id'])
                                            <option value="{{$th1['id']}}"selected>{{$th1['name']}}
                                            </option>
                                        @else
                                            <option value="{{$th1['id']}}">{{$th1['name']}}
                                            </option>
                                        @endif
                                    @endforeach
                                </select> 
                            </div>

                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                               <input type="text" class="form-control" name="ten" value="{{$sanpham->name}}" required="true"/>
                            </div>

                            <div class="form-group">
                                <label>Giá</label>
                                <input type="number" class="form-control" name="gia" value="{{$sanpham->price}}" required="true"/>
                            </div>
                            <div class="form-group">
                                <label class="km">Khuyến mãi:<br>Nếu có thì nhập giá khuyến mãi!
                                    <br>Không thì không cần nhập! KM=0</label><br><br>    

                                

                                <label class="km">
                                    có
                                     <input type="radio" name="km" class="form-control a" value="1"
                                     @if($sanpham["km"] == 1)
                                     {
                                        checked="checked" 
                                     }
                                     @endif>
                                </label>

                                <label class="km">
                                   Không 
                                     <input type="radio" name="km" class="form-control a" value="0" 
                                     @if($sanpham["km"] == 0)
                                     {
                                        checked="checked" 
                                     }
                                     @endif
                                     >
                                </label>
                                                
                            </div> 
                            <div class="form-group">
                                <label>Giá km</label>
                                <input type="number" class="form-control" name="giakm" value="{{$sanpham->price1}}" />
                            </div>


                            <div class="form-group">
                                <label>Mô tả</label>
                               <textarea id="demo" class="ckeditor" name="mota" required="true">{{$sanpham->descriptions}}</textarea>
                            </div>

                            

                            <div class="form-group">
                                <label>Hình</label>
                                <!-- <div>
                                    <img src="{{asset('imgshoptt/'.$sanpham->image)}}" alt="" class="hinh_sp">
                                </div> -->
                                
                               <input type="file" name="hinh" class="form-control" required="true" />
                            </div>
                            <!-- hinh 1 -->


                       
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                            
                        <form>
                            <a class="btn btn-success" href="{{url('admin/product/danhsach')}}" title="">Trở lại</a>
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