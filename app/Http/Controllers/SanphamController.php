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
use Carbon\Carbon;
use File;
use Input;


class SanphamController extends Controller
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

    public function Home()
    {
       return redirect()->route('sanpham.index');
    }

    public function getdanhsach(){
       $sanpham=product::select('*')->where('status',1)->get();
        return view('admin2.sanpham.list',compact('sanpham'));
    }

    public function getdanhsachAn(){
      
       $sanpham1=product::select('*')->where('status',0)->get();
       
        return view('admin.product.danhsach-an',compact('sanpham1'));
      
    }

    public function TrangThaiAn($id){
        $product=product::find($id);
        $product->status=0;
        $product->save();
         return redirect('admin/product/danhsach')->with('thongbao','Chuyển trạng thái thành công');
    }

    public function TrangThaiHien($id){
        $product=product::find($id);
        $product->status=1;
        $product->save();
         return redirect('admin/product/danhsach-an')->with('thongbao','Chuyển trạng thái thành công');
    }
    //
public function getthem(){
      $danhmuc=catalog::select('*')->get();
    	$loaisp=catalog_detail::select('*')->get();
    	$thuonghieu=brand::select('*')->get();
    	return view('admin2.sanpham.add',compact('loaisp','thuonghieu','danhmuc'));
}
public function postthem(Request $rq){
      $this->validate($rq,
          [
            'ten'=> 'required|unique:product,name|min:3',
            'gia'=> 'required',
            'mota'=> 'required',
            'km'=>'required',
            

          ],
          [
            'ten.required'=>'Bạn chưa đặt tên sản phẩm',
            'ten.unique'=>'Tên sản phẩm đã tồn tại',
            'ten.min'=>'Tên phải có ít nhất 3 ký tự',
            'gia.required'=>'Bạn chưa nhập giá sản phẩm',
            'mota.required'=>'Bạn chưa nhập mô tả',
            'km.required'=>'Bạn chọn khuyến mãi',
            
          ]);

      
      $product= new product;
      $product->catalog_detail_id = $rq->loai;
      $product->brand_id = $rq->thuonghieu;
      $product->name = $rq->ten;
      $product->price = $rq->gia;
      $product->km=$rq->km;
      if ($rq->km !=0) {
       $product->price1=$rq->giakm;
      }else{
          $product->price1=0;
      }
      $product->descriptions = $rq->mota;
      
      $product->status =1;
      $product->create_time=new Carbon();
      $product->update_time=null;
        if ($rq ->hasFile('hinh'))
         {
          $file=$rq->file('hinh');
          $duoi=$file->getClientOriginalExtension();
          if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
          {
            return redirect('admin/product/them')->with('thongbao','Bạn chỉ được chọn file có đuôi: jpg ,png,jpeg');
          }
          else{
            //kiểm tra tên hình trùng lặp
          $name=$file->getClientOriginalName();
          
          $file->move("public/imgshoptt/",$name);
          $product->image=$name;
          }
          

        }else
        {
          $product->image="";
        }
        // dd($product);
        $product->save();

        $product_details = new product_details;
        $product_details->product_id=$product->id;
        $product_details->quantity=$product->price;
        $product_details->save();
        
        if ($rq->hasFile('hinhchitiet')){
            foreach($rq->file('hinhchitiet') as $file){
              $product_img= new list_image;
              if (isset($file)) {
                $product_img->image= $file->getClientOriginalName();
                $product_img->id_sp = $product->id;
                $file->move('public/imgshoptt_list/',$file->getClientOriginalName());
                $product_img->save();
              }
            }
        }

        return $this->Home()->with('thongbao','Đã tạo mới');;

}

    public function getsua($id)
    {
     $sanpham=product::find($id);
     $list_image=product::find($id)->list_image;

     $loaisp1=catalog_detail::select('id','name')->get();
     $loaisp=catalog_detail::where('id',$sanpham->catalog_detail_id)->get();
     


     $danhmuc=catalog::select('*')->get();
     $danhmuc1=catalog::select('*')->get();


      $thuonghieu=brand::where('id',$sanpham->brand_id)->get();
      $thuonghieu1=brand::select('*')->get();
      return view('admin/product/sua',compact('sanpham','thuonghieu','loaisp','danhmuc','thuonghieu1','loaisp1','list_image'));
    }

    public function postsua(Request $rq1,$id){
      $product=product::find($id);
        $this->validate($rq1,
          [
            'ten'=>'|min:3',            
          ],
          [           
            
            'ten.min'=>'Tên phải có ít nhất 3 ký tự',            
          ]);

   
      $product->catalog_detail_id=$rq1->loai;
      $product->brand_id = $rq1->thuonghieu;
      $product->name = $rq1->ten;
      $product->price = $rq1->gia;
      $product->km=$rq1->km;
      if ($rq1->km !=0) {
       $product->price1=$rq1->giakm;
      }else{
          $product->price1=0;
      }
      $product->descriptions = $rq1->mota;
      
      $product->status =1;
      $product->update_time=new Carbon();
        if ($rq1 ->hasFile('hinh'))
         {
          $file=$rq1->file('hinh');
          $duoi=$file->getClientOriginalExtension();
          if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
          {
            return redirect('admin/product/sua/'.$id)->with('thongbao','Bạn chỉ được chọn file có đuôi: jpg ,png,jpeg');
          }
          else{
           
          $name=$file->getClientOriginalName();
          
          $file->move("public/imgshoptt/",$name);
          $product->image=$name;
          }
          

        }else
        {
          $product->image="";
        }
        // dd($product);
        $product->save();

        return $this->Home()->with('thongbao','Đã cập nhật');


    }

    

    public function getxoa($id){
     /*   $list_image=product::find($id)->list_image->toArray();
        
        foreach ($list_image as $value) {
          File::delete('public/imgshoptt_list/'.$value["image1"]);
          
        }*/
        $product_details=product::find($id)->product_details->toArray();
        $product_details1=product_details::where('product_id',$id)->delete();

        // $product_details1=product_details::where('product_id',$id)->count();
        // if(count($product_details1)>0)
        // {
        //   $product_details1=product_details::where('product_id',$id)->delete();
        // }
        // echo "<pre>";
        // print_r($product_details);
        // echo "</pre>";
        $product=product::find($id);
          File::delete('public/imgshoptt/'.$product->image);
        $product->delete($id);
        
      // $product=product::find($id);
      // $product->delete();

      return $this->Home()->with('thongbao','Bạn đã xóa Sản phẩm thành công');
    }

  public function getajaxloai($idtheloai){
    $loai=catalog_detail::where('parent_id',$idtheloai)->get();
    foreach ($loai as $l)
     {
       echo "<option value='".$l->id."'>".$l->name."</option>";
    }
  }



  // 
  
    
}
?>