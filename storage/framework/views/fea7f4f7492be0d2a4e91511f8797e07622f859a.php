<div
    class="max-w-4xl print:m-0 rounded bg-white border space-y-6 md:space-y-8 gap-4 md:gap-8 my-4 md:my-8 w-full mx-auto p-4">
    <div class="flex justify-between">
        <img src="<?php echo e(asset('img/logo.png')); ?>" alt="<?php echo e($invoice->patient->name); ?>"
            class="inline-block rounded-lg bg-white w-32 h-32 object-cover border">
        <div class="flex flex-col space-y-4">
            <h1 class="text-xl font-medium capitalize">Syc-Tech Hospital Invoice</h1>
            <div class="w-[200px] text-sm ml-auto">
                <p class="flex  justify-between">
                    <span class="text-gray-500">Invoice No:</span>
                    <span><?php echo e('00'. $invoice->id); ?></span>
                </p>
                <p class="flex  justify-between">
                    <span class="text-gray-500">Invoice Date:</span>
                    <span><?php echo e($invoice->visited_at->format('d M, y')); ?></span>
                </p>
                <p class="flex  justify-between">
                    <span class="text-gray-500">Due Date:</span>
                    <span><?php echo e($invoice->checkout_at->format('d M, y')); ?></span>
                </p>
                <p class="flex  justify-between">
                    <span class="text-gray-500">Status:</span>
                    <span
                        class="px-2 py-1 rounded text-white uppercase text-xs <?php echo e($invoice->status == "unpaid" ? 'bg-red-600': 'bg-green-600'); ?>"><?php echo e($invoice->status); ?></span>
                </p>
            </div>
        </div>
    </div>
    <div class="flex justify-between">
        <div class="space-y-3">
            <p class="font-medium">From</p>
            <p class="text-lg font-medium capitalize"><?php echo e(config('app.name')); ?></p>
            <div class="max-w-[250px] space-y-1 first-letter:capitalize">
                <p>info@bowofade.com</p>
                <p><?php echo e(config('app.url')); ?></p>
                <p>+2347065720177</p>
                <address class="">Plot 42a idanre hill street, off Agulu-lake Maitama, Abuja</address>
            </div>
        </div>
        <div class="space-y-3">
            <p class="font-medium">Bill To</p>
            <h1 class="text-lg font-medium capitalize"><?php echo e($invoice->patient->name); ?></h1>
            <div class="max-w-[240px] space-y-1 first-letter:capitalize">
                <p><?php echo e($invoice->patient->email); ?></p>
                <p><?php echo e($invoice->patient->phone); ?></p>
                <address class="">
                    <?php echo e($invoice->patient->address . ', '. $invoice->patient->state . ', '. $invoice->patient->nationality); ?>

                </address>
            </div>
        </div>
    </div>
    <table class="w-full">
        <thead>
            <tr class="bg-primary">
                <th class="p-2 text-white">S/N</th>
                <th class="p-2 text-white">Description</th>
                <th class="p-2 text-white">Unit(#)</th>
                <th class="p-2 text-white">Quantity</th>
                <th class="p-2 text-white">Total(#)</th>
            </tr>
        </thead>
        <tbody class="text-sm">
            <tr class="first-letter:capitalize">
                <td> 1 </td>
                <td class="first-letter:capitalize"><?php echo e($invoice->purpose .'(Consulation fee)'); ?></td>
                <td class="first-letter:capitalize"><?php echo e(moneyFormat($invoice->fee)); ?></td>
                <td class="first-letter:capitalize">nil</td>
                <td class="first-letter:capitalize"><?php echo e(moneyFormat($invoice->fee)); ?></td>
            </tr>
            <?php $__currentLoopData = $invoice->inventories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="first-letter:capitalize">
                <td class="first-letter:capitalize"><?php echo e($loop->iteration + 1); ?></td>
                <td class="first-letter:capitalize"><?php echo e($item->name . ' ('. $item->category. ')'); ?></td>
                <td class="first-letter:capitalize"><?php echo e(moneyFormat($item->price)); ?></td>
                <td class="first-letter:capitalize"><?php echo e($item->pivot->quantity); ?></td>
                <td class="first-letter:capitalize"><?php echo e(moneyFormat($item->price * $item->pivot->quantity)); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot class="bg-blue-100 my-3">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="mt-2 p-2 border-b-2 border-black">

                <th></th>
                <th></th>
                <th></th>
                <th class="p-3 border-y-2 border-black">Total</th>
                <th class="p-3 border-y-2 border-black">
                    <?php echo e('#'.moneyFormat(totalConsultationFee($invoice->inventories, $invoice->fee))); ?>

                </th>
            </tr>
        </tfoot>
    </table>
    <div class="flex justify-between">
        <div>

        </div>
        <div class="">
            <p class="flex">

            </p>
        </div>
    </div>
</div><?php /**PATH /Users/user/Documents/projects/hbs/resources/views/livewire/consultation/show.blade.php ENDPATH**/ ?>