<!-- valid -->
<div class="header-section">
    <div class="header-section-second">
        <div class="container-fluid" style = "background-color:inherit;">
            <div class="header-second-wrapper">
                <div class="header-second-left">
                    <div class="logo-wrapper">
                            <a href="/"><img src="<?php echo e(url('aczreviews/front/images/icon_images/logo-acz.png')); ?>" alt=""></a>
                        </div>
                </div>
                <div class="header-second-middle">
                    <div class="header-search">
                        <div class="search-wrapper">
                            <form action="<?php echo e(url('/search')); ?>" class = "d-flex" method = "get">
                                <input type="text" class = "form-control" placeholder = "Tìm kiếm ..." id = "search" name = "search">
                                <button type="submit">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
                <ul class="header-list">
                    <li>
                        <div class="header-item-wrapper">
                            <a href="/contact"><span>Liên hệ</span><img src="<?php echo e(url('aczreviews/front/images/icon_images/contact-1.png')); ?>" alt="" width= "36" height = "36"></a>
                        </div>
                    </li>
                    <li>
                        <div class="header-item-wrapper">
                            <?php if(Auth::check()): ?>
                            <div class="profile-image">
                                <img style = "width: 40px; height:40px;border-radius: 50%;" src="<?php echo e(url('aczreviews/front/images/profile_images/profile-image-1.jpg')); ?>" alt="">
                            </div>
                            <div class="logout" style = "margin-left: 6px;">
                                <button class="user-logout-btn" style = "font-size:24px;border:none;"><i class="fa-solid fa-power-off"></i></button>
                            </div>
                            <?php else: ?>
                            <div class="header-account-wrapper">
                                <a href=""><span>Tài khoản</span><img src="<?php echo e(url('aczreviews/front/images/icon_images/account-1.png')); ?>" width= "36" height = "36" alt=""></a>
                                <div class="header-account-hover-wrapper">
                                    <a href="/user/login-register">Đăng nhập</a>
                                    <a href="/user/login-register">Đăng ký</a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li>
                        <div class="header-item-wrapper">
                            <a href="/cart">
                            <span>Thông báo</span>
                            <div class="header-cart-wrapper">
                                <div class="">
                                    <div class="cart-count">1</div>
                                    <img src="<?php echo e(url('aczreviews/front/images/icon_images/noti-1.png')); ?>" alt="" width= "36" height = "36">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-menu-wrapper ">
            <div class="container-fluid">
                    <div class="main-menu">
                        <div class="side-nav-icon" onclick="openNav()">
                            <img src="<?php echo e(url('aczreviews/front/images/icon_images/menu-2.png')); ?>" width= "36" height = "36" alt="">
                        </div>
                        <div id="side-nav" class="side-nav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="list-header">
                                <h5>Mỹ phẩm và chăm sóc cá nhân</h5>
                            </div>
                            <ul class="side-nav-list">
                                <li>
                                    <a href="/featured">
                                    <span>Trang điểm</span>
                                    </a>
                                </li>
                                <li >
                                    <a href="/hoa-cuoi">
                                    <span>Chăm sóc da</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/hoa-hoi-nghi">
                                    <span>Chăm sóc tóc</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/trap-an-hoi">
                                    <span>Nước hoa</span>
                                    </a>
                                </li>
                                <li >
                                    <a href="/coming-soon">
                                    <span>Chăm sóc chân tay, móng</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/coming-soon">
                                    <span>Tẩy, triệt lông</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/coming-soon">
                                    <span>Chăm sóc cá nhân</span>
                                    </a>
                                </li>
                                <li >
                                    <a href="/trap-an-hoi">
                                    <span>Chăm sóc miệng</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="list-header">
                                <h5>Mỹ phẩm và chăm sóc cá nhân</h5>
                            </div>
                            <ul class="nav-sidebar-list-mobile">
                                <li>
                                    <a href="/featured">
                                    <span>Trang điểm</span>
                                    </a>
                                </li>
                                <li >
                                    <a href="/hoa-cuoi">
                                    <span>Chăm sóc da</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/hoa-hoi-nghi">
                                    <span>Chăm sóc tóc</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/trap-an-hoi">
                                    <span>Nước hoa</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/front/layout/header.blade.php ENDPATH**/ ?>