<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\catalog;
use App\product;
use App\list_image;
use App\catalog_detail;
use App\product_details;
use App\product_size;
use App\brand;
use App\users;

class TheLoaiController extends Controller
{
	 function __construct(){
       $catalog =catalog::all();
       $brand =brand::all();
       $catalog_detail =catalog_detail::all();
       $catalog_detail1=catalog_detail::select('*')->where('parent_id','1')->get();
       $catalog_detail2=catalog_detail::select('*')->where('parent_id','2')->get();
        $rd_ds=catalog_detail::select('*')->inRandomOrder()->skip(0)->take(4)->get();
       view()->share(['danhsach'=>$brand,'catalog'=>$catalog,'dml'=>$catalog_detail,'dml1'=>$catalog_detail1,'dml2'=>$catalog_detail2,'rd_ds'=>$rd_ds]);
    }
    public function Home()
    {
       return redirect()->route('danhmuc.index');
    }

     public function getdanhsach(){
       // return view('admin.catalog.danhsach');
       return view('admin2.danhmuc.list');
    }

    public function getThem(){
        return view('admin.catalog.them');
    }
    public function postThem(Request $rq)
    {
        
        $theloai= new catalog;
        // $theloai->name(ten khong dau) = str_slug($rq->name,'-');//khong dấu
        $theloai->name=$rq->name;
        $theloai->status=1;
        $theloai->save();
        return $this->Home()->with('thongbao','Đã tạo mới');;
        
    }

    public function getSua($id){
    	$theloai=catalog::find($id);
    	//return view('admin/catalog/sua',['theloai'=>$theloai]);
        return view('admin2.danhmuc.edit',compact('theloai'));
    }

    public function postSua(Request $rq1,$id){
		$theloai=catalog::find($id);
		$this->validate($rq1,
        	[
        		'name' => 'required|unique:catalog,name|min:2|max:100',
        		'name' => 'required|min:2|max:100',
        	],
        	[
        		'name.required'=>'Bạn chưa nhập tên thể loại',
        		'name.unique' =>'Tên đã tồn tại',
        		'name.min'=>'Tên thể loại phải có từ 2 -> 100 kí tự',
        		'name.max'=>'Tên thể loại phải có từ 2 -> 100 kí tự',
        	]
        );

        	   $theloai->name = $rq1->name;
               $theloai->status=1;
        	   $theloai->save();
               return $this->Home()->with('thongbao','Đã cập nhật');
    	
    }




        public function getxoa($id)
        {
            catalog::findOrFail($id)->delete(); 
            return $this->Home();
        }
}
