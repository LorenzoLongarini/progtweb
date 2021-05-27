<div class="contact-form">
    {{  Form::open(array('route' => ['ricerca'], 'id' =>'filtro' , 'files' => true /*'class' => some-bollocks*/))  }}
   
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('titolo', 'Nome Evento' /*class-type*/) }}
            {{  Form::text ('titolo', old('titolo') /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('artista', 'Artista'/*class-type*/)  }}
            {{  Form::text ('artista' /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('descrizione', 'Descrizione' /*class-type*/) }}
            {{  Form::text ('descrizione' /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('regione', 'Regione' /*class-type*/)}}
            {{  Form::select ('regione', ['' => '', 'Aosta' => 'Aosta', 
                'Piemonte' => 'Piemonte', 'Liguria' => 'Liguria', 'Lombardia' => 'Lombardia', 
                'Trentino Alto Adige' => 'Trentino Alto Adige', 'Friuli Venezia Giulia' => 'Friuli Venezia Giulia', 
                'Veneto'  => 'Veneto', 'Emilia Romagna' => 'Emilia Romagna', 'Toscana' => 'Toscana', 
                'Umbria' => 'Umbria', 'Marche' => 'Marche', 'Lazio' => 'Lazio', 'Abruzzo' => 'Abruzzo', 
                'Molise' => 'Molise', 'Puglia' => 'Puglia', 'Campania' => 'Campania', 'Calabria' => 'Calabria', 
                'Basilicata' => 'Basilicata', 'Sicilia' => 'Sicilia', 'Sardegna' => 'Sardegna'])  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('data', 'Data')}}
            {{  Form::date ('data', date('Y-m-d'))}}
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

