<?php

namespace App\Http\Controllers;

class ClientController extends Controller {

    public function __construct() {
       $this->middleware('can:isClient');
    }

public function index(){

    return view('pages.user-level2');

}
}