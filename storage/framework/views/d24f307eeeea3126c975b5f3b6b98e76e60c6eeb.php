<!DOCTYPE html>
<html lang="en"  dir="<?php echo e((App::getLocale() == 'en') ? 'ltr' : 'rtl'); ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <title>Gama3yat</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <?php echo $__env->make('layouts.simple.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('style'); ?>
  </head>
  <body class="<?php echo e($_COOKIE['theme']??"default"); ?>">
  
    <?php if(true): ?> 
      <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
          <defs></defs>
          <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
          </filter>
        </svg>
      </div>
     <?php endif; ?>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php echo $__env->make('seller.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php echo $__env->make('seller.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">        
            <div class="page-title">
              <div class="row">

                  <?php if(Session::has('success')): ?>
                    <div class="alert alert-success dark alert-dismissible fade show" role="alert"><strong><?php echo e(Session::get('success')); ?> </strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>    </div>
                  <?php endif; ?>
                    <?php if($errors->any()): ?>
                      <div class="alert alert-danger">
                          <ul>
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                      </div>
                    <?php endif; ?>
             
                <div class="col-6">
                  <?php echo $__env->yieldContent('breadcrumb-title'); ?>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('seller.home')); ?>"> <i data-feather="home"></i></a></li>
                    <?php echo $__env->yieldContent('breadcrumb-items'); ?>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <?php echo $__env->yieldContent('content'); ?>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?php echo $__env->make('seller.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        
      </div>
    </div>
    <!-- latest jquery-->
    <?php echo $__env->make('seller.layout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
    <!-- Plugin used-->

    <script type="text/javascript">
      if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
            $(".according-menu.other" ).css( "display", "none" );
            $(".sidebar-submenu" ).css( "display", "block" );
      }
    </script>
  </body>
</html><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/seller/layout/master.blade.php ENDPATH**/ ?>