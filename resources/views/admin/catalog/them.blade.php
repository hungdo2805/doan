
@extends('admin/layout/giaodien')
	@section('noidung')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm mới danh mục
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
                        <form action="" method="POST">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control" name="name" placeholder="Vui lòng nhập tên danh mục" />
                            </div>
                           
                            
                            
                            
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                            
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection