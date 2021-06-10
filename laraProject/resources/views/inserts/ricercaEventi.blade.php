
    
    {{  Form::open(array('route' => ['cerca']))  }}
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::text ('titolo', null, array('placeholder' => 'Nome evento'))}}
        </div>

        <div class="wrap-input">
            {{  Form::text ('descrizione', null, array('placeholder' => 'Descrizione'))}}
        </div>

        <div class="wrap-input">
            {{  Form::select ('organizzatore', Catalogo::listaOrganizzatori())}}
        </div>

        <div class="wrap-input">
            {{  Form::select ('regione', Regioni::lista_regioni )}}
        </div>

        <div id="date-input" class="wrap-input">
            {{  Form::date ('data', date('Y-m-d'), array('min' => date('Y-m-d'))) }}
        </div>

        <div id="button-input" class="wrap-input">
            {{  Form::submit ('Cerca', ["class" => "default-btn", "id" => "search-btn"])}}
        </div>
    </div>
{{Form::close()}}


