<div class="form-blank">
    {{  Form::open(array('route' => 'registraUser.store', 'id' =>'addproduct' , 'files' => true))  }}
   
    <h2>Modulo inserimento FAQ</h2>
        <div class="wrap-input">
        {{  Form::label('domanda', 'Domanda')}}
        {{  Form::textarea('domanda')}}
        </div>

        <div class="wrap-input">
        {{  Form::label('risposta',  'Risposta')}}
        {{  Form::textarea('risposta')}}


    <div>
    {{  Form::submit ('Conferma', ['class'=>''])}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>
