<div class="flex flex-col w-full mx-auto gap-8 p-8 xl:p-8 2xl:p-10 xl:gap-8 2xl:gap-10">
    <div class="flex items-center justify-between ">
        <div class="flex items-center space-x-6">
            <h1 class="text-3xl font-semibold capitalize text-primary">Consultations</h1>
            <?php if($checked): ?>
            <button class="font-normal btn btn-secondary">Select All <?php echo e(count($checked)); ?></button>
            <?php if (isset($component)) { $__componentOriginalca4b7e2f09e5ad5415b43e272fc9059625686028 = $component; } ?>
<?php $component = App\View\Components\Button\BulkDelete::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.bulk-delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button\BulkDelete::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca4b7e2f09e5ad5415b43e272fc9059625686028)): ?>
<?php $component = $__componentOriginalca4b7e2f09e5ad5415b43e272fc9059625686028; ?>
<?php unset($__componentOriginalca4b7e2f09e5ad5415b43e272fc9059625686028); ?>
<?php endif; ?>
            <?php else: ?>
            <a href="<?php echo e(route('consultations.create')); ?>"
                class="text-sm btn btn-primary tt text-normal capitalize">Create
                Consultation</a>
            <?php endif; ?>

        </div>

        
        <div class="flex items-center space-x-6">
            <?php if (isset($component)) { $__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65 = $component; } ?>
<?php $component = App\View\Components\Search::resolve(['name' => 'consultations'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Search::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65)): ?>
<?php $component = $__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65; ?>
<?php unset($__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65); ?>
<?php endif; ?>
        </div>
    </div>

    
    <div class="w-full px-4 pb-4 overflow-x-auto bg-white rounded-lg shadow-sm">
        <?php if(\App\Models\Consultation::count() > 0): ?>
        <table class="w-full space-y-2 overflow-x-auto whitespace-nowrap">
            <thead class="w-full pb-4 text-xl border-b">
                <tr class="font-medium">
                    <th class="p-2 whitespace-nowrap"></th>
                    <th class="p-2 text-lg font-medium text-left">Patient Name</th>
                    <th class="p-2 text-lg font-medium text-left">Charges</th>
                    <th class="p-2 text-lg font-medium text-center">Status</th>
                    <th class="p-2 text-lg font-medium text-left">Date Visited</th>
                    <th class="p-2 text-lg font-medium">Checkout Date</th>
                    <th class="p-2"></th>
                </tr>
            </thead>
            <tbody class="w-full overflow-x-auto break-normal">
                <?php $__empty_1 = true; $__currentLoopData = $consultations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="">
                    <td class="p-2 whitespace-nowrap">
                        <input type="checkbox" wire:model="checked" id="" value="<?php echo e($consultation->id); ?>"
                            class="block rounded whitespace-nowrap text-primary focus:outline-none focus:ring-primary">
                    </td>
                    <td class="p-2 whitespace-nowrap capitalize">
                        <?php echo e($consultation->patient->name); ?>

                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <span class="py-1 px-2 rounded text-sm"> &#8358;
                            <?php echo e(moneyFormat(totalConsultationFee($consultation->inventories, $consultation->fee))); ?></span>
                    </td>
                    <td class="p-2 text-black text-center items-center text-sm capitalize">
                        <?php if($consultation->status == 'unpaid'): ?>
                        <span class="text-red-600 inline-block animate-spin">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q3.35 0 5.675-2.325T20 12q0-1.6-.6-3.075t-1.725-2.6L12 12V4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20Z" />
                            </svg>
                        </span>
                        <?php else: ?>
                        <span class="text-green-600 inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68L23 12m-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8Z" />
                            </svg>
                        </span>
                        <?php endif; ?>
                    </td>

                    <td class="p-2 whitespace-nowrap text-sm">
                        <?php echo e($consultation->visited_at->diffForhumans()); ?>

                    </td>
                    <td class="p-2 whitespace-nowrap text-center text-sm">
                        <?php echo e($consultation->checkout_at->format('D d, M, y')); ?>

                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <div class="flex space-x-2 item-center">
                            <a href="<?php echo e(route('consultations.invoice', [$consultation->id])); ?>"
                                class="w-8 h-8 p-[5px] text-white border bg-blue-600 rounded-md cursor-pointer tt">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M6.5 20q-2.28 0-3.89-1.57Q1 16.85 1 14.58q0-1.95 1.17-3.48q1.18-1.53 3.08-1.95q.43-1.8 2.13-3.42Q9.07 4.1 11 4.1q.83 0 1.41.59q.59.59.59 1.41v6.05l1.6-1.55L16 12l-4 4l-4-4l1.4-1.4l1.6 1.55V6.1q-1.9.35-2.95 1.84Q7 9.43 7 11h-.5q-1.45 0-2.47 1.03Q3 13.05 3 14.5q0 1.45 1.03 2.5q1.02 1 2.47 1h12q1.05 0 1.77-.73q.73-.72.73-1.77t-.73-1.77Q19.55 13 18.5 13H17v-2q0-1.2-.55-2.24Q15.9 7.73 15 7V4.68q1.85.87 2.93 2.58Q19 9 19 11q1.73.2 2.86 1.5q1.14 1.28 1.14 3q0 1.88-1.31 3.19T18.5 20M12 11.05Z" />
                                </svg>
                            </a>
                            <span wire:click="pay(<?php echo e($consultation->id); ?>)"
                                class=" py-1 px-2 text-sm bg-green-600 border text-white rounded-md cursor-pointer tt ">
                                Pay
                            </span>
                            <span wire:click="edit(<?php echo e($consultation->id); ?>)"
                                class="w-8 h-8 p-1 text-blue-600 border border-blue-600 rounded-md cursor-pointer tt hover:-translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM4 21q-.425 0-.713-.288T3 20v-2.825q0-.2.075-.388t.225-.337l10.3-10.3l4.25 4.25l-10.3 10.3q-.15.15-.337.225T6.825 21H4Z" />
                                </svg>
                            </span>
                            <span wire:click="confirmDelete(<?php echo e($consultation->id); ?>)"
                                class="w-8 h-8 p-2 text-red-600 border border-red-600 rounded-md cursor-pointer tt hover:-translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </span>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h1 class="text-2xl font-bold">No records found in the database</h1>
                <?php endif; ?>
            </tbody>
        </table>

        
        <div class="mt-4">
            <?php if (isset($component)) { $__componentOriginala92867a63cc99f913cc00bd4a076c82864c7ddf2 = $component; } ?>
<?php $component = App\View\Components\PerPage::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('per-page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PerPage::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php echo e($consultations->links()); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala92867a63cc99f913cc00bd4a076c82864c7ddf2)): ?>
<?php $component = $__componentOriginala92867a63cc99f913cc00bd4a076c82864c7ddf2; ?>
<?php unset($__componentOriginala92867a63cc99f913cc00bd4a076c82864c7ddf2); ?>
<?php endif; ?>
        </div>
        <?php else: ?>
        <div class="p-8 text-center">
            <p class="font-medium text-xl">No consultation yet, add consultations to the system</p>
        </div>
        <?php endif; ?>
    </div>
</div><?php /**PATH /Users/user/Documents/projects/hbs/resources/views/livewire/consultation/index.blade.php ENDPATH**/ ?>