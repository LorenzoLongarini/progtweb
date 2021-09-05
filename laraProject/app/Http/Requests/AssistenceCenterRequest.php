<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use illuminate\validation\rule;

class AssistenceCenterRequest extends FormRequest
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
                'nome' => 'required|max:500',
                'via' =>'required|max:50',
                'telefono' =>'required|digits:10',
                'email'=>'required|max:50'
            
        ];
    }
}
