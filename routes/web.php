<?php

/**
 * Model binding into route
 */
//Route::model('file', 'App\File');
//Route::model('task', 'App\Task');
Route::model('users', 'App\User');

Route::pattern('slug', '[a-z0-9- _]+');

Route::group(array('prefix' => 'admin'), function () {

    # Error pages should be shown without requiring login
    Route::get('404', function () {
        return View('admin/404');
    });
    Route::get('500', function () {
        return View::make('admin/500');
    });

    Route::post('secureImage', array('as' => 'secureImage','uses' => 'JoshController@secureImage'));

    # Lock screen
    Route::get('{id}/lockscreen', array('as' => 'lockscreen', 'uses' =>'UsersController@lockscreen'));
    Route::post('{id}/lockscreen', array('as' => 'lockscreen', 'uses' =>'UsersController@postLockscreen'));

    # All basic routes defined here
    Route::get('signin', array('as' => 'signin', 'uses' => 'AuthController@getSignin'));
    Route::post('signin', 'AuthController@postSignin');
    Route::post('signup', array('as' => 'signup', 'uses' => 'AuthController@postSignup'));
    Route::post('forgot-password', array('as' => 'forgot-password', 'uses' => 'AuthController@postForgotPassword'));
    Route::get('login2', function () {
        return View::make('admin/login2');
    });

    # Register2
    Route::get('register2', function () {
        return View::make('admin/register2');
    });
    Route::post('register2', array('as' => 'register2', 'uses' => 'AuthController@postRegister2'));

    # Forgot Password Confirmation
    Route::get('forgot-password/{userId}/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
    Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

    # Logout
    Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));

    # Account Activation
    Route::get('activate/{userId}/{activationCode}', array('as' => 'activate', 'uses' => 'AuthController@getActivate'));
});

