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

        $hostels = DB::table('hostels')
            ->join('attachments','attachments.id','=','hostels.id')
        ->select('hostels.*','attachments.*')
        ->where('hostel_id',1)->get();
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

}

