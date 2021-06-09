<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModOrgRequest extends FormRequest
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
                 'username' =>'required|max:25',
                 'password' =>'min:7|max:30|confirmed',
                 'nome' =>'max:50|string',
                 'cognome' =>'max:50|string',
                 'ivaFiscale' =>'required',
                 'email'=> 'required|email|max:50',
                 'telefono'=> 'required|numeric|',
                 'via'=>'required|max:50',
                 'cap'=>'required|numeric|max:7',
                 'città'=>'required|string|max:80',
        ];
    }
}
