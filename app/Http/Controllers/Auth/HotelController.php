<?php
namespace App\Http\Controllers;

use App\Http\Resquests;
class HotelController extends JoshController
{

	public function index()
	{
		$data = DB::table('home')->get();
		if( count($data)>0)
		{
			return view('admin.hostel.index')->with(['data' => $data]);
		}else{
			return view('admin.hostel.create')->with(['data' => $data]);
		}
	}

	public function create()
	{
		return view('admin.hostel.create');
	}
}