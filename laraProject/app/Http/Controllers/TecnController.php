<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\MalfunctionRequest;
use App\Models\Resources\Malfunction;
use App\Models\Resources\Product;
use App\Http\Requests\ModUserRequest;
use App\Models\User;

class TecnController extends Controller {

    public function __construct() {
       $this->middleware('can:isTecn');
    }

public function index(){

    return view('pages.user-tecnico');

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

}


