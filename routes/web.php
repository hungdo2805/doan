<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/','HomeController@getHome')->name('home');

Route::get('tintuc','TintucController@gettintuc');
Route::get('chitietsanpham/{id}','HomeController@getChitietsanpham');
Route::post('chitietsanpham/{id}','BinhluanController@postbinhluan');
Route::get('chitiettintuc/{id}','TintucController@getChitiettintuc');

// Route::get('dangnhap','HomeController@Dangnhap');

// Route::get('header','HomeController@getheader');

Route::get('admin','HomeController@getadmin')->middleware('adminLogin');

Route::get('masterpage1','HomeController@getmasterpage1');

// Route::get('view2','HomeController@getView2');


Route::get('lichsugiaodich/{id}','HomeController@getlichsugiaodich');
Route::get('chitiethoadonkh/{id}','HomeController@getxemchitiethoadonkh');


// Route::get('loaisp/{product_detail_id}','HomeController@getloaisp')->name('loaisp');

// Route::get('demo',function(){
// 	$catalog=catalog::find(2);
// 	foreach ($catalog->catalog_detail as $catalog_detail) 
// 	{
// 		foreach ($catalog_detail->product as $product) {
// 			echo $product->id;
// 		}
// 	}
// });

Route::get('Search','HomeController@getSearch');

Route::get('dangnhap','DangnhapController@getdangnhap')->middleware('login');
Route::post('dangnhap','DangnhapController@postdangnhap');

Route::get('dangxuat','DangnhapController@getdangxuat');

Route::get('dangki','DangkiController@getdangki')->middleware('login');
Route::post('dangki','DangkiController@postdangki');

Route::get('loaisp/{id}','HomeController@getloaisp');
Route::get('thuonghieu/{id}','HomeController@getthuonghieu');

Route::get('giohang','HomeController@getgiohang');

Route::get('themvaogio/{id}/{tensanpham}','HomeController@themvaogio');


Route::get('lienhe','HomeController@getlienhe');
Route::post('lienhe','HomeController@postlienhe');

