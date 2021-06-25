<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return ['username' =>'required|unique:users,username|max:25',
                'password' =>'required|min:7|max:30',
                'nome' =>'required|max:50|string',
                'cognome' =>'required|max:50|string',
                'ragioneSociale' => 'max:40',
                'ivaFiscale' =>'required|unique:users,ivaFiscale',
                'dataNascita' =>'date|before:today',
                'email'=> 'required|email|unique:users,email|max:40',
                'telefono'=> 'unique:users,telefono|digits: 10',
                'via'=>'required|max:50',
                'cap'=> 'digits:5',
                'città'=>'required|string|max:80',
                
            
        ];
    }
}
