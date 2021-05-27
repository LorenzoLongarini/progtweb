<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {

    public function __construct() {
        //$this->middleware('can:isAdmin');
        
    }

public function index(){

    return view('pages.user-level4');

}



}