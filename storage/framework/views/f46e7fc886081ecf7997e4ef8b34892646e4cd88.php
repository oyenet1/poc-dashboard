<div class="w-full rounded bg-white p-4 md:px-6 py-4 lg:p shadow relative overflow-hidden">
    <div class="flex justify-between w-full">
        <div class="">
            <p class="text-lg xl:text-xl  capitalize text-gray-400"><?php echo e($name); ?></p>
            <h1 class="text-xl lg:text-2xl  text-primary-dark font-medium font-poppin">
                <?php if($money): ?>
                <span>&pound</span>
                <?php endif; ?>
                <?php echo e($digit); ?>

            </h1>
        </div>
        <div class="text-<?php echo e($color); ?> rounded p-2 ">
            <span class="bg-<?php echo e($color); ?>">
                <?php echo e($slot); ?>

            </span>
        </div>
    </div>
    
</div><?php /**PATH /Users/user/Documents/projects/hbs/resources/views/components/board.blade.php ENDPATH**/ ?>