<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAdminRequest extends FormRequest
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
            'admin_name'=>'required|min:2',
            'admin_email'=>'required|unique:khach_hangs,email|email',
            'admin_password'=>'required|min:6',
            'admin_confirmpassword'=>'required|same:admin_password'
        ];
    }
    public function messages()
    {
        return [
            'admin_name.required'=>'Vui lòng nhập tên',
            'admin_email.required'=>'Vui lòng nhập email',
            'admin_name.min'=> 'Nhập ít nhất 2 ký tự',
            'admin_email.unique'=> 'Email được sử dụng',
            'admin_email.email'=> 'Nhập định dạng email',
            'admin_password.required'=>'Vui lòng nhập password',
            'admin_password.min'=>'Vui lòng ít nhất 6 ký tự',
            'admin_confirmpassword.same'=>'Mật khẩu nhập lại không giống'
        ];
    }
}
