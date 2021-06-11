
<div class="form">
    {{  Form::open(array('route' => ['modificaEvento.update', $event->eventoId], 'files' => true, 'method'=> 'POST'))  }}
   
    <h2>Modifica Organizzazione</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('titolo', 'Nome Evento' /*class-type*/)}}
            {{  Form::text ('titolo', $event->titolo /*class-type*/)  }}
            @if ($errors->first('titolo'))
                <ul >
                    @foreach ($errors->get('titolo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input">
            {{  Form::label ('artista', 'Artista'/*class-type*/)  }}
            {{  Form::text ('artista', $event->artista /*class-type*/)  }}
          @if ($errors->first('artista'))
                <ul >
                    @foreach ($errors->get('artista') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>
        
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('regione', 'Regione' /*class-type*/)}}
            {{  Form::select ('regione', Regioni::lista_regioni, $event->regione )  }}
       
            @if ($errors->first('regione'))
                <ul>
                    @foreach ($errors->get('regione') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="wrap-input">
            {{  Form::label ('luogo', 'Luogo' /*class-type*/)}}
            {{  Form::text ('luogo', $event->luogo /*class-type*/)  }}
            @if ($errors->first('luogo'))
                <ul>
                    @foreach ($errors->get('luogo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        
        <div class="wrap-input">
            {{  Form::label ('data', 'Data' /*class-type*/)}}
            {{  Form::date ('data', $event->data /*class-type*/ ) }}
            @if ($errors->first('data'))
                <ul >
                    @foreach ($errors->get('data') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>

        <div class="wrap-input">
            {{  Form::label ('orario', 'Orario' /*class-type*/)}}
            {{  Form::time ('orario', $event->orario) }}
            @if ($errors->first('orario'))
                <ul>
                    @foreach ($errors->get('orario') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('imgName', 'Copertina' /*class-type*/)  }}
            {{  Form::file ('imgName', $event->imgName /*class-type*/)  }}
            @if ($errors->first('imgName'))
                <ul >
                    @foreach ($errors->get('imgName') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input">
            {{  Form::label ('mapsUrl', 'Url' /*class-type*/)}}
            {{  Form::text ('mapsUrl', '$event->mapsUrl' /*class-type*/)  }}
        </div>
        
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('descrizione', 'Descrizione Completa' /*class-type*/)}}
            {{  Form::textarea ('descrizione', $event->descrizione  /*class-type*/)}}
            @if ($errors->first('descrizione'))
                <ul>
                    @foreach ($errors->get('descrizione') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('programma', 'Programma' /*class-type*/) }}
            {{  Form::text ('programma', $event->progamma /*class-type*/) }}
            @if ($errors->first('programma'))
                <ul class="errors">
                    @foreach ($errors->get('programma') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>
    
    <h2>Biglietti</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('bigliettiTotali', 'Biglietti Disponibili' /*class-type*/ )}}
            {{  Form::text ('bigliettiTotali', $event->bigliettiTotali /*class-type*/) }}
            @if ($errors->first('bigliettiTotali'))
                <ul class="errors">
                    @foreach ($errors->get('bigliettiTotali') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
             
        </div>
        <div class="wrap-input">
            {{  Form::label ('prezzo', 'Prezzo Biglietto' /*class-type*/ )}}
            {{  Form::text ('prezzo', $event->prezzo /*class-type*/) }}
            @if ($errors->first('prezzo'))
                <ul class="errors">
                    @foreach ($errors->get('prezzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

        </div>
    </div>

    <div>
    {{  Form::label ('sconto', 'Sconto' /*class-type*/ )}}
    {{  Form::text ('sconto', $event->sconto /*class-type*/) }}
    @if ($errors->first('sconto'))
                <ul class="errors">
                    @foreach ($errors->get('sconto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
    </div>
    <div>


    {{  Form::label ('dataSconto', 'Data inizio sconto')}}
    {{  Form::date ('dataSconto', $event->dataSconto)  }}
    @if ($errors->first('dataSconto'))
                <ul>
                    @foreach ($errors->get('dataSconto') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

    </div>

    <div>
    {{  Form::submit ('Conferma' /*class-type*/)}}
    {{  Form::hidden ('_method', 'PUT')}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>
