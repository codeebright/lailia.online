<?php

namespace App\Http\Controllers;

use App\Address;
use App\Hostel;
use App\HostelDetails;
use App\Facility;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.hostel.hostel_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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


      /*  if(count($request->facilities)>0)
        {
            $facility = new Facility();
            $facility_input = $request->facilities;
            $details        = $request->descriptions;
            for($i=0; $i<count($request->facilities); $i++)
            {
                $facility->name = $facility_input[$i];
                $facility->details = $details[$i];
                $facility->hostel_id = $hostel->id;
                $facility->save();
            }
        }*/


        return back()->with('success','Data is stored successfully');

    }

    /**
     * Display the specified resource.
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
    public function edit(hostels $hostels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hostels  $hostels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hostels $hostels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hostels  $hostels
     * @return \Illuminate\Http\Response
     */
    public function destroy(hostels $hostels)
    {
        //
    }
}
