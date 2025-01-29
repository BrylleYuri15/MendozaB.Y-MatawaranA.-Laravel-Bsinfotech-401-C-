<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Edit User Form


    <?php if(session('success')): ?>
        <h5><?php echo e(session('success')); ?></h5>
    <?php elseif($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h5><?php echo e($error); ?></h5>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <form action="<?php echo e(route('editUser', $account->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <input type="text" id="firstName" name="firstName" placeholder="First Name" value="<?php echo e($account->firstName); ?>">
        <input type="text" id="lastName" name="lastName" placeholder="Last Name" value="<?php echo e($account->lastName); ?>">
        <input type="date" id="birthday" name="birthday" placeholder="Birthday" value="<?php echo e($account->birthday); ?>">
        <input type="number" id="age" name="age" placeholder="Age" value="<?php echo e($account->age); ?>">
        <input type="text" id="address" name="address" placeholder="Address" value="<?php echo e($account->address); ?>">
        <input type="email" id="email" name="email" placeholder="Email" value="<?php echo e($account->email); ?>">
        <input type="password" id="password" name="password" autocomplete="new-password" placeholder="New Password">
        <input type="password" id="con-password" name="password_confirmation" placeholder="Confirm Password">
        <?php if($account->image): ?>
            <div style="height: 10rem; width: 10rem;">
                <img src="<?php echo e(asset('storage/' . $account->image)); ?>" alt=""
                    style="width: 100%; height: 100%; object-fit: contain;">
            </div>
        <?php else: ?>
            <p></p>

        <?php endif; ?>
        <input type="file" id="image" name="image" placeholder="" value="<?php echo e($account->image); ?>">

        <button type="submit">Register</button>
    </form>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravelProject\resources\views/Admin/editUserForm.blade.php ENDPATH**/ ?>