
@php 
use App\Models\Resources\Biglietto;
$biglietti = Biglietto::where('utenteId','=',Auth::id())->get();
@endphp
<div id = "storico-acquisti-section" class = "form" style = "margin-left:100px">

@foreach($biglietti as $biglietto)
        <div class = "utenti-liv-2" style = " padding: 0px 25px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div style = "display:inline-block;">
            <div style = "display:inline-block;">
            <div style="margin-left:30px; margin-top:20px;">Codice biglietto:</div>
            <div style="margin-left:30px; margin-top:10px;"># {{$biglietto->bigliettoId}}</div>
            </div>
            <div style = "display:inline-block;">
            <div style="margin-left:30px; margin-top:20px;">Data di acquisto:</div>
            <div style="margin-left:30px; margin-top:10px;">{{$biglietto->dataAcquisto = date('Y-m-d')}}</div>
            </div>
            <div style = "display:inline-block;" >
            <div style="margin-left:30px; margin-top:20px;">Metodo di pagamento:</div>
            <div style="margin-left:30px; margin-top:10px;">{{$biglietto->metodoPagamento}}</div>
            </div>
            <div style = "display:inline-block;" >
            <div style="margin-left:30px; margin-top:20px;">Prezzo di acquisto:</div>
            <div style="margin-left:30px; margin-top:10px;">{{$biglietto->prezzoAcquisto}}</div>
            </div>
            </div>
            </div>
            </div>
            <br>
            @endforeach
        </div>
    

      