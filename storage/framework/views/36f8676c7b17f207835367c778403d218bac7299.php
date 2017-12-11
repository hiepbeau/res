<?php $__env->startSection('title'); ?>
    Edit User
    @parent
<?php $__env->stopSection(); ?>


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
        <h1>Edit user</h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Users</li>
            <li class="active">Add New User</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="users" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Editing user : <p class="user_name_max"><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></p>
                        </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <!--main content-->
                        <div class="row">

                            <div class="col-md-12">
                                <form id="commentForm" action="<?php echo e(route('admin.users.update', $user)); ?>"
                                      method="POST" id="wizard-validation" enctype="multipart/form-data" class="form-horizontal">
                                    <!-- CSRF Token -->
                                    <input type="hidden" name="_method" value="PATCH"/>
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

                                    <div id="rootwizard">
                                        <ul>
                                            <li><a href="#tab1" data-toggle="tab">User Profile</a></li>
                                            <li><a href="#tab2" data-toggle="tab">Bio</a></li>
                                            <li><a href="#tab3" data-toggle="tab">Address</a></li>
                                            <li><a href="#tab4" data-toggle="tab">User Group</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab1">
                                                <h2 class="hidden">&nbsp;</h2>

                                                <div class="form-group <?php echo e($errors->first('first_name', 'has-error')); ?>">
                                                    <label for="first_name" class="col-sm-2 control-label">First Name *</label>
                                                    <div class="col-sm-10">
                                                        <input id="first_name" name="first_name" type="text"
                                                               placeholder="First Name" class="form-control required"
                                                               value="<?php echo old('first_name', $user->first_name); ?>"/>
                                                    </div>
                                                    <?php echo $errors->first('first_name', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                                <div class="form-group <?php echo e($errors->first('last_name', 'has-error')); ?>">
                                                    <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
                                                    <div class="col-sm-10">
                                                        <input id="last_name" name="last_name" type="text" placeholder="Last Name"
                                                               class="form-control required"
                                                               value="<?php echo old('last_name', $user->last_name); ?>"/>
                                                    </div>
                                                    <?php echo $errors->first('last_name', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                                <div class="form-group <?php echo e($errors->first('email', 'has-error')); ?>">
                                                    <label for="email" class="col-sm-2 control-label">Email *</label>
                                                    <div class="col-sm-10">
                                                        <input id="email" name="email" placeholder="E-Mail" type="text"
                                                               class="form-control required email"
                                                               value="<?php echo old('email', $user->email); ?>"/>
                                                    </div>
                                                    <?php echo $errors->first('email', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                                <div class="form-group <?php echo e($errors->first('password', 'has-error')); ?>">
                                                    <p class="text-warning">If you don't want to change password... please leave them empty</p>
                                                    <label for="password" class="col-sm-2 control-label">Password </label>
                                                    <div class="col-sm-10">
                                                        <input id="password" name="password" type="password" placeholder="Password"
                                                               class="form-control" value="<?php echo old('password'); ?>"/>
                                                    </div>
                                                    <?php echo $errors->first('password', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                                <div class="form-group <?php echo e($errors->first('password_confirm', 'has-error')); ?>">
                                                    <label for="password_confirm" class="col-sm-2 control-label">Confirm Password </label>
                                                    <div class="col-sm-10">
                                                        <input id="password_confirm" name="password_confirm" type="password"
                                                               placeholder="Confirm Password " class="form-control"
                                                               value="<?php echo old('password_confirm'); ?>"/>
                                                    </div>
                                                    <?php echo $errors->first('password_confirm', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab2" disabled="disabled">
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group <?php echo e($errors->first('dob', 'has-error')); ?>">
                                                    <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
                                                    <div class="col-sm-10">
                                                        <input id="dob" name="dob" type="text" class="form-control"
                                                               data-date-format="YYYY-MM-DD" value="<?php echo old('dob', $user->dob); ?>"
                                                               placeholder="yyyy-mm-dd"/>
                                                    </div>
                                                    <?php echo $errors->first('dob', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                                <div class="form-group <?php echo e($errors->first('pic_file', 'has-error')); ?>">
                                                    <label for="pic" class="col-sm-2 control-label">Profile picture</label>
                                                    <div class="col-sm-10">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                                <?php if($user->pic): ?>
                                                                    <img src="<?php echo url('/').'/uploads/users/'.$user->pic; ?>" alt="profile pic">
                                                                <?php else: ?>
                                                                    <img src="http://placehold.it/200x200" alt="profile pic">
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                            <div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input id="pic" name="pic_file" type="file"
                                                               class="form-control"/>
                                                    </span>
                                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" style="color: black !important;">Remove</a>
                                                            </div>
                                                        </div>
                                                        <?php echo $errors->first('pic_file', '<span class="help-block">:message</span>'); ?>

                                                    </div>
                                                </div>
                                                <div class="form-group  <?php echo e($errors->first('pic', 'has-error')); ?>">
                                                    <label for="bio" class="col-sm-2 control-label">Bio <small>(brief intro)</small></label>
                                                    <div class="col-sm-10">
                                            <textarea name="bio" id="bio" class="form-control resize_vertical"
                                                      rows="4"><?php echo old('bio', $user->bio); ?></textarea>
                                                    </div>
                                                    <?php echo $errors->first('bio', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab3" disabled="disabled">
                                                <div class="form-group <?php echo e($errors->first('gender', 'has-error')); ?>">
                                                    <label for="email" class="col-sm-2 control-label">Gender </label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" title="Select Gender..." name="gender">
                                                            <option value="">Select</option>
                                                            <option value="male" <?php if($user->gender === 'male'): ?> selected="selected" <?php endif; ?> >MALE</option>
                                                            <option value="female" <?php if($user->gender === 'female'): ?> selected="selected" <?php endif; ?> >FEMALE</option>
                                                            <option value="other" <?php if($user->gender === 'other'): ?> selected="selected" <?php endif; ?> >OTHER</option>

                                                        </select>
                                                    </div>
                                                    <?php echo $errors->first('gender', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                                <div class="form-group required <?php echo e($errors->first('country', 'has-error')); ?>">
                                                    <label for="country" class="col-sm-2 control-label">Country </label>
                                                    <div class="col-sm-10">
                                                        <?php echo Form::select('country', $countries,old('country',$user->country),array('class' => 'form-control')); ?>


                                                    </div>
                                                    <?php echo $errors->first('country', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                                

                                                <div class="form-group <?php echo e($errors->first('city', 'has-error')); ?>">
                                                    <label for="city" class="col-sm-2 control-label">City </label>
                                                    <div class="col-sm-10">
                                                        <input id="city" name="city" type="text" class="form-control"
                                                               value="<?php echo old('city', $user->city); ?>"/>
                                                    </div>
                                                    <?php echo $errors->first('city', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                                <div class="form-group <?php echo e($errors->first('address', 'has-error')); ?>">
                                                    <label for="address" class="col-sm-2 control-label">Address </label>
                                                    <div class="col-sm-10">
                                                        <input id="address" name="address" type="text" class="form-control"
                                                               value="<?php echo old('address', $user->address); ?>"/>
                                                    </div>
                                                    <?php echo $errors->first('address', '<span class="help-block">:message</span>'); ?>

                                                </div>

                                               
                                            </div>
                                            <div class="tab-pane" id="tab4" disabled="disabled">
                                                <p class="text-danger"><strong>Be careful with group selection, if you give admin access.. they can access admin section</strong></p>
                                                <div class="form-group <?php echo e($errors->first('group', 'has-error')); ?>">
                                                    <label for="group" class="col-sm-2 control-label">Group *</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control " title="Select group..." name="groups[]" id="groups" required>
                                                            <option value="">Select</option>
                                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                                <option value="<?php echo $role->id; ?>" <?php echo e((array_key_exists($role->id, $userRoles) ? ' selected="selected"' : '')); ?>><?php echo e($role->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                                        </select>
                                                    </div
                                                            <?php echo $errors->first('group', '<span class="help-block">:message</span>'); ?>>
                                                </div>

                                                <div class="form-group">
                                                    <label for="activate" class="col-sm-2 control-label"> Activate User</label>
                                                    <div class="col-sm-10">
                                                        <input id="activate" name="activate" type="checkbox" class="pos-rel p-l-30 custom-checkbox" value="1" <?php if($status): ?> checked="checked" <?php endif; ?>  >
                                                        <span>To activate your account click the check box</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="pager wizard">
                                                <li class="previous"><a href="#">Previous</a></li>
                                                <li class="next"><a href="#">Next</a></li>
                                                <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--main content end-->
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
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