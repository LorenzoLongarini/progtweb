<?php

namespace App\Http\Controllers;

class OrganizzatoreController extends Controller {

    public function __construct() {
        //$this->middleware('can:isOrganizzatore');
    }

    public function index() {
        return view('pages.user-level3');
    }

}