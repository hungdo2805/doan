<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\catalog;
use App\product;
use App\list_image;
use App\catalog_detail;
use App\product_details;
use App\product_size;
use App\brand;

class UserController extends Controller
{
    //
    public function getdanhsach(){
        $danhsach=User::select('*')->get();
    	return view('admin/users/danhsach',compact('danhsach'));
    }
    public function getthem(){

        return view('admin/users/them');
    }

    public function postthem(Request $rq){
        $this->validate($rq,
                        [
                            'email'=>'required|email|unique:users,email|email',
                            'password'=>'required|min:6|max:20',
                            'name'=>'required',
                            'address'=>'required',
                            'phone'=>'required|unique:users,phone|min:10|max:10',
                            'quyen'=>'required',
                        ],

                        [
                            'email.required'=>'Vui lòng nhập Email',
                            'email.email'=>'Vui lòng nhập đúng định dạng Email',
                            'email.unique'=>'Email đã tồn tại',
                            'password.required'=>'Vui lòng nhập Password',
                            'password.min'=>'Độ dài từ 6->20 kí tự',
                            'password.max'=>'Độ dài từ 6->20 kí tự',
                            'phone.required'=>'Vui lòng nhập Phone',
                            'phone.unique'=>'Phone đã tồn tại',
                            'phone.min'=>'Độ dài gồm 10 kí tự',
                            'phone.max'=>'Độ dài gồm 10 kí tự',
                            'address.required'=>'Bạn chưa nhập địa chỉ',
                             'quyen.required'=>'Bạn chưa chọn quyền cho tài khoản'
                        ]
        );

        $user = new User;
        $user->name=$rq->name;
        $user->email=$rq->email;
        $user->phone=$rq->phone;
        $user->address=$rq->address;
        $user->password=Hash::make($rq->password);
        $user->isadmin=$rq->quyen;
        // $user->created_at=new Carbon();
        // $user->updated_at=null;
        $user->remember_token=$rq->_token;
        $user->save();
        return redirect('admin/users/them')->with('thongbao','Thêm thành công');
    	
    }

    public function getsua($id){
    	$user=User::find($id);
        if ( $user['isadmin']==0 &&(Auth::user()->id != $id)) {
             return redirect('admin/users/danhsach')->with('thongbaoloi','Không có quyền sửa admin khác');
        }
        return view('admin/users/sua',compact('user','id'));
    }

    public function postsua(Request $rq1,$id){
            $users=User::find($id);

           if ($rq1->password) {
            $this->validate($rq1,
                [
                    'password'=>'required|min:6|max:20',
                    'password1'=>'required|same:password',
                ],
                [
                    'password.same'=>'Mật khẩu không giống',
                ]);
              
            $pass=$rq1->password;
            $users->password=Hash::make($pass);
           }

          $users->isadmin=$rq1->quyen;
          $users->email=$rq1->email;
            $users->address=$rq1->address;
            $users->phone=$rq1->phone;
          $users->remember_token=$rq1->_token;
          
          // dd($users)->toArray();
          $users->save();
            return redirect('admin/users/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getxoa($id){
        $user=User::find($id);
        if ($user['isadmin']==0 && (Auth::user()->id != $id)) {
             return redirect('admin/users/danhsach')->with('thongbaoloi','Không có quyền xóa admin khác');
        }
        elseif((Auth::user()->id == $id))
        {
             return redirect('admin/users/danhsach')->with('thongbaoloi','Không có quyền xóa tài khoản của bạn');
        }
        else
        $user->delete($id);
        return redirect('admin/users/danhsach')->with('thongbao','Xóa thành công');
    }
}
