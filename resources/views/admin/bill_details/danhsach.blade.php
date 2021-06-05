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
                    <div class="col-lg-12"><h1 style="text-align:center;font-family:initial;">Danh sách chờ xử lý
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
                                <td>Stt hóa đơn</td>
                                <td>Tên sản phẩm</td>
                               {{--  <td>Size</td> --}}
                                <td>Giá tiền</td>
                                <td>Số lượng</td>
                                <td>Ngày lập</td>
                                @if($kt->status==4)
                                 <td>In hóa đơn</td>
                                  @endif
                               
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($danhsach as $danhsach)
                            <tr class="odd gradeX" align="center">          
                               <td>{{$danhsach->id_bill}}</td>
                               <td>{{$danhsach->product_name}}</td>

                               <td>{{$danhsach->price}}</td>
                               <td>{{$danhsach->quantity}}</td>
                               <td>{{$danhsach->create_time}}</td>
                               @if($kt->status==4)
                                <td><a href="{{url('admin/bill_details/inhoadon/'.$danhsach->id_bill)}}" title=""><i class="fa fa-eye" aria-hidden="true" style="color:black;margin-right:5px"></i>In hóa đơn</a></td>
                               

                                @endif
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                    
                </div>
              
            </div>
         
</div>
@endsection
{{--                                <td>
                                   <?php
                                        $tensize=DB::table('product_size')->where('id',$danhsach['size_id'])->first();
                                        if(isset($tensize))
                                        {
                                            echo $tensize->name;
                                        }
                                        
                                    ?>
                               </td> --}}