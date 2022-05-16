<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreUserController extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255:unique:users',
            'password' => 'required|string|required_with:password_confirmation|same:password_confirmation|min:8',  
        ];
    }

    /** 
     *
     * @return array
     */
    public function messages()
    {
        return [ 
            'name.required' => 'Nome é óbrigatorio',
            'name.string' => 'Nome tem que ser do tipo string',
            'name.string' => 'Nome tem que ser do tipo string',
            'name.max' => 'Email tem que ser menor que 255 caracteres',
            'email.required' => 'Email é óbrigatorio',
            'email.string' => 'Email tem que ser do tipo string',
            'email.email' => 'Email incorreto',
            'email.max' => 'Email tem que ser menor que 255 caracteres',
            'password.required' => 'Senha é óbrigatorio',
            'password.string' => 'Senha tem que ser do tipo string',
            'password.min' => 'Senha tem que ser maior que 8 caracteres',
            'password.password_confirmation' => 'Confirma senha é óbrigatorio com a senha ', 
            'password.same' => 'Confirma senha não é igual a senha '
        ];
    } 
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors(),'status' => true], 422));
    }
    
    
}
