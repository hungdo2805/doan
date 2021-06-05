<style type="text/css" media="screen">
    tr>th{text-align:center;}
</style>
@extends('admin/layout/giaodien')
@section('noidung')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách Thương hiệu
                            <small></small>
                        </h1>
                    </div>
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                    {{session('thongbao')}}
                            </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Stt</th>
                                <th>Tên</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($thuonghieu as $th)        
                            <tr class="odd gradeX" align="center">
                                <td>{{$th->id}}</td>
								<td>{{$th->name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có muốn xóa')" href="admin/brand/xoa/{{$th->id}}">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/brand/sua/{{$th->id}}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
@endsection