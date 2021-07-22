<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resources\Evento;
use App\Models\Resources\Biglietto;
use App\Models\Resources\Partecipazioni;
use App\Http\Requests\ModUserRequest;
use App\Models\User;

class TecnController extends Controller {

    public function __construct() {
       //$this->middleware('can:isTecn');
    }

public function index(){

    return view('pages.user-tecnico');

}


}