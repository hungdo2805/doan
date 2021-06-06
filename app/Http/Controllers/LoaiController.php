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
class LoaiController extends Controller
{
    //
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
       return redirect()->route('loaisp.index');
    }

    public function getdanhsach(){
    	 $loaisp=catalog_detail::all();
         $danhmuc=catalog::select('*')->get();

    	
    	return view('admin2.loaisp.list',compact('loaisp','danhmuc'));
    }
    public function getthem(){
        
         $danhmuc=catalog::select('*')->get();
         $loaisp=catalog_detail::all();
        return view('admin/catalog_detail/them',compact('loaisp','danhmuc'));
    }
    public function postthem(Request $req){
        
        $this->validate($req,
            [
                'name'=>'required|min:2|unique:catalog_detail,name',
            ] ,
            [
                'name.required'=>'Bạn chưa nhập tên',
                'name.unique'=>'Tên đã tồn tại',
                'name.min'=>'Tên ít nhất từ 2 ký tự',
            ]);
        $loai= new catalog_detail;
        $loai->parent_id=$req->danhmuc;
        $loai->name=$req->name;
        $loai->status=1;
       
        $loai->save();       
        return $this->Home()->with('thongbao','Đã tạo mới');;
    }
    public function getsua($id){
        $tam=catalog_detail::find($id);
        
        $danhmuc=catalog::select('*')->get();
        $danhmuc1=catalog::where('id',$tam->parent_id)->get();
       

        $loaisp=catalog_detail::select('id','name')->where('id',$id)->get();
       
        $lienket=catalog_detail::join('catalog','catalog_detail.parent_id','=','catalog.id')->where('parent_id',$id)->get();
        return view('admin2.loaisp.edit',compact('loaisp','danhmuc','danhmuc1','lienket','tam'));
    }

    public function postsua(Request $sua,$id){
        $loai=catalog_detail::find($id);
            $loai->parent_id = $sua->danhmuc;
            $loai->name = $sua->tenloai;
            $loai->save();
            return $this->Home()->with('thongbao','Đã cập nhật');
    }

    public function getxoa($id)
    {
        catalog_detail::findOrFail($id)->delete(); 
        return $this->Home();
    }
}
