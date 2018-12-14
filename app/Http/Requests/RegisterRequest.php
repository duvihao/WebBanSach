<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'client_name'=>'required|min:2',
            'client_email'=>'required|unique:khach_hangs,email|email',
            'client_phone'=>'required|numeric|digits_between:9,11',
            'client_address'=>'required',
            //'client-birthday'=>'required|before:today'
            'client_pass'=>'required|min:6',
            'client_repass'=>'required|same:client_pass'
        ];
    }
    public function messages()
    {
        return [
            'client_name.required'=>'Vui lòng nhập tên',
            'client_email.required'=>'Vui lòng nhập email',
            'client_phone.required'=>'Vui lòng nhâp số điện thoại',
            'client_name.min'=> 'Nhập ít nhất 2 ký tự',
            'client_phone.digits_between'=> 'Số điện thoại nhập không đúng',
            'client_email.unique'=> 'Email được sử dụng',
            'client_email.email'=> 'Nhập định dạng email',
            'client_phone.numeric'=>'Vui lòng nhâp số',
            'client_address.required'=>'Vui lòng nhập địa chỉ',
            //'client-birthday'=>'Vui lòng nhập ngày sinh',
            'client_pass.required'=>'Vui lòng nhập password',
            'client_pass.min'=>'Vui lòng ít nhất 6 ký tự',
            'client_repass.same'=>'Mật khẩu nhập lại không giống',
        ];
    }
}
