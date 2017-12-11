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

class TypeRestaurantsController extends JoshController
{
    public function index()
    {

     $data = DB::table('loainhahang')->get();
     if( count($data) > 0 ){
        return view('admin.typerestaurants.index')->with(['data' => $data]);
    } else {
        return view('admin.typerestaurants.create');
    }
}

public function create()
{
    return view('admin.typerestaurants.create');
}

public function store(){   

    //$data = DB::table('loainhahang')->get();
    $data = array(
        'tenlnh' => $_POST["tenlnh"],  
        'ghichu' => $_POST["ghichu"]
    );


    DB::table('loainhahang')->insert($data);
    return Redirect::route('admin.typerestaurants')->with('success');


}

public function update(Request $request,$idlnh)
{

    // $loainhahang = Loainhahang::find($idlnh);
    // echo $loainhahang;


    // $data = array( 
    //     'tenlnh' => $_POST["tenlnh"],
    //     'ghichu' => $_POST["ghichu"]
    // );

    // DB::table('loainhahang')->where('idlnh', $idlnh)->update($data);

    // return Redirect::route('admin.typerestaurants')->with('success');



}



public function edit($id){


    $loainhahang = Loainhahang::find($id);
    // echo $loainhahang;
    //return view('admin.typerestaurants.edit',['loainhahang'=>$loainhahang]);

}


public function delete_modal($id = null)
{
    $data = DB::table('loainhahang')->where('idlnh',$id)->first();
    return view('admin.typerestaurants.delete_modal')->with(['data' => $data]);
}

public function delete($id = null)
{
    DB::table('loainhahang')->where('idlnh', $id)->delete();

    $data = DB::table('loainhahang')->get();
    if( count($data) > 0 ){
        return view('admin.typerestaurants.index')->with(['data' => $data]);
    } else {
       return view('admin.typerestaurants.create');
   }
}


}
