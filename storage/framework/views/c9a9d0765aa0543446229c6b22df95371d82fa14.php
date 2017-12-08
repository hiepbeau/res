<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('admin/groups/title.create'); ?>
    @parent
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
        <li><?php echo app('translator')->get('groups/title.groups'); ?></li>
        <li class="active">
            <?php echo app('translator')->get('groups/title.create'); ?>
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
                        <?php echo app('translator')->get('groups/title.create'); ?>
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
                    <form class="form-horizontal" role="form" method="post" action="">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

                        <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                <?php echo app('translator')->get('groups/form.name'); ?>
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Group Name"
                                       value="<?php echo old('name'); ?>">
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <a class="btn btn-danger" href="<?php echo e(route('admin.groups')); ?>">
                                    <?php echo app('translator')->get('button.cancel'); ?>
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <?php echo app('translator')->get('button.save'); ?>
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

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>