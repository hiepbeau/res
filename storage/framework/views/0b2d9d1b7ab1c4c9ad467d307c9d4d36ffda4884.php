<?php $__env->startSection('title'); ?>
    Josh Admin Template
    @parent
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>

    <link href="<?php echo e(asset('assets/vendors/fullcalendar/css/fullcalendar.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/pages/calendar_custom.css')); ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" media="all" href="<?php echo e(asset('assets/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/animate/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/pages/only_dashboard.css')); ?>"/>
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>">

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>Welcome to Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    Dashboard
                </a>
            </li>
        </ol>
    </section>
    <section class="content">
        
    </section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/moment/js/moment.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>"></script>

    <!-- EASY PIE CHART JS -->
    <script src="<?php echo e(asset('assets/vendors/bower-jquery-easyPieChart/js/easypiechart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/bower-jquery-easyPieChart/js/jquery.easypiechart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/bower-jquery-easyPieChart/js/jquery.easingpie.js')); ?>"></script>
    <!--for calendar-->
    <script src="<?php echo e(asset('assets/vendors/moment/js/moment.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/fullcalendar/js/fullcalendar.min.js')); ?>" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="<?php echo e(asset('assets/vendors/flotchart/js/jquery.flot.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/flotchart/js/jquery.flot.resize.js')); ?>" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="<?php echo e(asset('assets/vendors/sparklinecharts/jquery.sparkline.js')); ?>"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/countUp_js/js/countUp.js')); ?>"></script>
    <!--   maps -->
    <script src="<?php echo e(asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <!--  todolist-->
    <script src="<?php echo e(asset('assets/js/pages/todolist.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/dashboard.js')); ?>" type="text/javascript"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>