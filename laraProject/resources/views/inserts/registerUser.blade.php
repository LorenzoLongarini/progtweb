
<div class="form-blank" style = "width: 700px; height: 700px;">
    {{  Form::open(array('route' => 'registraUser.store', 'id' =>'registraUser' , 'files' => true, 'method' => 'POST'))  }}
   
    <h2>Modulo di Registrazione</h2>
        <div class="multiple-input">
            <div class="wrap-input blank">
            {{  Form::label ('username', 'Username' )}}
            {{  Form::text ('username', '' )  }}
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
            {{  Form::password ('password', array('placeholder'=>'Password', 'class'=>'form-control' ) )  }}
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
            {{  Form::password ('password', array('placeholder'=>'Password', 'class'=>'form-control' ) )  }}
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
        
        
             <div class="wrap-input blank">
                 {{  Form::label ('cognome', 'Cognome '/*class-type*/)  }}
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
       
        <div class="wrap-input blank">
            {{  Form::label ('ivacf', 'Partita IVA' /*class-type*/)}}
            {{  Form::text ('ivacf', '' /*class-type*/)  }}
            @if ($errors->first('ivacf'))
                <ul>
                    @foreach ($errors->get('ivacf') as $message)
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
        
        <div class="wrap-input blank">
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
    
       
        <div class="multiple-input">
        <div class="wrap-input blank">
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
        

        <div class="multiple-input" style = "margin: 10px 0px;">
            <div class="wrap-input blank" style = "margin: 10px 10px;">
            {{  Form::label ('dataNascita', 'Data di Nascita' )}}
            {{  Form::date ('dataNascita','' )  }}
            @if ($errors->first('dataNascita'))
                <ul>
                    @foreach ($errors->get('dataNascita') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            </div>
            </div>
        <div class="wrap-input blank">
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
        <div class="wrap-input blank">
            {{  Form::label ('cap', 'Cap' /*class-type*/)}}
            {{  Form::text ('cap', ''  /*class-type*/)}}
           
        </div>
    </div>

    <div>
    {{  Form::submit ('Conferma', ['class'=>'default-btn'])}}
    </div>

    <div>
    {{  Form::reset ('Annulla', ['class'=>'default-btn'])}}
    </div>
    </div>
{{Form::close()}}
</div>

