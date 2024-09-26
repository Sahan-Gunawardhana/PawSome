<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center">
    <div class="text-center mb-6">
        <a href="<?php echo e(url('/home')); ?>"><img src="<?php echo e(asset('images/pawsome.png')); ?>" alt="" class="max-w-s max-h-28 mx-auto"></a>
    </div>
    <div class="text-center mb-6">
        <p class="text-4xl font-bold">
            Admin Dashboard
        </p>
    </div>
    <?php if(!Request::is('home')): ?>
    <div class="nav-links p-5">
        <a class="link text-xl p-2" href="<?php echo e(url('admin/manageU')); ?>">Users</a>
        <a class="link text-xl p-2" href="<?php echo e(url('admin/manageO')); ?>">Orders</a>
        <a class="link text-xl p-2" href="<?php echo e(url('admin/manageP')); ?>">Products</a>
        <a class="link text-xl p-2" href="<?php echo e(url('admin/manageA')); ?>">Appointments</a>
    </div>
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html><?php /**PATH /Users/sahangunawardhana/Downloads/SSP Submission/pawsome 2/resources/views/layouts/adminheader.blade.php ENDPATH**/ ?>