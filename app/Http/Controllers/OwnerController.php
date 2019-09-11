<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\ownerRequest;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{

    public function index()
    {
        //passing the  adminPanels page info to the view
      //  $owner = Owner::all();
     //   $owner = DB::table('owners')->find(1);
        $owner = DB::select('select * from owners WHERE id = "1" ');

        return view('owner',compact('owner'));

    }


    public function create()
    {
        //create new adminUser
        // load the create form (app/views/owner.blade.php/)
        return view('owner');

    }


    public function store(ownerRequest $ownerRequest)
    {
      //  Owner::create(request()->all());
        $owner = new Owner($ownerRequest);
        $owner->name = request('name');
        $owner->last_name = request('last_name');
        $owner->phone= request('phone');
        $owner->email= request('email');
        $owner->password= request('password');
        $owner->confirm_password= request('confirm_password');
        $owner->save($owner);
        return redirect('/Owner')->with('success',true);
    }


    public function show(Owner $owner)
    {
        //
    }

    public function edit(Owner $owner)
    {
        //
    }


    public function update(Request $request, Owner $owner)
    {
        //
    }


    public function destroy(Owner $owner)
    {
        //
    }
}
