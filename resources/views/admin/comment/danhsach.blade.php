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
                        <h1 class="page-header">Quản lý bình luận
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
                                <th>Stt sản phẩm</th>
                                <th>Nội dung</th>
                                <th>Ngày bình luận</th>
                                 <th>Kiểm duyệt</th>
                                <th>Xóa</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($dscomment as $cm)
                            <tr class="odd gradeX" align="center">           
                                <td>{{$cm->id}}</td>
                                <td>{{$cm->user_nam}}</td>
                                <td>{{$cm->email}}</td>
                                <td>{{$cm->product_id}}</td>
                                <td style="text-align: left">{{$cm->mess}}</td>
                                <td>{{$cm->create_time}}</td>
                                <form  action="{{url('admin/comment/sua/'.$cm->id)}}" method="get" accept-charset="utf-8"> 
                                @if($cm['status']==0)
                                    <td style="width:100px"><button type="submit">Duyệt</button></td>
                                @else
                                 <td style="width:100px">{{$cm->status}}</td>
                                @endif
                                </form>
                     
                           <td class="center" style="width:100px"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{$cm->id}}">Xóa</a></td>
                                
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