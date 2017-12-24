<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */

     public function testBasicExample()
    {
        $this->visit('/')
             ->see('404');
    }

    public function testLogin()
    {
        $this->get(route('login'));
        $this->assertResponseOk();
        
    }
    public function testRegister()
    {
        $this->get(route('register'));
        $this->assertResponseOk();
    }

    public function testLogout()
    {
        $this->visit('logout');
            
    }

    //Admin

      public function testAdminSigin()
    {
        $this->visit('admin.sigin');
    }
    public function testAdminLogin()
    {
        $this->visit('admin.login2');
    }

    public function testAdminRegister()
    {
        $this->visit('admin.register2');
    }

    public function testAdminLogout()
    {
        $this->visit('admin.logout');
    }

    public function testAdmin()
    {
        $this->visitRoute('admin.dashboard');
    }

     public function testAdminRestaurant()
    {
        $this->visitRoute('admin.restaurants');
    }

    public function testAdminGeneratorBuilder()
    {
        $this->visit('admin.generator_builder');
    }

    public function testAdminFieldTemplate()
    {
        $this->visit('admin.field_template');
    }

    public function testAdminTypeRestaurant()
    {
        $this->visitRoute('admin.typerestaurants');
    }

    public function testAdminOrder()
    {
        $this->visitRoute('admin.order');
    }

    public function testAdminUsers()
    {
        $this->visit('admin.users');
    }

    public function testAdminGroups()
    {
        $this->visit('admin.groups');
    }

    public function testCrop()
    {
         $this->visit('admin.crop_demo');
    }

    public function testDatabases()
    {
        $this->visit('admin.databases');
    }

    public function testEditDatabases()
    {
        $this->visit('admin.editable_datatables');
    }

    public function testCustomDatabases()
    {
        $this->visit('admin.custom_databases');
    }



    //User


    public function testUserSigin()
    {
        $this->visit('user.sigin');
    }

    public function testUserLogin()
    {
        $this->visit('user.login2');
    }

    public function testUserRegister()
    {
        $this->visit('user.register2');
    }

    public function testUserLogout()
    {
        $this->visit('user.logout');
    }

    public function testUser()
    {
         $this->visit('user.dashboard');
    }

     public function testUserGeneratorBuilder()
    {
        $this->visit('user.generator_builder');
    }

    public function testUserFieldTemplate()
    {
        $this->visit('user.field_template');
    }

      public function testUserUsers()
    {
        $this->visit('admin.users');
    }

    public function testUserGroups()
    {
        $this->visit('admin.groups');
    }

    public function testtUserFile()
    {
        $this->visit('user.file');
    }

    public function testUserCrop()
    {
         $this->visit('user.crop_demo');
    }

    public function testUserDatabases()
    {
        $this->visit('user.databases');
    }

    public function testUserEditDatabases()
    {
        $this->visit('user.editable_datatables');
    }

    public function testUserCustomDatabases()
    {
        $this->visit('user.custom_databases');
    }


}
