<?php
// Define and assign a value to the $todo variable
$todo = App\Models\Todo::find(1);

?>


<?php $__env->startSection('content'); ?>
    <h1 class="text-2xl font-bold mb-4">Todo Details</h1>

    <div>
        <p class="text-gray-500"> $todo->created_at->diffStep 2: Create the index.blade.php file
Create an `index.blade.php` file in the `resources/views` directory. This file will display the list of todos.

```html


<?php $__env->startSection('content'); ?>
    <h1 class="text-2xl font-bold mb-4">Todo List</h1>
    
    <!-- Display flash messages -->
    <?php if(session('success')): ?>
        <div class="bg-green-200 text-green-800 p-2 mb-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Display todo list -->
    <ul class="space-y-2">
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="flex items-center">
                <span class="mr-2"><?php echo e($todo->title); ?></span>
                <form action="<?php echo e(route('todos.destroy', $todo->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="text-red-500">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <!-- Todo creation form -->
    <form action="<?php echo e(route('todos.store')); ?>" method="POST" class="mt-4">
        <?php echo csrf_field(); ?>
        <input type="text" name="title" placeholder="Enter todo title" class="border border-gray-400 rounded p-2 mr-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Todo</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MARK JOESAN GAMBOA\Desktop\CIT18_3G\Laravel_Final_Project\resources\views/todos/show.blade.php ENDPATH**/ ?>