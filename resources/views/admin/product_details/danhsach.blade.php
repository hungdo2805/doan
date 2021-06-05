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
                        <h1 class="page-header">Danh sách chi tiết sản phẩm
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
                                <th>Tên sản phẩm</th>
                                {{-- <th>Tên size</th> --}}
                                <th>Gía</th>

                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($thongtin as $tt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tt->id}}</td>
                                <td>
                                   
                                    <?php 
                                         $tensp=DB::table('product')->where('id',$tt['product_id'])->first();
                                         if(isset($tensp))
                                         {
                                            echo $tensp->name;
                                         }
                                    ?>
                                </td>
{{--                                 <?php 
                                         $tensize=DB::table('product_size')->where('id',$tt['size_id'])->first();
                                         
                                            if(isset($tensize))
                                            {
                                                echo"<td>$tensize->name</td>";
                                            }
                                ?> --}}
                                <td>
                                    {{$tt->quantity}}
                                </td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product_details/xoa/{{$tt->id}}">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product_details/sua/{{$tt->id}}">Sửa</a></td>
                                
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