<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
<<<<<<< HEAD

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $owner = DB::select('select * from owners WHERE id = "1" ');
        return view('owner',compact('owner'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $this->validate($request, [
            'phone' => 'required|max:10',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt(['phone' => $request['phone'], 'password' => $request['password']])){
            return redirect()->route(''); //name of this route is not Specified
        }
        return redirect()->back();
    }

    // Login function
    public function login(LoginRequest $request)
    {
        $phone_no = $request->phone;
        $password = $request->password;

        return $phone_no;

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
        $this->validate($request, [
            'name' => 'required|max:120',
            'phone' => 'required|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password'
        ],[
            'name.required' => 'نام خود را وارید نکردید',
            'password.required' => 'رمز عبور خود را وارید نکردید',
            'phone.required' => 'نمبر موبایل خود را وارید نکردید.',
            'phone.max' => 'نمبر موبایل شما 10 کرکتر باشد.',
            'email.required' => 'ایمل خود را وارید نکردید.',
            'password.min' => 'رمز عبور حدالقل 8 کرکتر باشد',
            'password_confirm.required' => 'تاید رمز عبور خود را وارید نکردید',
            'password_confirm.same' => 'رمز عبور تان مطابقت ندارد',
        ]);


        $name = $request['name'];
        $phone = $request['phone'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $password_confirm = bcrypt($request['password_confirm']);

        $user = new User();
        $user->name = $name;
        $user->phone = $phone;
        $user->email = $email;
        $user->password = $password;
        $user->password_confirm = $password;

        $user->save();

        return redirect()->route('adminUser');
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
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        //
    }
}
>>>>>>> before discard
