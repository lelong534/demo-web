<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPostCV extends FormRequest
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
            'name'              => 'required|max:50',
            'email'             => 'required|email|unique',
            'phone'             => 'required',
            'cv'                => 'required',
            'invitation'        => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Tên không được để trống',
            'name.max'          => 'Tên không được quá 50 kí tự',
            'email.required'    => 'Email không được để trống',
            'email.email'       => 'Email không đúng định dạng',
            'phone.required'    => 'Số điện thoại không được để trống',
            'cv.required'       => 'CV không được để trống',
            'invitation.required'   => 'Thư giới thiệu không được để trống',
        ];
    }
}
