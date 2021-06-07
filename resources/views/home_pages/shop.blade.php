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
                            <li>Bài viết</li>
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
                            <h1>Danh sách sản phẩm</h1>
                        </div>
                        
                        <div class="row shop_wrapper mt-5">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('get_product_details')}}"><img src="{{asset('home_pages/assets/img/product/product15.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('get_product_details')}}"><img src="{{asset('home_pages/assets/img/product/product16.jpg')}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route('get_product_details')}}"title="quick_view">Xem sản phẩm</a>
                                        </div>

                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route('get_product_details')}}">Marshall Portable  Bluetooth</a></h3>
                                        <p class="product_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati neque voluptatem quae unde dolor quas! Soluta laboriosam voluptatibus inventore iste esse accusamus ullam vero dolores, architecto praesentium fuga nihil nostrum.</p>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route('get_product_details')}}">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('get_product_details')}}"><img src="{{asset('home_pages/assets/img/product/product22.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('get_product_details')}}"><img src="{{asset('home_pages/assets/img/product/product23.jpg')}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route('get_product_details')}}"title="quick_view">Xem sản phẩm</a>
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route('get_product_details')}}">Koss KPH7 Portable</a></h3>
                                        <p class="product_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati neque voluptatem quae unde dolor quas! Soluta laboriosam voluptatibus inventore iste esse accusamus ullam vero dolores, architecto praesentium fuga nihil nostrum.</p>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="{{route('get_product_details')}}">Koss KPH7 Portable</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('get_product_details')}}"><img src="{{asset('home_pages/assets/img/product/product10.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('get_product_details')}}"><img src="{{asset('home_pages/assets/img/product/product11.jpg')}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{route('get_product_details')}}"title="quick_view">Xem sản phẩm</a>
                                        </div>
                                    </div>                                   
                                    <div class="product_content grid_content">
                                        <h3><a href="{{route('get_product_details')}}">Beats Solo2 Solo 2</a></h3>
                                        <p class="product_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati neque voluptatem quae unde dolor quas! Soluta laboriosam voluptatibus inventore iste esse accusamus ullam vero dolores, architecto praesentium fuga nihil nostrum.</p>
                                    </div>

                                    <div class="product_content list_content">
                                        <h3><a href="{{route('get_product_details')}}">Beats Solo2 Solo 2</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_desc">
                                            <p class="product_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati neque voluptatem quae unde dolor quas! Soluta laboriosam voluptatibus inventore iste esse accusamus ullam vero dolores, architecto praesentium fuga nihil nostrum.</p>
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