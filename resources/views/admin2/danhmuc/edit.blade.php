<form action="{{ route('danhmuc.update',$theloai->id) }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="row">
        <div class="col-md-12">

            <div class="form-group form-group-default">
                <label>Tên danh mục</label>
                <input required type="text" class="form-control" name="name" value="{{$theloai->name}}" />
            </div>
        </div>
    </div>
    <div class="modal-footer no-bd">
        <button type="submit" id="addRowButton" class="btn btn-primary">Cập nhật</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>     
    </div>
</form>

