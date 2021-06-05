
@extends('admin/layout/giaodien')
	@section('noidung')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm mới loại sản phẩm
                            <small></small>
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
                        <form action="admin/catalog_detail/them" method="POST">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <select name="danhmuc" class="form-control" id="danhmuc">
                                  @foreach($danhmuc as $dm)
                                    <option value="{{$dm->id}}">{{$dm->name}}</option>
                                  @endforeach
                                </select> 
                            </div>

                            <div class="form-group">
                                <label>Tên loại</label>
                                <input class="form-control" name="name" placeholder="Vui lòng nhập tên loại" />
                            </div>
                           
                            
                            
                            
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                            
                        <form>
                             <a class="btn btn-success" href="{{url('admin/catalog_detail/danhsach')}}" title="">Trở lại</a>
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