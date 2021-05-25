<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user3Controller extends Controller
{
    public function showInsertEvent(){
        
        return view('pages.user3-insert');
    }
 
    public function storeEvent(EventOptions $request){
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName  = $image->getClientOriginalName();
        }else{
            $imageName = NULL;
        }

    }
}
