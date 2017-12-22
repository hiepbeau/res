<style>
  #image{
    width: 586px;
    height: 437px;
  }
  #image img{
    width: 586px;
    height: 437px;
    border-radius: 4px;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php $__env->startSection('header_styles'); ?>
    <!--page level css -->
    <link href="<?php echo e(asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/select2/css/select2.min.css')); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/select2/css/select2-bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/iCheck/css/all.css')); ?>"  rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/pages/wizard.css')); ?>" rel="stylesheet">
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>Type Restaurant</h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                <?php echo app('translator')->get('general.dashboard'); ?>
            </a>
        </li>
        <li>Type Restaurants</li>
        <li class="active">
            Edit Type Restaurant
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="users-add" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit type restaurant
                    </h4>
                </div>
                <div class="panel-body">
                    <?php echo $errors->first('slug', '<span class="help-block">Another role with same slug exists, please choose another name</span> '); ?>

                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form class="form-horizontal" role="form" method="post" 
                       action="<?php echo e(url('admin/typerestaurants/create2/'.$loainhahang->id)); ?>" enctype="multipart/form-data" >
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

                       
                        
                        <!--Name-->
                        <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                Tên loại nhà hàng:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="tenlnh" name="tenlnh" class="form-control" 
                                value="<?php echo e($loainhahang->tenlnh); ?>">
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>
            
                       

                         <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                Ghi chú:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="ghichu" name="ghichu" class="form-control" 
                                value="<?php echo e($loainhahang->ghichu); ?>">
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>


                        
                        <!--button-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <a class="btn btn-danger" href="<?php echo e(route('admin.typerestaurants')); ?>">
                                    <?php echo app('translator')->get('button.cancel'); ?>
                                </a>
                                <button type="submit" class="btn btn-success">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <script src="<?php echo e(asset('assets/vendors/moment/js/moment.min.js')); ?>" ></script>
    <script src="<?php echo e(asset('assets/vendors/iCheck/js/icheck.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>"  type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/select2/js/select2.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/pages/edituser.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>