@extends('admin2.Viewchinh')
@section('menutong1') active submenu  @endsection
@section('menu2')   active  @endsection

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
                        <a >Loại Sản Phẩm</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Loại Sản Phẩm</h4>
                                 <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add New
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">New</span> 
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           
                                            <form action="admin/catalog_detail/them" method="POST">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                <div class="form-group">
                                                    <label>Tên danh mục</label>
                                                    <select required name="danhmuc" class="form-control" id="danhmuc">
                                                      @foreach($danhmuc as $dm)
                                                        <option value="{{$dm->id}}">{{$dm->name}}</option>
                                                      @endforeach
                                                    </select> 
                                                </div>
                    
                                                <div class="form-group">
                                                    <label>Tên loại</label>
                                                    <input class="form-control" name="name" placeholder="Vui lòng nhập tên loại" required />
                                                </div>
                                               
                                                
                                                
                                                
                                                <button type="submit" class="btn btn-success">Thêm mới</button>
                                                
                                            <form>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>                    
                            
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
                                            <th>Stt</th>
                                            <th>Tên</th>
                                            <th>Tên danh mục</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            
                                        @foreach($loaisp as $lsp)
                                        <tr class="odd gradeX" align="center">
                                            <td>{{$lsp->id}}</td>
                                            <td>{{$lsp->name}}</td>
                                            <td>
                                                <?php 
                                                     $parent=DB::table('catalog')->where('id',$lsp['parent_id'])->first();
            
                                                    if(isset($parent))
                                                    {
                                                         echo $parent->name;
                                                    }
                                                 ?>
            
                                            </td>

                                                <td>
                                                    <div class="form-button-action">
                                                        <a type="button" class="btn btn-link btn-primary btn-lg"  data-toggle="modal" id="mediumButton" data-target="#mediumModal"
                                                            data-attr="{{ route('loaisp.edit',$lsp->id)  }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <a  href="{{ route('loaisp.delete', $lsp->id) }}"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  class="btn btn-link btn-danger  btn-lg" data-original-title="Remove">
                                                                <i class="fa fa-trash"></i>
                                                        </a>             
                                                    </div>
                                                 </td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            {{-- MODAL --}}
                                      <!-- medium modal -->
                                        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            <span class="fw-mediumbold">
                                                            Update
                                                            </span> 
                                            
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" id="mediumBody">
                                                        <div>
                                                            <!-- the result to be displayed apply here -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                       
                            {{-- END  --}}
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