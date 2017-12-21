<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('admin/groups/title.create'); ?>
    @parent
<?php $__env->stopSection(); ?>
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
    <h1>
        <?php echo app('translator')->get('groups/title.create'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                <?php echo app('translator')->get('general.dashboard'); ?>
            </a>
        </li>
        <li>restaurants</li>
        <li class="active">
            Edit Restaurant
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
                        Create new Restaurant
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
                       action="<?php echo e(url('admin/restaurants/create2/'.$nhahang->id)); ?>" enctype="multipart/form-data" >
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

                         <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                Loại nhà hàng:
                            </label>
                            <div class="col-sm-5">
                                <select class="form-control" name="loainhahang">
                                    <?php $__currentLoopData = $loainhahang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option
                                        <?php if($nhahang->idloainhahang==$i->id): ?>
                                        <?php echo e("selected"); ?>

                                        <?php endif; ?>
                                         value="<?php echo e($i->id); ?>">
                                         <?php echo e($i->tenlnh); ?>

                                         </option>

                                        }
                                        }
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>
                        
                        <!--Name-->
                        <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                Name:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="ten" name="ten" class="form-control" 
                                value="<?php echo e($nhahang->ten); ?>">
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>
            
                        <!--Image-->
                        <div class="form-group <?php echo e($errors->first('pic_file', 'has-error')); ?>">
                            <label for="pic" class="col-sm-2 control-label">Profile picture</label>
                                <div class="col-sm-10">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="<?php echo e(URL::to('/uploads/restaurants/'.$nhahang->image)); ?>" alt="profile pic">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 500px; max-height: 500px;"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <!--Take data here-->
                                            <input id="pic" name="pic_file" type="file" class="form-control"
                                            value="" />
                                            </span>
                                            <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    <span class="help-block"><?php echo e($errors->first('pic_file', ':message')); ?></span>
                                </div>
                        </div>

                         <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                Địa chỉ:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="diachi" name="diachi" class="form-control" 
                                value="<?php echo e($nhahang->diachi); ?>">
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>

                         <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                SĐT:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="sdt" name="sdt" class="form-control" 
                                value="<?php echo e($nhahang->sdt); ?>">
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>

                         <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                Email:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="email" name="email" class="form-control" 
                                value="<?php echo e($nhahang->email); ?>">
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>

                         <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                Số bàn:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="soban" name="soban" class="form-control" 
                                value="<?php echo e($nhahang->soban); ?>">
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
                                value="<?php echo e($nhahang->ghichu); ?>">
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>


                        
                        <!--button-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <a class="btn btn-danger" href="<?php echo e(route('admin.restaurants')); ?>">
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