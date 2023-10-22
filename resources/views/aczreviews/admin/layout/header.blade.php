<!-- valid -->
@include('aczreviews.admin.layout.side_menu')
<div class="header-section">
    <div class="header-section-second">
        <div class="container-fluid" style = "background-color:inherit;">
            <div class="header-second-wrapper">
                <div class="header-second-left">
                    <div class="logo-wrapper">
                            <a href="/admin/dashboard" style = "text-decoration:none">
                            <img src="{{url('aczreviews/front/images/icon_images/logo-acz.png')}}" alt="">
                            <span style = "text-align:center;font-weight: bold;">ADMIN</span>
                            </a>
                    </div>
                </div>
                <div class="header-second-middle">
                    <div class="header-search">
                        <div class="search-wrapper">
                            <form action="{{url('/search')}}" class = "d-flex" method = "get">
                                <input type="text" class = "form-control" placeholder = "Tìm kiếm ..." id = "search" name = "search">
                                <button type="submit">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
                <ul class="header-list">
                    <li>
                        <div class="header-item-wrapper">
                            <a href="/contact"><span>Liên hệ</span><img src="{{url('aczreviews/front/images/icon_images/contact-1.png')}}" alt="" width= "36" height = "36"></a>
                        </div>
                    </li>
                    <li>
                        <div class="header-item-wrapper">
                            <a href="/cart">
                            <span>Thông báo</span>
                            <div class="header-cart-wrapper">
                                <div class="">
                                    <div class="cart-count">1</div>
                                    <img src="{{url('aczreviews/front/images/icon_images/noti-1.png')}}" alt="" width= "36" height = "36">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="header-item-wrapper">
                            <img style = "width: 30px; height:30px;border-radius: 50%; display: inline-block" src="{{ url('aczreviews/front/images/profile_images/nancy-2.jpg') }}" alt="">
                            <span>{{Auth::guard('admin')->user()->name}}</span>      
                        </div>
                    </li>
                    <li>
                        <div class="header-item-wrapper">
                            <a href="/admin/logout">
                            <span style = "text-decoration: underline;">Thoát</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lower-menu-wrapper ">
            <div class="side-nav-icon" onclick="openNav()">
                <img src="{{url('aczreviews/front/images/icon_images/menu-2.png')}}" width= "36" height = "36" alt="">
            </div>
            <ul class="lower-menu-list">
                <li class="lower-menu-list-item">
                    <a href="">
                        <span>Quản lý sản phẩm</span>
                    </a>
                </li>
                <li class="lower-menu-list-item">
                    <a href="">
                        <span>Xem thống kê</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>