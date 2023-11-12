
<?php $__env->startSection('title', 'Ecommerce'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/chartist.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/prism.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<style>
    .avatar {
      vertical-align: middle;
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get('lang.Home'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.Home'); ?></li>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
  <script src="<?php echo e(asset('assets/js/chart/chartist/chartist.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/dashboard/dashboard_2.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('seller.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/seller/home.blade.php ENDPATH**/ ?>