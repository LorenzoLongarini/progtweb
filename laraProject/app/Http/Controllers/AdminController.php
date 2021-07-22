<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\FaqRequest;
use App\Http\Requests\OrgRequest;
use App\Http\Requests\ModOrgRequest;
use App\Models\Resources\Faq;
use App\Models\Resources\User;
use App\Models\Resources\Evento;
use App\Models\Statistics\OrgStats;
use App\Models\Statistics\EventoStats;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('can:isAdmin');
    }

    public function index(){

        return view('pages.user-admin');

    }
    /*
    public function eliminaUtente2($utenteId){
        User::where('utenteId','=' , $utenteId)->delete();
        return redirect()->route('admin');
    }

    public function eliminaUtente3($utenteId){
        //Evento::where('utenteId', '=', $utenteId)->delete();
        User::where('utenteId', '=', $utenteId)->delete();
        return redirect()->route('admin');
    }

    public function inserisciFaq(){
        return view ('pages.inserisciFaq');
    }

    public function salvaFaq(FaqRequest $request){
        $faq = new Faq;
        $faq->domanda = $request->domanda;
        $faq->risposta = $request->risposta;
        $faq->save();

        return redirect()->route('faq');
    }


    public function modificaFaq($faqId){
        $Faq = Faq::find($faqId);
        return view ('pages.modificaFaq')->with('faq', $Faq);
    }
    
    public function updateFaq(FaqRequest $request, $faqId){      
        $faq = Faq::find($faqId);
        $faq->domanda = $request->domanda;
        $faq->risposta = $request->risposta;
        $faq->save();

        return redirect()->route('faq');
    }

    public function eliminaFaq($faqId){
        $faq = Faq::find($faqId);
        $faq->destroy($faqId);
        return redirect()->route('faq');
    }

    public function aggiungiOrg(){
        return view('pages.inserisciOrg');
    }

    public function salvaOrg(OrgRequest $request){
        $org = new User;
        $org->role = 'organizzatore';
        $org->username = $request->username;
        $org->password = Hash::make($request->password);
        $org->nome = $request->nome;
        $org->cognome = $request->cognome;
        $org->ivaFiscale = $request->ivaFiscale;
        $org->ragioneSociale = $request->ragioneSociale;
        $org->email = $request->email;
        $org->telefono = $request->telefono;
        $org->via = $request->via;
        $org->città = $request->città;
        $org->cap = $request->cap;
        $org->save();

        return redirect()->route('admin');
    }

    public function modificaOrg($utenteId){
        $user = User::find($utenteId);
        return view('pages.ModificaOrg')->with('user', $user);
    }

    public function updateOrg(ModOrgRequest $request, $utenteId){
        $org = User::find($utenteId);
        $org->username = $request->username;
        $org->password = Hash::make($request->password);
        $org->nome = $request->nome;
        $org->cognome = $request->cognome;
        $org->ivaFiscale = $request->ivaFiscale;
        $org->ragioneSociale = $request->ragioneSociale;
        $org->email = $request->email;
        $org->telefono = $request->telefono;
        $org->via = $request->via;
        $org->città = $request->città;
        $org->cap = $request->cap;
        $org->save();

        return redirect()->route('admin');
    }

    public function organizzatoreStats(Request $request){
        $orgStats = new OrgStats($request->utenteId);
        
        return response()->json([
            "bigliettiVenduti" => $orgStats->bigliettiVendutiTotaleOrg(), 
            "guadagnoTotale" => $orgStats->incassoTotaleOrg()
            ]);
    }

   */ 

    
}