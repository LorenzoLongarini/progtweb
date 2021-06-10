
<div id = "client-modify-section" class = "form" style = "width: 850px; margin-left: 100px;">
    {{  Form::open(['action'=>['ClientController@updateClient', $user=Auth::user()], 'method'=>'POST'])}}
   
    <h2>Modifica Dati</h2>
        <div class="multiple-input" style = "margin: 10px 0px;">
            <div class="wrap-input blank" style = "margin: 10px 10px;">
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
            <div class="wrap-input blank" style = "margin: 10px 10px;">

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
            <div class="wrap-input blank" style = "margin: 10px 10px;">   
                
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
        <div class = "multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input blank" style = "margin: 10px 10px;">
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
        
        
    <div class="wrap-input blank" style = "margin: 10px 10px;">
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
    <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input blank" style = "margin: 10px 10px;">
            {{  Form::label ('ivaFiscale', 'Codice Fiscale') }}
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
        <div class="multiple-input" style = "margin: 10px 0px;">
            <div class="wrap-input blank" style = "margin: 10px 10px;">
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
        <div class="wrap-input blank" style = "margin: 10px 10px;">
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
        
        <div class="wrap-input blank" style = "margin: 10px 10px; width:97%;">
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
    
       
        <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input blank" style = "margin: 10px 10px;">
            {{  Form::label ('via', 'Via' )  }}
            {{  Form::text ('via', $user->via )  }}
            @if ($errors->first('via'))
                <ul>
                    @foreach ($errors->get('via') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
   

    
        <div class="wrap-input blank" style = "margin: 10px 10px;">
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
        <div class="wrap-input blank" style = "margin: 10px 10px;">
            {{  Form::label ('cap', 'Cap' )}}
            {{  Form::text ('cap', $user->cap)}}
           
        </div>
    </div>
    <div style = "display:flex; justify-content:center;"> 
    <div >
    {{  Form::submit ('Conferma', ['class'=>'default-btn'])}}
    </div>

    {{  Form::hidden ('_method', 'PUT')}}
    <div>
    {{  Form::reset ('Annulla', ['class'=>'default-btn'] )}}
    </div>
    </div>
{{Form::close()}}
</div>

