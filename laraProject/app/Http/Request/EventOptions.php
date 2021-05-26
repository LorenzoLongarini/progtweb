<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

// Aggiunti per response JSON
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class EventOptions extends FormRequest {
    
     // Determine if the user is authorized to make this request.
    
      //@return bool

      public function authorize()
      {
      return true;
      }
     

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'titolo'=> 'require|max:25',
            /*'artista'=>'required|max:25',
            'data'=>'required',
            'luogo'=>'required',
            'prezzo'=>'required|numeric|min:0',
            //'descrizione'=>
            //'programma'=>
            'biglietti_disp'=>'required',
            'sconto'=>'required|integer|min:0|max:100',
            'data_sconto'=>'required',
            'maps_url'=>'required',
            'img_name'=>'file|mimes:jpeg,png|max:1024',
        'stato_evento'=>'required'*/];
    }
    
    /**
     * Override: response in formato JSON
    */ 
    
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    } 

}
