<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<!-- Alerts for success and errors -->
<?php if(session('success')): ?>
    <div class="alert alert-success text-center" role="alert">
        <?php echo e(session('success')); ?>

    </div>
<?php elseif($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger text-center" role="alert">
            <?php echo e($error); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
            <div class="d-flex">
                <div class="mb-4">
                    <a href="<?php echo e(route('addUserForm')); ?>" class="btn btn-primary">Add New User</a>
                </div>
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">


        <!-- Add User Button -->


        <!-- Table of Users -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <?php if($account->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $account->image)); ?>" alt="Profile" class="rounded-circle"
                                        style="width: 80px; height: 80px; object-fit: cover;">
                                <?php else: ?>
                                    <p>No Profile</p>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($account->firstName . " " . $account->lastName); ?></td>
                            <td><?php echo e($account->birthday); ?></td>
                            <td><?php echo e($account->age); ?></td>
                            <td><?php echo e($account->address); ?></td>
                            <td>
                                <a href="<?php echo e(route('editUserForm', $account->id)); ?>"
                                    class="btn btn-warning btn-sm mb-2">Edit</a>
                                <form action="<?php echo e(route('deleteUser', $account->id)); ?>" method="POST"
                                    onsubmit="return confirm('Are you sure to delete this user?')" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravelProject\resources\views/dashboard.blade.php ENDPATH**/ ?>