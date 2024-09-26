

<?php $__env->startSection('content'); ?>
<div class="admin-main">
    <h1 class="text-3xl font-bold mb-6 text-black-800">Order Details - ID: <?php echo e($order->id); ?></h1>
    <div class="bg-white border border-black-300 rounded-lg shadow-md p-6">
        <p class="text-gray-600">Customer ID: <?php echo e($order->customer_id); ?></p>
        <p class="text-gray-600">Order Date: <?php echo e($order->order_date); ?></p>
        <p class="text-gray-600">Total: LKR <?php echo e($order->total); ?></p>
        <p class="text-gray-600">Status: <?php echo e($order->status); ?></p>

        <h2 class="text-2xl font-bold mt-6 text-black-800">Order Items</h2>
        <ul>
            <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mt-4">
                <?php echo e($item->product->pro_name); ?> x <?php echo e($item->quantity); ?> = LKR <?php echo e($item->total); ?>

            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sahangunawardhana/Downloads/SSP Submission/pawsome 2/resources/views/order/view.blade.php ENDPATH**/ ?>