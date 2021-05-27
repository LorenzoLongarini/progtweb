
<div class="form">
    {{  Form::open(array('route' => ['aggiungiEvento.store'], 'id' =>'dashborard-livello2' , 'files' => true /*'class' => some-bollocks*/))  }}
				
    <h2>Informazioni generali</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('nome', 'Nome' /*class-type*/)}}
            {{  Form::text ('nome', '' /*class-type*/)  }}
            /*@if ($errors->first('titolo'))
                <ul>
                    @foreach ($errors->get('titolo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
        <div class="wrap-input">
            {{  Form::label ('cognome', 'Cognome'/*class-type*/)  }}
            {{  Form::text ('cognome', '' /*class-type*/)  }}
            /*@if ($errors->first('artista'))
                <ul>
                    @foreach ($errors->get('artista') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
    </div>
        
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('ivaFiscale', 'Codice Fiscale - P.Iva' /*class-type*/)}}
            {{  Form::text ('ivaFiscale', '' )  }}
               /* @if ($errors->first('regione'))
                <ul>
                    @foreach ($errors->get('regione') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
        <div class="wrap-input">
            {{  Form::label ('email', 'Email' /*class-type*/)}}
            {{  Form::text ('email', '' /*class-type*/)  }}
            /*@if ($errors->first('luogo'))
                <ul>
                    @foreach ($errors->get('luogo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
        
        <div class="wrap-input">
            {{  Form::label ('dataNascita', 'Data' /*class-type*/)}}
            {{  Form::date ('dataNascita', '' /*class-type*/ ) }}
            /*@if ($errors->first('data'))
                <ul>
                    @foreach ($errors->get('data') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('username', 'Username' /*class-type*/)  }}
            {{  Form::text ('username' /*class-type*/)  }}
           /* @if ($errors->first('imgName'))
                <ul>
                    @foreach ($errors->get('imgName') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
        <div class="wrap-input">
            {{  Form::label ('password', 'Password' /*class-type*/)}}
            {{  Form::text ('password', '' /*class-type*/)  }}
        </div>
    </div>
    
    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('telefono', 'Telefono' /*class-type*/)}}
            {{  Form::textarea ('telefono', ''  /*class-type*/)}}
            /*@if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('via', 'Via' /*class-type*/) }}
            {{  Form::text ('via', '' /*class-type*/) }}
            /*@if ($errors->first('programma'))
                <ul>
                    @foreach ($errors->get('programma') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('cap', 'Cap' /*class-type*/) }}
            {{  Form::text ('cap', '' /*class-type*/) }}
            /*@if ($errors->first('programma'))
                <ul>
                    @foreach ($errors->get('programma') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
    </div>
    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('città', 'Città' /*class-type*/) }}
            {{  Form::text ('città', '' /*class-type*/) }}
           /* @if ($errors->first('programma'))
                <ul>
                    @foreach ($errors->get('programma') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif*/
        </div>
    </div>


    {{  Form::label ('dataSconto', 'Data inizio sconto')}}
    {{  Form::date ('dataSconto')  }}
   

    </div>

    <div>
    {{  Form::submit ('Modifica' /*class-type*/)}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>

