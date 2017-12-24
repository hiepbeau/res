<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Hiển thị tất cả các nhà hàng
Route::get('/listnhahang', function () {
    $data_out = DB::table('nhahang')->get();
    $data['result1'] = $data_out;
    return response($data);
});

// Hiển thị tất cả loại nhà hàng
Route::get('/listloainhahang', function () {
    $data_out = DB::table('loainhahang')->get();
    $data['result'] = $data_out;
    return response($data);
});

//Tìm kiếm nhà hàng theo tên
Route::get('/findnhahang/{key}',function($key){
    $data_out = DB::table('nhahang')->where('nhahang.ten','like','%'.$key.'%')->get();
    $data['result'] = $data_out;
    return response($data);
});

//Tìm kiếm nhà hàng theo loại nhà hàng
Route::get('/findnhahangbytype/{id}',function($id){
    $data_out = DB::table('nhahang')->join('loainhahang','loainhahang.id','=','nhahang.idloainhahang')->where('loainhahang.id','=',$id)->get();
    $data['result'] = $data_out;
    return response($data);
});

// Đăng nhập
Route::post('/dangnhap',function(Request $request){
    $email="admin@admin.com";
    $password="12345678";
    $user  = array('email' => $email,'password' => $password );
    if (Auth::attempt($user)){

    }
});

Route::get('/dangnhap',function(){

});


// Đăng xuất
Route::get('/dangxuat',function(){
    Auth::logout();
});


// Xem thông tin người dùng
Route::get('/profile/{id}',function(){
    if(Auth::check()){
        $id = Auth::user()->id;
        $data_out = DB::table('users')->where('users.id','=',$id);
        $data['result'] = $data_out;
        return response($data);
    }
});

// Sửa thông tin người dùng
Route::post('/profile/{id}/sua',function(Request $request){
    if(Auth::check()){
        $data = array( 'email'=>$_POST["email"],'password' => $_POST["password"],'first_name' => $_POST["firstname"],'last_name' => $_POST["lastname"]);

        DB::table('users')->where('id', Auth::user()->id->update($data);
    }
});

// Đặt hàng
        Route::post('/donhang/create/{iduser}',function(Request $request){
            if(Auth::check()){}
                $data = array(
                    'idnhahang'=>$_POST["nhahang"],
                    'ngay'=>$_POST["ngay"],
                    'soban'=>$_POST["soban"],
                    'ghichu'=>$_POST["ghichu"]
                );
                DB::table('donhang')->join('users','users.id','=','donhang.iduser')->where('users.id','=',Auth::user()->id)->insert($data);
            }
        });

// Sua, xoa don hang
        Route::post('/donhang/edit/{id}/{iduser}',function(Request $request){
            if(Auth::check()){
                $data = array(
                    'idnhahang'=>$_POST["nhahang"],
                    'ngay'=>$_POST["ngay"],
                    'soban'=>$_POST["soban"],
                    'ghichu'=>$_POST["ghichu"]
                );
                DB::table('donhang')->join('users','users.id','=','donhang.iduser')->where('users.id','=',Auth::user()->id)->insert($data);
            }
        });
