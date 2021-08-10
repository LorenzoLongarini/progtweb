<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\FaqRequest;
use App\Http\Requests\EventRequest;
use App\Http\Requests\ModOrgRequest;
use App\Models\Resources\Faq;
use App\Models\Resources\User;
use App\Models\Resources\Evento;
use App\Models\Statistics\OrgStats;
use App\Models\Statistics\EventoStats;
use App\Http\Controllers\Auth\LoginController;


class StaffController extends Controller {

    public function __construct() {
        //$this->middleware('can:isStaff');
    }

    public function index() {
        return view('pages.user-staff');
    }

    
}