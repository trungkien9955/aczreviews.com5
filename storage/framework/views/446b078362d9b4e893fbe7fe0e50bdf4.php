
<?php $__env->startSection('content'); ?>
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Danh mục cấp 2</h4>
            </div>
            <div class="cat-section-content">
                <div class="add-btn">
                    <a href="/admin/add-edit-sections">Thêm Danh mục cấp 2</a>
                </div>
                <div class="table-wrapper">
                    <table class="table table-bordered" id="sections">
                        <thead>
                            <tr>
                                <td>
                                    ID
                                </td>
                                <td>
                                    Thuộc Danh mục cấp 1
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
                            <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($section['id']); ?>

                                </td>
                                <td>
                                    <?php echo e($section['department']['department_name']); ?>

                                </td>
                                <td>
                                    <?php echo e($section['section_name']); ?>

                                </td>
                                <td>
                                    <?php echo e($section['url']); ?>

                                </td>
                                <td>
                                    <?php if($section['status'] ==1): ?>
                                    <a href = "javascript:void(0)" class="update_section_status" data-section-id="<?php echo e($section['id']); ?>"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i></a>
                                    <?php else: ?>
                                    <a href = "javascript:void(0)" class="update_section_status"   data-section-id="<?php echo e($section['id']); ?>"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i></a>
                                    <?php endif; ?> 
                                </td>
                                <td>
                                <a href="<?php echo e(url('/admin/add-edit-sections/'.$section['id'])); ?>" class = "admin-edit-btn">Chỉnh sửa</a>
                                <a data-title = "Danh mục cấp 2" class = "confirm_delete admin-delete-btn" data-model = "Section" data-model-url = "sections" data-model-id = "<?php echo e($section['id']); ?>" href="javascript:void(0)">Xóa</a>
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
<?php echo $__env->make('aczreviews.admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/admin/sections/sections.blade.php ENDPATH**/ ?>