

<?php $__env->startSection('content'); ?>
<div class="admin-main">
    <h1 class="text-3xl font-bold mb-6 text-black-800">Manage Orders</h1>

    <!-- Orders Table -->
    <div class="overflow-auto">
        <table class="admin-table w-full">
            <thead class="admin-table-header">
                <tr>
                    <th class="py-3 px-4 text-left">Order ID</th>
                    <th class="py-3 px-6 text-left">Order Date</th>
                    <th class="py-3 px-6 text-left">Total</th>
                    <th class="py-3 px-6 text-left">Status</th>
                    <th class="py-3 px-6 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="py-4 px-6 text-gray-600 text-left"><?php echo e($order->id); ?></td>
                    <td class="py-4 px-6 text-gray-600 text-left"><?php echo e($order->order_date); ?></td>
                    <td class="py-4 px-6 text-gray-600 text-left">LKR <?php echo e($order->total); ?></td>
                    <td class="py-4 px-6 text-left">
                        <form action="<?php echo e(url('order/update-status')); ?>" method="post" class="inline-flex">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                            <select name="status" class="border border-black rounded-md text-gray-800">
                                <option value="pending" <?php echo e($order->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                                <option value="confirmed" <?php echo e($order->status == 'confirmed' ? 'selected' : ''); ?>>Confirmed</option>
                                <option value="shipped" <?php echo e($order->status == 'shipped' ? 'selected' : ''); ?>>Shipped</option>
                                <option value="canceled" <?php echo e($order->status == 'canceled' ? 'selected' : ''); ?>>Canceled</option>
                            </select>
                            <button type="submit" class="bg-green-600 text-white ml-2 px-2 py-1 rounded-lg hover:bg-green-700 transition duration-300">
                                Update
                            </button>
                        </form>
                    </td>
                    <td class="py-4 px-6 text-left">
                        <a href="<?php echo e(url('order/view/'.$order->id.'/items')); ?>" class="bg-blue-600 text-white px-3 py-2 rounded-lg hover:bg-blue-700 transition duration-300 inline-block mb-2">
                            View Items
                        </a>
                        <form action="<?php echo e(url('order/delete')); ?>" method="post" class="inline-block">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                            <input type="submit" value="Delete" class="warning-error">
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-600 text-xl">No orders available.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sahangunawardhana/Downloads/SSP Submission/pawsome 2/resources/views/admin/manageO.blade.php ENDPATH**/ ?>