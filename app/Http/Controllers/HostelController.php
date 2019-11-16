<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    public function index()
    {
        return view('cms.hostel.hostel_index');
    }

    public function create()
    {
        return view('cms.hostel.hostel_config');
    }

    public function store(Request $request)
    {
        $hostel = new Hostel;
        $hostel->name = $request->name;
        $hostel->owner_id = 1; //Aut::user()->id;
        $hostel->type = $request->type;

        $hostel->save();

        $hostel_details = new HostelDetails();
        $hostel_details->hostel_id = $hostel->id;
        $hostel_details->phone = $request->phone;
        $hostel_details->email = $request->email;
        $hostel_details->descrption = $request->descrption;

        $hostel_details->save();

        $address = new Address();
        $address ->hostel_id = $hostel->id;
        $address->province = $request->province;
        $address->state = $request->state;
        $address->street = $request->street;
        $address->alley = $request->alley;
        $address->station = $request->station;
        $address->save();

        return back()->with('success','Data is stored successfully');

    }
    public function show()
    {
    }

    public function edit()
    {
    }

    public function update(Request $request)
    {
    }

    public function destroy()
    {
    }

    // list hostels
    public function listHostel(Request $request)
    {
        $page = $request->page;
        if($page=='')
        {
          $page = 0;
          $skip = $page*4;
        }
        else
           $skip = $page*4;

        $hostels = Hostel::skip($skip)->take(4)->get();

        if($page==0)
          return view('front/khabgah_list',compact('hostels'));
        else
          return view('front/khabgah_show_more',compact('hostels'));
    }



    public function paginate()
    {
        $images = Attachment::all();
        return view('pagination',compact('images'));
    }
}
