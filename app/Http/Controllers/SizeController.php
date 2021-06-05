<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;
use Hash,File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\catalog;
use App\product;
use App\list_image;
use App\catalog_detail;
use App\product_details;
use App\product_size;
use App\brand;
class SizeController extends Controller
{
    //
public function getdanhsach(){
    	$size=product_size::select('*')->get();
    	return view('admin/product_size/danhsach',compact('size'));
}

public function getthem(){
   return view('admin/product_size/them');
}
public function postthem(Request $rq){
   		$this->validate($rq,
   			[
   				'name'=>'unique:product_size,name',
   			],
   			[
   				
   				'name.unique'=>'Tên đã tồn tại',
   			]);

   		$size = new product_size;
   		$size->name=$rq->name;
   		$size->create_time= new Carbon();
   		// dd($size);
   		$size->save();
   		return redirect('admin/product_size/them')->with('thongbao','Thêm thành công');
}

public function getsua($id){
	$size=product_size::find($id);
	return view('admin/product_size/sua',compact('size'));

}
public function postsua(Request $rq1,$id){
	  $tamp=product_size::find($id);
	$this->validate($rq1,
		[
			'name'=>'required|unique:product_size,name',
		],
		[
			'name.required'=>'Chưa nhập tên size',
			'name.unique'=>'Tên size đã tồn tại',
		]);
	$tamp->name=$rq1->name;
	$tamp->save();
	return redirect('admin/product_size/sua/'.$id)->with('thongbao','Cập nhật thành công');
}
   public function getxoa($id){
   	$size_id=product_details::where('size_id',$id)->count();
   	// echo $size_id;
   	if ($size_id == 0){
   		$size=product_size::find($id);
   		$size->delete($id);
   		return redirect('admin/product_size/danhsach')->with('thongbao','Xóa thành công');
   	}else{
   		echo "<script type='text/javascript'>
   				alert('Xin lỗi Không thể xóa !');
   				window.location = '";
   					echo url('admin/product_size/danhsach');
   				echo"'
   			</script>";
   	}
   	
}

}
