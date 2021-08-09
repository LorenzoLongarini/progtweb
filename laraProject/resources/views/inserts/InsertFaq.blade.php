
<div class="form-blank">
    {{  Form::open(array('route' => 'inserisciFaq.store', 'id' =>'insertFaq' , 'files' => true))  }}
    <div style = "display:flex;">
   <div>
   {{ link_to_route('faq', 'INDIETRO', $parameters = [],['class'=>'user-btn','style' => 'width: 180px;'] )}}
       
   </div>
   <div style = "position: relative;
    left: 80px;">
    <h2>Modulo inserimento FAQ</h2>
    <div class="multiple-input" style = "margin: 10px 0px;">
    <div class="wrap-input" style = "margin: 10px 10px;">
        {{  Form::label('domanda', 'Domanda')}}
        {{  Form::textarea('domanda', '', ['class'=>'text-area'])}}
        @if ($errors->first('domanda'))
                <ul>
                    @foreach ($errors->get('domanda') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>

        <div class="wrap-input" style = "margin: 10px 10px;">
        {{  Form::label('risposta',  'Risposta')}}
        {{  Form::textarea('risposta', '', ['class'=>'text-area'])}}
        @if ($errors->first('risposta'))
                <ul>
                    @foreach ($errors->get('risposta') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
</div>
<div style = "display:flex; justify-content:center">
    <div>
    {{  Form::submit ('Conferma' , ['class'=>'default-btn'])}}
    </div>

    <div>
    {{  Form::reset ('Annulla' , ['class'=>'default-btn'])}}
    </div>
    </div>
</div>
</div>
{{Form::close()}}
</div>
