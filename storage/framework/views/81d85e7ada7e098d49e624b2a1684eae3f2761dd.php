<div class="grid w-full gap-8 p-8 mx-auto xl:p-8 2xl:p-10 xl:gap-8 2xl:gap-10">

  <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4 xl:gap-8 2xl:gap-10">
    <?php if (isset($component)) { $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8 = $component; } ?>
<?php $component = App\View\Components\Board::resolve(['color' => 'blue-500','name' => 'Inventories','digit' => ''.e(\App\Models\Inventory::count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Board::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
      <svg xmlns="http://www.w3.org/2000/svg" class="2xl:w-8 2xl:h-8 w-6 h-6" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M3 21h18M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16" />
          <path d="M9 21v-4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4M10 9h4m-2-2v4" />
        </g>
      </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8)): ?>
<?php $component = $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8; ?>
<?php unset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8 = $component; } ?>
<?php $component = App\View\Components\Board::resolve(['color' => 'blue-500','name' => 'In Patients','digit' => ''.e(\App\Models\Patient::where('status', 'in-patient')->count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Board::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
      <svg xmlns="http://www.w3.org/2000/svg" class="2xl:w-8 2xl:h-8 w-6 h-6 text-pink-600" viewBox="0 0 32 32">
        <path fill="currentColor"
          d="M25 16h-8a2.002 2.002 0 0 0-2 2v6H4V14H2v16h2v-4h24v4h2v-9a5.006 5.006 0 0 0-5-5Zm3 8H17v-6h8a3.003 3.003 0 0 1 3 3Z" />
        <path fill="currentColor"
          d="M9.5 17A1.5 1.5 0 1 1 8 18.5A1.502 1.502 0 0 1 9.5 17m0-2a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 9.5 15zM21 6h-4V2h-2v4h-4v2h4v4h2V8h4V6z" />
      </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8)): ?>
<?php $component = $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8; ?>
<?php unset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8 = $component; } ?>
<?php $component = App\View\Components\Board::resolve(['color' => 'purple-600','name' => 'Out Patients','digit' => ''.e(\App\Models\Patient::where('status', 'out-patient')->count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Board::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
      <svg xmlns="http://www.w3.org/2000/svg" class="2xl:w-8 2xl:h-8 w-6 h-6" viewBox="0 0 48 48">
        <mask id="ipTHospitalFour0">
          <g fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4">
            <path fill="#555" d="M4 8a2 2 0 0 1 2-2h20a2 2 0 0 1 2 2v34H6a2 2 0 0 1-2-2V8Z" />
            <path d="M21 42v-9a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3v9" />
            <path fill="#555" d="M28 24h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H28V24Z" />
            <path stroke-linecap="round" d="M12 18h8m14 12h4m-4 6h4M16 14v8M7 42h18" />
          </g>
        </mask>
        <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipTHospitalFour0)" />
      </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8)): ?>
<?php $component = $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8; ?>
<?php unset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8 = $component; } ?>
<?php $component = App\View\Components\Board::resolve(['color' => 'green-600','name' => 'patients','digit' => ''.e(\App\Models\Patient::count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Board::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-journal-richtext 2xl:w-8 2xl:h-8"
        viewBox="0 0 16 16">
        <path
          d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
        <path
          d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
        <path
          d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
      </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8)): ?>
<?php $component = $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8; ?>
<?php unset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8); ?>
<?php endif; ?>
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
<?php $__env->stopPush(); ?><?php /**PATH /Users/user/Documents/projects/hbs/resources/views/livewire/admin-dashboard.blade.php ENDPATH**/ ?>