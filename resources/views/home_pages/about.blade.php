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
                        <li>Giới thiệu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<div class="about_section">
    <div class="container">  
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about_content">
                    <h1>Giới thiệu về shop</h1>
                    <p> Quibusdam perspiciatis pariatur magnam ducimus excepturi error libero provident animi laboriosam maiores ad explicabo ea laudantium nostrum dolor distinctio, quas fugiat doloribus, sit, possimus obcaecati ab quo vel commodi eum. Laudantium libero, voluptate rerum sunt hic,</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse numquam blanditiis quos, fuga, aspernatur doloribus expedita, soluta dolore cumque.</p>
                    <div class="view__work">
                        <a href="#">view work </a>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about_thumb">
                    <img src="{{asset('home_pages/assets/img/about/about1.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>     
</div>
@endsection