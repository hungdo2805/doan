<div class="sidebar sidebar-style-2">
			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="public/backend/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                      
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a >
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>

                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Quản Lý</h4>
                </li>
                

                <li class="nav-item @yield('menutong1')">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Sản phẩm</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse show" id="tables">
                        <ul class="nav nav-collapse">
                            <li class="@yield('menu1')">
                                <a href="admin/qlcoso">
                                    <span class="sub-item">Danh sách Sản phẩm</span>
                                </a>
                            </li>
                            <li class="@yield('menu2')">
                                <a href="admin/giayphep">
                                    <span class="sub-item">Danh mục</span>
                                </a>
                            </li>
                            <li class="@yield('menu3')">
                                <a href="admin/chungchinv">
                                    <span class="sub-item">Loại sản phẩm</span>
                                </a>
                            </li>
                            <li class="@yield('menu4')">
                                <a href="admin/csvipham">
                                    <span class="sub-item">Thương hiệu</span>
                                </a>
                            </li>
                            <li class="@yield('menu5')">
                                <a href="admin/linhvuc">
                                    <span class="sub-item">Size</span>
                                </a>
                            </li>

                            <li class="@yield('menu6')">
                                <a href="admin/linhvuc">
                                    <span class="sub-item">Bình luận</span>
                                </a>
                            </li>

                            <li class="@yield('menu7')">
                                <a href="admin/linhvuc">
                                    <span class="sub-item">Hóa đơn</span>
                                </a>
                            </li>
                            <li class="@yield('menu8')">
                                <a href="admin/linhvuc">
                                    <span class="sub-item">Liên hệ</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>
                
                <li class="nav-item @yield('menutong2')">
                    <a data-toggle="collapse" href="#charts">
                        <i class="far fa-chart-bar"></i>
                        <p>Bài viết</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse show" id="charts">
                        <ul class="nav nav-collapse">
                            <li class="@yield('menu11')">
                                <a href="admin/canbotaphuan">
                                    <span class="sub-item">Danh sách bài viết</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item @yield('menutong3')">
                    <a data-toggle="collapse" href="#charts1">
                        <i class="far fa-chart-bar"></i>
                        <p>QL Tài Khoản</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts1">
                        <ul class="nav nav-collapse">
                            <li class="@yield('menu13')">
                                <a href="admin/dstaikhoan">
                                    <span class="sub-item">Danh sách TK</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>