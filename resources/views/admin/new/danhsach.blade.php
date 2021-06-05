@extends('admin/layout/giaodien')
    @section('noidung')
    <style type="text/css" media="screen">

    td{
        width: 100px;
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
                        <h1 class="page-header">Danh sách tin tức
                            <small></small>
                        </h1>
                    </div>
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                    {{session('thongbao')}}
                            </div>
                    @elseif(session('thongbaoloi'))
                            <div class="alert alert-danger" style="margin-top:100px">
                                    {{session('thongbaoloi')}}
                            </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Stt</th>
                                <th>Tên tác giả</th>
                                <th>Tên tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Hình ảnh</th>
                               
                                <th>Xóa</th>
                                <th>Sửa</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($tintuc as $tt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tt->id}}</td>
                                <td>
                                     {{$tt->user_name}}
                                     

                                </td>
                                <td>{{$tt->title}}</td>
                                <td>{!!$tt->description!!}</td>

                               
                               
                                <td><img src="{{asset('imgtintuc/'.$tt->image)}}" alt="" style="width:100%"></td>

                                



                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/new/xoa/{{$tt->id}}" onclick="return xacnhanxoa('Bạn muốn xóa')">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/new/sua/{{$tt->id}}">Sửa</a></td>
                                
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