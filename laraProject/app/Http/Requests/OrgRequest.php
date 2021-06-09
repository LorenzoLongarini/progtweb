<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrgRequest extends FormRequest
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
                 'username' =>'required|unique:users,username|max:25',
                 'password' =>'required|min:7|max:30|confirmed',
                 'nome' =>'max:50|string|nullable',
                 'cognome' =>'max:50|string|nullable',
                 'ivaFiscale' =>'required|unique:users,ivaFiscale',
                 'ragioneSociale' => 'required|unique:users,ragioneSociale|max:40',
                 'email'=> 'required|email|unique:users,email|max:50',
                 'telefono'=> 'required|numeric|unique:users,telefono',
                 'via'=>'required|max:50',
                 'cap'=>'required|numeric|max:7',
                 'città'=>'required|string|max:80',
        ];
    }
}
