<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user3Controller extends Controller
{
    public function showInsertEvent(){
        //$utente3 = new Faq;
        return view('pages.user3-insert');
        //->with('faqs', $faqs::all());
    }
 
    public function insertEvent(){
 
    }
 
    public function storeEvent(){
 
    }
}
