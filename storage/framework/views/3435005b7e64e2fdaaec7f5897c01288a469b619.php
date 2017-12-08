<?php $__env->startSection('title'); ?>
Home
@parent
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/tabbular.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/animate/animate.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/jquery.circliful.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/owl_carousel/css/owl.carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/owl_carousel/css/owl.theme.css')); ?>">
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('top'); ?>
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="<?php echo e(asset('assets/images/slide_1.jpg')); ?>" alt="slider-image">
        </div>
        <div class="item"><img src="<?php echo e(asset('assets/images/slide_2.jpg')); ?>" alt="slider-image">
        </div>
        <div class="item"><img src="<?php echo e(asset('assets/images/slide_3.jpg')); ?>" alt="slider-image">
        </div>
    </div>
    <!-- //Carousel End -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        
        <!-- //Our Skills End -->
    </div>
    <!-- //Container End -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <!-- page level js starts-->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/frontend/jquery.circliful.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/wow/js/wow.min.js')); ?>" ></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/owl_carousel/js/owl.carousel.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/frontend/carousel.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/frontend/index.js')); ?>"></script>
    <!--page level js ends-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>