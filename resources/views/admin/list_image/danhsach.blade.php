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
    i.fas.fa-plus.fa-fw {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    /* -webkit-font-smoothing: antialiased; */
}

    </style>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align:center">Danh sách hình liên quan của sản phẩm
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
                                <th>Hình</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_image as $sp)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{{$sp->id_sp}}</td>               <td>
                                    <img src="{{asset('imgshoptt_list/'.$sp->image)}}" alt="" style="width:150px"></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/list_image/xoa/{{$sp->id}}">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/list_image/sua/{{$sp->id}}">Sửa</a></td>
                               
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