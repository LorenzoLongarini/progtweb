<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use illuminate\validation\rule;

class SearchRequest extends FormRequest
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
        return ['titolo' => 'required|max:50',
                'artista' => 'required|max:50',
                'descrizione' => 'required|max:50',
                'data' => 'required|date|after:today',      
        ];
    }
}
