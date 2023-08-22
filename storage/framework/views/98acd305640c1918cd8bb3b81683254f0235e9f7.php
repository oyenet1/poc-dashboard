<div class="content mt-3">

  


  <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-sm-6 col-lg-3">
    <div class="card text-white <?php echo e('bg-flat-color-'. random_int(1,7)); ?>">
      <div class="card-body pb-0">
        <div class="dropdown float-right">
          <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
            id="dropdownMenuButton1" data-toggle="dropdown">
            <i class="fa fa-cog"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="dropdown-menu-content">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <h4 class="mb-0">
          <span class="count"><?php echo e($state->services); ?></span>
        </h4>
        <p class="text-light"><?php echo e($state->name); ?></p>

        <div class="chart-wrapper px-0" style="height:70px;" height="70">
          <canvas id="<?php echo e('widgetChart'. getIndex($key+1)); ?>"></canvas>
        </div>

      </div>

    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /Users/user/Documents/projects/poc/resources/views/livewire/admin-dashboard.blade.php ENDPATH**/ ?>