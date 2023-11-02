<?php 
use App\Models\aczreviews\Department;
use App\Models\aczreviews\Section;
?>
    <div id="nav-close-btn" onclick="closeNav()">&times;</div>
    <div id="side-nav" class="side-nav">
        <div class="side-nav-header">
            <i class="fas fa-user-circle"></i><span>Xin chào, <?php echo e(Auth::guard('admin')->user()->name); ?></span>
        </div>
        <div id="side-nav-main-container">
            <div class="side-nav-list-header">
                <h5>Thông tin <?php echo e(Auth::guard('admin')->user()->name); ?></h5>
            </div>
            <ul class="side-nav-list">
                <li class="side-nav-list-item">
                    <a href="javascript:void(0);" >
                    <span>Xem thông tin</span>
                    </a>
                </li>
                <li class="side-nav-list-item" >
                    <a href="javascript:void(0);" >
                    <span>Đổi mật khẩu</span>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="side-nav-list-header">
                <h5>Quản lý catalogue</h5>
            </div>
            <ul class="side-nav-list">
                <li class="side-nav-list-item">
                    <a href="/admin/departments" >
                    <span>Danh mục cấp 1</span>
                    </a>
                </li>
                <li class="side-nav-list-item" >
                    <a href="/admin/sections" >
                    <span>Danh mục cấp 2</span>
                    </a>
                </li>
                <li class="side-nav-list-item" >
                    <a href="/admin/categories" >
                    <span>Danh mục cấp 3</span>
                    </a>
                </li>
                <li class="side-nav-list-item" >
                    <a href="/admin/products" >
                    <span>Sản phẩm</span>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="side-nav-list-header">
                <h5>Quản lý cửa hàng</h5>
            </div>
            <ul class="side-nav-list">
                <li class="side-nav-list-item">
                    <a href="/admin/vendors" >
                    <span>Danh mục cửa hàng</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/admin/layout/side_menu.blade.php ENDPATH**/ ?>