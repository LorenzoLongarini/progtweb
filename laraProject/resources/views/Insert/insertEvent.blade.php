
<div class="contact-form">
    {{  Form::open(array('route' => 'aggiungiEvento.store', /*'id' => nome-funzione*/ 'files' => true /*'class' => some-bollocks*/))  }}
   
    <h2>Informazioni generali</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('titolo', 'Nome Evento' /*class-type*/)}}
            {{  Form::text ('titolo', '' /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('artista', 'Artista'/*class-type*/)  }}
            {{  Form::text ('artista', '' /*class-type*/)  }}
        </div>
    </div>
<<<<<<< HEAD
        
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('regione', 'Regione' /*class-type*/)}}
            {{  Form::select ('regione', ['Aosta', 'Piemonte', 'Liguria', 'Lombardia', 'Trentino Alto Adige',
                'Friuli Venezia Giulia', 'Veneto', 'Emilia Romagna', 'Toscana', 'Umbria', 
                'Marche', 'Lazio', 'Abruzzo', 'Molise',
                'Puglia', 'Campania', 'Calabria', 'Basilicata', 'Sicilia', 'Sardegna'] )  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('luogo', 'Luogo' /*class-type*/)}}
            {{  Form::text ('luogo', '' /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('data', 'Data' /*class-type*/)}}
            {{  Form::date ('data', '' /*class-type*/ ) }}
        </div>
=======
</div>
    <div>
    {{  Form::label ('img_name', 'Copertina' /*class-type*/)  }}
    {{  Form::file ('img_name' /*class-type*/)  }}
    
    {{  Form::label ('regione', 'Regione' /*class-type*/)}}
    {{  Form::select ('regione', ['Aosta', 'Piemonte', 'Liguria', 'Lombardia', 'Trentino Alto Adige',
            'Friuli Venezia Giulia', 'Veneto', 'Emilia Romagna', 'Toscana', 'Umbria', 
            'Marche', 'Lazio', 'Abruzzo', 'Molise',
            'Puglia', 'Campania', 'Calabria', 'Basilicata', 'Sicilia', 'Sardegna'] )  }}
>>>>>>> 89c6892a61153e9c205032434bc57a1c03127e1a
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('immagine', 'Copertina' /*class-type*/)  }}
            {{  Form::file ('immagine' /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('location', 'Url' /*class-type*/)}}
            {{  Form::text ('location', '' /*class-type*/)  }}
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('descrizione', 'Descrizione Completa' /*class-type*/)}}
            {{  Form::textarea ('descrizione', ''  /*class-type*/)}}
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('programma', 'Programma' /*class-type*/) }}
            {{  Form::text ('programma', '' /*class-type*/) }}
        </div>
    </div>
    
    <h2>Biglietti</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('BigliettiDisp', 'Biglietti Disponibili' /*class-type*/ )}}
            {{  Form::text ('BigliettiDisp', '' /*class-type*/) }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('prezzo', 'Prezzo Biglietto' /*class-type*/ )}}
            {{  Form::text ('prezzo', '' /*class-type*/) }}
        </div>
    </div>

    <div>
    {{  Form::label ('sconto', 'Sconto' /*class-type*/ )}}
    {{  Form::text ('sconto', '' /*class-type*/) }}

<<<<<<< HEAD
    </div>
    <div>


    {{  Form::label ('dataSconto', 'Data inizio sconto')}}
    {{  Form::date ('dataSconto')  }}
=======
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
>>>>>>> 89c6892a61153e9c205032434bc57a1c03127e1a

    </div>

    <div>
    {{  Form::submit ('Conferma' /*class-type*/)}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>

