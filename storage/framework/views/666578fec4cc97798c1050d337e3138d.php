
<?php $__env->startSection('content'); ?>
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Thêm hình ảnh </h4>
            </div>
            <div class="cat-section-title">
                <h5>Thêm hình ảnh sản phẩm</h5>
            </div>
            <div class="cat-section-content">
                <form class="forms-sample"  action = "<?php echo e(url('admin/add-images/'.$product_details['id'])); ?>"method = "post" name = "updateAdminDetailsForm" id = "updateAdminDetailsForm" enctype = "multipart/form-data"><?php echo csrf_field(); ?>
                        <div class="form-group">
                        <label for="product_name">Tên sản phẩm:</label>
                        &nbsp; <?php echo e($product_details['name']); ?>

                        </div>
                        <div class="form-group">
                        <label for="product_code">Mã sản phẩm:</label>
                        &nbsp; <?php echo e($product_details['code']); ?>

                        </div>
                        <div class="form-group">
                        <label for="product_color">Màu:</label>
                        &nbsp; <?php echo e($product_details['color']); ?>

                        </div>
                        <div class="form-group">
                        <label for="product_price">Giá:</label>
                        &nbsp; <?php echo e($product_details['price']); ?>

                        </div>
                        <div class="form-group">
                        <label for="">Hình ảnh sản phẩm:</label><br>
                        <?php if(!empty($product_details['image'])): ?>
                          <img style = "width: 150px; height: 150px"src="<?php echo e(url('aczreviews/front/images/product_images/medium/'.$product_details['image'])); ?>" alt="">
                          <?php else: ?>
                          <img style = "width: 150px; height: 150px" src="<?php echo e(url('aczreviews/front/images/no-image.png')); ?>" alt="">
                          <?php endif; ?>
                        </div>
                        <h5  class = "mt-3">Thêm hình ảnh sản phẩm:</h5>
                        <div class="form-group">
                        <div class="field_wrapper">
                          <div>
                            <input type="file" name = "images[]" multiple = "" id = "images">
                          </div>
                        </div>
                        </div>
                        <input type="hidden" value = "product-id-.<?php echo e($product_details['id']); ?>" name = "product_id_for_image_name">
                        <button type="submit" class="btn btn-primary mr-2">Xác nhận</button>
                        <button class="btn btn-light">Hủy bỏ</button>
                </form>
                <?php if($errors->any()): ?>
                    <div class = "alert alert-danger">
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if(Session::has('success_message')): ?>
                    <div class = "alert alert-success alert-dismissible fade show mt-2 mb-2" role = "alert">
                      <strong>Thành  công: </strong><?php echo e(Session::get('success_message')); ?>

                    </div>
                <?php endif; ?>
                <a  href = "<?php echo e(url('/admin/products')); ?>" class = "btn btn-outline-secondary mt-2">Trở về trang trước</a>
                <table id = "products"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                             Hình ảnh
                          </th>
                          <th>
                             Tình trạng
                          </th>
                          <th>
                          Thao tác
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $product_details['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <?php echo e($image['id']); ?>

                          </td>
                          <td>
                            <?php echo e($image['image']); ?>

                          <img style = "width: 150px; height: 150px" src="<?php echo e(url('aczreviews/front/images/gal_images/medium/'.$image['image'])); ?>" alt="">
                          </td>               
                          <td>
                            <?php if($image['status'] ==1): ?>
                                <a href = "javascript:void(0)" class="update_image_status" data-image-id="<?php echo e($image['id']); ?>"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i></a>
                                    <?php else: ?>
                                <a href = "javascript:void(0)" class="update_image_status"   data-image-id="<?php echo e($image['id']); ?>"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i></a>
                            <?php endif; ?> 
                            <a href = "javascript:void(0)" class = "confirmDelete" module = "image" moduleid = "<?php echo e($image['id']); ?>">
                          <i style = "font-size:25px"class = "mdi mdi-file-excel-box"></i></a>         
                          </td>
                          <td>
                            <a data-title = "Hình ảnh sản phẩm" class = "confirm_delete admin-delete-btn" data-model = "ProductImage" data-model-url = "product_images" data-model-id = "<?php echo e($image['id']); ?>" href="javascript:void(0)">Xóa</a>       
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('aczreviews.admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/admin/product_images/add_edit_images.blade.php ENDPATH**/ ?>