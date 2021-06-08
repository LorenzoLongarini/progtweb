
<div id = "client-modify" class = "form">
    {{  Form::open(array('route' => ['modificaClient.update', $user->utenteId] , 'Method'=>'POST'))  }}
   
    <h2>Modifica Dati</h2>
        <div class="multiple-input">
            <div class="wrap-input blank">
            {{  Form::label ('username', 'Username' )}}
            {{  Form::text ('username', $user->username )  }}
            @if ($errors->first('username'))
                <ul>
                    @foreach ($errors->get('username') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="wrap-input blank">

            {{  Form::label ('password', 'Password' )}}
            {{  Form::text ('password', '' )  }}
            @if ($errors->first('password'))
                <ul>
                    @foreach ($errors->get('password') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="wrap-input blank">   
                
            {{  Form::label ('password_confirmation', 'Conferma Password' )}}
            {{  Form::text ('password_confirmation', '' )  }}
            @if ($errors->first('password'))
                <ul>
                    @foreach ($errors->get('password') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
        <div class = "multiple-input">
        <div class="wrap-input blank">
            {{  Form::label ('nome', 'Nome')  }}
            {{  Form::text ('nome', $user->nome )  }}
          @if ($errors->first('nome'))
                <ul>
                    @foreach ($errors->get('nome') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        
        
    <div class="wrap-input blank">
            {{  Form::label ('cognome', 'Cognome')}}
            {{  Form::text ('cognome', $user->cognome )  }}
          @if ($errors->first('cognome'))
                <ul>
                    @foreach ($errors->get('cognome') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <div class="multiple-input">
        <div class="wrap-input blank">
            {{  Form::label ('ivaFiscale', 'Codice Fiscale' }}
            {{  Form::text ('ivaFiscale', $user->ivaFiscale)   }}
            @if ($errors->first('ivaFiscale'))
                <ul>
                    @foreach ($errors->get('ivaFiscale') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        </div>
        <div class="multiple-input">
            <div class="wrap-input blank">
            {{  Form::label ('dataNascita', 'Data di Nascita' )}}
            {{  Form::date ('dataNascita', $user->dataNascita )  }}
            @if ($errors->first('dataNascita'))
                <ul>
                    @foreach ($errors->get('dataNascita') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            </div>
        <div class="wrap-input blank">
            {{  Form::label ('email', 'Email' )}}
            {{  Form::text ('email', $user->email  ) }}
            @if ($errors->first('email'))
                <ul>
                    @foreach ($errors->get('email') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
        
        <div class="wrap-input blank">
            {{  Form::label ('telefono', 'Telefono' )}}
            {{  Form::text ('telefono', $user->telefono  ) }}
            @if ($errors->first('telefono'))
                <ul>
                    @foreach ($errors->get('telefono') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    
       
        <div class="multiple-input">
        <div class="wrap-input blank">
            {{  Form::label ('via', 'Via' )  }}
            {{  Form::text ('via',$user->via )  }}
            @if ($errors->first('via'))
                <ul>
                    @foreach ($errors->get('via') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
   

    
        <div class="wrap-input blank">
            {{  Form::label ('città', 'Città')}}
            {{  Form::text ('città', $user->città  )}}
            @if ($errors->first('città'))
                <ul>
                    @foreach ($errors->get('città') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input blank">
            {{  Form::label ('cap', 'Cap' )}}
            {{  Form::text ('cap', $user->cap)}}
           
        </div>
    </div>

    <div>
    {{  Form::submit ('Conferma', ['class'=>''])}}
    </div>

    {{  Form::hidden ('_method', 'PUT')}}
    <div>
    {{  Form::reset ('Annulla' )}}
    </div>
{{Form::close()}}
</div>

