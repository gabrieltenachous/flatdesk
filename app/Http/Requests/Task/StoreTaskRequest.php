<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'status' => 'required|boolean',  
            'description' => 'required',    
        ];
    }

    /** 
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório',
            'name.string' => 'Nome tem que ser do tipo string', 
            'name.max' => 'Nome deve ser menor que 255 caracteres', 
            'description.required' => 'Descrição é óbrigatorio', 
            'status.required' => 'Status é obrigatório',
            'status.boolean' => 'Status tem que ser booleano',
        ];
    }
}
