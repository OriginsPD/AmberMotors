<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'name' => 'required|string',
            'phone_nbr' => 'required|min:8|max:10',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please Enter Your Full Name',
            'phone_nbr.required' => 'Please Enter Your Phone number',
            'address.required' => 'Please Enter Address',
            'email.required' => 'Please Enter Your Email',
            'email.unique' => 'Email Has Already Been Taken',
            'password.required' => 'Please Unique Password',
            'password.confirmed' => 'Password Does Not Match',
        ];
    }
}
