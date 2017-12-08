<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
    	<?php $__env->startSection('title'); ?>
        | Welcome to Josh Frontend
        <?php echo $__env->yieldSection(); ?>
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/lib.css')); ?>">
    <!--end of global css-->
    <!--page level css-->
    <?php echo $__env->yieldContent('header_styles'); ?>
    <!--end of page level css-->
</head>

<body>
    <!
    <header>
      
    </header>
    
    <?php echo $__env->yieldContent('top'); ?>

    <!-- Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer Section Start -->
    <footer>
        <div class="container footer-text">
            <!-- About Us Section Start -->
           </div>
    </footer>
    <!-- //Footer Section End -->
   
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/frontend/lib.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/frontend/style-switcher.js')); ?>" type="text/javascript"></script>
    <!--global js end-->
    <!-- begin page level js -->
    <?php echo $__env->yieldContent('footer_scripts'); ?>
    <!-- end page level js -->
</body>

</html>
