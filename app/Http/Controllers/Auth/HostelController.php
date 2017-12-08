<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use Lang;
use Redirect;
use Sentinel;
use View;
use DB;
use Request;

class DishesController extends JoshController
{
    public function index()
    {
        $data = DB::table('dishes')->get();
        //var_dump($data);
        //die();

        if( count($data) > 0 ){
            return view('admin.hostel.index')->with(['data' => $data]);
        } else {
            return view('admin.hostel.create')->with(['data' => $data]);
        }
    }

    public function create()
    {
        // Show the page
        return view('admin.hostel.create');
    }
	
	public function store(){   

        $tmp_name = $_FILES['pic_file']["tmp_name"];

        $name = 'nha'.$_POST["id"].'.jpg';

        move_uploaded_file($tmp_name, "uploads/hostel/$name");
 
		$data = array('IdHome' => $_POST["id"],
					  'IdHost' => $_POST["name"],
					  'Image' => $name,);

        //insert $data to database
        if( !DB::table('home')->where('id', $_POST["id"])->first() ){
            DB::table('home')->insert($data);
            //Show the index page
            return Redirect::route('admin.hostel')->with('success');
        } else {
            return view('admin.hostel.edit');
        }
        
	}

    public function edit($id = null){
        //Take $data as an object match with $id
         $data = DB::table('hostel')->where('id',$id)->first();

        // Show the edit page and give the page $data
        return view('admin.hostel.edit')->with(['data' => $data]);
    }

    public function update()
    {
        $id = $_POST['id'];

        //update data where id match $id
        DB::table('hostel')->where('id', $id)->update(['name' => $_POST["name"] ]);
        //it's the same image name so we dont need to update in database

        //delete old image
        $name = 'dish'.$_POST["id"].'.jpg';
        unlink("uploads/hostel/$name");

        //place new image
        $tmp_name = $_FILES['pic_file']["tmp_name"];
            
        move_uploaded_file($tmp_name, "uploads/hostel/$name");

        //view index page
        $data = DB::table('home')->get();//get data 

        if( count($data) > 0 ){
            return view('admin.hostel.index')->with(['data' => $data]);
        } else {
            return view('admin.hostel.index');
        }
    }

    public function delete_modal($id = null)
    {
        $data = DB::table('hostel')->where('id',$id)->first();


        return view('admin.hostel.delete_modal')->with(['data' => $data]);
    }

    public function delete($id = null)
    {
        //update data where id match $id
        DB::table('home')->where('id', $id)->delete();

        //view index page
        $data = DB::table('home')->get();//get data 

        if( count($data) > 0 ){
            return view('admin.hostel.index')->with(['data' => $data]);
        } else {
             return view('admin.hostel.create');
        }
    }
}
