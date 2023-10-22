
<?php $__env->startSection('content'); ?>
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Danh mục cấp 1</h4>
            </div>
            <div class="cat-section-content">
                <div class="add-btn">
                    <a href="/admin/add-edit-departments">Thêm Danh mục cấp 1</a>
                </div>
                <div class="table-wrapper">
                    <table class="table table-bordered" id="departments">
                        <thead>
                            <tr>
                                <td>
                                    ID
                                </td>
                                <td>
                                    Tên
                                </td>
                                <td>
                                    url
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
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($department['id']); ?>

                                </td>
                                <td>
                                    <?php echo e($department['department_name']); ?>

                                </td>
                                <td>
                                    <?php echo e($department['url']); ?>

                                </td>
                                <td>
                                    <?php if($department['status'] ==1): ?>
                                    <a href = "javascript:void(0)" class="update_department_status" data-department-id="<?php echo e($department['id']); ?>"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i></a>
                                    <?php else: ?>
                                    <a href = "javascript:void(0)" class="update_department_status"   data-department-id="<?php echo e($department['id']); ?>"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i></a>
                                    <?php endif; ?> 
                                </td>
                                <td>
                                <a href="<?php echo e(url('/admin/add-edit-departments/'.$department['id'])); ?>" class = "admin-edit-btn">Chỉnh sửa</a>
                                <a data-title = "Danh mục cấp 1" class = "confirm_delete admin-delete-btn" data-model = "Department" data-model-url = "departments" data-model-id = "<?php echo e($department['id']); ?>" href="javascript:void(0)">Xóa</a>
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
<?php echo $__env->make('aczreviews.admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/admin/departments/departments.blade.php ENDPATH**/ ?>