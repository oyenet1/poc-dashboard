<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sufee Admin - HTML5 Admin Template</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="/dashboard/vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/dashboard/vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/dashboard/vendors/themify-icons/css/themify-icons.css">
        <link rel="stylesheet" href="/dashboard/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="/dashboard/vendors/selectFX/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="/dashboard/vendors/jqvmap/dist/jqvmap.min.css">


        <link rel="stylesheet" href="/dashboard/assets/css/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    </head>

    <body>


        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand hidden" href="/">POC</a>
                    <a class="navbar-brand" href="/"><?php echo e(config('app.name')); ?></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/home"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        <h3 class="menu-title">Panel</h3>
                        <?php
                        $states =
                        \App\Models\ServiceModel::select('location')->distinct('location')->orderBy('location')->get();
                        ?>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>States</a>
                            <ul class="sub-menu children dropdown-menu">
                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="text-capitalize">
                                    <i class="fa fa-id-badge"></i>
                                    <a href="<?php echo e(route('state', $item->location)); ?>"><?php echo e($item->location); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        
                    </div>

                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="/dashboard/images/admin.jpg"
                                    alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span
                                        class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="nav-link" href="<?php echo e(route('logout')); ?>"><i class="fa fa-power-off"></i>
                                    Logout</a>
                            </div>
                            <form class="logout-form hidden d-none" id="logout-form" action="<?php echo e(route('logout')); ?>"
                                method="POST">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <a href="<?php echo e(route('dashboard')); ?>" class="page-title">
                            <h1>Dashboard</h1>
                        </a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active"><?php echo e(Route::currentRouteName()); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->yieldContent('contents'); ?>
            <?php echo e($slot ?? ''); ?> <!-- .content -->
        </div>

        <!-- Right Panel -->

        <script src="/dashboard/vendors/jquery/dist/jquery.min.js"></script>
        <script src="/dashboard/vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="/dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/dashboard/assets/js/main.js"></script>


        <script src="/dashboard/vendors/chart.js/dist/Chart.bundle.min.js"></script>
        <script src="/dashboard/assets/js/dashboard.js"></script>
        <script src="/dashboard/assets/js/widgets.js"></script>
        <script src="/dashboard/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="/dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <script src="/dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script>
            (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
        </script>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>

</html><?php /**PATH /Users/user/Documents/projects/poc/resources/views/layouts/dashboard.blade.php ENDPATH**/ ?>