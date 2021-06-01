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
        return false;
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
                 'nome' =>'max:50|string',
                 'cognome' =>'max:50|string',
                 'ivaFiscale' =>'required|unique:users,ivaFiscale',
                 'email'=> 'required|email|unique:users,email|max:50',
                 'telefono'=> 'required|numeric|unique:users,telefono',
                 'via'=>'required|max:50',
                 'cap'=>'required|numeric|max:7',
                 'città'=>'required|string|max:80',
        ];
    }
}
