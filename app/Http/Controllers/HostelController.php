<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\HostelDetails;
use App\Address;
use App\Facility;
use App\Attachment;
use App\Room;
use Illuminate\Http\Request;
use App\Http\Requests\HostelRequest;
use App\Http\Requests\ownerRequest;
class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $hostels = Hostel::with('address')->get();
        $hostels = Hostel::with('facility')->get();
        $facilities = Facility::all();
       // $address = Address::all();
        $Rooms = Room::all();
        return view('cms.hostel.hostel_index', compact('hostels' , 'Rooms' ));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
//
//
//        $hostel = [
//            'name' => request()->input('name'),
//            'type' => request()->input('type'),
//            'phone' => request()->input('phone'),
//            'email' => request()->input('email'),
//            'description' => request()->input('description'),
//        ];
//
//
//        $Hostel_opject = Hostel::create($hostel);
//        if ($Hostel_opject instanceof Hostel){
//            return redirect()->route('hostel.index')->with('success', 'لیلییه با موفقییت علاو گردید');
//
//        }

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

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\hostels  $hostels
         * @return \Illuminate\Http\Response
         */

    public function show(hostels $hostels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hostels  $hostels
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if ($id && ctype_digit($id)){
            $hostel = Hostel::find($id);
            // if the object is exist
            if ($hostel && $hostel instanceof Hostel){

                return view('cms/hostel/hostel_create', compact('hostel'))->with('success', 'لیلیه را ورایش میتوانید');
            }
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hostels  $hostels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //


        $input = [
            'name' => request()->input('name'),
            'type' => request()->input('type'),
            'phone' => request()->input('phone'),
            'email' => request()->input('email'),
            'description' => request()->input('description'),
        ];

        $hostel = Hostel::find($id);
        $hostel->update($input);
        return redirect()->route('hostel.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hostels  $hostels
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // delet the hostel ... ramazan
        if ($id && ctype_digit($id)){
            $hostel = Hostel::find($id);
            // if the object is exist
            if ($hostel && $hostel instanceof Hostel){
                $hostel->delete();
                return redirect()->back()->with('success', 'لیلیه حذف گردید.');
            }
        }
    }


    /*
     * List Hostel front
     * */

    public function listHostel()
    {
        $hostels = Hostel::all();
        return view('front/khabgha_list',['hostels' => $hostels]);
    }

}
