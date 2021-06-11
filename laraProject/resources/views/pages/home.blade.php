@extends('layouts.public')

@section('page-title', 'Eventi in italia')

@section('page-content')

<main id="page-content">

<div class="container img-presentation">
    @include('helpers/cover-page', [
                'title' => 'EasyTickets, acquista eventi in tutta Italia!', 
                'description' => 'Scopri i nostri fantastici servizi e divertiti senza limiti!',
                'img_url' => '../storage/app/public/images/covers/home-cover.jpg'])

    <div id="info-site" class="flex-rows">
        <div class="info-col">
            <a href="{{ route('faq')}}">
                <svg xmlns="http://www.w3.org/2000/svg"class="bi bi-headset" viewBox="0 0 16 16">
                    <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                </svg>
                <h3>Supporto(FAQ)</h3>
            </a>
        </div>

        <div class="info-col-separator"></div>

        <div class="info-col">
            <a href="{{ route('about') . '#lavora-con-noi' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                </svg>
                <h3>Lavora con noi</h3>
            </a>
        </div>

        <div class="info-col-separator"></div>

        <div class="info-col">
            <a href="{{asset('..\\storage\\app\\public\\documents\\TecnologieWeb.pdf')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                    <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                    <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                </svg>
                <h3>Documentazione</h3>
            </a>
        </div>
    </div>

    <div class="container">
    @isset($eventi)
        <h1 class="title">Eventi a breve</h1>
        <div class="last-event flex-rows">
            @foreach($eventi as $evento)
                <div class="event-card card">
                    <div class="img-event-card">
                        @include('helpers.img-event', ['imgName' => $evento->imgName])
                    </div>
                    <div class="content-event-card">
                        <h2>{{ $evento->titolo }}</h2>
                        <h3>{{ $evento->artista }}</h3>
                        <h4>{{ $evento->data }}</h4>
                    </div>
                    {{ link_to_route('evento', 'VEDI EVENTO', $parameters = ['id' => $evento->eventoId], $attributes = ['class' => 'btn default-btn'])}}
                </div>
            @endforeach
        </div>
    @endisset
    </div>
</div>
</main>
@endsection