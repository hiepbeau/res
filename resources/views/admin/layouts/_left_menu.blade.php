<ul id="menu" class="page-sidebar-menu">
    <li {!! (Request::is('admin') ? 'class="active"' : '') !!}>
        <a href="{{ route('admin.dashboard') }}">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
   
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Users</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Users
                </a>
            </li>
            <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>
            <li {!! ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    View Profile
                </a>
            </li>
            <li {!! (Request::is('admin/deleted_users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/deleted_users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Deleted Users
                </a>
            </li>
        </ul>
    </li>
    
    <li {!! (Request::is('admin/groups') || Request::is('admin/groups/create') || Request::is('admin/groups/*') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Groups</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/groups') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/groups') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Groups
                </a>
            </li>
            <li {!! (Request::is('admin/groups/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/groups/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Group
                </a>
            </li>
        </ul>
    </li>

    @if(Sentinel::inRole('admin'))
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active";' : 'class="hiden";') !!}>
        <a href="#">
            <i class="fa fa-mercury" aria-hidden="true"></i>
            &nbsp;&nbsp;
            <span class="title">Restaurants</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/restaurants') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/restaurants') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Restaurants
                </a>
            </li>
            <li {!! (Request::is('admin/restaurants/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/restaurants/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Restaurants
                </a>
            </li>
        </ul>
    </li>
    @endif
           

    @if(Sentinel::inRole('user'))
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active";' : 'class="hiden";') !!}>
        <a href="#">
            <i class="fa fa-mercury" aria-hidden="true"></i>
            &nbsp;&nbsp;
            <span class="title">Restaurant</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/restaurants') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('user/restaurants') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Restaurants
                </a>
            </li>
            <li {!! (Request::is('admin/restaurants/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('user/restaurants/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New restaurants
                </a>
            </li>
        </ul>
    </li>
    @endif 


      @if(Sentinel::inRole('admin'))
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active";' : 'class="hiden";') !!}>
        <a href="#">
            <i class="fa fa-mercury" aria-hidden="true"></i>
            &nbsp;&nbsp;
            <span class="title">Type restaurant</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/loainhahang') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/loainhahang') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Type restaurants
                </a>
            </li>
            <li {!! (Request::is('admin/loainhahang/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/loainhahang/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add new type 

                </a>
            </li>
        </ul>
    </li>
    @endif
           

    @if(Sentinel::inRole('user'))
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active";' : 'class="hiden";') !!}>
        <a href="#">
            <i class="fa fa-mercury" aria-hidden="true"></i>
            &nbsp;&nbsp;
            <span class="title">Type restaurant</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/loainhahang') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('user/loainhahang') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Type restaurants
                </a>
            </li>
            <li {!! (Request::is('admin/loainhahang/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('user/loainhahang/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add new type restaurant
                </a>
            </li>
        </ul>
    </li>
    @endif 


        @if(Sentinel::inRole('admin'))
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active";' : 'class="hiden";') !!}>
        <a href="#">
            <i class="fa fa-mercury" aria-hidden="true"></i>
            &nbsp;&nbsp;
            <span class="title">Order</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/donhang') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/order') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Order
                </a>
            </li>
            <li {!! (Request::is('admin/donhang/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/order/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add new order
                </a>
            </li>
        </ul>
    </li>
    @endif
           

    @if(Sentinel::inRole('user'))
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active";' : 'class="hiden";') !!}>
        <a href="#">
            <i class="fa fa-mercury" aria-hidden="true"></i>
            &nbsp;&nbsp;
            <span class="title">Order</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/donhang') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('user/order') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Order
                </a>
            </li>
            <li {!! (Request::is('admin/donhang/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('user/order/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add new order
                </a>
            </li>
        </ul>
    </li>
    @endif 






</ul>
 



    <!-- Menus generated by CRUD generator -->
    @include('admin/layouts/menu')
</ul>
