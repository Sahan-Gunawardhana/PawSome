

<?php $__env->startSection('content'); ?>
<div class="admin-main">
    <h1 class="text-3xl font-bold text-start mb-8">Daycare Appointments</h1>

    <div class="relative shadow-lg rounded-lg">
        <div class="max-h-96 overflow-auto">
            <table class="admin-table">
                <thead class="admin-table-header">
                    <tr>
                        <th class="py-3 px-2 text-left">Customer Name</th>
                        <th class="py-3 px-6 text-left">Pet Name</th>
                        <th class="py-3 px-6 text-left">Drop-off Date</th>
                        <th class="py-3 px-7 text-left">Pick-up Date</th>
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-left">Status</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-4 px-6 text-left"><?php echo e($app->customer->name); ?></td>
                        <td class="py-4 px-6 text-left"><?php echo e($app->pet_name); ?></td>
                        <td class="py-4 px-6 text-left"><?php echo e($app->drop_off_date); ?></td>
                        <td class="py-4 px-6 text-left"><?php echo e($app->pick_up_date); ?></td>
                        <td class="py-4 px-6 text-left"><?php echo e($app->description); ?></td>
                        <td class="py-4 px-6 text-left">
                            <span class="inline-block px-3 py-1 text-sm rounded-full <?php echo e($app->status == 'upcoming' ? 'bg-green-200 text-green-800' : 'bg-gray-200 text-gray-800'); ?>">
                                <?php echo e(ucfirst($app->status)); ?>

                            </span>
                        </td>
                        <td class="py-4 px-6 text-left">
                            <form action="<?php echo e(url('appointments/delete')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="appointment_id" value="<?php echo e($app->id); ?>">
                                <input type="submit" value="DELETE" class="warning-error">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="7" class="text-center py-4">No appointments available.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sahangunawardhana/Downloads/SSP Submission/pawsome 2/resources/views/admin/manageA.blade.php ENDPATH**/ ?>