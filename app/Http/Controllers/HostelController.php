<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Hostel;
use App\HostelDetails;
use App\Address;
use App\Facility;
use App\Attachment;
use App\Owner;
use App\Room;
use Illuminate\Http\Request;
use App\Http\Requests\HostelRequest;
use App\Http\Requests\ownerRequest;
class HostelController extends Controller
{
    public function index()
    {
        // get hostel address and facility and send to blade 'ramazan'
        $hostels = Hostel::with('address' , 'facility')->get();
        $Rooms = Room::all();
        return view('cms.hostel.hostel_index', compact('hostels' , 'Rooms' , 'owner'));
    }





    /**
     * Show the form for creating a new Hostel CMS.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.hostel.hostel_create')->with($panel_title = 'ایجاد لیلیه جدید');
    }

    public function store(Request $request)

    {
        $hostel = new Hostel;
        $hostel->name = $request->name;
        $hostel->owner_id = 1; //Aut::user()->id;
        $hostel->type = $request->type;
        $hostel->phone = $request->phone;
        $hostel->email = $request->email;
        $hostel->description = $request->description;
        $hostel->save();

        $address = new Address();
        $address ->hostel_id = $hostel->id;
        $address->province = $request->province;
        $address->state = $request->state;
        $address->rood = $request->rood;
        $address->alley = $request->alley;
        $address->station = $request->station;
        $address->home_number = $request->home_number;
        $address->save();
        foreach ($request->facility_name as  $name) {
               // code...
               $facility = new Facility;
               $facility->hostel_id = $hostel->id;
               $facility->facility_name = $name;
               $facility->save();
             }

//        $image = $request->file('file');
//        $imageName = $image->getClientOriginalName();
//        $image->move(public_path('images'),$imageName);
//
//        $attachments = new Attachment();
//        $attachments->filename = $imageName;
//        $attachments->save();
//        return response()->json(['success'=>$imageName]);






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
