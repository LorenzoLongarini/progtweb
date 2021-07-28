@extends('layouts.user')
@section('forms')
    

<div>
    <div>
        PER VISUALIZZARE I MALFUNZIONAMENTI DEI PRODOTTI E LE RISPETTIVE SOLUZIONI
        E' NECESSARIO ACCEDERE AL CATALOGO E SELEZIONARE IL PRODOTTO DESIDERATO
    </div>
   <button href="{{route("catalogo")}}"class="user-btn">VISUALIZZA CATALOGO</button>
</div>
@endsection