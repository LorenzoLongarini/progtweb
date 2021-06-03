
<div class="form">
    {{  Form::open(array(['route' => 'modificaEvento.update', $evento->EventoId ], 'id' => 'modificaEvento', 'files' => true 'method'=> 'POST'))  }}
   
    <h2>Informazioni generali</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('titolo', 'Nome Evento' /*class-type*/)}}
            {{  Form::text ('titolo', '$evento->titolo' /*class-type*/)  }}
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
            {{  Form::text ('artista', '$evento->artista' /*class-type*/)  }}
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
            {{  Form::select ('regione', ['Aosta', 'Piemonte', 'Liguria', 'Lombardia', 'Trentino Alto Adige',
                'Friuli Venezia Giulia', 'Veneto', 'Emilia Romagna', 'Toscana', 'Umbria', 
                'Marche', 'Lazio', 'Abruzzo', 'Molise',
                'Puglia', 'Campania', 'Calabria', 'Basilicata', 'Sicilia', 'Sardegna'],'$evento->regione' )  }}
       
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
            {{  Form::text ('luogo', '' /*class-type*/)  }}
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
            {{  Form::date ('data', '$evento->data' /*class-type*/ ) }}
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
            {{  Form::time ('orario', '') }}
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
            {{  Form::file ('imgName' /*class-type*/)  }}
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
            {{  Form::text ('mapsUrl', '$evento->mapsUrl' /*class-type*/)  }}
        </div>
        
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('descrizione', 'Descrizione Completa' /*class-type*/)}}
            {{  Form::textarea ('descrizione', '$evento->descrizione'  /*class-type*/)}}
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
            {{  Form::text ('programma', '$evento->progamma' /*class-type*/) }}
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
            {{  Form::label ('bigliettiDisp', 'Biglietti Disponibili' /*class-type*/ )}}
            {{  Form::text ('bigliettiDisp', '$evento->bigliettiDisp' /*class-type*/) }}
            @if ($errors->first('bigliettiDisp'))
                <ul class="errors">
                    @foreach ($errors->get('bigliettiDisp') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
             
        </div>
        <div class="wrap-input">
            {{  Form::label ('prezzo', 'Prezzo Biglietto' /*class-type*/ )}}
            {{  Form::text ('prezzo', '' /*class-type*/) }}
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
    {{  Form::text ('sconto', '' /*class-type*/) }}
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
    {{  Form::date ('dataSconto'),''  }}
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
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>
