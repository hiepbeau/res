<ul id="menu" class="page-sidebar-menu">
    <li <?php echo (Request::is('admin') ? 'class="active"' : ''); ?>>
        <a href="<?php echo e(route('admin.dashboard')); ?>">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
   
    <li <?php echo (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Users</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/users') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/users')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Users
                </a>
            </li>
            <li <?php echo (Request::is('admin/users/create') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/users/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>
            <li <?php echo ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::route('admin.users.show',Sentinel::getUser()->id)); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    View Profile
                </a>
            </li>
            <li <?php echo (Request::is('admin/deleted_users') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/deleted_users')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Deleted Users
                </a>
            </li>
        </ul>
    </li>
    
    <li <?php echo (Request::is('admin/groups') || Request::is('admin/groups/create') || Request::is('admin/groups/*') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Groups</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/groups') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/groups')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Groups
                </a>
            </li>
            <li <?php echo (Request::is('admin/groups/create') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/groups/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Group
                </a>
            </li>
        </ul>
    </li>
    <?php if(Sentinel::inRole('admin')): ?>
     <li <?php echo (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active";' : 'class="hiden";'); ?>>
        <a href="#">
            <i class="fa fa-mercury" aria-hidden="true"></i>
            &nbsp;&nbsp;
            <span class="title">Dish</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/dishes') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/dishes')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Dishes
                </a>
            </li>
            <li <?php echo (Request::is('admin/dishes/create') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/dishes/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Dishes
                </a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
           

    <?php if(Sentinel::inRole('user')): ?>
        <li <?php echo (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active";' : 'class="hiden";'); ?>>
        <a href="#">
            <i class="fa fa-mercury" aria-hidden="true"></i>
            &nbsp;&nbsp;
            <span class="title">Dish</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/dishes') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('user/dishes')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Dishes
                </a>
            </li>
            <li <?php echo (Request::is('admin/dishes/create') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('user/dishes/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Dishes
                </a>
            </li>
        </ul>
    </li>
    <?php endif; ?> 
        </ul>
    </li>
    <!-- Menus generated by CRUD generator -->
    <?php echo $__env->make('admin/layouts/menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</ul>
