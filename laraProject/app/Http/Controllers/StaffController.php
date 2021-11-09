<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\FaqRequest;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\AssistenceCenterRequest;
use App\Http\Requests\ModOrgRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\MalfunctionRequest;
use App\Models\Resources\Faq;
use App\Models\Resources\Malfunction;
use App\Models\Resources\AssistenceCenter;
use App\User;
use App\Models\Resources\Product;



class StaffController extends Controller {

    public function __construct() {
        $this->middleware('can:isStaff');
    }

    public function index() {
        return view('pages.user-staff');
    }
    public function inserisciMalf($productsId){
        $Product = Product::find($productsId);
        return view('inserts.insertMalfunctions')->with('product', $Product);

    }

    public function salvaMalf(MalfunctionRequest $request, $productsId){
        $Product = Product::find($productsId);
        $malf = new Malfunction;
        $malf->productsId = $Product->productsId;
        $malf->problema = $request->problema;
        $malf->soluzione = $request->soluzione;
        $malf->nomeMalf = $request->nomeMalf;
        $malf->save();
        return redirect()->route('catalogo');

    }

    public function selectMalfunction(Request $request, $productsId){
        
        $Product = Product::find($productsId);
        $malfunction = Malfunction::find($request->malfunctionsId);
        
        return response()->json([
            "nomeMalf" => $malfunction->nomeMalf, 
            "problema" => $malfunction->problema,
            "soluzione" => $malfunction->soluzione
            ]);
    }
    public function modificaMalf($malfunctionsId){
        $Malfunction = Malfunction::find($malfunctionsId);
        return view('inserts.modifyMalfunctions')->with('malfunction', $Malfunction);

    }

    public function updateMalf(MalfunctionRequest $request, $malfunctionsId){

        $malfunct = Malfunction::find($malfunctionsId);
        $malfunct->problema = $request->problema;
        $malfunct->soluzione = $request->soluzione;
        $malfunct->nomeMalf = $request->nomeMalf;
        $malfunct->save();
        return redirect()->route('catalogo');
        
    }

    public function eliminaMalf( $malfunctionsId){
         Malfunction::where('malfunctionsId', '=', $malfunctionsId)
        ->delete();
        return redirect()->route('catalogo');
    }
    
}