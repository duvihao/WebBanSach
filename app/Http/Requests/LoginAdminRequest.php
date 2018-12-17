<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAdminRequest extends FormRequest
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
            'adminlogin_email'=>'required|email',
            'adminlogin_password'=>'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'adminlogin_email.required'=>'Vui lòng nhập Email',
            'adminlogin_password.required'=>'Vui lòng nhập Password',
            'adminlogin_email.email'=> 'Nhập định dạng email',
            'adminlogin_password.min'=>'Vui lòng nhập ít nhất 6 ký tự'
        ];
    }
}
