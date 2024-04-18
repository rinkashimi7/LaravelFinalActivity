<?php $__env->startSection('content'); ?>
    <h1 class="text-2xl font-bold mb-4">Create Todo</h1>

    <!-- Todo creation form -->
    <form action="<?php echo e(route('todos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="title" placeholder="Enter todo title" class="border border-gray-400 rounded p-2 mb-2">
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-red-500"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Todo</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MARK JOESAN GAMBOA\Desktop\CIT18_3G\Laravel_Final_Project\resources\views/todos/create.blade.php ENDPATH**/ ?>