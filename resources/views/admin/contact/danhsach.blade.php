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
.col-lg-12 {float:none}

    </style>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý liên hệ khách hàng
                            <small></small>
                        </h1>
                    </div>
                    <br>
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                    {{session('thongbao')}}
                            </div>
                    @elseif(session('thongbaoloi'))
                            <div class="alert alert-danger">
                                    {{session('thongbaoloi')}}
                            </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Stt</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Nội dung</th>
                                <th>Ngày gửi</th>
                                <th>Xóa</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($danhsach as $ds)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{{$ds->id}}</td>
                                <td>{{$ds->name}}</td>
                                <td>{{$ds->email}}</td>
                                 <td>{{$ds->mess}}</td>
                                <td>{{$ds->create_time}}</td>
                     
                           <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/contact/xoa/{{$ds->id}}">Xóa</a></td>
                                
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                    <!-- <div style="width:100%;text-align:center">
                            $sanpham->links()
                    </div> -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
@endsection