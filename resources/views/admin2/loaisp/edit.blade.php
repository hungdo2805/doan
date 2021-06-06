<form action="{{ route('loaisp.update',$tam->id) }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="row">
        <div class="col-md-12">
            {{-- EDIT  ở đây --}}
            <div class="form-group">
                @foreach($danhmuc1 as $dm1)
                <label>Tên danh mục</label>
                @endforeach
                <select required name="danhmuc" class="form-control" id="danhmuc">
                  @foreach($danhmuc as $dm)
                    @if($tam['parent_id']==$dm['id'])
                    <option value="{{$dm->id}}"selected>{{$dm->name}}</option>
                    @else
                    <option value="{{$dm->id}}" >{{$dm->name}}</option>
                    @endif
                    
                  @endforeach
                </select> 
            </div>
            
            <div class="form-group">
                <label>Tên loại</label>
                @foreach($loaisp as $lsp)
                <input required class="form-control" name="tenloai" value="{{$lsp->name}}"/>   @endforeach        
            </div>
           
        </div>
    </div>
    <div class="modal-footer no-bd">
        <button type="submit" id="" class="btn btn-primary">Cập nhật</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>     
    </div>
</form>

