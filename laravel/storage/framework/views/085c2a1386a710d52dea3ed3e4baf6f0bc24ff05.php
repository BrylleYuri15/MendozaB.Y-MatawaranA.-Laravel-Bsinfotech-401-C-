<?php $__env->startSection('title', 'Register'); ?>
<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
    <h5><?php echo e(session('success')); ?></h5>
<?php elseif($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h5><?php echo e($error); ?></h5>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>
<div class="container mt-3 d-flex align-items-center justify-content-center w-70 ">
    <div class="login">
        <h4 class="text-dark">
            Registration
        </h4>
        <form action="<?php echo e(route('registerAccount')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="formgroup col-6">
                    <i class="fa fa-user p-2"></i>
                    <input type="text" id="firstName" name="firstName" placeholder="First Name">
                </div>
                <div class="formgroup col-6">
                    <i class="fa fa-user p-2"></i>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="formgroup">
                <i class="fa fa-birthday-cake"></i>
                <input type="date" id="birthday" name="birthday" placeholder="Birthday">
            </div>
            <div class="formgroup">
                <i class="fa fa-calendar"></i>
                <input type="number" id="age" name="age" placeholder="Age">
            </div>
            <div class="formgroup">
                <i class="fa fa-map-marker"></i>
                <input type="text" id="address" name="address" placeholder="Address">
            </div>
            <div class="formgroup">
                <i class="fa fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Email">
            </div>
            <div class="formgroup">
                <i class="fa fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="formgroup">
                <i class="fa fa-lock"></i>
                <input type="password" id="con-password" name="password_confirmation" placeholder="Confirm Password">
            </div>

            <button type="submit">Register</button>

        </form>
        <p class="mt-2 text-dark">Already have account?<a href="<?php echo e(route('login')); ?>">Login here</a></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelProject\resources\views/auth/register.blade.php ENDPATH**/ ?>