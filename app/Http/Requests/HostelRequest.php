<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HostelRequest extends FormRequest
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
            // create hostel table rules
            'name' => 'required',
            'email' => 'required|email',
            'descrption' => 'required|number|max:12',
            'phone' => 'required|number|max:12',
            'type' => 'required',

        ];
    }



    public function messages()
    {

        return [
            // hostel table rules
            'name.required' => 'اسم ضروری میباشد',
            'phone.required' => 'نمبر تماس ضروری میباشید',
            'email.required' => 'ایمیل ادرس ضروری میباشد',
            'email.email' => 'به شکل درست ایمیل را وارید کنید',
            'type.required' => 'نوعیت لیلیه الزامی میباشد',
            'descrption.required' => 'توضیحات الزامی میباشد .'
        ];
    }
}