Route::group(['prefix' => 'admin', 'middleware' => 'SentinelAdmin', 'as' => 'admin.'], function () {
    # Dashboard / Index
    Route::get('/', array('as' => 'dashboard','uses' => 'JoshController@showHome'));

    // GUI Crud Generator
    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');
    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');
    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');


    # Restaurant Management
    Route::group(array('prefix' => 'restaurants'), function () {

        Route::get('/', array('as' => 'restaurants', 'uses' => 'RestaurantsController@index'));
        Route::get('create', 'RestaurantsController@create');
        Route::post('create1',['as' => 'restaurants.create1', 'uses' =>'RestaurantsController@store']);

        Route::get('edit/{id}', array('as' => 'restaurants.edit', 'uses' => 'RestaurantsController@edit'));
        Route::post('create2/{id}', ['as' => 'restaurants.create2', 'uses' =>'RestaurantsController@update']);

        Route::get('{restaurants}/delete_modal',['as' => 'restaurants.delete_modal', 'uses' =>'RestaurantsController@delete_modal']);

        Route::get('{restaurants}/delete', array('as' => 'restaurants.delete', 'uses' => 'RestaurantsController@delete'));

    });

    Route::group(array('prefix' => 'typerestaurants'), function () {

        Route::get('/', array('as' => 'typerestaurants', 'uses' => 'TypeRestaurantsController@index'));
        Route::get('create', 'TypeRestaurantsController@create');
        Route::post('create1',['as' => 'typerestaurants.create1', 'uses' =>'TypeRestaurantsController@store']);

        Route::get('edit/{id}', array('as' => 'typerestaurants.edit', 'uses' => 'TypeRestaurantsController@edit'));
        Route::post('create2/{id}', ['as' => 'typerestaurants.create2', 'uses' =>'TypeRestaurantsController@update']);

        Route::get('{typerestaurants}/delete_modal',['as' => 'typerestaurants.delete_modal', 'uses' =>'TypeRestaurantsController@delete_modal']);

        Route::get('{typerestaurants}/delete', array('as' => 'typerestaurants.delete', 'uses' => 'TypeRestaurantsController@delete'));

    });

    Route::group(array('prefix' => 'order'), function () {

        Route::get('/', array('as' => 'order', 'uses' => 'OrderController@index'));
        Route::get('create', 'OrderController@create');
        Route::post('create1',['as' => 'order.create1', 'uses' =>'OrderController@store']);

        Route::get('edit/{id}', array('as' => 'order.edit', 'uses' => 'OrderController@edit'));
        Route::post('create2/{id}', ['as' => 'order.create2', 'uses' =>'OrderController@update']);
        Route::get('{order}/delete_modal',['as' => 'order.delete_modal', 'uses' =>'OrderController@delete_modal']);

        Route::get('{order}/delete', array('as' => 'order.delete', 'uses' => 'OrderController@delete'));
       

    });

    


    
    # User Managemen    
    Route::group(array('prefix' => 'users'), function () {
        Route::get('/', array('as' => 'users', 'uses' => 'UsersController@index'));
        Route::get('data',['as' => 'users.data', 'uses' =>'UsersController@data']);
        Route::get('create', 'UsersController@create');
        Route::post('create', 'UsersController@store');
        Route::get('{user}/delete', array('as' => 'users.delete', 'uses' => 'UsersController@destroy'));
        Route::get('{user}/confirm-delete', array('as' => 'users.confirm-delete', 'uses' => 'UsersController@getModalDelete'));
        Route::get('{user}/restore', array('as' => 'restore/user', 'uses' => 'UsersController@getRestore'));
        Route::get('{user}', array('as' => 'users.show', 'uses' => 'UsersController@show'));
        Route::post('{user}/passwordreset', array('as' => 'passwordreset', 'uses' => 'UsersController@passwordreset'));
    });
    Route::resource('users', 'UsersController');

    

    # Group Management
    Route::group(array('prefix' => 'groups'), function () {
        Route::get('/', array('as' => 'groups', 'uses' => 'GroupsController@index'));
        Route::get('create', array('as' => 'groups.create', 'uses' => 'GroupsController@create'));
        Route::post('create', 'GroupsController@store');
        Route::get('{group}/edit', array('as' => 'groups.edit', 'uses' => 'GroupsController@edit'));
        Route::post('{group}/edit', 'GroupsController@update');
        Route::get('{group}/delete', array('as' => 'groups.delete', 'uses' => 'GroupsController@destroy'));
        Route::get('{group}/confirm-delete', array('as' => 'groups.confirm-delete', 'uses' => 'GroupsController@getModalDelete'));
        Route::get('{group}/restore', array('as' => 'groups.restore', 'uses' => 'GroupsController@getRestore'));
    });


    Route::get('crop_demo', function () {
        return redirect('admin/imagecropping');
    });
    Route::post('crop_demo','JoshController@crop_demo');

    /* laravel example routes */
    # datatables
    Route::get('datatables', 'DataTablesController@index');
    Route::get('datatables/data', array('as' => 'datatables.data', 'uses' => 'DataTablesController@data'));

    # editable datatables
    Route::get('editable_datatables', 'EditableDataTablesController@index');
    Route::get('editable_datatables/data', array('as' => 'editable_datatables.data', 'uses' => 'EditableDataTablesController@data'));
    Route::post('editable_datatables/create','EditableDataTablesController@store');
    Route::post('editable_datatables/{id}/update', 'EditableDataTablesController@update');
    Route::get('editable_datatables/{id}/delete', array('as' => 'admin.editable_datatables.delete', 'uses' => 'EditableDataTablesController@destroy'));

    # custom datatables
    Route::get('custom_datatables', 'CustomDataTablesController@index');
    Route::get('custom_datatables/sliderData', array('as' => 'admin.custom_datatables.sliderData', 'uses' => 'CustomDataTablesController@sliderData'));
    Route::get('custom_datatables/radioData', array('as' => 'admin.custom_datatables.radioData', 'uses' => 'CustomDataTablesController@radioData'));
    Route::get('custom_datatables/selectData', array('as' => 'admin.custom_datatables.selectData', 'uses' => 'CustomDataTablesController@selectData'));
    Route::get('custom_datatables/buttonData', array('as' => 'admin.custom_datatables.buttonData', 'uses' => 'CustomDataTablesController@buttonData'));
    Route::get('custom_datatables/totalData', array('as' => 'admin.custom_datatables.totalData', 'uses' => 'CustomDataTablesController@totalData'));
    
    //tasks section
    Route::post('task/create', 'TaskController@store');
    Route::get('task/data', 'TaskController@data');
    Route::post('task/{task}/edit', 'TaskController@update');
    Route::post('task/{task}/delete', 'TaskController@delete');


    # Remaining pages will be called from below controller method
    # in real world scenario, you may be required to define all routes manually

    Route::get('{name?}', 'JoshController@showView');

});

