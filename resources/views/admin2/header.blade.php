{{-- @php
$user = Auth::user();
@endphp --}}



<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">
        
        <a href="index.html" class="logo">
            <!-- <img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand"> -->
            <span>Sở hữu trí tuệ</span>
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
        
        <div class="container-fluid">
            <div class="collapse" id="search-nav">
                <form class="navbar-left navbar-form nav-search mr-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-search pr-1">
                                <i class="fa fa-search search-icon"></i>
                            </button>
                        </div>
                        <input type="text" placeholder="Tìm kiếm ..." class="form-control">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item toggle-nav-search hidden-caret">
                    <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                        <i class="fa fa-search"></i>
                    </a>
                </li>

                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="{{asset('public/backend/assets/img/profile.jpg')}}" alt="avatar admin" class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg"><img src="{{asset('public/backend/assets/img/profile.jpg')}}" alt="image profile" class="avatar-img rounded"></div>
                                    <div class="u-text">
                                        <h4>admin</h4>
                                        <p class="text-muted">admin@gmail.com</p>
                                        <a  class="btn btn-xs btn-secondary btn-sm">Xem thông tin cá nhân</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" > <i class="fas fa-user" style="margin-right:3px;"></i> Tài khoản của tôi</a>
                                <div class="dropdown-divider"></div>
                                <a href="dangxuat" class="dropdown-item" >
                                    <i class="fas fa-arrow-left" style="margin-right:3px;"></i>
                                 {{ __('Đăng xuất') }}
                             </a>

                           
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>