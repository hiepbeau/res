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
        <li>Dishes</li>
        <li class="active">
            Edit dish
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
                        Create new dish
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
                       action="<?php echo e(route('admin.dishes.create2')); ?>" enctype="multipart/form-data" >
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
						
                       	<!--ID-->
                        <div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            
                            <label for="title" class="col-sm-2 control-label">
                                ID: Hello
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="id" name="id" class="form-control" value="<?php echo e($data-> id); ?>">
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
                                <input type="text" id="name" name="name" class="form-control" 
                                value="<?php echo e($data-> name); ?>">
                            </div>
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>
						
                      	<!--Image-->
                       	<div class="form-group <?php echo e($errors->
                            first('name', 'has-error')); ?>">
                            <label for="title" class="col-sm-2 control-label">
                                Image:
                            </label>
                            <div class="col-sm-5">
                                <select class="form-control" id="c_image" name="c_image">
                                	<option value="0">Chose Image</option>
                                	<option value="1">Image 1</option>
                                	<option value="2">Image 2</option>
                                	<option value="3">Image 3</option>
                                </select>
                                <input type="button" value="Show Image" id="show" class="form-control">
                                <br>
                                <div id="image" class="form-control">
                                	&nbsp;
                               		<i class="fa fa-picture-o" aria-hidden="true"></i>
                               		&nbsp;
                                	 Image preview
                                </div>
                            </div>

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                        <img src="http://placehold.it/200x200" alt="profile pic">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input id="pic" name="pic_file" type="file" class="form-control"/>
                                        </span>
                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                    </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <?php echo $errors->first('name', '<span class="help-block">:message</span> '); ?>

                            </div>
                        </div>
                        
                        <!--button-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <a class="btn btn-danger" href="<?php echo e(route('admin.dishes')); ?>">
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
<script>
	$(function(){
		$("body").on('click','#show',function(){
			var index=$("#c_image").val();
			if( index != 0){
				$("#image").removeClass("form-control");
			}
			if(index==1){
				var _html = '<img src="<?php echo e(URL::to('/assets/img/Image/dish1.jpg')); ?>">';
			}
			else if(index==2){
				var _html = '<img src="<?php echo e(URL::to('/assets/img/Image/dish2.jpg')); ?>">';
			}
			else if(index==3){
				var _html = '<img src="<?php echo e(URL::to('/assets/img/Image/dish3.jpg')); ?>">';
			}
			$("#image").html(_html);
		});
	});
</script>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>