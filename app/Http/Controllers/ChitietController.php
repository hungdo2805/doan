<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
use App\product_details;
use App\product_size;
use carbon\carbon;

class ChitietController extends Controller
{

    public function getdanhsach(){
      
      $thongtin=product_details::select('*')->get();
     
      return view('admin/product_details/danhsach',compact('thongtin'));
    }
    //
    public function getthemchitiet($id){
      $sanpham=product::find($id);
      $id1=product_details::select('*')->where('product_id',$sanpham->id)->first();
      $chon_size=product_size::select('*')->get();
      return view('admin/product_details/them',compact('sanpham','id1','chon_size'));
    }
    public function postthem(Request $rq,$id){
      $this->validate($rq,
        [
          'soluong'=>'required',
        ],
        [
          'soluong.required'=>'Bạn chưa nhập số lượng',
        ]);

      $product=product_details::where('product_id',$rq->masp)->where('size_id',$rq->size)->first();
     
      if (!$product) {
        $product_details = new product_details;
        $product_details->product_id=$rq->masp;
        $product_details->size_id=$rq->size;
        $product_details->quantity=$rq->soluong;
        $product_details->save();
      }else{
        $product->quantity+=$rq->soluong;
        $product->save();
      }
     

      return redirect('admin/product_details/them/'.$id)->with('thongbao','Them thanh cong');

    }

    public function getsua($id){
      $sanpham=product_details::find($id);
      // $chon_size=product_size::select('*')->where('id',$sanpham->size_id)->first();
      // $product_id=product_details::select('*')->get();
      // $tensp=product::select('id',)->get();
      return view('admin/product_details/sua',compact('sanpham'));
    }
    public function postsua(Request $rq1,$id){
      $sanpham=product_details::find($id);
      
        
        $sanpham->product_id=$rq1->masp;
        // $sanpham->size_id=$rq1->size;
        $sanpham->quantity=$rq1->quantity;
        // dd($sanpham);
        $sanpham->save();
      
      return redirect('admin/product_details/sua/'.$id)->with('thongbao','Cập nhật thành công!');
      
    }
    public function getxoa($id)
    {
      $sanpham=product_details::find($id);
      $sanpham->delete($id);
       return redirect('admin/product_details/danhsach')->with('thongbao','Xóa thành công!');
    }
}
