<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aczreviews Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(url('aczreviews/admin/bootstrap-5.0.2-dist/css/bootstrap.min.css')); ?>"> 
  <link rel="stylesheet" href="<?php echo e(url('aczreviews/admin/css/admin_main.css')); ?>"> 
  <link rel="stylesheet" href="<?php echo e(url('aczreviews/admin/css/admin_common.css')); ?>"> 
  <link rel="shortcut icon" href="<?php echo e(url('aczreviews/front/images/icon_images/logo-acz.png')); ?>" />
</head>
<body>
    <div class="login-section">
        <div class="container overflow-hidden">
            <div class="login-section-wrapper">
                <div class="brand-logo">
                    <img src="<?php echo e(url('aczreviews/front/images/icon_images/logo-acz.png')); ?>" alt="">
                </div>
                <h5>Xin chào, </h5>
                <p class="font-weight-light">Vui lòng đăng nhập để tiếp tục.</p>
                <?php if(Session::has('error_message')): ?>
                <div class = "alert alert-warning alert-dismissible fade show" role = "alert">
                    <strong>Error:</strong><?php echo e(Session::get('error_message')); ?>

                </div>
                <?php endif; ?>
                <?php if($errors->any()): ?>
                <div class = "alert alert-danger">
                    <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <form class="pt-1" action = "<?php echo e(url('admin/login')); ?>" method = "post"><?php echo csrf_field(); ?>
                    <div class="form-group">
                    <input type="email" name = "email" id = "email" class="form-control"  placeholder="Tài khoản" required>
                    </div>
                    <div class="form-group">
                    <input type="password" name = "password" id = "password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu" required>
                    </div>
                    <div class="mt-3">
                    <button type = "submit" class="btn btn-secondary">ĐĂNG NHẬP</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        Lưu tài khoản
                        </label>
                    </div>
                    <a href="#" class="auth-link text-black">Quên mật khẩu</a>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                    Chưa có tài khoản? <a href="register.html" class="text-primary">Tạo mới</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo e(url('aczreviews/front//bootstrap-5.0.2-dist/js/bootstrap.min.js')); ?>" ></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/admin/login.blade.php ENDPATH**/ ?>