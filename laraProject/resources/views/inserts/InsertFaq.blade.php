<div class="form-blank">
    {{  Form::open(array('route' => 'inserisciFaq.store', 'id' =>'addproduct' , 'files' => true))  }}
   
    <h2>Modulo inserimento FAQ</h2>
        <div class="wrap-input">
        {{  Form::label('domanda', 'Domanda')}}
        {{  Form::textarea('domanda')}}
        @if ($errors->first('domanda'))
                <ul>
                    @foreach ($errors->get('domanda') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>

        <div class="wrap-input">
        {{  Form::label('risposta',  'Risposta')}}
        {{  Form::textarea('risposta')}}
        @if ($errors->first('risposta'))
                <ul>
                    @foreach ($errors->get('risposta') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>

    <div>
    {{  Form::submit ('Conferma', ['class'=>''])}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>