Route::group(array('prefix' => 'user'), function () {

    # All basic routes defined here
    Route::get('signin', array('as' => 'signin', 'uses' => 'AuthController@getSignin'));
    Route::post('signin', 'AuthController@postSignin');
    Route::post('signup', array('as' => 'signup', 'uses' => 'AuthController@postSignup'));
    Route::post('forgot-password', array('as' => 'forgot-password', 'uses' => 'AuthController@postForgotPassword'));
    Route::get('login2', function () {
        return View::make('admin/login2');
    });

    # Register2
    Route::get('register2', function () {
        return View::make('admin/register2');
    });
    Route::post('register2', array('as' => 'register2', 'uses' => 'AuthController@postRegister2'));

    # Forgot Password Confirmation
    Route::get('forgot-password/{userId}/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
    Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

    # Logout
    Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));

    # Account Activation
    Route::get('activate/{userId}/{activationCode}', array('as' => 'activate', 'uses' => 'AuthController@getActivate'));
});

Route::group(['prefix' => 'user', 'middleware' => 'SentinelUser', 'as' => 'user.'], function () {
    #Dashboard
    Route::get('/', array('as' => 'dashboard','uses' => 'JoshController@showHome'));

    // GUI Crud Generator
    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');
    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');
    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');
    

    Route::group(array('prefix' => 'restaurants'), function () {

        Route::get('/', array('as' => 'restaurants', 'uses' => 'RestaurantsController@index'));
        Route::get('create', 'RestaurantsController@create');
        Route::post('create1',['as' => 'restaurants.create1', 'uses' =>'RestaurantsController@store']);

        Route::get('{restaurants}/edit', array('as' => 'restaurants.edit', 'uses' => 'RestaurantsController@edit'));
        Route::post('create2/{id}', ['as' => 'restaurants.create2', 'uses' =>'RestaurantsController@update']);

        Route::get('{restaurants}/delete_modal',['as' => 'restaurants.delete_modal', 'uses' =>'RestaurantsController@delete_modal']);

        Route::get('{restaurants}/delete', array('as' => 'restaurants.delete', 'uses' => 'RestaurantsController@delete'));
    });

    
    
    # User Management
    Route::group(array('prefix' => 'users'), function () {
        Route::get('/', array('as' => 'users', 'uses' => 'UsersController@index'));
        Route::get('data',['as' => 'users.data', 'uses' =>'UsersController@data']);
        Route::get('create', 'UsersController@create');
        Route::post('create', 'UsersController@store');
        Route::get('{user}/delete', array('as' => 'users.delete', 'uses' => 'UsersController@destroy'));
        Route::get('{user}/confirm-delete', array('as' => 'users.confirm-delete', 'uses' => 'UsersController@getModalDelete'));
        Route::get('{user}/restore', array('as' => 'restore/user', 'uses' => 'UsersController@getRestore'));
        Route::get('{user}', array('as' => 'users.show', 'uses' => 'UsersController@show'));
        Route::post('{user}/passwordreset', array('as' => 'passwordreset', 'uses' => 'UsersController@passwordreset'));
    });
    Route::resource('users', 'UsersController');


    # Group Management
    Route::group(array('prefix' => 'groups'), function () {
        Route::get('/', array('as' => 'groups', 'uses' => 'GroupsController@index'));
        Route::get('create', array('as' => 'groups.create', 'uses' => 'GroupsController@create'));
        Route::post('create', 'GroupsController@store');
        Route::get('{group}/edit', array('as' => 'groups.edit', 'uses' => 'GroupsController@edit'));
        Route::post('{group}/edit', 'GroupsController@update');
        Route::get('{group}/delete', array('as' => 'groups.delete', 'uses' => 'GroupsController@destroy'));
        Route::get('{group}/confirm-delete', array('as' => 'groups.confirm-delete', 'uses' => 'GroupsController@getModalDelete'));
        Route::get('{group}/restore', array('as' => 'groups.restore', 'uses' => 'GroupsController@getRestore'));
    });
    

    /*routes for file*/
    Route::group(array('prefix' => 'file'), function () {
        Route::post('create', 'FileController@store');
        Route::post('createmulti', 'FileController@postFilesCreate');
        Route::delete('delete', 'FileController@delete');
    });

    Route::get('crop_demo', function () {
        return redirect('admin/imagecropping');
    });
    Route::post('crop_demo','JoshController@crop_demo');

    /* laravel example routes */
    # datatables
    Route::get('datatables', 'DataTablesController@index');
    Route::get('datatables/data', array('as' => 'datatables.data', 'uses' => 'DataTablesController@data'));

    # editable datatables
    Route::get('editable_datatables', 'EditableDataTablesController@index');
    Route::get('editable_datatables/data', array('as' => 'editable_datatables.data', 'uses' => 'EditableDataTablesController@data'));
    Route::post('editable_datatables/create','EditableDataTablesController@store');
    Route::post('editable_datatables/{id}/update', 'EditableDataTablesController@update');
    Route::get('editable_datatables/{id}/delete', array('as' => 'admin.editable_datatables.delete', 'uses' => 'EditableDataTablesController@destroy'));

    # custom datatables
    Route::get('custom_datatables', 'CustomDataTablesController@index');
    Route::get('custom_datatables/sliderData', array('as' => 'admin.custom_datatables.sliderData', 'uses' => 'CustomDataTablesController@sliderData'));
    Route::get('custom_datatables/radioData', array('as' => 'admin.custom_datatables.radioData', 'uses' => 'CustomDataTablesController@radioData'));
    Route::get('custom_datatables/selectData', array('as' => 'admin.custom_datatables.selectData', 'uses' => 'CustomDataTablesController@selectData'));
    Route::get('custom_datatables/buttonData', array('as' => 'admin.custom_datatables.buttonData', 'uses' => 'CustomDataTablesController@buttonData'));
    Route::get('custom_datatables/totalData', array('as' => 'admin.custom_datatables.totalData', 'uses' => 'CustomDataTablesController@totalData'));
    
    //tasks section
    Route::post('task/create', 'TaskController@store');
    Route::get('task/data', 'TaskController@data');
    Route::post('task/{task}/edit', 'TaskController@update');
    Route::post('task/{task}/delete', 'TaskController@delete');


    # Remaining pages will be called from below controller method
    # in real world scenario, you may be required to define all routes manually

    Route::get('{name?}', 'JoshController@showView');
});

