<div class="form-blank">
    {{  Form::open(array('route' => ['modificaOrg.update', $user['utenteId']] , 'files' => true, 'Method'=>'POST'))  }}
   
    <h2>Modulo Registrazione</h2>
        <div class="multiple-input">
            <div class="wrap-input blank">
            {{  Form::label ('username', 'Username' /*class-type*/)}}
            {{  Form::text ('username', $user->username /*class-type*/)  }}
            @if ($errors->first('username'))
                <ul>
                    @foreach ($errors->get('username') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="wrap-input blank">

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
            <div class="wrap-input blank">   
                
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
        <div class = "multiple-input">
            <div class="wrap-input blank">
             {{  Form::label ('nome', 'Nome (opzionale)'/*class-type*/)  }}
             {{  Form::text ('nome', $user->nome /*class-type*/)  }}
                  @if ($errors->first('nome'))
                      <ul>
                         @foreach ($errors->get('nome') as $message)
                         <li class="errors">{{ $message }}</li>
                          @endforeach
                     </ul>
                      @endif
             </div>
        
        
             <div class="wrap-input blank">
                 {{  Form::label ('cognome', 'Cognome (opzionale)'/*class-type*/)  }}
                 {{  Form::text ('cognome', $user->cognome /*class-type*/)  }}
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
          
        </div>
        <div class="wrap-input blank">
            {{  Form::label ('ivaFiscale', 'Partita IVA' /*class-type*/)}}
            {{  Form::text ('ivaFiscale', $user->ivaFiscale /*class-type*/)  }}
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
           
            </div>
        <div class="wrap-input blank">
            {{  Form::label ('email', 'Email' /*class-type*/)}}
            {{  Form::text ('email', $user->email /*class-type*/ ) }}
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
            {{  Form::label ('telefono', 'Telefono' /*class-type*/)}}
            {{  Form::text ('telefono', $user->telefono /*class-type*/ ) }}
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
            {{  Form::label ('via', 'Via' /*class-type*/)  }}
            {{  Form::text ('via', $user->via /*class-type*/)  }}
            @if ($errors->first('via'))
                <ul>
                    @foreach ($errors->get('via') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
   

    
        <div class="wrap-input blank">
            {{  Form::label ('città', 'Città' /*class-type*/)}}
            {{  Form::text ('città', $user->città  /*class-type*/)}}
            @if ($errors->first('città'))
                <ul>
                    @foreach ($errors->get('città') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input blank">
            {{  Form::label ('cap', 'Cap' /*class-type*/)}}
            {{  Form::text ('cap', $user->cap /*class-type*/)}}
           
        </div>
    </div>

    <div>
    {{  Form::submit ('Conferma', ['class'=>''])}}
    </div>
    <div>

    {{  Form::hidden ('_method', 'PUT')}}

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>

