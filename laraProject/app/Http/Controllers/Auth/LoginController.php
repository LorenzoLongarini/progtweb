<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller{

    Use AuthenticatesUsers;


  //definisce la homepage per i diversi utenti 

    protected function redirectTo(){
        $role=auth()->user()->role;
        switch($role){
            case 'admin': return '/admin';
            break;
            case 'user':return '/user';
            break;
            default: return '/'

        };
    }
    // crea istanza controller
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }











}