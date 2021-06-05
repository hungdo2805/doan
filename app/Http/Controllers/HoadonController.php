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
use App\bill;
use App\bill_details;
use Carbon\Carbon;
use Cart;

class HoadonController extends Controller
{
    public function getdanhsachNhan(){
    	$bill=bill::select('*')->where('status',0)->orderby('create_time','DESC')->get();
    	return view('admin/bill/danhsach-nhan',compact('bill'));
    }

    

   
    public function getxacnhanVanchuyen($id){
        $status=bill::find($id);
        $status->status=4;
        $status->save();
        return redirect('admin/bill/danhsach-nhan')->with('thongbao','Xác nhận vận chuyển  thành công');

    }

    public function getdanhsachVanChuyen(){
        $bill=bill::select('*')->where('status',4)->orderby('create_time','DESC')->get();
        return view('admin/bill/danhsach-vanchuyen',compact('bill'));
    }
    // thanh cong
    public function getxacnhanThanhcong($id){
        $status=bill::find($id);
        $status->status=1;
        $status->save();
        return redirect('admin/bill/danhsach-nhan')->with('thongbao','Xác nhận thành công');

    }

    public function getdanhsachThanhtoan(){
    	$bill=bill::select('*')->where('status',1)->orderby('create_time','DESC')->get();
    	return view('admin/bill/danhsach-thanhtoan',compact('bill'));
    }
    // huy
     public function getxacnhanHuy($id){
        $status=bill::find($id);
        $status->status= -1;
        $status->save();
        return redirect('admin/bill/danhsach-nhan')->with('thongbao','Hủy thành công');

    }
    public function getdanhsachHuy(){
    	$bill=bill::select('*')->where('status',-1)->orderby('create_time','DESC')->get();
    	return view('admin/bill/danhsach-huy',compact('bill'));
    }



    public function getdanhsachchitiet($id){
        $chitiet=bill_details::find($id);
        $inhoadon=bill::find($id);
        $danhsach=bill_details::select('*')->where('id_bill',$id)->get();
        $kt=bill::where('id',$id)->first();
        
        
        // return view('admin/bill_details/danhsach',compact('chitiet','danhsach','tensize','kt'));
        return view('admin/bill_details/danhsach',compact('chitiet','danhsach','kt'));
    }

    public function inhoadon($id){
        $bill=bill::select('*')->where('id',$id)->get();
        $bill_details=bill_details::where('id_bill',$id)->get();
        
        return view('admin/bill_details/inhoadon',compact('bill','bill_details'));
    }
}

