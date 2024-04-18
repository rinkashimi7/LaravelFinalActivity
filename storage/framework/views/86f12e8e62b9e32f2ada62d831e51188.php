<?php $__env->startSection('content'); ?>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <h1 class="text-center text-xl font-bold"><?php echo e(__('Dashboard')); ?></h1>
                    </div>
                    <div class="text-center">
                        <?php if(session('status')): ?>
                            <div class="bg-green-500 text-white font-bold rounded-md p-4 mb-4">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <p><?php echo e(__('You are logged in!')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('todos.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MARK JOESAN GAMBOA\Desktop\CIT18_3G\Laravel_Final_Project\resources\views/home.blade.php ENDPATH**/ ?>