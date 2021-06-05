<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\catalog_detail;
use App\catalog;
use Hash;
use Carbon\Carbon;
use App\brand;
class DangkiController extends Controller
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


    public function getdangki(){
    	return view('dangki');
    }


    public function postdangki(Request $rq){
    	$this->validate($rq,
    					[
    						'email'=>'required|email|unique:users,email|email',
    						'password'=>'required|min:6|max:20',
                            'password1'=>'required|same:password',
    						'name'=>'required',
    						'phone'=>'required|unique:users,phone|min:10|max:10',
                            'address'=>'required',
    					],

    					[
    						'email.required'=>'Vui lòng nhập Email',
    						'email.email'=>'Vui lòng nhập đúng định dạng Email',
    						'email.unique'=>'Email đã tồn tại',
    						'password.required'=>'Vui lòng nhập Password',
    						'password.min'=>'Độ dài từ 6->20 kí tự',
    						'password.max'=>'Độ dài từ 6->20 kí tự',
                            'password1.required'=>'Vui lòng nhập lại Password',
                            'password1.same'=>'Password không giống nhau',
    						'phone.required'=>'Vui lòng nhập Phone',
    						'phone.unique'=>'Phone đã tồn tại',
    						'phone.min'=>'Độ dài gồm 10 kí tự',
                            'phone.max'=>'Độ dài gồm 10 kí tự',
                            'address.required'=>'Bạn chưa nhập địa chỉ',
    					]
    	);
    
       
    	$user = new User;
    	$user->name=$rq->name;
    	$user->email=$rq->email;
    	$user->phone=$rq->phone;
    	$user->address=$rq->address;
    	$user->password=Hash::make($rq->password);
    	$user->isadmin=1;
        $user->remember_token=$rq->_token;
    	$user->save();
    	return redirect('dangki')->with('thongbao','Đăng kí thành công');
    	

    }
}
