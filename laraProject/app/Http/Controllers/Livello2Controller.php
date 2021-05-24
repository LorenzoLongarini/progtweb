<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Livello2;

class Livello2Controller extends Controller
{

   protected $_livello2Model;

   public function _construct(){
        $this->_livello2Model = new Livello2;
   }

   public function index(){
       return view('modifica-dati');
   }

   public function modifyData(){

   }

   public function storeData(){

   }
}
