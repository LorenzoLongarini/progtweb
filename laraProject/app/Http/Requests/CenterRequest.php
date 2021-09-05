<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CenterRequest extends FormRequest
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
            'nome' =>'required|max:50|string',
            'città' =>'required|max:50|string',
            'regione' =>'required|max:50|string',
            'via'=>'required|max:50',
            'email'=> 'required|email|max:40',
            'telefono'=> 'digits:10|numeric',
                
        ];
    }
}
