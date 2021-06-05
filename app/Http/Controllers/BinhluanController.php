<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\users;
use App\catalog;
use App\product;
use App\list_image;
use App\catalog_detail;
use App\product_details;
use App\product_size;
use App\brand;
use App\comment;
use Carbon\Carbon;
class BinhluanController extends Controller
{
   public function postbinhluan($id, Request $rq){
   	if (Auth::check()) {
      $comment = new comment;
      $comment->product_id=$id;
      $comment->user_id=Auth::user()->id;
      $comment->user_name=Auth::user()->name;
      $comment->email=Auth::user()->email;;
      $comment->mess=$rq->noidung;
      $comment->create_time= new Carbon();
      $comment->status=0;

      // dd($comment);
      $comment->save();
 
      }
   	
              echo "<script type='text/javascript'>
                alert('Cảm ơn bạn đã bình luận cho sản phẩm này!');
                window.location = '";
                    echo url('chitietsanpham/'.$id);
                echo"'
            </script>";

   }
   public function getdanhsach(){
      $dscomment=comment::select('*')->orderby('status',0)->get();
      return view('admin/comment/danhsach',compact('dscomment'));
   }

   public function getsua($id){
          $comment=comment::find($id);
          $comment->status=1;
          $comment->save();
       return redirect('admin/comment/danhsach')->with('thongbao','Duyệt thành công');
   }
   // public function postsua(Request $rq,$id){
   //     $comment=comment::find($id);
   //     $comment->status=1;
   //     $comment->save();
   //     return redirect('admin/comment/danhsach')->with('thongbao','Duyệt thành công');
   // }
   public function getxoa($id){
       $comment=comment::find($id);
       $comment->delete($id);
       return redirect('admin/comment/danhsach')->with('thongbao','Xóa thành công');
   }
}
