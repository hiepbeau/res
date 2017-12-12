<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use Lang;
use Redirect;
use Sentinel;
use View;
use DB;
use Request;
use App\Nhahang;
use App\Loainhahang;

class RestaurantsController extends JoshController
{
    public function index()
    {
     //$data = DB::table('nhahang')->join('loainhahang','nhahang.idloainhahang','=','loainhahang.id')->get();
    $data = Nhahang::all();
    $loainhahang = DB::table('loainhahang')->get();
     if( count($data) > 0 ){
        return view('admin.restaurants.index')->with(['data' => $data]);
    } else {
        return view('admin.restaurants.create')->with(['lnh' => $loainhahang]);
    }
}

public function create()
{
    $loainhahang = DB::table('loainhahang')->get();
    return view('admin.restaurants.create')->with(['lnh' => $loainhahang]);
}

public function store(){   

    $tmp_name = $_FILES['pic_file']["tmp_name"];
    $data = DB::table('nhahang')->get();
    $nameimage = count($data) + 1;
    $name = 'res'.$nameimage.'.jpg';

    move_uploaded_file($tmp_name, "uploads/restaurant/$name");

    $lnh = $_POST["loainhahang"];
    $data = array(
        'idloainhahang'=>$lnh,
        'ten' => $_POST["ten"],
        'image' => $name,
        'diachi' => $_POST["diachi"],
        'sdt' => $_POST["sdt"],
        'email' => $_POST["email"],
        'soban' => $_POST["soban"],
        'ghichu' => $_POST["ghichu"],
    );


    DB::table('nhahang')->insert($data);
    return Redirect::route('admin.restaurants')->with('success');


}

public function update(Request $request,$id)
{

    $tmp_name = $_FILES['pic_file']["tmp_name"];
    $name = 'res'.$id.'.jpg';

    move_uploaded_file($tmp_name, "uploads/restaurant/$name");

    $lnh = $_POST["loainhahang"];
    $data = array(  'id'=>$id,
        'idloainhahang'=>$lnh,
        'ten' => $_POST["ten"],
        'image' => $name,
        'diachi' => $_POST["diachi"],
        'sdt' => $_POST["sdt"],
        'email' => $_POST["email"],
        'soban' => $_POST["soban"],
        'ghichu' => $_POST["ghichu"],
    );

    DB::table('nhahang')->where('id', $id)->update($data);

    $test=DB::table('nhahang')->where('id',$id)->get();
    echo $test;

    return Redirect::route('admin.restaurants')->with('success');



}



public function edit($id){

    $nhahang = Nhahang::find($id);
    $loainhahang = Loainhahang::all();
  
    //echo $loainhahang;
    return view('admin.restaurants.edit',['nhahang'=>$nhahang,'loainhahang'=>$loainhahang]);

}


public function delete_modal($id = null)
{
    $data = DB::table('nhahang')->where('id',$id)->first();
    return view('admin.restaurants.delete_modal')->with(['data' => $data]);
}

public function delete($id = null)
{
    DB::table('nhahang')->where('id', $id)->delete();

    $data = DB::table('nhahang')->join('loainhahang','nhahang.idloainhahang','=','loainhahang.id')->get();
    $loainhahang = DB::table('loainhahang')->get();
    if( count($data) > 0 ){
        return view('admin.restaurants.index')->with(['data' => $data]);
    } else {
       return view('admin.restaurants.create')->with(['lnh' => $loainhahang]);
   }
}


}
