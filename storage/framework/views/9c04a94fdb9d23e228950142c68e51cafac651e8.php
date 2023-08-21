<!DOCTYPE html>
<html lang="en" class="">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php echo SEO::generate(); ?>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title' ?? config('app.name')); ?></title>

    

    

    <link href="<?php echo e(mix('css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
    
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>

    <meta name="description" content="Adonis Abbey" />

    <meta property="og:url" content="https://adonis-abbey.com" />
    <meta property="og:site_name" content="JustBoil.me" />
    <meta property="og:title" content="Admin One HTML" />
    <meta property="og:description" content="Adonis Abbey" />
    <meta property="og:image" content="/img/logo.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="960" />

    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:title" content="Admin One HTML" />
    <meta property="twitter:description" content="Adoni Abbet publishing" />
    <meta property="twitter:image:src" content="logo.png" />
    <meta property="twitter:image:width" content="1920" />
    <meta property="twitter:image:height" content="960" />

    <style>
      [x-cloak] {
        display: none !important;
      }

      tr:nth-child(odd) td {
        background-color: #eef;
      }

      /* a.active,
      .confirmButton {
        color: white !important;
        background: #009933;
      } */
    </style>
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
  </head>

  <body>
    <div id="app" class="relative">
      <nav id="navbar-main" class="navbar is-fixed-top print:hidden">
        <div class="navbar-brand">
          <a class="navbar-item mobile-aside-button">
            <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
          </a>
          <div class="navbar-item">
            <div class="control">
              <p class="text-center text-xl capitalize"><?php echo e(greeting() . ', '); ?> <span
                  class="font-medium"><?php echo e(currentUser()->roles[0]->name); ?></span></p>
            </div>
          </div>
        </div>
        <div class="navbar-brand is-right">
          <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
            <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
          </a>
        </div>
        <div class="navbar-menu" id="navbar-menu">
          <div class="navbar-end">
            <div class="navbar-item dropdown has-divider has-user-avatar">
              <a class="navbar-link">
                <div class="user-avatar">
                  <img src="<?php echo e(asset('img/logo.png')); ?>" alt="<?php echo e(currentUser()->name); ?>" class="rounded-full" />
                </div>
                <div class="is-user-name"><span><?php echo e(currentUser()->name); ?></span></div>
                <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
              </a>
              <div class="navbar-dropdown">
                <a href="<?php echo e(route('profile')); ?>" class="navbar-item">
                  <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                      <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                  </span>
                  <span>My Profile</span>
                </a>
                <a class="navbar-item" href="/setting">
                  <span class="icon"><i class="mdi mdi-settings"></i></span>
                  <span>Settings</span>
                </a>
                <a class="navbar-item" href="/notifications">
                  <span class="icon"><i class="mdi mdi-email"></i></span>
                  <span>Messages</span>
                </a>
                <hr class="navbar-divider" />
                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                  class="navbar-item" href="<?php echo e(route('logout')); ?>">
                  <span class="icon"><i class="mdi mdi-logout"></i></span>
                  <span>Log Out</span>
                </a>
              </div>
              <form class="logout-form hidden" id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
              </form>
            </div>
            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Log out"
              class="navbar-item desktop-icon-only hover:text-secondary" href="<?php echo e(route('logout')); ?>">
              <span class="icon"><i class="mdi mdi-logout"></i></span>
              <span>Log out</span>
            </a>
          </div>
        </div>
      </nav>

      <aside class="aside is-placed-left is-expanded overflow-y-auto border-r bg-white">
        <div class="aside-tools bg-primary-light">
          <div class="mx-auto text-center font-black uppercase text-primary">
            Syc Technologies
          </div>
        </div>
        <div class="menu is-menu-main space-y-1 overflow-y-auto">
          
          <ul class="menu-list space-y-1">
            <li class="<?php echo e(request()->is('*/home') ? 'active' : ''); ?>">
              <a href="/">
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-speedometer" viewBox="0 0 16 16">
                    <path
                      d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                    <path fill-rule="evenodd"
                      d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
                  </svg>
                </span>
                <span class="menu-item-label">Dashboard</span>
              </a>
            </li>
            <li class="--set-active-profile-html <?php echo e(request()->is('profile') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('profile')); ?>">
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                </span>
                <span class="menu-item-label">Profile</span>
              </a>
            </li>
            <li class="--set-active-profile-html <?php echo e(request()->is('consultations/inventories') ? 'active' : ''); ?>">
              <a href="<?php echo e(route('inventories.index')); ?>">
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                    <path fill="currentColor"
                      d="M320 288v-22.336C320 154.688 405.504 64 512 64s192 90.688 192 201.664v22.4h131.072a32 32 0 0 1 31.808 28.8l57.6 576a32 32 0 0 1-31.808 35.2H131.328a32 32 0 0 1-31.808-35.2l57.6-576a32 32 0 0 1 31.808-28.8H320zm64 0h256v-22.336C640 189.248 582.272 128 512 128c-70.272 0-128 61.248-128 137.664v22.4zm-64 64H217.92l-51.2 512h690.56l-51.264-512H704v96a32 32 0 1 1-64 0v-96H384v96a32 32 0 0 1-64 0v-96z" />
                  </svg>
                </span>
                <span class="menu-item-label">Inventories</span>
              </a>
            </li>
          </ul>
          <p class="menu-label">Consultation</p>
          <ul class="menu-list space-y-1">
            <?php if(auth()->user()->hasRole('administrator')): ?>
            <li>
              <a class="dropdown <?php echo e(request()->is('consultations/*') ? 'active' : ''); ?>">
                <span class="icon">
                  <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                    <path fill="currentColor"
                      d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z" />
                  </svg>
                </span>
                <span class="menu-item-label">Consultations</span>
                <span class="icon"><i class="mdi mdi-plus"></i></span>
              </a>
              <ul class="bg-white">
                <li class="<?php echo e(request()->is('consultations/patients') ? 'active' : 'bg-white'); ?>">
                  <a href="<?php echo e(route('patients.index')); ?>" class="">
                    <span class="md:pl-8">Patients</span>
                  </a>
                </li>
                <li class="<?php echo e(request()->is('consultations/create') ? 'active' : 'bg-white'); ?>">
                  <a href="<?php echo e(route('consultations.create')); ?>" class="">
                    <span class="md:pl-8">Add Consultation</span>
                  </a>
                </li>
                <li class="<?php echo e(request()->is('consultations/records') ? 'active' : 'bg-white'); ?>">
                  <a href="<?php echo e(route('consultations.index')); ?>" class="">
                    <span class="md:pl-8">View Consultations</span>
                  </a>
                </li>
              </ul>
            </li>
            <?php else: ?>
            
            <?php endif; ?>
          </ul>

        </div>
      </aside>

      <main class="print:bg-white">
        <?php echo e($slot ?? ''); ?>

      </main>

      <footer class="footer w-full bg-primary-dark text-white print:hidden">
        <div class="flex flex-col items-center justify-between space-y-3 text-sm md:flex-row md:space-y-0">
          <div>
            <p>
              Designed and Developed:
              <a href="https://bowofade.com/" class="text-primary" target="_blank">Networker</a>
            </p>
          </div>


          <div class="flex items-center justify-start space-x-3 uppercase">
            <div>© All right reserved 2023 <?php echo e(config('app.name')); ?></div>
          </div>
        </div>
      </footer>

      <div
        class="fixed print:hidden bottom-12 left-4 z-50 max-w-max cursor-pointer rounded-3xl bg-purple-600 px-4 py-2 text-white">
        <a href="https://bowofade.com" target="_blank" class="text-sm">Contact me</a>
      </div>
    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="/js/main.min.js"></script>
    
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      // success message
    window.addEventListener('swal:success', function(e) {
      Swal.fire(e.detail);
    });


    window.addEventListener('redirectTo', function() {
      setTimeout(() => {
        Livewire.emit('redirectToConsultationPage');
      }, 5000);
    });

    window.addEventListener('swal:confirm', event => {
      Swal.fire({
        title: 'Are you sure?'
        , text: "You won\'t be able to revert this!"
        , icon: 'question'
        , showCancelButton: true
        , confirmButtonColor: '#0d2364'
        , cancelButtonColor: '#f11'
        , confirmButtonText: 'Yes delete it'
      }).then((result) => {
        if (result.isConfirmed) {
          Livewire.emit('deleteConfirm');
          // Swal.fire(
          //   'Deleted!'
          //   , 'Your file has been deleted'
          //   , 'success'
          // )
        }
      });
    });

    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    <script type="text/javascript" src="/js/chart.sample.min.js"></script>

    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->

    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css" />
    <?php echo $__env->yieldPushContent('scripts'); ?>
    
  </body>
  <?php echo $__env->yieldPushContent('scripts'); ?>

</html><?php /**PATH /Users/user/Documents/projects/hbs/resources/views/layouts/app.blade.php ENDPATH**/ ?>