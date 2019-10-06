<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ownerRequest extends FormRequest
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
            // owner table rules
            'name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
            'descrption' => 'required|number|max:12',
            'phone' => 'required|number|max:12',
            'type' => 'required',

        ];
    }
    
    public function messages()
    {

        return [
            // owner table rules
            'name.required' => 'اسم ضروری میباشد',
            'last_name.required' => 'تخلص ضروری میباشد',
            'phone_number.required' => 'نمبر تماس ضروری میباشید',
            'email.required' => 'ایمیل ادرس ضروری میباشد',
            'email.email' => 'به شکل درست ایمیل را وارید کنید',
            'password.required' => 'رمز عبور ضروری میباشد',
            'password.required.min' => 'رمز عبور از شش کرکتر کمتر نباشد',
            'password.required.max' => 'رمز عبور از دوازده کرکتر بیشتر نباشد',
        ];
    }
}
