<?php $__env->startSection('title'); ?>
Blank
@parent
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('top'); ?>
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('home')); ?>"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Blank Page</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Blank Page
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <!-- Container Section Start -->
    <div class="container">
        <!--Content Section Start -->
        <h2> &nbsp;&nbsp; write your content here</h2>
        <div style="height:350px;"></div>
        <!-- //Content Section End -->
    </div>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>