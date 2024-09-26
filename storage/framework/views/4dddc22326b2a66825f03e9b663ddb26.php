

<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-4 py-8">
    <div class="admin-main">
        <h2 class="text-3xl font-bold mb-8 text-left text-gray-900">Edit Product</h2>
        <form action="<?php echo e(url('product/update/' . $product->id)); ?>" enctype="multipart/form-data" method="post" class="space-y-6">
            <?php echo csrf_field(); ?>

            <div class="space-y-4">
                <label for="product_name" class="block text-gray-700 font-semibold">Product Name:</label>
                <input type="text" name="product_name" id="product_name" class="border border-gray-300 p-4 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm" value="<?php echo e($product->pro_name); ?>" placeholder="Enter product name">
            </div>

            <div class="space-y-4">
                <label for="product_price" class="block text-gray-700 font-semibold">Product Price:</label>
                <input type="number" name="product_price" id="product_price" step="0.01" class="border border-gray-300 p-4 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm" value="<?php echo e($product->pro_price); ?>" placeholder="Enter product price">
            </div>

            <div class="space-y-4">
                <label for="product_keyword" class="block text-gray-700 font-semibold">Product Keyword:</label>
                <input type="text" name="product_keyword" id="product_keyword" class="border border-gray-300 p-4 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm" value="<?php echo e($product->pro_keyword); ?>" placeholder="Enter product keyword">
            </div>

            <div class="space-y-4">
                <label for="shelf_life" class="block text-gray-700 font-semibold">Shelf Life:</label>
                <input type="text" name="shelf_life" id="shelf_life" class="border border-gray-300 p-4 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm" value="<?php echo e($product->shelf_life); ?>" placeholder="Enter shelf life">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="space-y-4">
                    <label for="product_width" class="block text-gray-700 font-semibold">Width (cm):</label>
                    <input type="text" name="product_width" id="product_width" class="border border-gray-300 p-4 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm" value="<?php echo e($product->pro_width); ?>" placeholder="Enter width">
                </div>

                <div class="space-y-4">
                    <label for="product_height" class="block text-gray-700 font-semibold">Height (cm):</label>
                    <input type="text" name="product_height" id="product_height" class="border border-gray-300 p-4 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm" value="<?php echo e($product->pro_height); ?>" placeholder="Enter height">
                </div>

                <div class="space-y-4">
                    <label for="product_length" class="block text-gray-700 font-semibold">Length (cm):</label>
                    <input type="text" name="product_length" id="product_length" class="border border-gray-300 p-4 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm" value="<?php echo e($product->pro_length); ?>" placeholder="Enter length">
                </div>
            </div>

            <div class="space-y-4">
                <label for="product_description" class="block text-gray-700 font-semibold">Description:</label>
                <textarea name="product_description" id="product_description" rows="4" class="border border-gray-300 p-4 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm" placeholder="Enter product description"><?php echo e($product->pro_description); ?></textarea>
            </div>

            <div class="space-y-4">
                <label for="product_image" class="block text-gray-700 font-semibold">Product Image:</label>
                <input type="file" name="product_image" id="product_image" class="border border-gray-300 p-4 rounded-lg w-full focus:outline-none focus:border-blue-500 shadow-sm">
                <p class="text-gray-600 mt-2">Current image:</p>
                <img src="<?php echo e(asset($product->pro_image_url)); ?>" alt="Current Image" class="mt-2 w-40 h-auto object-cover rounded-md">
            </div>

            <div class="flex justify-center">
                <button type="submit" class="neutral-button">Update Product</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sahangunawardhana/Downloads/SSP Submission/pawsome 2/resources/views/product/edit.blade.php ENDPATH**/ ?>