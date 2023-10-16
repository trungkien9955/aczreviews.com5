<?php 
use App\Models\aczreviews\Department;
use App\Models\aczreviews\Section;
?>
    <div id="nav-close-btn" onclick="closeNav()">&times;</div>
    <div id="side-nav" class="side-nav">
        <div class="side-nav-header">
            <i class="fas fa-user-circle"></i><span>Đăng nhập</span>
        </div>
        <?php 
            $departments = Department::with(['sections'=>function($query){
                $query->with('categories')->get()->toArray();
            }])->get()->toArray();
        ?>
        <div id="side-nav-main-container">
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="side-nav-list-header">
                <h5><?php echo e($department['department_name']); ?></h5>
            </div>
            <ul class="side-nav-list" data-side-nav-department-id = "<?php echo e($department['id']); ?>" <?php if(count($department['sections']) < 4): ?> style = "height:auto" <?php endif; ?>>
                <?php $__currentLoopData = $department['sections']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="side-nav-list-item" data-side-nav-section-id = "<?php echo e($section['id']); ?>">
                    <a href="javascript:void(0);" >
                    <span><?php echo e($section['section_name']); ?></span>
                    </a>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php if(count($department['sections']) >4): ?>
            <div class="side-nav-list-see-more" data-side-nav-department-id = "<?php echo e($department['id']); ?>">
                <div>Xem thêm</div>
                <i class="fas fa-chevron-down" style = "margin-left: 6px"></i>
            </div>
            <?php endif; ?>
            <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php 
            $sections = Section::with('categories')->get()->toArray();
        ?>
        <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_for_sub_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="side-nav-sub-container" data-sub-menu-id = "<?php echo e($section_for_sub_menu['id']); ?>">
            <div class="main-menu" data-nav-section-id = "<?php echo e($section_for_sub_menu['id']); ?>">
                <i class="fas fa-chevron-right" style = "margin-right: 6px"></i>
                MAIN MENU
            </div>
            <hr>
            <div class="side-nav-sub-menu">
                <ul>
                    <?php $__currentLoopData = $section_for_sub_menu['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($category['category_name']); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/front/layout/side_menu.blade.php ENDPATH**/ ?>