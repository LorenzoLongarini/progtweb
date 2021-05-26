@extends('layouts.public')

@section('page-title', 'Cerca l\'evento che fa per te!')

@section('content')
    @include('helpers/cover-page', [
            'title' => 'Catalogo eventi', 
            'description' => 'Ti offriamo una vasta scelta per trovare il tuo evento preferito',
            'img_url' => '../storage/app/public/images/covers/catalogo-cover.png'])
    <div class="container block">
        <div class="event-list">
            <div class="event">
                <div class="event-left">
                    <div class="img-event">
                        <h3>Immagine</h3>
                    </div>
                    <div class="event-info flex-columns">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                    </div>
                </div>
                <div class="event-right">
                    <h4 class="price">€ 32,90</h4>
                    <button class="btn default-btn">VEDI EVENTO</button>
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                    <div class="img-event">
                        <h3>Immagine</h3>
                    </div>
                    <div class="event-info flex-columns">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                    </div>
                </div>
                <div class="event-right">
                    <h4 class="price">€ 32,90</h4>
                    <button class="btn default-btn">VEDI EVENTO</button>
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                    <div class="img-event">
                        <h3>Immagine</h3>
                    </div>
                    <div class="event-info flex-columns">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                    </div>
                </div>
                <div class="event-right">
                    <h4 class="price">€ 32,90</h4>
                    <button class="btn default-btn">VEDI EVENTO</button>
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                    <div class="img-event">
                        <h3>Immagine</h3>
                    </div>
                    <div class="event-info flex-columns">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                    </div>
                </div>
                <div class="event-right">
                    <h4 class="price">€ 32,90</h4>
                    <button class="btn default-btn">VEDI EVENTO</button>
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                    <div class="img-event">
                        <h3>Immagine</h3>
                    </div>
                    <div class="event-info flex-columns">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                    </div>
                </div>
                <div class="event-right">
                    <h4 class="price">€ 32,90</h4>
                    <button class="btn default-btn">VEDI EVENTO</button>
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                    <div class="img-event">
                        <h3>Immagine</h3>
                    </div>
                    <div class="event-info flex-columns">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                    </div>
                </div>
                <div class="event-right">
                    <h4 class="price">€ 32,90</h4>
                    <button class="btn default-btn">VEDI EVENTO</button>
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                    <div class="img-event">
                        <h3>Immagine</h3>
                    </div>
                    <div class="event-info flex-columns">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                    </div>
                </div>
                <div class="event-right">
                    <h4 class="price">€ 32,90</h4>
                    <button class="btn default-btn">VEDI EVENTO</button>
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                    <div class="img-event">
                        <h3>Immagine</h3>
                    </div>
                    <div class="event-info flex-columns">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                    </div>
                </div>
                <div class="event-right">
                    <h4 class="price">€ 32,90</h4>
                    <button class="btn default-btn">VEDI EVENTO</button>
                </div>
            </div>
        </div>
    </div>
@endsection