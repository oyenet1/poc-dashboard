<div class="content mt-3">

  


  <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-sm-6 col-lg-3">
    <a href="<?php echo e(route('state', $state->name)); ?>" class="card text-white <?php echo e('bg-flat-color-'. random_int(1,7)); ?>">
      <div class="card-body pb-0">
        <div class="dropdown float-right">
          <span><?php echo e($state->name); ?></span>
        </div>
        <h4 class="mb-0">
          <span class="count"><?php echo e($state->services); ?></span>
        </h4>
        <div class="w-100 py-4" style="font-size: 18px; text-wrap:nowrap; font-weight:500">Vehicles</div>

        
  </div>
  </a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="p-3 w-100">
  <div class="col-sm-12 rounded bg-white p-2">
    <canvas id="myChart"></canvas>
  </div>
</div>

</div>

<?php $__env->startPush('scripts'); ?>
<script>
  var xValues = <?php echo e(\Illuminate\Support\Js::from($stateName)); ?>;
  var yValues = <?php echo e(json_encode($values)); ?>;
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#ae7145",
  "#1eff45",
  "#1e71qe",
  "#1e7145",
  "#abc145",
  "#35a145",
  "#bea45",
  "#1e71f5",
  "#a37145",
  "#1e7145",
  "#1eff89",
  "#1e7145",
  "#1e7145",
  "#1ec714",
  "#1e71ff",
  "#1f7e45",
  "#1e5645",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "VEHICLES ACCROSS THE 36 STATES IN NIGERIA"
    }
  }
});
</script>
<?php $__env->stopPush(); ?><?php /**PATH /Users/user/Documents/projects/poc/resources/views/livewire/admin-dashboard.blade.php ENDPATH**/ ?>