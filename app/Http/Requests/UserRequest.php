<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'role'=>'required',
            'email'=>'required',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'role.required' => 'Please confirm user department',
            'email.required' => 'Required valid email',
            'password.required' => 'Required valid password'
        ];
    }
}
