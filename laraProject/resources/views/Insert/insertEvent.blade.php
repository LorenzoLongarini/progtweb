
<div class="contact-form">
{{  Form::open(array('route' => 'aggiungiEvento.store', /*'id' => nome-funzione*/ 'files' => true /*'class' => some-bollocks*/))  }}
   
   
    <div class="double-input">
        <div class="wrap-input rs1-wrap-input">
    {{  Form::label ('titolo', 'Nome Evento' /*class-type*/)}}
    {{  Form::text ('titolo', '' /*class-type*/)  }}
    
    {{  Form::label ('artista', 'Artista'/*class-type*/)  }}
    {{  Form::text ('artista', '' /*class-type*/)  }}
    </div>
</div>
    <div>
    {{  Form::label ('img_name', 'Copertina' /*class-type*/)  }}
    {{  Form::file ('img_name' /*class-type*/)  }}
    
    {{  Form::label ('regione', 'Regione' /*class-type*/)}}
    {{  Form::select ('regione', ['Aosta', 'Piemonte', 'Liguria', 'Lombardia', 'Trentino Alto Adige',
            'Friuli Venezia Giulia', 'Veneto', 'Emilia Romagna', 'Toscana', 'Umbria', 
            'Marche', 'Lazio', 'Abruzzo', 'Molise',
            'Puglia', 'Campania', 'Calabria', 'Basilicata', 'Sicilia', 'Sardegna'] )  }}
    </div>
    </p>

    <p>
    <div>
    {{  Form::label ('luogo', 'Luogo' /*class-type*/)}}
    {{  Form::text ('luogo', '' /*class-type*/)  }}
    &nbsp &nbsp &nbsp &nbsp
    {{  Form::label ('data', 'Data' /*class-type*/)}}
    {{  Form::text ('data', '' /*class-type*/ ) }}
    </div>
    </p>
    <p>
    <div>
    {{  Form::label ('biglietti_disp', 'Biglietti Disponibili' /*class-type*/ )}}
    {{  Form::text ('biglietti_disp', '' /*class-type*/) }}
    &nbsp &nbsp &nbsp &nbsp
    {{  Form::label ('prezzo', 'Prezzo Biglietto' /*class-type*/ )}}
    {{  Form::text ('prezzo', '' /*class-type*/) }}

    </div>
    
    <div>
    {{  Form::label ('sconto', 'Sconto' /*class-type*/ )}}
    {{  Form::text ('sconto', '' /*class-type*/) }}

    &nbsp &nbsp &nbsp &nbsp

    {{  Form::label ('programma', 'Programma' /*class-type*/)}}
    {{  Form::text ('programma', '' /*class-type*/)}}

    </div>
    <div>

    {{  Form::label ('descrizione', 'Descrizione Completa' /*class-type*/)}}
    {{  Form::textarea ('descrizione', ''  /*class-type*/)}}

    &nbsp &nbsp &nbsp &nbsp

    {{  Form::label ('data_sconto', 'Sconto'/*class-type*/)}}
    {{  Form::text ('data_sconto', '' /*class-type*/)  }}

    </div>

    <div>

    {{  Form::label ('maps_url', 'Url' /*class-type*/)}}
    {{  Form::text ('maps_url', '' /*class-type*/)  }}

    </div>
    <div>

    {{  Form::label ('utenteId', 'id' /*class-type*/)}}
    {{  Form::text ('utenteId', '' /*class-type*/)  }}

    </div>

    <div>
    {{  Form::submit ('Conferma' /*class-type*/)}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>

