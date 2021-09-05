<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\User; 



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
        //$id = $this->request->get('usersId');
        //$user = User::find($this->usersId);
        return [
                'username' =>'required|max:25', Rule::unique('users')->ignore($this->usersId, 'usersId'),
                'password' =>'required|min:5|max:30',
                'nome' =>'required|max:50|string',
                'cognome' =>'required|max:50|string',
                'ivacf' =>'required',Rule::unique('users')->ignore($this->usersId, 'usersId') ,
                'dataNascita' =>'date|before:today',
                'email'=> 'required|email|max:40',Rule::unique('users')->ignore($this->usersId, 'usersId'),
                'telefono'=> 'digits:10|numeric',
                'via'=>'required|max:50',
                'cap'=>'required|digits:5|numeric',
                'centersId'=>'numeric',
                'città'=>'required|string|max:80',
                
                
            
        ];
    }
}
