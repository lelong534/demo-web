<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPost extends FormRequest
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
            'email'             => 'required|email',
            'phone'             => 'numeric',
            'cv'                => 'required|mimes:dpf,xls,xlsx,doc|size:2048',
            'invitation'        => 'max:3000',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Tên không được để trống',
            'name.max'          => 'Tên không được quá 50 kí tự',
            'email.required'    => 'Email không được để trống',
            'email.email'       => 'Email không đúng định dạng',
            'cv.required'       => 'CV không được để trống',
            'invitation.max'    => 'Lời giới thiệu không quá 3000 từ'
        ];
    }
}
