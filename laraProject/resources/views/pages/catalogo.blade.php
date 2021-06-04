@extends('layouts.public', ["search" => false])

@section('page-title', 'Cerca l\'evento che fa per te!')

@section('page-content')
    @include('helpers/cover-page', [
            'title' => 'Catalogo eventi', 
            'description' => 'Ti offriamo una vasta scelta per trovare il tuo evento preferito',
            'img_url' => '../storage/app/public/images/covers/catalogo-cover.jpg'])

    <div class="container block">
    <div id="search-form" class="form card container">
        @include('inserts.ricercaEventi')
    </div>
    </div>
    <div class="container block">
        @isset($events)
            @if(count($events) < 1)
                <div style="text-align:center">
                    <h1>La ricerca non ha prodotto nessun risultato!</h1>
                </div>
            @else
                <div class="event-list">
                    @foreach($events as $event)
                        <div class="event">
                            <div class="event-left">
                                <div class="img-event">
                                    @include('helpers.img-event', ['imgName' => $event->imgName])
                                </div>
                                <div class="event-info flex-columns">
                                    <h2>{{ $event->titolo }}</h2>
                                    @include('helpers.date-helper', ['eventDate' => $event->data])

                                    <h4>{{ $event->luogo }}, {{ $event ->regione }}</h4>
                                </div>
                            </div>
                            <div class="event-right">
                                <h4 class="price">€ {{ $event->prezzo }}</h4>
                                {{ link_to_route('evento', 'VEDI EVENTO', $parameters = ['id' => $event->eventoId], $attributes = ['class' => 'btn default-btn'])}}
                            </div>
                        </div>           
                @endforeach
            @endif 
        @endisset
    </div>
@endsection