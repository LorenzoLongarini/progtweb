<div id="search-form" class="form card">
    {{  Form::open(array('route' => ['cerca'], 'id' =>'filtri-ricerca'))  }}
   
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::text ('titolo', null, array('placeholder' => 'Nome evento'))}}
        </div>
        <div class="wrap-input">
            {{  Form::text ('descrizione', null, array('placeholder' => 'Descrizione'))}}
        </div>

    <div class="wrap-input">
            {{  Form::text ('organizzatore', null, array('placeholder' => 'Organizzatore'))}}
        </div>
        <div class="wrap-input">
            {{  Form::select ('regione', Regioni::lista_regioni )}}
        </div>
        <div class="wrap-input">
            {{  Form::date ('data',date('Y-m-d'), array('min' => date('Y-m-d'))) }}
        </div>
        <div class="wrap-input">
            {{  Form::submit ('Cerca', ["class" => "default-btn", "id" => "search-btn"])}}
        </div>
    </div>
{{Form::close()}}
</div>

