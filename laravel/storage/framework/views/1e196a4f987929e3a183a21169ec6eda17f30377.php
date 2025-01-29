<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Add User Form

    <?php if(session('success')): ?>
        <h5><?php echo e(session('success')); ?></h5>
    <?php elseif($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h5><?php echo e($error); ?></h5>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <form action="<?php echo e(route('addUser')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <input type="text" id="firstName" name="firstName" placeholder="First Name">
        <input type="text" id="lastName" name="lastName" placeholder="Last Name">
        <input type="date" id="birthday" name="birthday" placeholder="Birthday">
        <input type="number" id="age" name="age" placeholder="Age">
        <input type="text" id="address" name="address" placeholder="Address">
        <input type="email" id="email" name="email" placeholder="Email">
        <input type="password" id="password" name="password" placeholder="Password">
        <input type="password" id="con-password" name="password_confirmation" placeholder="Confirm Password">
        <input type="file" id="image" name="image" placeholder="">

        <button type="submit">Register</button>
    </form>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravelProject\resources\views/Admin/addUserForm.blade.php ENDPATH**/ ?>