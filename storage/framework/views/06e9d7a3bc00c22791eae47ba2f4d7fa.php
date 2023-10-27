<?php
use App\Models\aczreviews\ProductFilter;
?>
<div class="col-lg-3">
    <div class="filter-wrapper">
        <span style = "font-weight:bold; font-size = 18px;" >Bộ lọc</span>
        <?php
        $prices = array('0-100000', '100000-200000', '200000-500000', '500000-1000000', '1000000-2000000', '2000000-5000000', '5000000-10000000')
        ?>
        <div class="filter-item">
            <span style = "font-weight:bold;">Giá</span>
            <form action="" method = "post">
                <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check">
                    <input class="form-check-input price" type="checkbox" value="<?php echo e($price); ?>" id="price<?php echo e($key); ?>">
                    <label class="form-check-label" for="price<?php echo e($key); ?>">
                   <?php 
                   $price_item = explode('-', $price);
                   $price_item_1 = number_format(floatval($price_item[0]));
                   $price_item_2 = number_format(floatval($price_item[1]));
                   ?>
                   <?php echo e($price_item_1); ?>đ - <?php echo e($price_item_2); ?>đ
                    </label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </form>
        </div>
        <?php
        $brands = ProductFilter::get_brands($category['url']);
        ?>
        <?php if(count($brands)>0): ?>
        <div class="filter-item">
            <span style = "font-weight:bold;">Thương hiệu</span>
            <form action="" method = "post">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check">
                    <input class="form-check-input brand" type="checkbox" value="<?php echo e($brand['id']); ?>" id="brand<?php echo e($key); ?>">
                    <label class="form-check-label" for="brand<?php echo e($key); ?>">
                    <?php echo e($brand['name']); ?>

                    </label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </form>
        </div>
        <?php endif; ?>
        <?php
        $sizes = ProductFilter::get_sizes($category['url']);
        ?>
        <?php if(count($sizes)>0): ?>
        <div class="filter-item">
            <span style = "font-weight:bold;">Size</span>
            <form action="" method = "post">
                <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check">
                    <input class="form-check-input size" type="checkbox" value="<?php echo e($size); ?>" id="size<?php echo e($key); ?>">
                    <label class="form-check-label" for="size<?php echo e($key); ?>">
                    <?php echo e($size); ?>

                    </label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </form>
        </div>
        <?php endif; ?>
        <?php
        $colors = ProductFilter::get_colors($category['url']);
        ?>
        <?php if(count($colors)>0): ?>
        <div class="filter-item">
            <span style = "font-weight:bold;">Màu sắc</span>
            <form action="" method = "post">
                <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check">
                    <input class="form-check-input color" type="checkbox" value="<?php echo e($color); ?>" id="color<?php echo e($key); ?>">
                    <label class="form-check-label" for="color<?php echo e($key); ?>">
                    <?php echo e($color); ?>

                    </label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </form>
        </div>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/front/products/filters.blade.php ENDPATH**/ ?>