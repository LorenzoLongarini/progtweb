
@extends('layouts.public')

@section('page-title', $prodotto->nome)

@section('page-content')
<div class="prod-cover">
    <div class="prod-content">
    <div class="prod-img">
    @include('helpers/img-event', ['attrs' => 'imagefrm', 'imgFile' => $prodotto->imgName])
    </div>
    <div class="prod-text" style = "display:flex;">
       <div><h2 style="font-size: 40px">{{$prodotto->nome}}</h2></div>
       <br>
       <div><h5 style="font-size: 20px"> € {{$prodotto->prezzo}}</h5></div>
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
@auth
            <div style = "display:flex;justify-content: center;">
            {{ link_to_route('malfunzionamento', 'VISUALIZZA MALFUNZIONAMENTI', $parameters = ['productsId' => $prodotto->productsId] , ['class'=>'user-btn'])}}
            </div>
@endauth

@guest
<br>
<div style = "display: flex; justify-content:center;"> <h2> ACCEDI PER VISUALIZZARE I MALFUNZIONAMENTI</h2></div>
@endguest

           
           
           

        

    
    
    

@endsection