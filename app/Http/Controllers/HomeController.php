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
use App\bill;
use App\bill_details;
use Carbon\Carbon;

class HomeController extends Controller
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




    public function getheader(){

        return view('header');
    }



    // public function Dangnhap(){
    //     return view('dangnhap');
    // }

    //  public function getdangki(){
    //     return view('dangki');
    // }
    public function getmasterpage1(){
        return view('master.masterpage1');
    }



    public function getadmin(){
        return view('admin.layout.giaodien');
    }

    public function getChitietsanpham($idsp){
        $catalog =catalog::all();
        $sp=product::where('id',$idsp)->first();
        $splq=product::where('catalog_detail_id',$sp->catalog_detail_id)->inRandomOrder()->take(4)->get();

        $thuonghieu=brand::where('id',$sp->brand_id)->first();
        // $size=product_details::select('product_id','size_id')->where('product_id',$idsp)->get();

        // $tensize=product_details::join('product_size','product_details.size_id','=','product_size.id')->where('product_id',$sp->id)->get();
        $loaisp=catalog_detail::where('id',$sp->catalog_detail_id)->first();

        $dmsp=catalog::where('id',$loaisp->parent_id)->first();

        //khong can dat khoa phu ($dmsp=catalog::where('id',$sp->product_id_catalog)->first();)
        $img=list_image::where('id_sp',$idsp)->get();

        $comment=comment::where('product_id',$idsp)->where('status',1)->get();

        return view('chitietsanpham',compact('catalog','sp','img','splq','loaisp','dmsp','thuonghieu','idsp','comment'));
    }




    public function getHome(){

        // $bill=bill_details::select('*')->count('product_id');
        // dd($bill);
        $khuyenmai=product::select('*')->where('km',1)->where('status',1)->get();

        $sanphamnammoi=product::select('*')->where('status',1)->skip(0)->take(4)->get();

        $sanphamnu=product::select('*')->where('catalog_detail_id','>',5)->where('catalog_detail_id','<',11)->where('status',1)->inRandomOrder()->take(4)->get();

        return view('Home',compact('sanphamnammoi','sanphamnu','khuyenmai'));

    }


    public function getSearch(Request $timkiem){

        $sptk=product::where('name','like','%'.$timkiem->key.'%')->orwhere('price',$timkiem->key)->get();
        return view('Search',compact('sptk'));
    }



    public function getloaisp($idtl){
        $catalog_detail1=catalog_detail::where('id',$idtl)->get();
        $product=product::where('catalog_detail_id',$idtl)->get();
        return view('sanpham',compact('catalog_detail1','product'));
    }

    public function getthuonghieu($idth){
        $brand=brand::where('id',$idth)->get();
        $product=product::where('brand_id',$idth)->get();
        return view('thuonghieu',compact('product','brand'));
    }



    public function getlienhe(){
        return view('lienhe');
    }
    public function postlienhe(Request $rq){
        $contact= new contact;
        $contact->email=$rq->email;
        $contact->name=$rq->name;
        $contact->mess=$rq->noidung;
        $contact->create_time= new Carbon();
        $contact->update_time=null;
        // dd($contact);
        $contact->save();
        echo "<script type='text/javascript'>
                alert('Cảm ơn quý khách! Chúng tôi sẽ sớm giải quyết vấn đề cho bạn');
                window.location ='";
        echo url('lienhe');
        echo"'
            </script>";
    }

    public function getlichsugiaodich($id){
        $user=users::find($id);
        $bill=bill::where('user_id',$id)->orderby('id','DESC')->get();
        return view('lichsugiadich',compact('bill'));
    }
    public function getxemchitiethoadonkh($id){

        $bill=bill_details::where('id_bill',$id)->get();
        return view('chitiethoadonkh',compact('bill'));
    }
}
