
@extends('layouts.public')

@section('page-title', $prodotto->nome)

@section('page-content')
<div class="prod-cover">
    <div class="prod-content">
    <div class="prod-img"></div>
    <div class="prod-text">
       <div><h2 style="font-size: 40px">{{$prodotto->nome}}</h2></div>
        <div><h3 style="font-size: 25px">descrizione breve </h3></div>
    </div>
</div>
</div>
<div class="prod-desc">
    <h3 style="margin:10px">DESCRIZIONE DEL PRODOTTO</h3>
    <p style="margin:10px">{{$prodotto->descrizione}}</p>
</div>
<div class="prod-desc">
    <h3 style="margin:10px">NOTE TECNICHE</h3>
    <p style="margin:10px">{{$prodotto->noteTecniche}}</p>
</div>
<div class="prod-desc">
    <h3 style="margin:10px">GUIDA ALL'INSTALLAZIONE</h3>
    <p style="margin:10px">{{$prodotto->modInstallaz}}</p>
</div>
@can('isTecn')
<div class="prod-desc">
    <h3 style="margin:10px">MALFUNZIONAMENTI</h3>
    <p style="margin:10px">{{$prodotto->modInstallaz}}</p>
</div>
<div class="prod-desc">
    <h3 style="margin:10px">SOLUZIONI</h3>
    <p style="margin:10px">{{$prodotto->modInstallaz}}</p>
</div>
@endcan



           
           
           

        

    
    
    

@endsection