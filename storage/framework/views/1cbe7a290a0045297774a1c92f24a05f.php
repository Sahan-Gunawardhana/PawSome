<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">

    <section class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">Explore Our Services</h2>
        <p class="text-xl text-gray-600 mb-6">Tailored solutions for your pet's every need, from personalized care to convenient subscription plans.</p>
    </section>


    <section class="mb-12">
        <img src="<?php echo e(asset('images/grooming.jpg')); ?>" alt="Dog on a couch" class="main-card" />
    </section>

    <div class="grid gap-8">

        <div class=" p-6 rounded-lg flex md:flex-row flex-col items-start text-start">
            <div class="md:w-2/3 w-full pr-4">
                <h2 class="text-2xl font-bold mb-4">Pawsome Doggy Daycare</h2>
                <p class="text-gray-600 mb-4">Your dog's home away from home, filled with fun, friends, and expert care!</p>
                <button class="fixed-button">Explore</button>
            </div>
            <div class="md:w-1/3 w-full mt-4 md:mt-0">
                <img src="<?php echo e(asset('images/daycare.jpg')); ?>" alt="Doggy daycare" class="ft-card">
            </div>
        </div>

        <div class=" p-6 rounded-lg flex md:flex-row flex-col items-start">
            <div class="md:w-2/3 w-full pr-4">
                <h2 class="text-2xl font-bold mb-4">Pawsome Veterinary Care</h2>
                <p class="text-gray-600 mb-4">Expert care to keep your pet healthy, happy, and thriving!</p>
                <button class="fixed-button">Explore</button>
            </div>
            <div class="md:w-1/3 w-full mt-4 md:mt-0">
                <img src="<?php echo e(asset('images/catto.jpg')); ?>" alt="Veterinary care" class="ft-card">
            </div>
        </div>
    </div>

    <div class="mt-10">
        <h1 class="text-2xl font-bold mb-6">Book a Daycare Reservation</h1>
        <form action="<?php echo e(route('user.book')); ?>" method="POST" class=" p-6 rounded-lg shadow-md">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label for="pet_name" class="block text-gray-700">Pet Name</label>
                <input type="text" id="pet_name" name="pet_name" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none" />
                <?php $__errorArgs = ['pet_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label for="drop_off_date" class="block text-gray-700">Drop-Off Date</label>
                <input type="date" id="drop_off_date" name="drop_off_date" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none" />
                <?php $__errorArgs = ['drop_off_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div class="mb-4">
                <label for="pick_up_date" class="block text-gray-700">Pick-Up Date</label>
                <input type="date" id="pick_up_date" name="pick_up_date" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none" />
                <?php $__errorArgs = ['pick_up_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description (optional)</label>
                <textarea id="description" name="description" rows="4" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none"></textarea>
            </div>

            <div class="mb-4">
                <button type="submit" class="fixed-button">
                    Confirm
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sahangunawardhana/Downloads/SSP Submission/pawsome 2/resources/views/appointment.blade.php ENDPATH**/ ?>