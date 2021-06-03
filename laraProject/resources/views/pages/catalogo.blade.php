@extends('layouts.public')

@section('page-title', 'Cerca l\'evento che fa per te!')

@section('content')
    @include('helpers/cover-page', [
            'title' => 'Catalogo eventi', 
            'description' => 'Ti offriamo una vasta scelta per trovare il tuo evento preferito',
            'img_url' => '../storage/app/public/images/covers/catalogo-cover.png'])

    <div class="container block">
        @include('inserts.ricercaEventi')
        
        @empty($events)
            <div style="text-align:center">
                <h1>La ricerca non ha prodotto nessun risultato!</h1>
            </div>
        @endempty
        @isset($events)
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
        @endisset
    </div>
@endsection