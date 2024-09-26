<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawsome Pet Care - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

</head>

<body class="header">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="<?php echo e(asset('images/pawsome.png')); ?>" alt="Pawsome Logo" class="w-12 h-8">
                <span class="ml-2 text-xl font-semibold text-black">Pawsome Pet Care</span>
            </div>
            <div class="flex space-x-6">
                <?php if(Auth::check()): ?>
                <a href="<?php echo e(url('/dashboard')); ?>" class="link">Home</a>
                <?php else: ?>
                <a href="<?php echo e(url('/')); ?>" class="link">Home</a>
                <?php endif; ?>
                <a href="<?php echo e(url('/store')); ?>" class="link">Shop</a>
                <?php if(auth()->guard()->check()): ?>
                <a href="/appointments" class="link">Services</a>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>

                <a href="<?php echo e(route('login')); ?>" class="link">Services</a>
                <?php endif; ?>
                <a href="#" class="link">Wishlist</a>
                <a href="#" class="link">Cart</a>
                <a href="#" class="link">My Profile</a>
            </div>

        </nav>
    </header>


    <?php echo $__env->yieldContent('content'); ?>

    <div class="flex justify-end p-24">
        <?php if(auth()->guard()->check()): ?>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button class="warning-error">
                <?php echo e(__('Logout')); ?>

            </button>
        </form>
        <?php endif; ?>
    </div>
    <footer class="bg-gray-800 mt-12 py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-white">
                <div>
                    <h3 class="font-semibold mb-2 text-lg">About Us</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="link">Our Story</a></li>
                        <li><a href="#" class="link">Our Team</a></li>
                        <li><a href="#" class="link">Sustainability</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-2 text-lg">FAQs</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="link">Shipping</a></li>
                        <li><a href="#" class="link">Returns</a></li>
                        <li><a href="#" class="link">Warranty</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-2 text-lg">Important Links</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="link">Privacy Policy</a></li>
                        <li><a href="#" class="link">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-2 text-lg">Technical Support</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="link">Contact Us</a></li>
                        <li><a href="#" class="link">Help Center</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center text-gray-400 mt-8">
            <p>&copy; <?php echo e(date('Y')); ?> Pawsome Pet Care. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html><?php /**PATH /Users/sahangunawardhana/Downloads/SSP Submission/pawsome 2/resources/views/layouts/landing.blade.php ENDPATH**/ ?>