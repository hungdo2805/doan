<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\contact;
class ContactController extends Controller
{
    public function getdanhsach(){
    	$danhsach=contact::select('*')->get();
    	return view('admin/contact/danhsach',compact('danhsach'));
    }
     public function getxoa($id){
     	$id=contact::find($id);
     	$id->delete($id);
     		return redirect('admin/contact/danhsach')->with('thongbao','Xóa thành công');
     }
}
