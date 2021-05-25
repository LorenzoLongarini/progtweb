<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use illuminate\validation\rule;

class EventRequest extends FormRequest
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
                'luogo' => 'required|max:100',
                'immagine' => 'image|max:2048',
                'regione' => 'required',
                'data' => 'required|date|after:today',
                'bigliettiDisp' => 'required|min:0',
                'prezzo' => 'float|required|min:0',
                'sconto' => 'integer|min:0|max:100',
                'descBreve' => 'required|max:200',
                'programma' => 'required|max:2000'
            
        ];
    }
}
