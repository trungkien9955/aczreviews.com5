
<?php 
use App\Models\aczreviews\Section;
use App\Models\aczreviews\Category;
use App\Models\aczreviews\Product;
?>

<?php $__env->startSection('content'); ?>
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Sản phẩm</h4>
            </div>
            <div class="cat-section-title">
                <h5><?php echo e($title); ?></h5>
            </div>
            <div class="cat-section-content">
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
                <form <?php if(empty($product['id'])): ?> action = "<?php echo e(url('admin/add-edit-products')); ?>"<?php else: ?> action = "<?php echo e(url('admin/add-edit-products/'.$product['id'])); ?>" <?php endif; ?> method = "post" enctype = "multipart/form-data"><?php echo csrf_field(); ?>
                    <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" class="form-control" name = "name" <?php if(!empty($product['id'])): ?> value = "<?php echo e($product['name']); ?>" <?php else: ?> value = "<?php echo e(old('name')); ?>" <?php endif; ?> required>
                    </div>
                    <div class="form-group">
                        <label for="department_id">Chọn danh mục cấp 1</label>
                        <select class = "form-control" name="department_id" id = "department-selection">
                            <option value="">Chọn danh mục</option>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($department['id']); ?>" <?php if(!empty($product['department_id']) && $product['department_id'] == $department['id']): ?> selected <?php endif; ?>><?php echo e($department['department_name']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section_id">Chọn danh mục cấp 2</label>
                        <select class = "form-control" name="section_id" id = "section-selection">
                        <?php if(!empty($product['section_id'])): ?>  
                        <?php 
                        $section = Section::find($product['section_id']);
                        ?>
                        <option value=" <?php echo e($section['id']); ?>"><?php echo e($section['section_name']); ?></option>
                        <?php endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section_id">Chọn danh mục cấp 3</label>
                        <select class = "form-control" name="category_id" id = "category-selection">
                        <?php if(!empty($product['category_id'])): ?>  
                        <?php 
                        $category = Category::find($product['category_id']);
                        ?>
                        <option value=" <?php echo e($category['id']); ?>"><?php echo e($category['category_name']); ?></option>
                        <?php endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="code">Mã sản phẩm</label>
                    <input type="text" class="form-control" name = "code" <?php if(!empty($product['code'])): ?> value = "<?php echo e($product['code']); ?>" <?php else: ?> value = "<?php echo e(old('code')); ?>" <?php endif; ?> required>
                    </div>
                    <div class="form-group">
                    <label for="color">Màu</label>
                    <input type="text" class="form-control" name = "color" <?php if(!empty($product['color'])): ?> value = "<?php echo e($product['color']); ?>" <?php else: ?> value = "<?php echo e(old('color')); ?>" <?php endif; ?> >
                    </div>
                    <div class="form-group">
                    <label for="color">Giá</label>
                    <input type="text" class="form-control" name = "price" <?php if(!empty($product['price'])): ?> value = "<?php echo e($product['price']); ?>" <?php else: ?> value = "<?php echo e(old('price')); ?>" <?php endif; ?> required>
                    </div>
                    <div class="form-group">
                    <label for="color">Giảm giá</label>
                    <input type="text" class="form-control" name = "discount" <?php if(!empty($product['discount'])): ?> value = "<?php echo e($product['discount']); ?>" <?php else: ?> value = "<?php echo e(old('discount')); ?>" <?php endif; ?> required>
                    </div>
                    <div class="form-group">
                        <label for="image">Hình ảnh (Tối ưu: 1000x1000)</label>
                        <input type="file" class="form-control" name = "image"  >
                        <?php if(!empty($product['image'])): ?>

                        <a href="<?php echo e(url('aczreviews/front/images/product_images/'.$product['image'])); ?>">View image</a>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                          <textarea name="description"   rows="3" class = "form-control"><?php echo e($product['description']); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="is_featured">Là sản phẩm nổi bật?</label>
                        <input type="checkbox" name = "is_featured"  value = "yes" <?php if(!empty($product['is_featured']) && $product['is_featured'] == 'yes'): ?> checked <?php endif; ?>>
                    </div>
                    <div class="form-group">
                        <label for="has_versions">Có nhiều phiên bản?</label>
                        <input type="checkbox" name = "has_versions"  value = "yes" <?php if(!empty($product['has_versions']) && $product['has_versions'] == 'yes'): ?> checked <?php endif; ?>>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 mt-2">Xác nhận</button>
                    <button class="btn btn-light mt-2">Hủy bỏ</button>
                </form>
                <a  href = "<?php echo e(url('/admin/products')); ?>" class = "btn btn-outline-secondary mt-2">Trở về trang trước</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('aczreviews.admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/admin/products/add_edit_products.blade.php ENDPATH**/ ?>