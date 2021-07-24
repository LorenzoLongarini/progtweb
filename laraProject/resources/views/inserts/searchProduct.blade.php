
    
    {{  Form::open(array('route' => ['catalogo']))  }}
    <div class="multiple-input">
    

        <div class="wrap-input">
            {{  Form::text ('descrizione', null, array('placeholder' => 'Descrizione'))}}
        </div>

        <div id="button-input" class="wrap-input">
            {{  Form::submit ('Cerca', ["class" => "default-btn", "id" => "search-btn"])}}
        </div>
    </div>
{{Form::close()}}


