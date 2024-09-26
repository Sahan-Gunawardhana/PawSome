<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <!-- Welcome Section -->
    <section class="text-center mb-12">
        <h1 class="text-4xl font-bold mb-4">Welcome to Pawsome Pet Care</h1>
        <p class="text-xl text-gray-600 mb-6">Where every pet's happiness starts with us!</p>
        <?php if(Route::has('login')): ?>
        <nav class="flex flex-1 justify-center gap-6">
            <?php if(auth()->guard()->check()): ?>
            <a
                href="<?php echo e(url('/home')); ?>"
                class="fixed-button ">
                Dashboard
            </a>
            <?php else: ?>
            <a
                href="<?php echo e(route('login')); ?>"
                class="fixed-button ">
                Log in
            </a>
            <?php if(Route::has('register')): ?>
            <a
                href="<?php echo e(route('register')); ?>"
                class="fixed-button">
                Register
            </a>
            <?php endif; ?>
            <?php endif; ?>
        </nav>
        <?php endif; ?>
    </section>
    <section class="mb-12">
        <img src="<?php echo e(asset('images/pup1.jpg')); ?>" alt="Dog on a couch" class="main-card" />
    </section>
    <!-- Featured Products -->
    <section class="mb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <div>
                <h2 class="text-2xl font-bold mb-4">Featured Products</h2>
                <p class="text-gray-600 mb-4">Discover top picks for your pet's happiness with our featured products!</p>
                <button class="fixed-button">Explore</button>
            </div>
            <div class="flex flex-col space-y-6">
                <img src="<?php echo e(asset('images/cattree.jpg')); ?>" alt="Cat tree" class="ft-card" />
                <img src="<?php echo e(asset('images/dogbed.jpg')); ?>" alt="Dog bed" class="ft-card" />
            </div>
        </div>
    </section>
    <!-- New Arrivals -->
    <section class="mb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <div>
                <h2 class="text-2xl font-bold mb-4">New Arrivals</h2>
                <p class="text-gray-600 mb-4">Discover our new picks to make your pet's life happier and healthier!</p>
                <button class="fixed-button">Explore</button>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <img src="<?php echo e(asset('images/harness.jpg')); ?>" alt="Pet harness" class="home-card" />
                <img src="<?php echo e(asset('images/toys.jpg')); ?>" alt="Pet toys" class="home-card" />
                <img src="<?php echo e(asset('images/catbag.webp')); ?>" alt="Pet accessories" class="home-card" />
                <img src="<?php echo e(asset('images/catdog.jpg')); ?>" alt="Pet playing" class="home-card" />
            </div>
        </div>
    </section>
    <!-- Reviews Section -->
    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-4">Reviews</h2>
        <p class="text-gray-600 mb-4">See what our happy customers are saying about Pawsome Pet Care!</p>
        <button class="fixed-button">Leave a review</button>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                <h3 class="font-semibold mb-2">Great Service!</h3>
                <p>We love Pawsome Pet Care! Our dog is always happy after visits.</p>
            </div>
            <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                <h3 class="font-semibold mb-2">Amazing Products</h3>
                <p>The toys we bought are durable and loved by our pets!</p>
            </div>
        </div>
    </section>
    <!-- Newsletter Subscription -->
    <section>
        <h2 class="text-2xl font-bold mb-4">Subscribe to our Newsletter</h2>
        <p class="text-gray-600 mb-4">Stay updated with the latest pet care tips and deals—subscribe to our newsletter!</p>
        <form class="flex">
            <input type="email" placeholder="E-mail" class="flex-grow p-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-r-lg hover:bg-green-600 transition duration-300">Subscribe</button>
        </form>
    </section>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sahangunawardhana/Downloads/SSP Submission/pawsome 2/resources/views/welcome.blade.php ENDPATH**/ ?>