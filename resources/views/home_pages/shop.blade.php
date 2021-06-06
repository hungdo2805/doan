@extends('home_pages.layout.index')


@section('home_pages')

    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li>/</li>
                            <li>Cửa hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--shop  area start-->
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="shop_inner_area">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                       <!--sidebar widget start-->
                        <div class="sidebar_widget">
                            <div class="widget_list widget_filter">
                                <h2>Filter by price</h2>
                                <form action="#"> 
                                    <div id="slider-range"></div>   
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />   

                                </form> 
                            </div>
                            <div class="widget_list widget_categories">
                                <h2>Danh mục</h2>
                                <ul>
                                    <li><a href="#">Categories1 <span>6</span></a> </li>
                                    <li><a href="#"> Categories2 <span>10</span></a> </li>
                                    <li><a href="#">Categories3 <span>4</span></a> </li>
                                    <li><a href="#"> Categories4 <span>4</span></a> </li>
                                    <li><a href="#">Categories5 <span>3</span></a> </li>

                                </ul>
                            </div>
                        </div>
                        <!--sidebar widget end-->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <!--shop wrapper start-->
                        <!--shop toolbar start-->
                        <div class="shop_title">
                            <h1>Cửa hàng</h1>
                        </div>
                        <div class="shop_toolbar_wrapper">
                            <div class="shop_toolbar_btn">

                                <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                                <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                                <button data-role="grid_5" type="button"  class="btn-grid-5" data-toggle="tooltip" title="5"></button>

                                <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                            </div>
                            <div class=" niceselect_option">

                                <form class="select_option" action="#">
                                    <select name="orderby" id="short">

                                        <option selected value="1">Sắp xếp theo</option>
                                        <option  value="2">Sort by popularity</option>
                                        <option value="3">Sort by newness</option>
                                        <option value="4">Sort by price: low to high</option>
                                        <option value="5">Sort by price: high to low</option>
                                        <option value="6">Product Name: Z</option>
                                    </select>
                                </form>


                            </div>
                            <div class="page_amount">
                                <p>Hiển thị 1–9 of 21 kết quả</p>
                            </div>
                        </div>
                         <!--shop toolbar end-->
                        
                         <div class="row shop_wrapper">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product15.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product16.jpg')}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="double_base">
                                            <div class="product_sale">
                                                <span>-7%</span>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product22.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product23.jpg')}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="label_product">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Koss KPH7 Portable</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Koss KPH7 Portable</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product10.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product11.jpg')}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="double_base">
                                            <div class="product_sale">
                                                <span>-7%</span>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Beats Solo2 Solo 2</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Beats Solo2 Solo 2</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product17.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product18.jpg')}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="label_product">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Beats EP Wired</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Beats EP Wired</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product19.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product20.jpg')}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="product_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Bose SoundLink Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Bose SoundLink Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product21.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="{{asset('home_pages/assets/img/product/product22.jpg')}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="double_base">
                                            <div class="product_sale">
                                                <span>-7%</span>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Apple iPhone SE 16GB</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Apple iPhone SE 16GB</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product23.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product24.jpg" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="product_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Beats Solo Wireless</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Beats Solo Wireless</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product25.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product26.jpg" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="label_product">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Apple iPad with Retina</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Apple iPad with Retina</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product27.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product28.jpg" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="product_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product1.jpg" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>
                                         <div class="label_product">
                                            <span>new</span>
                                        </div>   
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">JBL Flip 3 Portable</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">JBL Flip 3 Portable</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product4.jpg" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="product_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product6.jpg" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="double_base">
                                            <div class="product_sale">
                                                <span>-7%</span>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product8.jpg" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="product_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product10.jpg" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="product_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route("get_produc_details")}}"><img src="assets/img/product/product12.jpg" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route("get_produc_details")}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="label_product">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route("get_produc_details")}}">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                      
                        <div class="shop_toolbar t_bottom">
                            <div class="pagination">
                                <ul>
                                    <li class="current">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#">next</a></li>
                                    <li><a href="#">>></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--shop toolbar end-->
                        <!--shop wrapper end-->
                    </div>
                </div>
            </div>   
                
        </div>
    </div>
    <!--shop  area end-->
@endsection