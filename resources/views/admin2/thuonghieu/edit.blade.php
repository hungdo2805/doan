<form action="{{ route('thuonghieu.update',$thuonghieu->id) }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="row">
        <div class="col-md-12">
            {{-- EDIT  ở đây --}}
            <div class="form-group">
                <label>Tên thương hiệu</label>
                <input class="form-control" name="name" value="{{$thuonghieu->name}}" />
            </div>
           
        </div>
    </div>
    <div class="modal-footer no-bd">
        <button type="submit" id="" class="btn btn-primary">Cập nhật</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>     
    </div>
</form>

