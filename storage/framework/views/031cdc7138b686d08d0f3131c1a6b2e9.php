
<?php $__env->startSection('content'); ?>
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Danh mục cấp 3</h4>
            </div>
            <div class="cat-section-content">
                <div class="add-btn">
                    <a href="/admin/add-edit-products">Thêm sản phẩm</a>
                </div>
                <div class="table-wrapper">
                    <table class="table table-bordered" id="products">
                        <thead>
                            <tr>
                                <td>
                                    ID
                                </td>
                                <td>
                                    Thuộc Danh mục cấp 1
                                </td>
                                <td>
                                    Thuộc Danh mục cấp 2
                                </td>
                                <td>
                                    Thuộc Danh mục cấp 2
                                </td>
                                <td>
                                    Tên
                                </td>
                                <td>
                                    Nổi bật
                                </td>
                                <td>
                                    Phiên bản
                                </td>
                                <td>
                                    Trạng thái
                                </td>
                                <td>
                                    Thao tác
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($product['id']); ?>

                                </td>
                                <td>
                                    <?php echo e($product['department']['department_name']); ?>

                                </td>
                                <td>
                                    <?php echo e($product['section']['section_name']); ?>

                                </td>
                                <td>
                                    <?php echo e($product['category']['category_name']); ?>

                                </td>
                                <td>
                                    <?php echo e($product['name']); ?>

                                </td>
                                <td>
                                    <?php if($product['is_featured'] =="yes"): ?>
                                    <a href = "javascript:void(0)" class="update_product_feature_status" data-feature-product-id="<?php echo e($product['id']); ?>"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "yes"></i></a>
                                    <?php else: ?>
                                    <a href = "javascript:void(0)" class="update_product_feature_status"   data-feature-product-id="<?php echo e($product['id']); ?>"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "no"></i></a>
                                    <?php endif; ?> 
                                </td>
                                <td>
                                    <?php if($product['has_versions'] =="yes"): ?>
                                    <a href = "javascript:void(0)" class="update_product_versions_status" data-versions-product-id="<?php echo e($product['id']); ?>"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "yes"></i></a>
                                    <?php else: ?>
                                    <a href = "javascript:void(0)" class="update_product_versions_status"   data-versions-product-id="<?php echo e($product['id']); ?>"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "no"></i></a>
                                    <?php endif; ?> 
                                </td>
                                <td>
                                    <?php if($product['status'] ==1): ?>
                                    <a href = "javascript:void(0)" class="update_product_status" data-product-id="<?php echo e($product['id']); ?>"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i></a>
                                    <?php else: ?>
                                    <a href = "javascript:void(0)" class="update_product_status"   data-product-id="<?php echo e($product['id']); ?>"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i></a>
                                    <?php endif; ?> 
                                </td>
                                <td>
                                <a href="<?php echo e(url('/admin/add-edit-products/'.$product['id'])); ?>" class = "admin-edit-btn">Chỉnh sửa</a>
                                <a data-title = "Sản phẩm" class = "confirm_delete admin-delete-btn" data-model = "Product" data-model-url = "products" data-model-id = "<?php echo e($product['id']); ?>" href="javascript:void(0)">Xóa</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('aczreviews.admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/admin/products/products.blade.php ENDPATH**/ ?>