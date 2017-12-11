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

class OrderController extends JoshController
{
    public function index()
    {

     $data = DB::table('donhang')->get();
     if( count($data) > 0 ){
        return view('admin.order.index')->with(['data' => $data]);
    } else {
        return view('admin.order.create');
    }
}

public function create()
{
    return view('admin.order.create');
}

public function store(){   

    //$data = DB::table('donhang')->get();
    $data = array(
        'tenlnh' => $_POST["tenlnh"],  
        'ghichu' => $_POST["ghichu"]
    );


    DB::table('donhang')->insert($data);
    return Redirect::route('admin.order')->with('success');


}

public function update(Request $request,$idlnh)
{

    // $donhang = donhang::find($idlnh);
    // echo $donhang;


    // $data = array( 
    //     'tenlnh' => $_POST["tenlnh"],
    //     'ghichu' => $_POST["ghichu"]
    // );

    // DB::table('donhang')->where('idlnh', $idlnh)->update($data);

    // return Redirect::route('admin.order')->with('success');



}



public function edit($id){


    $donhang = Donhang::find($id);
    // echo $donhang;
    //return view('admin.order.edit',['donhang'=>$donhang]);

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