Route::group(['prefix'=>'page'],function(){
	Route::group(['prefix'=>'cart'],function(){
		// page/cart/.....
		Route::post('them/{id}','GiohangController@getthemvaogio');
		Route::get('giohang','GiohangController@getgiohang');
		Route::get('xoagiohang/{id}','GiohangController@getxoagiohang');
		Route::get('capnhat','GiohangController@getcapnhat');
		Route::get('thanhtoan','GiohangController@getthanhtoan');
		Route::post('thanhtoan','GiohangController@postthanhtoan');
	});
});

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
		Route::group(['prefix'=>'catalog'],function(){
			// admin/caltalog/danhsach 
			Route::get('danhsach','TheLoaiController@getdanhsach');

			Route::get('them','TheLoaiController@getThem');
			Route::post('them','TheLoaiController@postThem');
			
			Route::get('sua/{id}','TheLoaiController@getSua');
			Route::post('sua/{id}','TheLoaiController@postSua');
			

			Route::get('xoa/{id}','TheLoaiController@getXoa');
		});


		Route::group(['prefix'=>'product'],function(){
			// admin/caltalog/danhsach 
			Route::get('danhsach','SanphamController@getdanhsach');
			Route::get('danhsach-an','SanphamController@getdanhsachAn');

			Route::get('them','SanphamController@getthem');
			Route::post('them','SanphamController@postthem');
			
			Route::get('sua/{id}','SanphamController@getsua');
			Route::post('sua/{id}','SanphamController@postsua');
			

			Route::get('xoa/{id}','SanphamController@getxoa');
			Route::get('trang-thai-an/{id}','SanphamController@TrangThaiAn');
			Route::get('trang-thai-hien/{id}','SanphamController@TrangThaiHien');
			
		});

		Route::group(['prefix'=>'list_image'],function(){
			// admin/caltalog/danhsach 
			Route::get('danhsach','ListimageController@getdanhsach');

			
			
			Route::get('sua/{id}','ListimageController@getsua');
			Route::post('sua/{id}','ListimageController@postsua');
			

			Route::get('xoa/{id}','ListimageController@getxoa');
			
		});

		Route::group(['prefix'=>'catalog_detail'],function(){
			// admin/caltalog/danhsach 
			Route::get('danhsach','LoaiController@getdanhsach');

			Route::get('them','LoaiController@getthem');
			Route::post('them','LoaiController@postthem');
			
			Route::get('sua/{id}','LoaiController@getsua');
			Route::post('sua/{id}','LoaiController@postsua');
			

			Route::get('xoa/{id}','LoaiController@getxoa');
		});

		Route::group(['prefix'=>'product_details'],function(){
			// admin/caltalog/danhsach 
			Route::get('danhsach','ChitietController@getdanhsach')->name('danhsach');

			Route::get('them/{id}','ChitietController@getthemchitiet');
			Route::post('them/{id}','ChitietController@postthem');
			
			Route::get('sua/{id}','ChitietController@getsua');
			Route::post('sua/{id}','ChitietController@postsua');
			

			Route::get('xoa/{id}','ChitietController@getxoa');
		});

		Route::group(['prefix'=>'users'],function(){
			// admin/caltalog/danhsach 
			Route::get('danhsach','UserController@getdanhsach')->name('danhsach');

			Route::get('them','UserController@getthem');
			Route::post('them','UserController@postthem');
			
			Route::get('sua/{id}','UserController@getsua');
			Route::post('sua/{id}','UserController@postsua');
			

			Route::get('xoa/{id}','UserController@getxoa');
		});

		Route::group(['prefix'=>'product_size'],function(){
			// admin/caltalog/danhsach 
			Route::get('danhsach','SizeController@getdanhsach')->name('danhsach');

			Route::get('them','SizeController@getthem');
			Route::post('them','SizeController@postthem');
			
			Route::get('sua/{id}','SizeController@getsua');
			Route::post('sua/{id}','SizeController@postsua');
			

			Route::get('xoa/{id}','SizeController@getxoa');
		});

		Route::group(['prefix'=>'contact'],function(){
			// admin/contact/danhsach 
			Route::get('danhsach','ContactController@getdanhsach');					
			Route::get('xoa/{id}','ContactController@getxoa');
		});

		Route::group(['prefix'=>'new'],function(){
		
			Route::get('danhsach','TintucController@getdanhsach');
				
			Route::get('them','TintucController@getthem');
			Route::post('them','TintucController@postthem');

			Route::get('sua/{id}','TintucController@getsua');
			Route::post('sua/{id}','TintucController@postsua');

			Route::get('xoa/{id}','TintucController@getxoa');
		});

		Route::group(['prefix'=>'comment'],function(){
		
			Route::get('danhsach','BinhluanController@getdanhsach');

			Route::get('sua/{id}','BinhluanController@getsua');
			// Route::get('sua/{id}','BinhluanController@postsua');
				
			Route::get('xoa/{id}','BinhluanController@getxoa');
		});

		Route::group(['prefix'=>'brand'],function(){
			Route::get('danhsach','ThuonghieuController@getdanhsach');

			Route::get('them','ThuonghieuController@getthem');
			Route::post('them','ThuonghieuController@postthem');

			Route::get('sua/{id}','ThuonghieuController@getsua');
			Route::post('sua/{id}','ThuonghieuController@postsua');

			Route::get('xoa/{id}','ThuonghieuController@getxoa');
		});

		Route::group(['prefix'=>'bill'],function(){
			Route::get('danhsach-nhan','HoadonController@getdanhsachNhan');
			Route::get('xacnhan-vanchuyen/{id}','HoadonController@getxacnhanVanchuyen');

			Route::get('xacnhan-thanhcong/{id}','HoadonController@getxacnhanThanhcong');
			Route::get('xacnhan-huy/{id}','HoadonController@getxacnhanHuy');

			Route::get('danhsach-thanhtoan','HoadonController@getdanhsachThanhtoan');

	
			Route::get('danhsach-huy','HoadonController@getdanhsachHuy');
			Route::get('danhsach-vanchuyen','HoadonController@getdanhsachVanChuyen');

			
		});

		Route::group(['prefix'=>'bill_details'],function(){
			Route::get('danhsach/{id}','HoadonController@getdanhsachchitiet');
			Route::get('inhoadon/{id}','HoadonController@inhoadon');


			
			

			
		});



		Route::group(['prefix'=>'ajax'],function(){
			Route::get('loai/{iddanhmuc}','SanphamController@getajaxloai');

		});
			
});


Route::get('gdadmin', function () {
	return view('admin2.Viewchinh');
});