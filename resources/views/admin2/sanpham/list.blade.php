@extends('admin2.Viewchinh')
@section('menutong1') active submenu  @endsection
@section('menu4')   active  @endsection

@section('Kethuaview')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                {{-- <h4 class="page-title">DataTables.Net</h4> --}}
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a >Sản phẩm</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a ></a>
                    </li>
                </ul>
            </div>
            <div class="row">
                
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Sản Phẩm</h4>
                                <a href=" {{ route('sanpham.create') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add New 
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                                              
                            
                            @if(session('thongbao'))
                                    <div class="alert alert-success">
                                            {{session('thongbao')}}
                                    </div>
                            @endif

                            <div class="table-responsive">

                                {{--
                                     <table id="add-row" class="display table table-striped table-hover" > 
                                --}}
                                

                                <table id="add-row" class="display table table-striped table-hover" > 
                                    <thead>
                                        <tr align="center">
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Thương hiệu</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Giá KM</th>
                                            <th>Hình</th>
                                              <th>Trạng thái</th>
                                              <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sanpham as $sp)
                                        <tr class="odd gradeX" align="center">
                                            <td>{{$sp->id}}</td>
                                            <td>{{$sp->name}}</td>
                                            <td>
                                                 <?php 
                                                $brand=DB::table('brand')->where('id',$sp['brand_id'])->first();
                                                     if(isset($brand))
                                                     {
                                                         echo $brand->name;
                                                     }
                                                     
                                                 ?>
            
                                            </td>
                                            <td>
                                                 <?php 
                                                     $loai=DB::table('catalog_detail')->where('id',$sp['catalog_detail_id'])->first();
                                                     if(isset($loai))
                                                     {
                                                        echo $loai->name;
                                                     }
                                                     
                                                 ?>
            
                                            </td>
                                            <td>{{number_format($sp->price,0,",",".")}}</td>
                                            <td>{{number_format($sp->price1,0,",",".")}}</td>
                                            <td><img src="{{asset('imgshoptt/'.$sp->image)}}" alt="" style="width:150px"></td>
                                            
                                           
                                            <td>
                                                <form action="{{url('admin/product/trang-thai-an/'.$sp->id)}}" method="get" accept-charset="utf-8">
                                                   <button type="submit">Ẩn</button>
                                                </form>
                                            </td>
                                            
                                            <td>
                                                <div class="form-button-action">
                                                    <a type="button" class="btn btn-link btn-primary btn-lg"  data-toggle="modal" id="mediumButton" data-target="#mediumModal"
                                                        data-attr="{{ route('sanpham.edit',$sp->id)  }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <a  href="{{ route('sanpham.delete', $sp->id) }}"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  class="btn btn-link btn-danger  btn-lg" data-original-title="Remove">
                                                            <i class="fa fa-trash"></i>
                                                    </a>             
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('kethuaJS')
<script>
	// display a modal (medium modal)
	$(document).on('click', '#mediumButton', function(event) {
		event.preventDefault();
		let href = $(this).attr('data-attr');
		$.ajax({
			url: href,
			beforeSend: function() {
				$('#loader').show();
			},
			// return the result
			success: function(result) {
				$('#mediumModal').modal("show");
				$('#mediumBody').html(result).show();
			},
			complete: function() {
				$('#loader').hide();
			},
			error: function(jqXHR, testStatus, error) {
				console.log(error);
				alert("Page " + href + " cannot open. Error:" + error);
				$('#loader').hide();
			},
			timeout: 8000
		})
	});

</script>
    
@endsection