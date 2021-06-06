@extends('admin2.Viewchinh')
@section('menutong1') active submenu  @endsection
@section('menu4')   active  @endsection

@section('Kethuaview')

<div class="content">
    <div class="page-inner">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Thêm sản phẩm</h4>
                           
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                   
                        @foreach ($errors->all() as $message)
                             <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                        @endforeach
                        <form action="admin/product/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="row">

                                @if(count($errors) >0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err) {{$err}}<br />
                        
                                    @endforeach
                                </div>
                                @endif @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                                @endif


                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 ">
                                    <label>Danh mục</label>
                        
                                    <select name="danhmuc" class="form-control" id="danhmuc">
                                        @foreach($danhmuc as $dm)
                                        <option value="{{$dm['id']}}">{{$dm['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 ">
                                    <label>Loại sản phẩm</label>
                        
                                    <select name="loai" class="form-control" id="loai">
                                        @foreach($loaisp as $lsp)
                                        <option value="{{$lsp['id']}}">{{$lsp['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 ">
                                    <label>Thương hiệu</label>
                                    <select name="thuonghieu" class="form-control">
                                        @foreach($thuonghieu as $th)
                                        <option value="{{$th['id']}}">{{$th['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="row" >
                               
                                <div class="form-group col-lg-12 col-md-12 ">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="ten" placeholder="Vui lòng nhập tên sản phẩm" />
                                </div>
                        
                                <div class="form-group col-lg-6 col-md-6 ">
                                    <label>Giá</label>
                                    <input type="number" class="form-control" name="gia" placeholder="Vui lòng nhập giá tiền" value="{{old('gia')}}" />
                                </div>
                        
                                <div class="form-group col-lg-6 col-md-6 ">
                                    <label class="km">
                                        Khuyến mãi:<br />
                                        Nếu có thì nhập giá khuyến mãi! <br />
                                        Không thì không cần nhập!
                                    </label>
                                    <br />
                                    <br />
                                    <label class="km">
                                        Có
                                        <input type="radio" name="km" class="form-control a" value="1" />
                                    </label>
                        
                                    <label class="km">
                                        Không
                                        <input type="radio" name="km" class="form-control a" value="0" />
                                    </label>
                                </div>
                        
                                  <div class="form-group col-lg-6 col-md-6 ">
                                    <label>Giá km</label>
                                    <input type="number" class="form-control" name="giakm" placeholder="Giá khuyến mãi" value="{{old('giakm')}}" />
                                </div>
                        
                                  <div class="form-group col-lg-12 col-md-12 ">
                                    <label>Mô tả</label>
                                    <textarea id="demo" class="ckeditor" name="mota"></textarea>
                                  </div>
                        
                                  <div class="form-group col-lg-6 col-md-6 ">
                                    <label>Hình</label>
                                    <input type="file" name="hinh" class="form-control" required="true" />
                                 </div>

                                 <div class="form-group col-lg-6 col-md-6 ">
                                  
                                        @for($i=0;$i<5;$i++)
                                          <div class="form-group col-lg-6 col-md-6 ">
                                            <label>Hình chi tiết {{$i+1}}</label>
                                            <input type="file" name="hinhchitiet[]" />
                                        </div>
                                        @endfor
                                
                                 </div>
                        
                                
                            </div>

                            <button type="submit" class="btn btn-success">Thêm mới</button>
                            <form></form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection