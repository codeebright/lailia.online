<?php

namespace App\Http\Controllers;

use App\Hostel;
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
     * Show the form for creating a new Hostel CMS.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.hostel.hostel_config');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    /**
     * Display the specified resource.
     *
     * @param  \App\hostels  $hostels
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hostels  $hostels
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hostels  $hostels
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
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
