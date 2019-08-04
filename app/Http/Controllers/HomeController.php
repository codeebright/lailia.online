<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/

class HomeController extends Controller
{
    //


    public function __construct()
    {
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
