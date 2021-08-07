<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use illuminate\validation\rule;

class ProductRequest extends FormRequest
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
        return ['nome' => 'required|max:50',
                'prezzo' => 'required|numeric|min:0',
                'noteTecniche' => 'required|max:500',
                'modInstallaz' => 'required|max:500',
                'descrizione' => 'required|max:500',
                'imgName' => 'file|max:1024',
            
        ];
    }
}
