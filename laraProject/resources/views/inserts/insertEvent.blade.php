
<div class="form">
<<<<<<< HEAD
    {{  Form::open(array('route' => 'aggiungiEvento.store', 'id' =>'adproduct' , 'files' => true /*'class' => some-bollocks*/))  }}
=======
    {{  Form::open(array('route' => 'aggiungiEvento.store', 'id' => 'addproduct', 'files' => true /*'class' => some-bollocks*/))  }}
>>>>>>> 1ed17472c0a5ef537447e46e6fc72d7af1b24f0a
   
    <h2>Informazioni generali</h2>
    <div class="multiple-input">
        <div class="wrap-input">
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
        <div class="wrap-input">
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
        
    <div class="multiple-input">
        <div class="wrap-input">
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
            {{  Form::date ('data', '' /*class-type*/ ) }}
            @if ($errors->first('data'))
                <ul>
                    @foreach ($errors->get('data') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>

        <div class="wrap-input">
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

    <div class="single-input">
        <div class="wrap-input">
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
        <div class="wrap-input">
            {{  Form::label ('mapsUrl', 'Url' /*class-type*/)}}
            {{  Form::text ('mapsUrl', 'a' /*class-type*/)  }}
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('descrizione', 'Descrizione Completa' /*class-type*/)}}
            {{  Form::textarea ('descrizione', ''  /*class-type*/)}}
            @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
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
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('bigliettiDisp', 'Biglietti Disponibili' /*class-type*/ )}}
            {{  Form::text ('bigliettiDisp', '' /*class-type*/) }}
            @if ($errors->first('bigliettiDisp'))
                <ul>
                    @foreach ($errors->get('bigliettiDisp') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input">
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
    {{  Form::date ('dataSconto')  }}
   

    </div>

    <div>
    {{  Form::submit ('Conferma' /*class-type*/)}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>

