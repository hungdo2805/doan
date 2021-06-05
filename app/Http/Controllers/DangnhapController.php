<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use App\User;
use App\catalog;
use App\product;
use App\list_image;
use App\catalog_detail;
use App\product_details;
use App\product_size;
use App\brand;
use App\comment;
use Carbon\Carbon;


class DangnhapController extends Controller
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

     public function getdangnhap(){
        return view('dangnhap');
    }

    public function postdangnhap(Request $rq){
        //dd($rq);
    	$this->validate($rq,
    				[
    					'email'=>'required|email',
    					'password'=>'required|min:6|max:20',
    				],
    				[
    					'email.required'=>'Vui lòng nhập Email',
    					'email.email'=>'Vui lòng nhập đúng định dạng Email',
    					'password.required'=>'Vui lòng nhập Password',
    					'password.min'=>'Vui lòng nhập Password từ 6 đến 20 kí tự',
    					'password.max'=>'Vui lòng nhập Password từ 6 đến 20 kí tự',
    				]
    	);
           
     //    $email = $rq->input('email');
     //    $password = $rq->input('password');
    	// $chungthuc= array ('email'=>$email,'password'=>$password);
        $chungthuc = $rq->only('email','password');

    	if (Auth::attempt($chungthuc)){

			if (Auth::user()->isadmin==0) {
                return redirect('admin');
            }else
                return redirect()->route('home');
          
		}else{

            return redirect('dangnhap')->with('thongbao','Vui lòng kiểm tra lại tài khoản và khẩu');
        }
    }		

    public function getdangxuat(){
        Auth::logout();
        return redirect('dangnhap');
       }

}
