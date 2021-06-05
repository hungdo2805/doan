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
use App\comment;
use App\contact;
use Carbon\Carbon;
class ListimageController extends Controller
{
    public function getdanhsach(){
    	$list_image=list_image::all();
    	return view('admin/list_image/danhsach',compact('list_image'));
    }

    public function getsua($id){
    	$hinh=list_image::find($id);
     
     
      $ten=product::select('*')->where('id',$hinh->id_sp)->first();
     
    	return view('admin/list_image/sua',compact('hinh','ten'));
    }
    public function postsua($id,Request $rq){
    
      $hinh1=list_image::where('id',$id)->first();
       // $hinh1->id_sp=$rq->id_sp;
    	if ($rq ->hasFile('hinh'))
         {
          $file=$rq->file('hinh');
          $duoi=$file->getClientOriginalExtension();
          if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
          {
            return redirect('admin/list_image/sua'.$id)->with('thongbao','Bạn chỉ được chọn file có đuôi: jpg ,png,jpeg');
          }
          else{
            //kiểm tra tên hình trùng lặp
          $name=$file->getClientOriginalName();
          
          $file->move("imgshoptt_list/",$name);
          $hinh1->image=$name;
          }
          

        }else
        {
          $hinh1->image="";
        }
        // dd($hinh1);
        $hinh1->save();
        return redirect('admin/list_image/sua/'.$id)->with('thongbao','Sửa ảnh thành công');
    }


    public function getxoa($id){
      $sp=list_image::find($id);
      $sp->delete($id);
       return redirect('admin/list_image/danhsach')->with('thongbao','Xóa ảnh thành công');
    }
    
    
}
