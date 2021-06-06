<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\brand;
use Carbon\Carbon;

class ThuonghieuController extends Controller
{
    //
	public function Home()
    {
       return redirect()->route('thuonghieu.index');
    }

    public function getdanhsach(){
    	$thuonghieu=brand::all();
    	return view('admin2.thuonghieu.list',compact('thuonghieu'));
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
		return $this->Home()->with('thongbao','Đã tạo mới');;
    }

    public function getsua($id){
    	$thuonghieu=brand::find($id);
    	return view('admin2.thuonghieu.edit',compact('thuonghieu'));
    }
    public function postsua(Request $rq1,$id){
    	$thuonghieu=brand::find($id);
    /*	$this->validate($rq1,
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
        );*/
        $thuonghieu->name=$rq1->name;
        $thuonghieu->status=1;
        
        $thuonghieu->update_time=new Carbon;
       $thuonghieu->save();
	   return $this->Home()->with('thongbao','Đã cập nhật');
    }

    public function getxoa($id){
    	brand::findOrFail($id)->delete(); 
        return $this->Home();
    }
}
