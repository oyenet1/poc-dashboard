<div class="grid w-full gap-8 p-8 mx-auto xl:p-8 2xl:p-10 xl:gap-8 2xl:gap-10">

  <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4 xl:gap-8 2xl:gap-10">
    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8 = $component; } ?>
<?php $component = App\View\Components\Board::resolve(['color' => 'green-600','name' => ''.e($state->name).'','digit' => ''.e($state->services).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Board::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

      
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8)): ?>
<?php $component = $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8; ?>
<?php unset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
  <div class="">
    <div class="col-md-3">
      <span id="count1" class="display-4"></span>
    </div>
    <div class="col-md-3">
      <span id="count2" class="display-4"></span>
    </div>
    <div class="col-md-3">
      <span id="count3" class="display-4"></span>
    </div>
    <div class="col-md-3">
      <span id="count4" class="display-4"></span>
    </div>
  </div>
  <div class="grid gap-8 lg:grid-cols-2 xl:gap-8 2xl:gap-10">
    <div class="p-8 bg-white rounded shadow-sm col-span-2">
      <canvas id="myChart" class="w-full h-full"></canvas>
    </div>
    <div class="p-8 bg-white rounded shadow-sm col-span-2">
      <canvas id="pieChart" class="w-full h-full"></canvas>
    </div>
  </div>
  <div class="grid gap-8">
    <div class="p-8 bg-white rounded shadow-sm">
      <canvas id="lineChart" class="w-full h-full"></canvas>
    </div>
  </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
  var xValues = ["January"
  , "February"
  , "March"
  , "April"
  , "May"
  , "June"
  , "July"
  , "August"
  , "September"
  , "October"
  , "November"
  , "December"
 , ];
 var yValues = [55, 49, 44, 24, 15, 12, 56, 78, 5, 34, 67, 90];
 var barColors = "#199f47";

 new Chart("myChart", {
  type: "bar"
  , data: {
   labels: xValues
   , datasets: [{
    backgroundColor: barColors
    , data: yValues
   , }, ]
  , }
  , options: {
   title: {
    display: true
    , text: "<?php echo e(strtoupper('Consulatation data')); ?>"
   , },

  }
 , });

</script>
<script>
  var xValues = ["<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>"
  , "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>"
  , "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>"
 ];
 var yValues = [55, 49, 44, 24, 15, 12, 56, 78, 5, 34, 67, 90];
 var barColors = ["#199f47", '#f98677', '#f9f677', '#398677', '#a9ff77', '#398ff7'
  , "#b91d47"
  , "#00aba9"
  , "#2b5797"
  , "#e8c3b9"
  , "#1e7145"
 ];

 new Chart("pieChart", {
  type: "pie"
  , data: {
   labels: xValues
   , datasets: [{
    backgroundColor: barColors
    , data: yValues
   , }, ]
  , }
  , options: {
   title: {
    display: true
    , text: "<?php echo e(strtoupper('Sales peformance of author')); ?>"
   , },

  }
 , });

</script>
<script>
  //#region - start of - number counter animation
 const counterAnim = (qSelector, start = 0, end, duration = 2000) => {
  const target = document.querySelector(qSelector);
  let startTimestamp = null;
  const step = (timestamp) => {
   if (!startTimestamp) startTimestamp = timestamp;
   const progress = Math.min((timestamp - startTimestamp) / duration, 1);
   target.innerText = Math.floor(progress * (end - start) + start);
   if (progress < 1) {
    window.requestAnimationFrame(step);
   }
  };
  window.requestAnimationFrame(step);
 };
 //#endregion - end of - number counter animation

 document.addEventListener("DOMContentLoaded", () => {
  counterAnim("#count1", 10, 300, 1000);
  counterAnim("#count2", 5000, 250, 1500);
  counterAnim("#count3", -1000, -150, 2000);
  counterAnim("#count4", 500, -100, 2500);
 });

 var xValues = ["January"
  , "February"
  , "March"
  , "April"
  , "May"
  , "June"
  , "July"
  , "August"
  , "September"
  , "October"
  , "November"
  , "December"
 , ];

 new Chart("lineChart", {
  type: "line"
  , data: {
   labels: xValues
   , datasets: [{
    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478]
    , borderColor: "red"
    , fill: false
   }, {
    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000]
    , borderColor: "green"
    , fill: false
   }, {
    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100]
    , borderColor: "blue"
    , fill: false
   }]
  }
  , options: {
   legend: {
    display: false
   }
  }
 });

</script>
<?php $__env->stopPush(); ?><?php /**PATH /Users/user/Documents/projects/poc/resources/views/livewire/admin-dashboard.blade.php ENDPATH**/ ?>