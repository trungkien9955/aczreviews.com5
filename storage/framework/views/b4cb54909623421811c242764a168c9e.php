<div class="row gy-2">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-3 col-md-4 col-xs-2">
        <div class="item m-auto">
            <a href="<?php echo e(url('/product/'.$product['id'])); ?>" class="item-image-wrapper">
                <div class="item-image">
                    <img  src="<?php echo e(url('front/images-3/new_images/new-flower-1.jpg')); ?>" alt="">
                </div>
            </a>
            <div class="item-details mt-2">
                <h3 class="item-name"><?php echo e($product['product_name']); ?></h3>
                <p class="item-description"><strong>Mã:</strong> LY01</p>
                <p class="item-description"><strong>Giá:</strong> <?php echo e($product['product_price']); ?>đ</p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/FlowerShop/front/products/ajax_products_listing.blade.php ENDPATH**/ ?>