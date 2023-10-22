
<?php $__env->startSection('content'); ?>
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Danh mục cấp 3</h4>
            </div>
            <div class="cat-section-title">
                <h5><?php echo e($title); ?></h5>
            </div>
            <div class="cat-section-content">
                <form <?php if(empty($category['id'])): ?> action = "<?php echo e(url('admin/add-edit-categories')); ?>"<?php else: ?> action = "<?php echo e(url('admin/add-edit-categories/'.$category['id'])); ?>" <?php endif; ?> method = "post"><?php echo csrf_field(); ?>
                    <div class="form-group">
                    <label for="name">Tên danh mục cấp 3</label>
                    <input type="text" class="form-control" name = "name" <?php if(!empty($category['id'])): ?> value = "<?php echo e($category['category_name']); ?>" <?php else: ?> value = "<?php echo e(old('name')); ?>" <?php endif; ?> required>
                    </div>
                    <div class="form-group">
                        <label for="department_id">Chọn danh mục cấp 1</label>
                        <select class = "form-control" name="department_id" id = "department-selection">
                            <option value="">Chọn danh mục</option>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($department['id']); ?>" <?php if(!empty($category['department_id']) && $category['department_id'] == $department['id']): ?> selected <?php endif; ?>><?php echo e($department['department_name']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section_id">Chọn danh mục cấp 2</label>
                        <select class = "form-control" name="section_id" id = "section-selection">
                            <option value="">Chọn danh mục</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" name = "url" <?php if(!empty($category['url'])): ?> value = "<?php echo e($category['url']); ?>" <?php else: ?> value = "<?php echo e(old('url')); ?>" <?php endif; ?> required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 mt-2">Xác nhận</button>
                    <button class="btn btn-light mt-2">Hủy bỏ</button>
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
                <a  href = "<?php echo e(url('/admin/categories')); ?>" class = "btn btn-outline-secondary mt-2">Trở về trang trước</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('aczreviews.admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/admin/categories/add_edit_categories.blade.php ENDPATH**/ ?>