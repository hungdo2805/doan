@extends('home_pages.layout.index')


@section('home_pages')

<div class="breadcrumbs_area other_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>/</li>
                        <li>Chi tiết bài viết</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<div class="blog_area blog_details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!--blog sidebar start-->
                <aside class="blog_sidebar">
                   <!--search form start-->
                    <div class="sidebar_widget search_form">
                        <form action="#">
                            <input placeholder="Tìm kiếm bài viết" type="text">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--search form end-->
                    
                    
                     <!--recent post start-->
                    <div class="sidebar_widget recent_post">
                        <h3 class="widget_title">Bài viết mới nhất</h3>
                        <div class="sidebar_post">
                            <div class="post_img">
                                
                            </div>
                            <div class="post_text">
                                <h3><a href="{{route('get_produc_details}}">Blog image post format</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="{{route('get_produc_details}}"><img src="{{asset('home_pages/assets/img/blog/post2.png')}}" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="{{route('get_produc_details}}">Post in Gallery format</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div> 
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="{{route('get_produc_details}}"><img src="{{asset('home_pages/assets/img/blog/post3.png')}}" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="{{route('get_produc_details}}">Single post in Audio format </a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="{{route('get_produc_details}}"><img src="{{asset('home_pages/assets/img/blog/post4.png')}}" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="{{route('get_produc_details}}">Post in Video format vitae</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>     
                    </div>
                    <!--recent post end-->
                    
                    {{-- <!--recent post start-->
                    <div class="sidebar_widget recent_post">
                        <h3 class="widget_title">Comments</h3>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="{{route('get_produc_details}}"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="{{route('get_produc_details}}">Blog image post format</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="{{route('get_produc_details}}"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="{{route('get_produc_details}}">Post in Gallery format</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div> 
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="{{route('get_produc_details}}"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="{{route('get_produc_details}}">Single post in Audio format </a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="{{route('get_produc_details}}"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="{{route('get_produc_details}}">Post in Video format vitae</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>     
                    </div>
                    <!--recent post end--> --}}
                    
                </aside>
 
                <!--blog sidebar start-->
            </div>
            <div class="col-lg-9 col-md-12">
                <!--blog grid area start-->
                <div class="blog_details_wrapper">
                   <div class="blog__thumb">
                       <a href="#"><img src="{{asset('assets/img/blog/blog6.png')}}" alt=""></a>
                   </div>
                   <div class="blog_info_wrapper">
                        <div class="blog_info_inner">
                            <div class="post__date">
                               <span class="day">10</span>
                               <span class="month">Mar</span>
                           </div>
                           <div class="post__info">
                               <div class="post_header">
                                   <h3>Blog image post format</h3>
                               </div>
                                <div class="post_meta">
                                   <span>Posted by </span>
                                    <span><a href="#">admin</a></span>
                                    <span><a href="#">/ WordPress</a></span>
                                </div>
                                <div class="post_content">
                                    <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                    <blockquote>
                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                    </blockquote>
                                    <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                                </div>
                                <div class="post_meta">
                                    <span><a href="#">3 bình luận</a></span>
                                </div>
                                <div class="social_sharing">
                                    <h3>Chia sẻ bài viết</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="author_box">
                                    <div class="author_img">
                                        <img src="{{asset('assets/img/blog/admin_avatar.jpg')}}" alt="">
                                    </div>
                                    <div class="author_desc">
                                        <h3>About the Author: <a href="#">admin</a></h3>
                                        <p>Cras id nulla at metus congue auctor. Suspendisse auctor dictum orci quis interdum. Nullam et eleifend metus. Integer in est orci. Duis hendrerit ex metus, vel tempor sem aliquet nec. Donec ornare hendrerit bibendum. Nullam dui erat, tempus eu nisl vitae, venenatis gravida ipsum. Suspendisse potenti.</p>
                                    </div>
                                </div> 
                           </div>
                        </div>  
                       <div class="comments_box">
                            <h3>3 Comments	</h3>
                            <div class="comment_list">
                                <div class="comment-author-thumb">
                                    <img src="{{asset('assets/img/blog/comment2.png.jpg')}}" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <div class="comment_title">
                                            <h5><a href="#">Admin</a></h5>
                                            <span>October 16, 2018 at 1:38 am</span>
                                        </div>  
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="comment_list comment_border">
                                <div class="comment-author-thumb">
                                    <img src="{{asset('assets/img/blog/comment3.png.jpg')}}" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <div class="comment_title">
                                            <h5><a href="#">Demo</a></h5>
                                            <span>October 16, 2018 at 1:38 am</span>
                                        </div>
                                    </div>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_list">
                                <div class="comment-author-thumb">
                                    <img src="assets/img/blog/comment2.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <div class="comment_title">
                                            <h5><a href="#">Admin</a></h5>
                                            <span>October 16, 2018 at 1:38 am</span>
                                        </div>
                                    </div>
                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments_form">
                                <h3>Bình luân của bạn</h3>
                                <p>Đăng nhập để bình luận !</p>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="review_comment">Bình luận </label>
                                            <textarea name="comment" id="review_comment"></textarea>
                                        </div> 
                                    </div>
                                    <button class="submit" type="submit">Gửi bình luận</button>
                                 </form>    
                            </div> 
                        </div> 
                   </div>
                </div>
                <!--blog grid area start-->
            </div>
        </div>
    </div>
</div>

@endsection