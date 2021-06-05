<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\brand;
use Carbon\Carbon;

class ThuonghieuController extends Controller
{
    //
    public function getdanhsach(){
    	$thuonghieu=brand::all();
    	return view('admin/brand/danhsach',compact('thuonghieu'));
    }

    public function getthem(){
    	
    	return view('admin/brand/them');
    }
    public function postthem(Request $rq){

    	$this->validate($rq,
        	[
        		'name' => 'required|unique:brand,name|min:2|max:100',
        	],
        	[
        		'name.required'=>'Bạn chưa nhập tên thương hiệu',
        		'name.unique' => 'Tên đã tồn tại',
        		'name.min'=>'Tên thể thương hiệu phải có từ 2 -> 100 kí tự',
        		'name.max'=>'Tên thể thương hiệu phải có từ 2 -> 100 kí tự',

        	]
        );
        $thuonghieu= new brand;
        // $thuonghieu->name(ten khong dau) = str_slug($rq->name,'-');//khong dấu
        $thuonghieu->name=$rq->name;
        $thuonghieu->status=1;
        $thuonghieu->create_time=new Carbon;
       	// dd($thuonghieu);
        $thuonghieu->save();
        return redirect('admin/brand/them')->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$thuonghieu=brand::find($id);
    	return view('admin/brand/sua',compact('thuonghieu'));
    }
    public function postsua(Request $rq1,$id){
    	$thuonghieu=brand::find($id);
    	$this->validate($rq1,
        	[
        		'name' => 'required|unique:brand,name|min:2|max:100',
        		'name' => 'required|min:2|max:100',
        	],
        	[
        		'name.required'=>'Bạn chưa nhập tên thương hiệu',
        		'name.unique' => 'Tên đã tồn tại',
        		'name.min'=>'Tên thể thương hiệu phải có từ 2 -> 100 kí tự',
        		'name.max'=>'Tên thể thương hiệu phải có từ 2 -> 100 kí tự',
        	]
        );
        $thuonghieu->name=$rq1->name;
        $thuonghieu->status=1;
        
        $thuonghieu->update_time=new Carbon;
       $thuonghieu->save();
        return redirect('admin/brand/sua/'.$id)->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$thuonghieu=brand::find($id);
    	$thuonghieu->delete($id);

    	return redirect()->back();
    }
}
