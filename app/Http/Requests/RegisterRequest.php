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
            'username' => 'required|alpha_num|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'telephone' => 'required',
            'nationality' => 'required',
            'birth_date' =>'required|date',
            'password' => [
                'required',
                'min:6',
                'regex:/^(?=.*[a-z])(?=.*[a-zA-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
            ]
        ];
    }
}