#FrontEndController
Route::get('login', array('as' => 'login','uses' => 'FrontEndController@getLogin'));
Route::post('login','FrontEndController@postLogin');
Route::get('register', array('as' => 'register','uses' => 'FrontEndController@getRegister'));
Route::post('register','FrontEndController@postRegister');
Route::get('activate/{userId}/{activationCode}',array('as' =>'activate','uses'=>'FrontEndController@getActivate'));
Route::get('forgot-password',array('as' => 'forgot-password','uses' => 'FrontEndController@getForgotPassword'));
Route::post('forgot-password','FrontEndController@postForgotPassword');
# Forgot Password Confirmation
Route::get('forgot-password/{userId}/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'FrontEndController@getForgotPasswordConfirm'));
Route::post('forgot-password/{userId}/{passwordResetCode}', 'FrontEndController@postForgotPasswordConfirm');
# My account display and update details
Route::group(array('middleware' => 'SentinelUser'), function () {
    Route::get('my-account', array('as' => 'my-account', 'uses' => 'FrontEndController@myAccount'));
    Route::put('my-account', 'FrontEndController@update');
});
Route::get('logout', array('as' => 'logout','uses' => 'FrontEndController@getLogout'));
# contact form
Route::post('contact',array('as' => 'contact','uses' => 'FrontEndController@postContact'));


Route::get('{name?}', 'JoshController@showFrontEndView');

# End of frontend views
