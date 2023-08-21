<div class="w-full">
    
    <input
        <?php echo e($attributes->merge(['class' => 'w-full border-0 bg-gray-100 shadow-sm placeholder-gray-500 text-dark rounded-lg py-3 focus:border-1 focus:border-primary focus:outline-none placeholder-font-normal focus:bg-primary-light tt focus:ring-0 focus:border-secondary', 'type' => $type, 'name' => $name, 'id' => $name, 'placeholder'=> $label])); ?> />
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="mb-2 text-red-600 text-sm pt-2"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div><?php /**PATH /Users/user/Documents/projects/hbs/resources/views/components/text-input.blade.php ENDPATH**/ ?>