<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $owners = DB::select('select * from owners WHERE id = "2" ');

        return view('cms.hostel.profile',compact('owners'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.hostel.profile_create');
        //
//        $this->validate($request, [
//            'phone' => 'required|max:10',
//            'password' => 'required|min:8'
//        ]);
//
//        if (Auth::attempt(['phone' => $request['phone'], 'password' => $request['password']])){
//            return redirect()->route('adminUser');
//        }
//        return redirect()->back();
    }
//
//    // Login function
//    public function login(LoginRequest $request)
//    {
//        $phone_no = $request->phone;
//        $password = $request->password;
//
//        return $phone_no;
//
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
//        $this->validate($request, [
//            'name' => 'required|max:120',
//            'phone' => 'required|max:10',
//            'email' => 'required|email|unique:users',
//            'password' => 'required|min:8',
//            'password_confirm' => 'required|same:password'
//        ],[
//            'name.required' => 'نام خود را وارید نکردید',
//            'password.required' => 'رمز عبور خود را وارید نکردید',
//            'password.min' => 'رمز عبور حدالقل 8 کرکتر باشد',
//            'password_confirm.required' => 'تاید رمز عبور خود را وارید نکردید',
//            'password_confirm.same' => 'رمز عبور تان مطابقت ندارد',
//        ]);
        //Pushed

//        $name = $request['name'];
//        $phone = $request['phone'];
//        $email = $request['email'];
//        $password = bcrypt($request['password']);
//        $password_confirm = bcrypt($request['password_confirm']);
//
//        $user = new User();
//        $user->name = $name;
//        $user->phone = $phone;
//        $user->email = $email;
//        $user->password = $password;
//        $user->password_confirm = $password;
//
//        $user->save();
//
//        return redirect()->route('adminUser');


        $owner = new Owner();
        $owner->name = $request->name;
        $owner->email = $request->email;
        $owner->phone_number = $request->phone_number;
        $owner->fb = $request->fb;
        $owner->twitter = $request->twitter;
        $owner->linkedIn = $request->linkedIn;
        $owner->insta = $request->Insta;
        $owner->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        if ($id && ctype_digit($id)){
            $owner = Owner::find($id);

            // if the object is exist
            if ($owner && $owner instanceof Owner){

                return view('cms/hostel/profile_create', compact('owner'))->with('success', 'مشخصات خود را واریش کرده میتوانید');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        // make update the hostel owner
        $owner = Owner::find($id);
        $owner->name = $request->get('name');
        $owner->email = $request->get('email');
        $owner->phone_number = $request->get('phone_number');
        $owner->fb= $request->get('fb');
        $owner->insta= $request->get('insta');
        $owner->linkedIn= $request->get('linkedIn');
        $owner->twitter= $request->get('twitter');
        $owner->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delet the account ... ramazan
        if ($id && ctype_digit($id)){
            $owner = Owner::find($id);
            // if the object is exist
            if ($owner && $owner instanceof Owner){
                $owner->delete();
                return redirect()->route('Owner.index')->with('success', 'اکانت شما حذف گردید');
            }
        }
    }
}
