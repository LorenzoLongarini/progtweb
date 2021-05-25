
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
    {{  Form::label ('immagine', 'Copertina' /*class-type*/)  }}
    {{  Form::file ('immagine' /*class-type*/)  }}
    
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
    {{  Form::label ('BigliettiDisp', 'Biglietti Disponibili' /*class-type*/ )}}
    {{  Form::text ('BigliettiDisp', '' /*class-type*/) }}
    &nbsp &nbsp &nbsp &nbsp
    {{  Form::label ('prezzo', 'Prezzo Biglietto' /*class-type*/ )}}
    {{  Form::text ('prezzo', '' /*class-type*/) }}

    </div>
    
    <div>
    {{  Form::label ('sconto', 'Sconto' /*class-type*/ )}}
    {{  Form::text ('sconto', '' /*class-type*/) }}

    &nbsp &nbsp &nbsp &nbsp

    {{  Form::label ('descBreve', 'Programma' /*class-type*/)}}
    {{  Form::text ('descBreve', '' /*class-type*/)}}

    </div>
    <div>

    {{  Form::label ('programma', 'Descrizione Completa' /*class-type*/)}}
    {{  Form::textarea ('programma', ''  /*class-type*/)}}

    &nbsp &nbsp &nbsp &nbsp

    {{  Form::label ('location', 'Sconto'/*class-type*/)}}
    {{  Form::text ('location', '' /*class-type*/)  }}

    </div>

    <div>

    {{  Form::label ('location', 'Url' /*class-type*/)}}
    {{  Form::text ('location', '' /*class-type*/)  }}

    </div>

    <div>
    {{  Form::submit ('Conferma' /*class-type*/)}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>

