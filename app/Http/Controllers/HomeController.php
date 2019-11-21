<<<<<<< current
<?php

namespace App\Http\Controllers;
use App\Hostel;
use Illuminate\Support\Facades\input;
use App\Address;
/*use Illuminate\Http\Request;*/

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {

      $hostels = Hostel::all();
      return view('front/home',compact('hostels'));
    }

    public function myHome()
    {
        $hostels = Hostel::all();
        return view('front/home',compact('hostels'));
    }


    // home search function by address
    public function homeSearch()
    {
      $q = Input::get('q');
      $type = Hostel::where('name','LIKE','%{$q}%')->get();
      dd($type);
      if(!empty($type))
      {
        return view('front/myHome')->withDetails($address)->withQuery($q);
      }
          else return back()->withMessage('آدرس مورد نظر پیدا نشد ');
    }
}
=======
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
>>>>>>> before discard
