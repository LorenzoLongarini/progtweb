<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FaqRequest;
use App\Http\Requests\OrgRequest;
use App\Http\Requests\ModOrgRequest;
use App\Models\Resources\Faq;
use App\Models\Resources\User;
use App\Models\Statistics\OrgStats;
use App\Models\Statistics\EventoStats;


class OrganizzatoreController extends Controller {

    public function __construct() {
        $this->middleware('can:isOrganiz');
    }

    public function index() {
        return view('pages.user-level3');
    }

    public function EventiStats(Request $request){
        $eventoStats = new EventoStats($request->eventoId);

        return response()->json([
            'bigliettiVenduti' => $eventoStats->bigliettiVenduti(),
            'quantitàBigliettiPerc' => $eventoStats->quantitàBigliettiPerc(),
            'incassoTotale' => $eventoStats->incassoTotale()
            ]);
    }

}