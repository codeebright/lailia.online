<<<<<<< current
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => 'required',
            'password' => 'required',
        ];
    }
}
=======
<?php

namespace App\Http\Requests;

//
use App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      // if (Auth::attempt(['phone' => $request['phone'], 'password' => $request['password']])){
      //     return redirect()->route(''); //name of this route is not Specified
      // }
      // return redirect()->back();

        return true; //jamal
        // return false; //default
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required|max:120',
          'phone' => 'required|max:10',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:8',
          'password_confirm' => 'required|same:password'
        ];
    }

    //Validation Message
    public function messages(){
      return [
        'name.required' => 'نام خود را وارید نکردید',
        'password.required' => 'رمز عبور خود را وارید نکردید',
        'phone.required' => 'رمز عبور خود را وارید نکردید',
        'phone.max' => 'رمز عبور خود را وارید نکردید',
        'password.min' => 'رمز عبور حدالقل 8 کرکتر باشد',
        'password_confirm.required' => 'تاید رمز عبور خود را وارید نکردید',
        'password_confirm.same' => 'رمز عبور تان مطابقت ندارد',
       ];

    }
}
>>>>>>> before discard
