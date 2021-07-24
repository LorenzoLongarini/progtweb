@extends('layouts.forms')

@section('content')
<div class="form" id = "eventi-section" style = "width: 850px; margin-left: 100px;">
    {{  Form::open(array('route' => 'insert-staff.store', 'id' =>'insertStaff' , 'files' => true))  }}
   
    <h2>Inserisci un membro dello Staff</h2>
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
             {{  Form::label ('nome', 'Nome (opzionale)'/*class-type*/)  }}
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
                 {{  Form::label ('cognome', 'Cognome (opzionale)'/*class-type*/)  }}
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
    <div class="multiple-input">
        <div class="wrap-input blank">
            {{  Form::label ('ragioneSociale', 'Nome Organizzazione' /*class-type*/)}}
            {{  Form::text ('ragioneSociale', '' /*class-type*/)  }}
            @if ($errors->first('ragioneSociale'))
                <ul>
                    @foreach ($errors->get('ragioneSociale') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input blank">
            {{  Form::label ('ivaFiscale', 'Partita IVA' /*class-type*/)}}
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
    {{  Form::submit ('Conferma', ['class'=>''])}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>
@endsection
