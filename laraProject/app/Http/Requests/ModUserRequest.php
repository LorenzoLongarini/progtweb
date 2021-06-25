<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModUserRequest extends FormRequest
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
                'password' =>'required|min:7|max:30|confirmed',
                'nome' =>'max:50|string',
                'cognome' =>'max:50|string',
                'ragioneSociale' => 'max:40',
                'ivaFiscale' =>'required',
                'dataNascita' =>'date|before:today',
                'email'=> 'required|email|max:40',
                'telefono'=> 'digits:10',
                'via'=>'required|max:50',
                'cap'=>'required|digits:5',
                'città'=>'required|string|max:80',
        ];
    }
}
