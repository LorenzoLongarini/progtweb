
<div class="contact-form">
    {{  Form::open(array('route' => ['aggiungiEvento.store'], 'id' =>'filtro' , 'files' => true /*'class' => some-bollocks*/))  }}
   
    <h2>Yo fratello fatti un filtro</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('titolo', 'Nome Evento' /*class-type*/) }}
            {{  Form::text ('titolo', 'a' /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('artista', 'Artista'/*class-type*/)  }}
            {{  Form::text ('artista', 'a' /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('descrizione', 'Descrizione' /*class-type*/) }}
            {{  Form::text ('descrizione', 'a' /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('regione', 'Regione' /*class-type*/)}}
            {{  Form::select ('regione', ['','Aosta', 'Piemonte', 'Liguria', 'Lombardia', 'Trentino Alto Adige',
                'Friuli Venezia Giulia', 'Veneto', 'Emilia Romagna', 'Toscana', 'Umbria', 
                'Marche', 'Lazio', 'Abruzzo', 'Molise',
                'Puglia', 'Campania', 'Calabria', 'Basilicata', 'Sicilia', 'Sardegna'], ['Piemonte'] )  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('data', 'Data' /*class-type*/)}}
            {{  Form::date ('data', '22/01/1999' /*class-type*/ ) }}
        </div>
    </div>
    
    <div>
    {{  Form::submit ('Cerca' /*class-type*/)}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>

