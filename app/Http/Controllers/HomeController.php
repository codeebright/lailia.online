<<<<<<< current
<?php

namespace App\Http\Controllers;

use App\Hostel;
use Illuminate\Support\Facades\DB;
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
        return view('front/home', compact('hostels'));
    }


    // home search function by address
    public function homeSearch()
    {

        $q =  Input::get('q');
        if ($q != ''){
            $address = DB::table('hostels')
                ->join('addresses','addresses.id','=','hostels.id')
                ->join('hostel_photos','hostel_photos.id','=','hostels.id')
                ->where('state','LIKE','%'.$q.'%')
                ->orwhere('rood','LIKE','%'.$q.'%')
                ->orwhere('station','LIKE','%'.$q.'%')
                ->orwhere('alley','LIKE','%'.$q.'%')
                ->select('addresses.*','hostels.*','hostel_photos.file_name')->get();
            if (count($address)>0)
              return view('front/roomFilter',compact('address'))->withDetails($address)->withQuery($q);
        }
        else{
            return back()->withMessage('جستجوی مورد نظر یافت نشد!');
        }
    }

<<<<<<< HEAD
}

=======
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
>>>>>>> cf4127a3a5b27535d71d6393512c2dea60c6f5f7
