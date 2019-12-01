<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }

//    public function search()
//    {
//        $searchkey = \Request::get('title');
//        $addres = Address::where('')
//           return view('front.index');
//    }
}
