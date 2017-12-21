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
use App\Donhang;
use App\User;

class OrderController extends JoshController
{
    public function index()
    {

     //$data = DB::table('donhang')->get();
    $data = Donhang::all();
     if( count($data) > 0 ){
        return view('admin.order.index')->with(['data' => $data]);
    } else {
        return view('admin.order.create');
    }
}

public function create()
{
    $nhahang = Nhahang::all();
    $user = User::all();
    return view('admin.order.create')->with(['nhahang'=>$nhahang,'user'=>$user]);
}

public function store(){   

    $data = array(
        'idnhahang' => $_POST["idnhahang"],
        'iduser' => $_POST["iduser"],
        'ngay' => $_POST["ngay"],
        'soban' => $_POST["soban"],
        'ghichu' => $_POST["ghichu"]
    );


    DB::table('donhang')->insert($data);
    return Redirect::route('admin.order')->with('success');


}

public function update(Request $request,$id)
{

    $donhang = donhang::find($id);
    echo $donhang;


    $data = array( 
        'idnhahang' => $_POST["idnhahang"],
        'iduser' => $_POST["iduser"],
        'ngay' => $_POST["ngay"],
        'soban' => $_POST["soban"],
        'ghichu' => $_POST["ghichu"]
    );

    DB::table('donhang')->where('id', $id)->update($data);

    return Redirect::route('admin.order')->with('success');



}



public function edit($id){


    $donhang = Donhang::find($id);
    $nhahang = Nhahang::all();
    $user = User::all();
    return view('admin.order.edit',['donhang'=>$donhang,'user' =>$user,'nhahang'=>$nhahang]);

}


public function delete_modal($id = null)
{
    $data = DB::table('donhang')->where('id',$id)->first();
    return view('admin.order.delete_modal')->with(['data' => $data]);
}

public function delete($id = null)
{
    DB::table('donhang')->where('id', $id)->delete();

    $data = DB::table('donhang')->get();
    if( count($data) > 0 ){
        return view('admin.order.index')->with(['data' => $data]);
    } else {
       return view('admin.order.create');
   }
}


}
