<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Product;
use App\Models\Resources\User;

class Catalogo extends Model
{
    public static function verificaDescrizione($descrizione){
        $counter=substr_count($descrizione,"*");
        if($counter <= 1){
            if($counter==1)
             return str_replace("*","",$descrizione);
            else return $descrizione;
        }else return;
       

    }
    public static function listaProdotti(){
        $paged=1;
        if(Product::all()!= null){
        $prodotti = Product::all();
        }
        return $prodotti;
     


            
        
    }

    public static function ricercaPerDescrizione(SearchRequest $request){
       $counter= substr_count($request->descrizione,"*");
       $strDesc= str_replace("*","",$request->descrizione);
    
       {
           if($counter==1)
           {
             return $risultati=Product::whereRaw('descrizione REGEXP'. '\'' .  '[[:<:]]'. $strDesc.'\'')->get();
           }
           else if($counter == 0) 
           return  $risultati=Product::whereRaw('descrizione REGEXP'. '\'' .  '[[:<:]]'. $request->descrizione. '[[:>:]]'.'\'')->get();
       }
       
    

    }











    
}
