@extends('layouts.public', ["search" => false])

@section('page-title', 'Cerca il prodotto!')

@section('page-content')
    @include('helpers/cover-page', [
            'title' => 'Catalogo prodotti', 
            'description' => 'Seleziona il prodotto che vuoi visualizzare!',
            'img_url' => '../storage/app/public/images/covers/catalogo-cover.jpg'])

    <div class="container block">
    <div id="search-form" class="form card container">
        @include('inserts.searchProduct')
    </div>
    </div>
    <div class="container block">
        @isset($prodotti)
            @if(count($prodotti) < 1)
                <div style="text-align:center">
                    <h1>La ricerca non ha prodotto nessun risultato!</h1>
                </div>
            @else
                <div class="event-list flex-columns">
                    @foreach($prodotti as $prodotto)
                        <div class="event">
                            <div class="event-left">
                                <div class="img-event">
                                  
                                </div>
                                <div class="event-info flex-columns">
                                    <h2>{{ $prodotto->nome }}, {{ $prodotto->prezzo}}</h2>
                                    
                                </div>
                            </div>
                            <div class="event-right">
                                @include('helpers.price')
                                {{ link_to_route('evento', 'VEDI EVENTO', $parameters = ['id' => $prodotto->productsId], $attributes = ['class' => 'btn default-btn'])}}
                            </div>
                        </div>           
                @endforeach
            @endif 
         
        @endisset
    </div>
@endsection