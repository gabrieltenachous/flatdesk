<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',  
        ];
    }

    /** 
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email é óbrigatorio',
            'email.string' => 'Email tem que ser do tipo string',
            'email.max' => 'Email tem que ser menor que 255 caracteres',
            'password.required' => 'Senha é óbrigatorio',
            'password.string' => 'Senha tem que ser do tipo string',
            'password.min' => 'Senha tem que ser maior que 8 caracteres',
        ];
    }
}
