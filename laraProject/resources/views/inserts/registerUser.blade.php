
<div class="form-blank" style = "width: 700px; height: 700px;">
    {{  Form::open(array('route' => 'registraUser.store', 'id' =>'registraUser' , 'files' => true))  }}
   
    <h2>Modulo Registrazione</h2>
        <div class="multiple-input" style = "margin: 10px 0px;">
            <div class="wrap-input blank"  style = "margin: 10px 10px;">
            {{  Form::label ('username', 'Username' /*class-type*/)}}
            {{  Form::text ('username', '' /*class-type*/)  }}
            @if ($errors->first('username'))
                <ul>
                    @foreach ($errors->get('username') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="wrap-input blank" style = "margin: 10px 10px;">

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
            <div class="wrap-input blank" style = "margin: 10px 10px;">   
                
            {{  Form::label ('password_confirmation', 'Conferma Password' /*class-type*/)}}
            {{  Form::text ('password_confirmation', '' /*class-type*/)  }}
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
        
        
    <div class="wrap-input blank" style = "margin: 10px 10px;" >
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
    </div>
    <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input blank" style = "margin: 10px 10px;">
            {{  Form::label ('ivaFiscale', 'Codice Fiscale' /*class-type*/)}}
            {{  Form::text ('ivaFiscale', '' /*class-type*/)  }}
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
            {{  Form::label ('dataNascita', 'Data di Nascita' /*class-type*/)}}
            {{  Form::date ('dataNascita', '' /*class-type*/)  }}
            @if ($errors->first('dataNascita'))
                <ul>
                    @foreach ($errors->get('dataNascita') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            </div>
        <div class="wrap-input blank" style = "margin: 10px 10px;">
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
        </div>
        
        <div class="wrap-input blank" style = "margin: 10px 10px; width: 97%;">
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
    
       
        <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input blank" style = "margin: 10px 10px;">
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
   

    
        <div class="wrap-input blank" style = "margin: 10px 10px;">
            {{  Form::label ('città', 'Città' /*class-type*/)}}
            {{  Form::text ('città', ''  /*class-type*/)}}
            @if ($errors->first('città'))
                <ul>
                    @foreach ($errors->get('città') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input blank" style = "margin: 10px 10px;">
            {{  Form::label ('cap', 'Cap' /*class-type*/)}}
            {{  Form::text ('cap', ''  /*class-type*/)}}
           
        </div>
    </div>
    <div style = "display:flex; justify-content:center;">
    <div>
    {{  Form::submit ('Conferma', ['class'=>'default-btn'])}}
    </div>

    <div>
    {{  Form::reset ('Annulla', ['class'=>'default-btn'])}}
    </div>
    </div>
{{Form::close()}}
</div>

