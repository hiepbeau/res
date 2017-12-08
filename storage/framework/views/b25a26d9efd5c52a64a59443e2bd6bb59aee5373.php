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
        <h2> &nbsp;&nbsp; Danh sách nhà trọ</h2>
         <h2> &nbsp;&nbsp; Xem trên Gmap: ĐHKHTN</h2>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.915551781954!2d105.805770314358!3d20.99602199427225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbf0df2c0e5%3A0xd740a66998e1a0ed!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6pu!5e0!3m2!1svi!2s!4v1508406944494" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        

        <div style="height:350px;"></div>


        <!-- //Content Section End -->
    </div>


    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>