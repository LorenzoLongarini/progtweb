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
                /*'password' =>'required|min:7|max:30|confirmed',
                'nome' =>'max:50|string',
                'cognome' =>'max:50|string',
                'ragioneSociale' => 'max:40',
                'ivaFiscale' =>'required|unique:users,ivaFiscale|size:15',
                'dataNascita' =>'date|before:today',
                'email'=> 'required|email|unique:users,email|max:40',
                'telefono'=> 'numeric|unique:users,telefono',
                'via'=>'required|max:50',
                'cap'=>'required|numeric|max:7',
                'città'=>'required|string|max:80',*/
                
            
        ];
    }
}
