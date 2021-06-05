<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\tintuc;
use App\users;
use App\catalog;
use App\catalog_detail;
use App\product_details;
use App\product_size;
use App\brand;
use App\comment;
use Carbon\Carbon;


class TintucController extends Controller
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

    public function getdanhsach(){
    
    	$tintuc=tintuc::all();
    	return view('admin/new/danhsach',compact('tintuc'));
    }
    public function getthem(){
      
      $loaisp=catalog_detail::select('*')->get();
     
      return view('admin/new/them',compact('loaisp'));
    }
    public function postthem(Request $rq){
        $this->validate($rq,
        [ 
          'tieude'=>'required|unique:tintuc,title|min:4',
          'noidung'=>'required',
        ],
        [
          'tieude.required'=>'Tiêu đề không được để trống',
          'tieude.unique'=>'Tiêu đề đã tồn tại',
          'tieude.min'=>'Tiêu đề ít nhất 4 kí tự',
          'noidung.required'=>'Nội dung không được để trống',
        ]
      );
      $themtintuc = new tintuc;
      $themtintuc->id_user = Auth::user()->id;
      $themtintuc->user_name=$rq->name; 
      $themtintuc->title= $rq->tieude;
      $themtintuc->description=$rq->noidung;
      $themtintuc->status =1;
      $themtintuc->create_time=new Carbon();
      $themtintuc->update_time=null;
         if ($rq ->hasFile('hinh'))
         {
          $file=$rq->file('hinh');
          $duoi=$file->getClientOriginalExtension();
          if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
          {
            return redirect('admin/new/them')->with('thongbao','Bạn chỉ được chọn file có đuôi: jpg ,png,jpeg');
          }
          else{
            //kiểm tra tên hình trùng lặp
          $name=$file->getClientOriginalName();
          
          $file->move("imgtintuc/",$name);
          $themtintuc->image=$name;
          }
          

        }else
        {
          $themtintuc->image="";
        }
        // dd($themtintuc);
        $themtintuc->save();

        return redirect('admin/new/them')->with('thongbao','Thêm tin tức thành công');
    }

    public function getsua($id){

      $tintuc=tintuc::find($id);
      $loaisp=catalog_detail::select('*')->get();
      if (Auth::user()->id != $tintuc->id_user) {
        return redirect()->back()->with('thongbaoloi','Bạn không phải tác giả bài viết !');
      }
      

      return view('admin/new/sua',compact('loaisp','tintuc'));
    }

    public function postsua(Request $rq2,$id){
      $tintuc=tintuc::find($id);    
      $tintuc->id_user = Auth::user()->id;
      $tintuc->user_name=Auth::user()->name; 
      $tintuc->title=$rq2->tieude;
      $tintuc->description=$rq2->noidung;
      $tintuc->status =1;
      $tintuc->create_time=null;
      $tintuc->update_time=new Carbon();

      if ($rq2 ->hasFile('hinh'))
         {
          $file=$rq2->file('hinh');
          $duoi=$file->getClientOriginalExtension();
          if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
          {
            return redirect('admin/new/them')->with('thongbao','Bạn chỉ được chọn file có đuôi: jpg ,png,jpeg');
          }
          else{
            //kiểm tra tên hình trùng lặp
          $name=$file->getClientOriginalName();
          
          $file->move("imgtintuc/",$name);
          $tintuc->image=$name;
          }
          

        }else
        {
          $tintuc->image="";
        }
        // dd($themtintuc);
        $tintuc->save();

        return redirect('admin/new/sua/'.$id)->with('thongbao','Cập nhật thành công tin tức thành công');
    }

    public function getxoa($id){
      $tintuc=tintuc::find($id);
      $tintuc->delete($id);
      return redirect('admin/new/danhsach')->with('thongbao','Xóa tin tức thành công');

    }

    public function gettintuc(){
       $tintuc=tintuc::select('*')->get();
    return view('tintuc',compact('tintuc'));
}

    public function getChitiettintuc($id){
        $tintuc=tintuc::find($id);
        $tintuc1=tintuc::where('id',$id)->first();
        
        return view('chitiettintuc',compact('tintuc1'));
    }
}
