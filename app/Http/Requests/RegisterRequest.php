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
            'email' => 'required|email',
            'name' => 'required',
            'birthday' => 'required|date',
            'notelp' => 'required|numeric',
            'gender'=> 'required|in:Laki-laki,Perempuan',
            'address'=> 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
        ];
    }
}
