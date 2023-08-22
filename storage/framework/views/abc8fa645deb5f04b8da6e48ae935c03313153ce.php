<div class="content mt-3 w-full">
    <div class="w-full mb-3 px-3">
        <p class=" text-capitalize rounded text-dark px-3 font-weight-bold bg-white p-3 shadow-sm"
            style="font-size:24px; display:flex; align-items:center; justify-content:space-between;">
            <span><?php echo e($state->location . ' State'); ?>

                services
                statistics</span>
            <span class="rounded bg-success text-white p-2" style="font-size:20px;"><?php echo e($total); ?></span>
        </p>
    </div>
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-6 col-lg-3 overflow-hidden">
        <div class="card rounded overflow-hidden">
            <div class="card-body text-white <?php echo e('bg-flat-color-'.$key+1); ?>">
                <p class="font-medium text-white font-weight-bold" style="font-size: 25px"><?php echo e($service->number); ?></p>
                <p class=" text-white" style="line-height: 100%; font-size:18px">
                    <?php echo e(getServiceName($service->serviceCode)); ?>

                </p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="w-full my-3 px-3 col-12">
        <div class="p-3 bg-white rounded">
            <p class=" text-dark font-weight-bold"
                style="font-size:24px; display:flex; align-items:center; justify-content:space-between;">
                <span>
                    Yearly Stats</span>
                <span class="rounded p-2" style="font-size:20px;">Total: <?php echo e($total); ?></span>
                
            </p>
            <div class="">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script>
    var xValues = ["January", "February", "March", "April", "May", "June", "July", "August", "Septemper", "October", "November", "December"];
 var yValues = <?php echo e(json_encode(returnArr($months))); ?>;
 var barColors = ["red", "green", "blue", "orange","red", "green", "blue", "orange","red", "green", "blue", "orange"];

 new Chart("myChart", {
  type: "bar"
  , data: {
   labels: xValues
   , datasets: [{
    backgroundColor: barColors
    , data: yValues
   }]
  }
  , options: {
   legend: {
    display: false
   }
   , title: {
    display: true
    , text:  "Service Rendered by Month",
   }
  }
 });

</script>
<?php $__env->stopPush(); ?><?php /**PATH /Users/user/Documents/projects/poc/resources/views/livewire/states.blade.php ENDPATH**/ ?>