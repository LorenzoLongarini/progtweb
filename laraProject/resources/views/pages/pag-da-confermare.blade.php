@extends('layouts.public')
@section('content')
<div class="da-confermare">
   <br>
   <br>
   <div class="flex-center"><span style="font-weight:bolder">RIEPILOGO DATI PAGAMENTO</div>
   <br>
   <br>
    <div class="scritte-pagamento-titoletto" >Nome titolare</div>
    <br>
    <div class="scritte-pagamento2"> Mario</div>
    <br>
    <div class="scritte-pagamento-titoletto" >Cognome titolare</div>
    <br>
    <div class="scritte-pagamento2"> Rossi</div>
    <br>
    <div class="scritte-pagamento-titoletto" >Codice Fiscale</div>
    <br>
    <div class="scritte-pagamento2"> XXXXXXXXXXXXXXXXXX</div>
    <br>
    <div class="scritte-pagamento-titoletto" >Numero carta</div>
    <br>
    <div class="row-direction">
    <div class="scritte-pagamento2"> <img src="./img/payments_icon/visa_logo.svg" style="width:75%"></div>
    <div class="scritte-pagamento2"> ****-****-****-XXXX</div>
    </div>
    <br>
    <div class="row-direction">
    <div class="scadenza-scritta scritte-pagamento-titoletto" >Scadenza</div>
    <div class="scritte-pagamento-titoletto" >CVV</div>
    </div>
    <br>
    <div class="row-direction">
    <div class="scadenza-scritta scritte-pagamento-titoletto2" >01/21</div>
    <div class="scritte-pagamento-titoletto2" >XXX</div>
    </div>
    <br>
    <div class="scritte-pagamento-titoletto" >Totale da pagare</div>
    <br>
    <div class="scritte-pagamento2">€ XX,XX </div>
    <br>
    {{ link_to_route('confermato', 'Conferma', $parameters = ['id' => $acquisto->eventoId], $attributes = ['class' => 'btn default-btn'])}}
    <br>
    <div class = "flex-center">{{ link_to_route('pagamento', 'o torna indietro per modificare i dati', $parameters = ['id' => $acquisto->eventoId])}} </a></div>
    <br>
</div>
@endsection