<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hostel;

class myHomeController extends Controller
{
    public function filter()
    {
      $details = Hostel::all();
      return view('front/myHome',compact('details'));
    }
}
