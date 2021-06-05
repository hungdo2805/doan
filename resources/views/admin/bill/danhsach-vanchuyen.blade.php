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
                    <div class="col-lg-12"><h1 style="text-align:center;font-family:initial;">Danh sách đang vận chuyển
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
                                <th>Tên Khách hàng</th>
                                <th>Email</th>
                                 <th>Sđt</th>
                                 <th>Đia chỉ</th>
                                <th>Tổng tiền</th>
                                <th>Ngày lập</th>
                                <th colspan="2">Tình trạng</th>

                                <th>Chi tiết sản phẩm</th>

                            </tr>
                        </thead>
                        <tbody>
                           @foreach($bill as $bill)
                            <tr class="odd gradeX" align="center">          
                               <td>{{$bill->id}}</td>
                               <td>{{$bill->user_name}}</td>
                               <td>{{$bill->user_email}}</td>
                               <td>{{$bill->user_phone}}</td>
                                <td>{{$bill->address}}</td>
                               <td>{{$bill->bill_total}}</td>

                               <td>{{$bill->create_time}}</td>
                                <form action="{{url('admin/bill/xacnhan-thanhcong/'.$bill->id)}}" method="get" accept-charset="utf-8">
                                  <td ><button type="submit" style="width:100px">Thành công</button></td>
                               </form>
                               <form action="{{url('admin/bill/xacnhan-huy/'.$bill->id)}}" method="get" accept-charset="utf-8">
                                  <td><button type="submit">Hủy</button></td>
                               </form>
                                 
                                <td><a href="{{url('admin/bill_details/danhsach/'.$bill->id)}}" title=""><i class="fa fa-eye" aria-hidden="true" style="color:black;margin-right:5px"></i>Xem chi tiết</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                    
                </div>
              
            </div>
         
</div>
@endsection