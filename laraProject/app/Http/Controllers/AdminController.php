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
use App\Models\Statistics\OrgStats;
use App\Models\Statistics\EventoStats;

class AdminController extends Controller {

    public function __construct() {
       $this->middleware('can:isAdmin');
    }

    public function index(){

        return view('pages.user-admin');

    }

    public function inserisciProd(){
        
        return view('inserts.insertProduct');

    }

    public function salvaProd(ProductRequest $request){
        
        $product = new Product;
        if ($request->hasFile('imgName')){
            $image = $request->file('imgName');
            $imageName = $image->getClientOriginalName();
        }else{
            $imageName = NULL;
        }
        $product->nome = $request->nome;
        $product->prezzo = $request->prezzo;
        $product->noteTecniche = $request->noteTecniche;
        $product->modInstallaz = $request->modInstallaz;
        $product->descrizione = $request->descrizione;
        $product->sottocategoria = $request->sottocategoria;
        $product->imgName = $imageName;
        $product->save();
        if (!is_null($imageName)){
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
        };
        return redirect()->route('admin');

    }

    public function modificaProd($productsId){

        $Product = Product::find($productsId);
        return view('inserts.modifyProduct')->with('product', $Product);

    }

    public function updateProd(ProductRequest $request, $productsId){
        
        if ($request->hasFile('imgName')){
            $image = $request->file('imgName');
            $imageName = $image->getClientOriginalName();
        }else{
            $imageName = NULL;
        }
        $product = Product::find($productsId);
        $product->nome = $request->nome;
        $product->prezzo = $request->prezzo;
        $product->noteTecniche = $request->noteTecniche;
        $product->modInstallaz = $request->modInstallaz;
        $product->descrizione = $request->descrizione;
        $product->sottocategoria = $request->sottocategoria;
        $product->imgName = $imageName;
        $product->save();

        if (!is_null($imageName)){
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
        };
        return redirect()->route('admin');
        
    }

    public function eliminaProd($productsId){
        Product::where('productsId', '=', $productsId)->delete();
        return redirect()->route('admin');
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

    public function selectMalfunction(Request $request, $productsId){
        
        $Product = Product::find($productsId);
        $malfunction = Malfunction::find($request->malfunctionsId);
        
        return response()->json([
            "nomeMalf" => $malfunction->nomeMalf, 
            "problema" => $malfunction->problema,
            "soluzione" => $malfunction->soluzione
            ]);
    }

    public function inserisciTecnico(){
        $centers=AssistenceCenter::all(['centersId','regione']);
        
        return view('inserts.insertTechnician',compact('centers'));
        



    }

    public function salvaTecnico(UserRequest $request){
            
        $user = new User;
        $user->nome = $request->nome;
        $user->cognome = $request->cognome;
        $user->ivacf = $request->ivacf;
        $user->dataNascita = $request->dataNascita;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);;
        $user->telefono = $request->telefono;
        $user->via = $request->via;
        $user->cap = $request->cap;
        $user->città = $request->città;
        $user->sottocategoria = '';
        $user->role = 'tecnico';    
        $user->centersId = $request->centersId;  
        $user->save();
        return redirect()->route('admin');

    }

    public function modificaTecnico($usersId){

        $user = User::find($usersId);
        $centers=AssistenceCenter::all(['centersId','regione']);
        return view('inserts.modifyTechnician',compact('centers'))->with('users', $user);

    }

    public function updateTecnico(UserRequest $request, $usersId){

        $user = User::find($usersId);
        $user->nome = $request->nome;
        $user->cognome = $request->cognome;
        $user->ivacf = $request->ivacf;
        $user->dataNascita = $request->dataNascita;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);;
        $user->telefono = $request->telefono;
        $user->via = $request->via;
        $user->cap = $request->cap;
        $user->città = $request->città;
        $user->sottocategoria = '';
        $user->role = 'tecnico'; 
        $user->centersId = $request->centersId;      
        $user->save();
        return redirect()->route('admin');
        
    }

    public function eliminaTecnico($usersId){
        User::where('usersId', '=', $usersId)->delete();
        return redirect()->route('admin');
    }


    public function inserisciStaff(){
        
        return view('inserts.insertStaff');

    }

    public function salvaStaff(UserRequest $request){

        $user = new User;
        $user->nome = $request->nome;
        $user->cognome = $request->cognome;
        $user->ivacf = $request->ivacf;
        $user->dataNascita = $request->dataNascita;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);;
        $user->telefono = $request->telefono;
        $user->via = $request->via;
        $user->cap = $request->cap;
        $user->città = $request->città;
        $user->sottocategoria = $request->sottocategoria;
        $user->role = 'staff';  
        
        $user->save();
        return redirect()->route('admin');
       

    }

    public function modificaStaff($usersId){

        $user = User::find($usersId);
        return view('inserts.modifyStaff')->with('users', $user);

    }

    public function updateStaff(UserRequest $request, $usersId){

        $user = User::find($usersId);
        $user->nome = $request->nome;
        $user->cognome = $request->cognome;
        $user->ivacf = $request->ivacf;
        $user->dataNascita = $request->dataNascita;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->telefono = $request->telefono;
        $user->via = $request->via;
        $user->cap = $request->cap;
        $user->città = $request->città;
        $user->sottocategoria = $request->sottocategoria;
        
        $user->role = 'staff';      
        $user->save();
        return redirect()->route('admin');
        
    }

    public function eliminaStaff($usersId){
        User::where('usersId', '=', $usersId)->delete();
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

    //centri assistenza
    public function salvaCentro(AssistenceCenterRequest $request){
            
        $assistenceCenter = new AssistenceCenter;
       
        $assistenceCenter->nome = $request->nome;
        $assistenceCenter->città = $request->città;
        $assistenceCenter->regione = $request->regione;
        $assistenceCenter->via = $request->via;
        $assistenceCenter->email = $request->email;
        $assistenceCenter->telefono = $request->telefono;
      
             
        $assistenceCenter->save();
        return redirect()->route('admin');

    }
    public function updateCentro(AssistenceCenterRequest $request, $centersId){

        $assistenceCenter = AssistenceCenter::find($centersId);

            
            $assistenceCenter->nome = $request->nome;
            $assistenceCenter->città = $request->città;
            $assistenceCenter->regione = $request->regione;
            $assistenceCenter->via = $request->via;
            $assistenceCenter->email = $request->email;
            $assistenceCenter->telefono = $request->telefono;
          
                 
            $assistenceCenter->save();
            return redirect()->route('admin');
    
        
       
        
    }
    public function eliminaCentro($centerId){
        AssistenceCenter::where('centersId', '=', $centerId)->delete();
        return redirect()->route('admin');
    }

    public function modificaCentro($centerId){

        $assistenceCenter = AssistenceCenter::find($centerId);
        return view('inserts.modifyCenter')->with('centers', $assistenceCenter);

    }
    public function inserisciCentro(){
      
        
        return view('inserts.insertCenter');

    }


    
}