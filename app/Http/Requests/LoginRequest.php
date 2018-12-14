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
            'loginEmail'=>'required|email',
            'loginPass'=>'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'loginEmail.required'=>'Vui lòng nhập Email',
            'loginPass.required'=>'Vui lòng nhập Password',
            'loginEmail.email'=> 'Nhập định dạng email',
            'loginPass.min'=>'Vui lòng nhập ít nhất 6 ký tự'
        ];
    }
}
