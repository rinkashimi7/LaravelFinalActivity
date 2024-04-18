<?php $__env->startSection('content'); ?>
<head>
    <!-- Other meta tags, styles, and scripts -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet"> <!-- Include your styles.css file -->
    <?php echo $__env->yieldPushContent('styles'); ?> <!-- Include additional stylesheets -->
</head>
<div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="text-center">
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                <?php echo e(__('Login')); ?>

            </h2>
        </div>
        <div class="mt-8 bg-white py-8 px-6 shadow rounded-lg sm:px-10">
            <form class="space-y-6" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        <?php echo e(__('Email Address')); ?>

                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        <?php echo e(__('Password')); ?>

                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            <?php echo e(__('Remember me')); ?>

                        </label>
                    </div>
                    <?php if(Route::has('password.request')): ?>
                    <div class="text-sm">
                        <a href="<?php echo e(route('password.request')); ?>" class="font-medium text-indigo-600 hover:text-indigo-500">
                            <?php echo e(__('Forgot your password?')); ?>

                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <?php echo e(__('Login')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MARK JOESAN GAMBOA\Desktop\CIT18_3G\Laravel_Final_Project\resources\views/auth/login.blade.php ENDPATH**/ ?>