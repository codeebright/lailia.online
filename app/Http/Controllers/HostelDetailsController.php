<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HostelDetailsController extends Controller
{
    public function index()
    {
    	$users = DB::table('hostel_details')->get();
    	
        return view('khabgah_details', ['users' => $users]);

    	// DB::table('hostel_details')->orderBy('id')->chunk(20, function($users){
    	// 	return view ('khabgah_details',['users' => $users]);
    	// });
    }
}
