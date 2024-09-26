

<?php $__env->startSection('content'); ?>
<div class="container mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Manage Users</h1>

    <?php if($users->isEmpty()): ?>
    <p class="text-center text-gray-600 text-xl">No users available.</p>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="admin-table">
            <thead class="admin-table-header">
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-4 px-6 border-b text-left">Role</th>
                    <th class="py-4 px-6 border-b text-left">Name</th>
                    <th class="py-4 px-6 border-b text-left">Email</th>
                    <th class="py-4 px-6 border-b text-left">Registered</th>
                    <th class="py-4 px-6 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-gray-100">
                    <td class="py-4 px-6 border-b"><?php echo e($user->user_type); ?></td>
                    <td class="py-4 px-6 border-b"><?php echo e($user->name); ?></td>
                    <td class="py-4 px-6 border-b"><?php echo e($user->email); ?></td>
                    <td class="py-4 px-6 border-b"><?php echo e($user->created_at->format('Y-m-d')); ?></td>
                    <td class="py-4 px-6 border-b">
                        <form action="<?php echo e(url('user/delete')); ?>" method="post" class="inline">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            <button type="submit" class="warning-error">
                                DELETE
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<div class="fixed bottom-4 right-4">
    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-red-700 transition duration-300">Logout</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sahangunawardhana/Downloads/SSP Submission/pawsome 2/resources/views/admin/manageU.blade.php ENDPATH**/ ?>