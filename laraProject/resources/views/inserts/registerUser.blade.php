
<div class="form">
    {{  Form::open(array('route' => 'registraUser.store', 'id' =>'addproduct' , 'files' => true))  }}
   
    <h2>Modulo Registrazione</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('username', 'Username' /*class-type*/)}}
            {{  Form::text ('username', '' /*class-type*/)  }}
            @if ($errors->first('username'))
                <ul>
                    @foreach ($errors->get('username') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            
            {{  Form::label ('password', 'Password' /*class-type*/)}}
            {{  Form::text ('password', '' /*class-type*/)  }}
            @if ($errors->first('password'))
                <ul>
                    @foreach ($errors->get('password') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
            <div class="wrap-input">   
                
            {{  Form::label ('password_confirmation', 'Password' /*class-type*/)}}
            {{  Form::text ('password_confirmation', '' /*class-type*/)  }}
            @if ($errors->first('password'))
                <ul>
                    @foreach ($errors->get('password') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input">
            {{  Form::label ('nome', 'Nome'/*class-type*/)  }}
            {{  Form::text ('nome', '' /*class-type*/)  }}
          @if ($errors->first('nome'))
                <ul>
                    @foreach ($errors->get('nome') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>
        
    <div class="wrap-input">
            {{  Form::label ('cognome', 'Cognome'/*class-type*/)  }}
            {{  Form::text ('cognome', '' /*class-type*/)  }}
          @if ($errors->first('cognome'))
                <ul>
                    @foreach ($errors->get('cognome') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="wrap-input">
            {{  Form::label ('ragioneSociale', 'Ragione Sociale' /*class-type*/)}}
            {{  Form::text ('ragioneSociale', '' /*class-type*/)  }}
            @if ($errors->first('ragioneSociale'))
                <ul>
                    @foreach ($errors->get('ragioneSociale') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input">
            {{  Form::label ('ivaFiscale', 'Codice Fiscale' /*class-type*/)}}
            {{  Form::text ('ivaFiscale', '' /*class-type*/)  }}
        </div>
        <div class="wrap-input">
            {{  Form::label ('dataNascita', 'Data di Nascita' /*class-type*/)}}
            {{  Form::date ('ragioneSociale', '' /*class-type*/)  }}
            @if ($errors->first('dataNascita'))
                <ul>
                    @foreach ($errors->get('dataNascita') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="wrap-input">
            {{  Form::label ('email', 'Email' /*class-type*/)}}
            {{  Form::text ('email', '' /*class-type*/ ) }}
            @if ($errors->first('email'))
                <ul>
                    @foreach ($errors->get('email') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input">
            {{  Form::label ('telefono', 'Telefono' /*class-type*/)}}
            {{  Form::text ('telefono', '' /*class-type*/ ) }}
            @if ($errors->first('telefono'))
                <ul>
                    @foreach ($errors->get('telefono') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('via', 'Via' /*class-type*/)  }}
            {{  Form::text ('via','' /*class-type*/)  }}
            @if ($errors->first('via'))
                <ul>
                    @foreach ($errors->get('via') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            {{  Form::label ('città', 'Città' /*class-type*/)}}
            {{  Form::text ('città', ''  /*class-type*/)}}
            @if ($errors->first('città'))
                <ul class="errors">
                    @foreach ($errors->get('città') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>

    <div>
    {{  Form::submit ('Conferma' /*class-type*/)}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>

