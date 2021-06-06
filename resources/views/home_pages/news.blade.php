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
                        <li>Bài viết</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<div class="blog_area blog_page blog_reverse">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!--blog grid area start-->
                <div class="blog_grid_area">
                    <div class="blog_grid">
                        <div class="blog_thumb">
                            <a href="{{route("get_news_details")}}"><img src="{{asset('home_pages/assets/img/blog/blog4.png')}}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="post_date">
                                <span class="day">10</span>
                                <span class="month">/ Dec</span>
                            </div>
                            <h3 class="post_title"><a href="{{route("get_news_details")}}">Format ectus fermentum</a></h3>
                            <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                            <a class="read_more" href="{{route("get_news_details")}}">read more</a>
                            <div class="post_meta">
                               <span>Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span><a href="#">/ WordPress</a></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="blog_grid audio">
                        <div class="blog_thumb">
                            <a href="{{route('get_news_details')}}"><img src="{{asset('home_pages/assets/img/blog/blog2.png')}}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="post_date">
                                <span class="day">01</span>
                                <span class="month">/ Dec</span>
                            </div>
                            <h3 class="post_title"><a href="{{route("get_news_details")}}">Single post in Audio format suspendisse</a></h3>
                            <div class="blog_aduio_icone">
                                <audio controls="">
                                  <source src="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3?1" type="audio/mp3">
                                </audio>
                            </div>
                            <a class="read_more" href="{{route("get_news_details")}}">read more</a>
                            <div class="post_meta">
                               <span>Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span><a href="#">/ WordPress</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="blog_grid video">
                        <div class="blog_thumb embed-responsive embed-responsive-16by9">
                                
                            <iframe height="700" src="https://www.youtube.com/embed/2Zt8va_6HRk" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        </div>
                        <div class="blog_content">
                            <div class="post_date">
                                <span class="day">10</span>
                                <span class="month">/ Dec</span>
                            </div>
                            <h3 class="post_title"><a href="{{route("get_news_details")}}">Post in Video format vitae lacus eget</a></h3>
                            <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                            <a class="read_more" href="{{route("get_news_details")}}">read more</a>
                            <div class="post_meta">
                               <span>Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span><a href="#">/ WordPress</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="blog_grid">
                        <div class="blog_thumb">
                            <a href="{{route("get_news_details")}}"><img src="{{asset('home_pages/assets/img/blog/blog3.png')}}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="post_date">
                                <span class="day">10</span>
                                <span class="month">/ Dec</span>
                            </div>
                            <h3 class="post_title"><a href="{{route("get_news_details")}}">Format ectus fermentum</a></h3>
                            <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                            <a class="read_more" href="{{route("get_news_details")}}">read more</a>
                            <div class="post_meta">
                               <span>Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span><a href="#">/ WordPress</a></span>
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