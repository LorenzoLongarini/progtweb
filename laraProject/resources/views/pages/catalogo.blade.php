@extends('layouts.public', ["search" => false])

@section('page-title', 'Cerca il prodotto!')

@section('page-content')
    @include('helpers/cover-page', [
            'title' => 'Catalogo prodotti', 
            'description' => 'Seleziona il prodotto che vuoi visualizzare!',
            'img_url' => '../public/images/robot.jpg'])

    <div class="container block">
    <div id="search-form" class="form card container">
        @include('inserts.searchProduct')
    </div>
    </div>
    <div class="container block">
        @isset($prodotti)
            @if((count($prodotti) < 1 )|| ($prodotti==null))
                <div style="text-align:center">
                    <h1>La ricerca non ha prodotto nessun risultato!</h1>
                </div>
            @else
                <div class="prod-list flex-columns">
                    @foreach($prodotti as $prodotto)
                     
                        <div class="prod">
                            <div class="prod-left">
                                <div class="img-prod"style="border: 2px solid">
                                @include('helpers/img-event', ['attrs' => 'imagefrm', 'imgFile' => $prodotto->imgName])
                                </div>
                                <div class="prod-info flex-columns">
                                    <h2>{{ $prodotto->nome }}{{ $prodotto->descrizione}}</h2>
                                
                                    <h2>{{ $prodotto->descrizione}}</h2>
                                
                                    
                                </div>
                            </div>
                            <div class="prod-right">
                                {{ link_to_route('prodotto', 'VEDI PRODOTTO', $parameters = ['id' => $prodotto->productsId], $attributes = ['class' => 'user-btn'])}}
                            </div>
                        </div>           
                @endforeach
            @endif 
         
        @endisset
    </div>
@endsection