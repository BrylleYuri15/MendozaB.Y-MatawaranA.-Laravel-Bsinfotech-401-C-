<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>


<?php if(session('success')): ?>
    <div class="alert alert-success">
        <h5><?php echo e(session('success')); ?></h5>
    </div>
<?php elseif($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-error">
            <h5><?php echo e($error); ?></h5>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<div class="container mt-3 d-flex align-items-center justify-content-center w-70 ">

    <div class="login  ">
        <h1>Login</h1>
        <form action="<?php echo e(route('loginAccount')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="formgroup">
                <i class="fa fa-user"></i>
                <input type="email" id="email" name="email" placeholder="Email:">
            </div>
            <div class="formgroup">
                <i class="fa fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Password:" required>
            </div>
            <button type="submit" class="mt-4">Login</button>
        </form>
        <p class="mt-2 text-dark">Don't have account?<a href="<?php echo e(route('register')); ?>">Register here</a></p>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelProject\resources\views/auth/login.blade.php ENDPATH**/ ?>