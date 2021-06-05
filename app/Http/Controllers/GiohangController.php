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
use App\User;
use App\bill;
use App\bill_details;
use Carbon\Carbon;
use Cart;

class GiohangController extends Controller
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

    public function getthemvaogio(Request $rq2){
    	$product=product::find($rq2->id);
      // $tensize=product_size::where('id',$rq2->size)->first();
      $sl=product_details::select('*')->where('product_id',$rq2->id)->first();
      // tensize['name']
      if ($sl->quantity<=$rq2->soluong) {
        echo "<script type='text/javascript'>
          alert('Số lượng không còn đủ để cung cấp cho bạn! Thật lòng xin lỗi quý khách!');
         
          window.location.href = '";
                    echo url('chitietsanpham/'.$sl->product_id);
                echo"'
         </script>";
          // return redirect('chitietsanpham/'.$sl->product_id);
         
         
      }
      else{
      if($rq2->soluong<1)
      {
        $rq2->soluong=1;
      }
      if ($product->km !=0) {
        $a=$product->price1;
      }else
      {
        $a=$product->price;
      }
       // dd($product);
    	Cart::add([
          'id' => $rq2->id,
          'name' =>$product->name,
          'qty' =>$rq2->soluong,  
          'price' =>$a,
     //      'options' => ['img' => $product->image,'size'=>$rq2->size,'tsize'=>$tensize['name']]]);
    	// return redirect('chitietsanpham/'.$rq2->id);

      'options' => [
                    'img' => $product->image
                     ]
                  ]);
      return redirect('chitietsanpham/'.$rq2->id);
    	// $data=Cart::content();
    	// dd($data);
      }
    }

    public function getgiohang(){
    	 $data['total']=Cart::total();
    	 $data['item']=Cart::content();
       // dd($data);
    	return view('page/cart/giohang',$data);
    }
    
    public function getxoagiohang($id){
    	if($id=='all'){
    		Cart::destroy();
    	}else
    	{
    		Cart::remove($id);
    	}
    	return redirect('page/cart/giohang');
   			 
    }		

    public function getcapnhat(Request $rq2){
      
    	Cart::update($rq2->rowId,$rq2->qty);
    } 

    public function getthanhtoan(){
      
      if(Auth::check()){
          $user=User::where('id',Auth::user()->id)->first();

          
     }
     else
      {
        echo "<script type='text/javascript'>
                alert('Bạn phải đăng nhập trước khi thanh toán !');
                window.location = '";
                    echo url('dangnhap');
                echo"'
            </script>";
      }

      return view('page/cart/thanhtoan',compact('user'));
    }

    public function postthanhtoan(Request $thanhtoan){
      $data['total']=Cart::total();
      // dd($data['total']);
      $data['item']=Cart::content();
      if (Cart::total()==0) {
      	echo "<script type='text/javascript'>
                alert('Bạn phải thêm sản phẩm vào giỏ trước khi thanh toán !');
                window.location = '";
                    echo url('Home');
                echo"'
            </script>";
      }
      else{
      	if(Auth::check()){
          $user=User::where('id',Auth::user()->id)->first();
 
          $bill= new bill;
          $bill->user_id=Auth::user()->id;
          $bill->user_name=$thanhtoan->name;
          $bill->user_email=$thanhtoan->email;
          $bill->bill_total=Cart::total(0);
          $bill->create_time=new Carbon();
          $bill->user_phone=$thanhtoan->phone;
          $bill->address=$thanhtoan->address;
          $bill->status=0;
          // dd($bill);
          $bill->save();
        
         foreach ($data['item'] as $value) {
          $bill_details= new bill_details;
          $bill_details->product_id=$value->id;
          $bill_details->product_name=$value->name;
          // $bill_details->size_id =$value->options->size;
          $bill_details->quantity=$value->qty;
          $bill_details->price=$value->price;
          
          
          $bill_details->id_bill=$bill->id;
         // dd($bill_details);
          $bill_details->save();
          $sp=product_details::select('*')->where('product_id',$value->id)->where('size_id',$value->options->size)->first();
            // dd($sp);
         $sp->quantity=$sp->quantity -$value->qty;
         $sp->save();

         }
         Cart::destroy();
      }
      
        
     }
      echo "<script type='text/javascript'>
                alert('Cảm ơn quý khách đã sử dụng sản phẩm của cửa hàng chúng tôi !');
                
            </script>";

      return view('page/cart/giohang',compact('user'));
    }
    public function getdanhsach(){
      $bill=bill::select('*')->Orderby('status','id')->get();
      return view('admin/bill/danhsach',compact('bill'));
    }

}
