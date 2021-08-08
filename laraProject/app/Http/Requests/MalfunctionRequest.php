<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use illuminate\validation\rule;

class MalfunctionRequest extends FormRequest
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
        return ['nomeMalf' => 'required|max:30',
                'problema' => 'required|max:500',
                'soluzione' =>'required|max:500',
            
        ];
    }
}
