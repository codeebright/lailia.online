<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/

class HomeController extends Controller
{
    //


    public function __construct()
    {
    }

    public function index()
    {

      $files = Hostel::all();
      return view('home',compact('files'));
    }

    public function myHome()
    {
        return view('myHome');
    }


    public function myUsers()
    {
        return view('myUsers');
    }
}
