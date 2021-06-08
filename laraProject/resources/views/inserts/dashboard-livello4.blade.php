
<div id="dashboard" class="form">
    {{  Form::open(array('route' => ['aggiungiEvento.store'], 'id' =>'dashboard-livello4' , 'files' => true /*'class' => some-bollocks*/))  }}
   
    <h2>Informazioni generali</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('bigliettiVenduti', 'Biglietti Venduti' /*class-type*/)}}
            
            @if ($errors->first('titolo'))
                <ul>
                    @foreach ($errors->get('titolo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        
    </div>
    <div>
    {{Form::submit ('Conferma')}}
    {{Form::reset ('Reset')}}
    </div>

<h2>Informazioni generali</h2>
   
</div>

