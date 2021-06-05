@extends('admin/layout/giaodien')
    @section('noidung')
    <style type="text/css" media="screen">
    td{
        text-align: center;
    }
    tr>th{
        text-align: center;
    }
    .pagination>li {
        border: none;
        
    }
    ul.pagination{
        margin:0px;
    }

    </style>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách loại sản phẩm
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
                                <th>Tên danh mục</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
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
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/catalog_detail/xoa/{{$lsp->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/catalog_detail/sua/{{$lsp->id}}">Sửa</a></td>
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

