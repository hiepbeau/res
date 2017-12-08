<?php

use Illuminate\Http\Request;

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

Route::post('/list', function (Request $request) {
    $data_out = DB::table('dishes')->get();
    $data['result'] = $data_out;

    $count = count($data_out);
    
    if($count != 0){
    	$data['number'] = 1;
    } else {
    	$data['number'] = 0;
    }
    
    return response($data);
});

Route::get('/listres', function (Request $request) {
    $data_out = DB::table('nhahang')->get();
    $data['result'] = $data_out;
    return response($data);
});

Route::get('/listnhahang',function (Request $request){
    $nhahang = DB::table('nhahang')->get();
    $output["result"]="OK";
    $output["Nhahang"]=$nhahang;
    return response($output,200);
});

