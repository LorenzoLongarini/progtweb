
<div class="form" id = "eventi-section" style = "width: 850px; margin-left: 100px;">
    {{  Form::open(array('route' => 'aggiungiEvento.store', 'files' => true /*'class' => some-bollocks*/))  }}
   
    <h2>Aggiungi Evento</h2>
    <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('titolo', 'Nome Evento' /*class-type*/)}}
            {{  Form::text ('titolo', '' /*class-type*/)  }}
            @if ($errors->first('titolo'))
                <ul>
                    @foreach ($errors->get('titolo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('artista', 'Artista'/*class-type*/)  }}
            {{  Form::text ('artista', '' /*class-type*/)  }}
          @if ($errors->first('artista'))
                <ul>
                    @foreach ($errors->get('artista') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>
        
    <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('regione', 'Regione' /*class-type*/)}}
            {{  Form::select ('regione', ['','Aosta', 'Piemonte', 'Liguria', 'Lombardia', 'Trentino Alto Adige',
                'Friuli Venezia Giulia', 'Veneto', 'Emilia Romagna', 'Toscana', 'Umbria', 
                'Marche', 'Lazio', 'Abruzzo', 'Molise',
                'Puglia', 'Campania', 'Calabria', 'Basilicata', 'Sicilia', 'Sardegna'], '' )  }}
                @if ($errors->first('regione'))
                <ul>
                    @foreach ($errors->get('regione') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
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
        
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('data', 'Data' /*class-type*/)}}
            {{  Form::date ('data', '' /*class-type*/ ) }}
            @if ($errors->first('data'))
                <ul>
                    @foreach ($errors->get('data') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>

        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('orario', 'Orario' /*class-type*/)}}
            {{  Form::time ('orario', '', array('min' => date('Y-m-d'))) }}
            @if ($errors->first('orario'))
                <ul>
                    @foreach ($errors->get('orario') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>

    <div class="single-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('imgName', 'Copertina' /*class-type*/)  }}
            {{  Form::file ('imgName' /*class-type*/)  }}
            @if ($errors->first('imgName'))
                <ul>
                    @foreach ($errors->get('imgName') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('mapsUrl', 'Mappa (url)' /*class-type*/)}}
            {{  Form::text ('mapsUrl', '' /*class-type*/)  }}
        </div>
    </div>

    <div class="single-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('descrizione', 'Descrizione Completa' /*class-type*/)}}
            {{  Form::textarea ('descrizione', ''  /*class-type*/)}}
            @if ($errors->first('descrizione'))
                <ul>
                    @foreach ($errors->get('descrizione') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>

    <div class="single-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('programma', 'Programma' /*class-type*/) }}
            {{  Form::text ('programma', '' /*class-type*/) }}
            @if ($errors->first('programma'))
                <ul>
                    @foreach ($errors->get('programma') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>
    
    <h2>Biglietti</h2>
    <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('bigliettiTotali', 'Biglietti Disponibili' /*class-type*/ )}}
            {{  Form::text ('bigliettiTotali', '' /*class-type*/) }}
            @if ($errors->first('bigliettiTotali'))
                <ul>
                    @foreach ($errors->get('bigliettiTotali') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('prezzo', 'Prezzo Biglietto' /*class-type*/ )}}
            {{  Form::text ('prezzo', '' /*class-type*/) }}
            @if ($errors->first('prezzo'))
                <ul>
                    @foreach ($errors->get('prezzo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

        </div>
    </div>

    <div>
    {{  Form::label ('sconto', 'Sconto' /*class-type*/ )}}
    {{  Form::text ('sconto', '' /*class-type*/) }}
    @if ($errors->first('sconto'))
                <ul>
                    @foreach ($errors->get('sconto') as $message)
                    <li class="errors">{{ $message }}</li>
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
                <div style = "display:flex; justify-content:center">
    <div>
    {{  Form::submit ('Conferma' , ['class'=>'default-btn'])}}
    </div>

    <div>
    {{  Form::reset ('Annulla' , ['class'=>'default-btn'])}}
    </div>
    </div>
{{Form::close()}}
</div>

