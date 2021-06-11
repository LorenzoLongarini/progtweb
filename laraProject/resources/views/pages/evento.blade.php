
@extends('layouts.public')

@section('page-title', $event->titolo)

@section('page-content')

<div style="display:flex;justify-content:space-between;padding:100px;align-items:center">

    <div class="container block">
        <div style="display: flex;flex-direction:column;">
            <div>
            <p style="font-size: 35px">{{$event->titolo}}</p>
            <h3 style="margin-top:50px" class="title-section">Artista</h3>
            <p style="font-size: 25px">{{$event->artista}}</p>
            <h3 style="margin-top:20px" class="title-section">Luogo dell'evento</h3>
           <p style="font-size:25px"> {{$event->luogo}}</p>
           <h3 style="margin-top:20px" class="title-section">Data</h3>
           <p style="font-size:25px"> {{$event->data}}</p>
        </div>
        <div style="margin-top:20px;display:flex;align-items:center;gap:30px">
            <div>
           @can('isClient')
                <button style="padding:8px 12px;font-size:12px"class="default-btn" id="part-btn">Parteciperò</button>
           @endcan
        </div>
           <div><h3 id="part-num">Partecipanti: <span>{{ Partecipazioni::numPartEvento($event->eventoId) }}</span></h3></div>
           <script>
             $('#part-btn').click(function () {
                $.ajax({
                    url: "{{ route('partecipazioni') }}",
                    data: {
                            "utenteId": {{Auth::id()}},
                            "eventoId": {{ $event->eventoId }},
                            "_token": "{{ csrf_token() }}"
                        },
                    type: 'POST',
                    dataType: 'json',
                    success: function (result) {
                        $('#part-num span').text(result.partecipazioni);
                    },
                    error: function () {
                        alert('Impossibile inoltrare la richiesta HTTP');
                    }
                });
            });
           </script>
           </div>
        </div>
           </div>
           <div class="btn-hero">

            @can('isClient')
                {{ link_to_route('pagamento', 'Acquista Ora', $parameters = ['id' => $event->eventoId], $attributes = ['class' => 'btn default-btn buy-btn'])}}
            @endcan
           
           

            @guest
                <a href="{{route('login')}}" class="default-btn" style="width:110%" >Acquista ora</a>
            @endguest
        </div>

        </div>
    

        <div class="event-items">
            <h3 class="event-items">Mappa del luogo</h3>
        <div class="map event-items">
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11190.555740991489!2d9.12007382938012!3d45.47707686397451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c193fa23f19d%3A0x9c7d30c7aeff312!2sStadio%20San%20Siro!5e0!3m2!1sit!2sit!4v1621464654299!5m2!1sit!2sit" width="1000px" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
          <div>
            <h3 class="event-items">Descrizione</h3>
            <p class="event-items">{{$event->descrizione}}</p>

        </div>
        <div>
            <h3 class="event-items">Programma</h3>
            <p class="event-items">{{$event->programma}}</p>

        </div>
    
    
    </div>
    </div>
    <div>
    @can('CanModificaEvento', $event)
    {{ link_to_route('modificaEvento', 'MODIFICA EVENTO', $parameters = ['id' => $event->eventoId], $attributes = ['class' => 'btn default-btn'])}}
    {!!  Form::open(['action' => ['OrganizzatoreController@eliminaEvento', $event->eventoId] , 'files' => true, 'method'=>'POST'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA EVENTO', ['class'=>'btn default-btn'])!!}
                    {!!  Form::close()  !!}
    @endcan
    </div>

@endsection