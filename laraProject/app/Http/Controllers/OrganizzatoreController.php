<?php

namespace App\Http\Controllers;

class OrganizzatoreController extends Controller {

    public function __construct() {
        $this->middleware('can:isOrganiz');
    }

    public function index() {
        return view('pages.user-level3');
    }

}