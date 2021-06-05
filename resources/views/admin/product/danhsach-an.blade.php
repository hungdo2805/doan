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
.alert.alert-success {
    margin-top: 89px;
}

    </style>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách sản phẩm
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
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Thương hiệu</th>
                                <th>Loại sản phẩm</th>
                                <th>Giá</th>
                                <th>Giá KM</th>
                                <th>Hình</th>
                                <th>Trạng thái</th>
                                <th>Xóa</th>
                                <th style="width:50px;">Sửa</th>
                                <!-- <th>Thêm chi tiết </th> -->
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sanpham1 as $sp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sp->id}}</td>
                                <td>{{$sp->name}}</td>
                                <td>
                                     <?php 
                                         $brand=DB::table('brand')->where('id',$sp['brand_id'])->first();
                                         echo $brand->name;
                                     ?>

                                </td>
                                <td>
                                     <?php 
                                         $loai=DB::table('catalog_detail')->where('id',$sp['catalog_detail_id'])->first();
                                         echo $loai->name;
                                     ?>

                                </td>
                                <td>{{number_format($sp->price,0,",",".")}}</td>
                                <td>{{number_format($sp->price1,0,",",".")}}</td>
                                <td><img src="{{asset('imgshoptt/'.$sp->image)}}" alt="" style="width:150px"></td>
                                
                               
                                <td>
                                    <form action="{{url('admin/product/trang-thai-hien/'.$sp->id)}}" method="get" accept-charset="utf-8">
                                       <button type="submit">Hiện</button>
                                    </form>
                                </td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/xoa/{{$sp->id}}" onclick="return xacnhanxoa('Bạn muốn xóa! Sẽ ảnh hưởng dữ liệu liên quan tới sản phẩm này')">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/sua/{{$sp->id}}">Sửa</a></td>
                               <!--  <td class="center"><i class="fas fa-plus fa-fw"></i> <a href="admin/product_details/them/{{$sp->id}}">Thêm </a></td> -->
                                
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