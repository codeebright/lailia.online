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

        $hostels = DB::table('hostels')->orderBy('created_at' , 'desc')->take(5)->get();
        return view('front/home', compact('hostels'));
    }


    // home search function by address
    public function homeSearch()
    {
        $qu = Input::get('qu');
        if (!empty($qu)) {
            $address = Address::where('state', 'LIKE', '%' . $qu . '%')
                ->orwhere('station', 'LIKE', '%' . $qu . '%')->get();
            if (count($address) > 0)
                return view('pagination')->withDetails($address)->withQuery($qu);
        }
        else{
            return view('front/home')->withMessage('آدرس مورد نظر یافت نشد!');
        }

    }

}
