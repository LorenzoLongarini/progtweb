@php
use App\Models\Enums\Sottocategoria;
@endphp

@extends('layouts.forms')

@section('content')
<div class="form" id = "eventi-section" style = "width: 850px; margin-left: 1px;">
{{  Form::open(['action' => ['AdminController@updateStaff', $users->usersId] , 'files' => true, 'method'=>'POST'])  }}

<div style = "display:flex;">
   <div>
   {{ link_to_route('admin', 'INDIETRO', $parameters = [],['class'=>'user-btn','style' => 'width: 180px;'] )}}
       
   </div>
   <div style = "position: relative;
    left: 100px;">
   
    <h2>Modifica un membro dello Staff</h2>
    <div class="multiple-input" style = "margin: 10px 0px;">
    <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('username', 'Username' )}}
            {{  Form::text ('username', $users->username )  }}
            @if ($errors->first('username'))
                <ul>
                    @foreach ($errors->get('username') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="wrap-input" style = "margin: 10px 10px;">

            {{  Form::label ('password', 'Password' )}}
            {{  Form::password ('password',array('placeholder'=>'Password', 'class'=>'form-control' ) )  }}
            @if ($errors->first('password'))
                <ul>
                    @foreach ($errors->get('password') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="wrap-input" style = "margin: 10px 10px;"> 
                
            {{  Form::label ('password_confirmation', 'Conferma Password' )}}
            {{  Form::password ('password', array('placeholder'=>'password', 'class'=>'form-control' ))  }}
            @if ($errors->first('password'))
                <ul>
                    @foreach ($errors->get('password') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
        <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
             {{  Form::label ('nome', 'Nome')  }}
             {{  Form::text ('nome', $users->password)  }}
                  @if ($errors->first('nome'))
                      <ul>
                         @foreach ($errors->get('nome') as $message)
                         <li class="errors">{{ $message }}</li>
                          @endforeach
                     </ul>
                      @endif
             </div>
        
        
             <div class="wrap-input" style = "margin: 10px 10px;">
                 {{  Form::label ('cognome', 'Cognome ')  }}
                 {{  Form::text ('cognome', $users->cognome)  }}
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
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('ivacf', 'Partita IVA' )}}
            {{  Form::text ('ivacf', $users->ivacf)  }}
            @if ($errors->first('ivacf'))
                <ul>
                    @foreach ($errors->get('ivacf') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
       
       

        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('email', 'Email' )}}
            {{  Form::text ('email', $users->email ) }}
            @if ($errors->first('email'))
                <ul>
                    @foreach ($errors->get('email') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
        
        <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('telefono', 'Telefono' )}}
            {{  Form::text ('telefono', $users->telefono ) }}
            @if ($errors->first('telefono'))
                <ul>
                    @foreach ($errors->get('telefono') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input blank" style = "margin: 10px 10px;">
            {{  Form::label ('dataNascita', 'Data di Nascita' )}}
            {{  Form::date ('dataNascita',$users->dataNascita )  }}
            @if ($errors->first('dataNascita'))
                <ul>
                    @foreach ($errors->get('dataNascita') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            </div>
            <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('sottocategoria', 'Ruolo' )}}
            {{  Form::select ('sottocategoria', ['','telefonia'=>'telefonia', 'televisori'=>'televisori', 'computers'=>'computers', 'stampanti'=>'stampanti'], $users->sottocategoria )  }}
            @if ($errors->first('sottocategoria'))
            <ul>
                @foreach ($errors->get('sottocategoria') as $message)
                <li class="errors">{{ $message }}</li>
                @endforeach
            </ul>
            @endif
        </div>
</div>
    
       
<div class="multiple-input" style = "margin: 10px 0px;">
<div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('via', 'Via' )  }}
            {{  Form::text ('via',$users->via)  }}
            @if ($errors->first('via'))
                <ul>
                    @foreach ($errors->get('via') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>


       
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('città', 'Città' )}}
            {{  Form::text ('città', $users->città)}}
            @if ($errors->first('città'))
                <ul>
                    @foreach ($errors->get('città') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('cap', 'Cap' )}}
            {{  Form::text ('cap', $users->cap)}}
            @if ($errors->first('cap'))
                <ul>
                    @foreach ($errors->get('cap') as $message)
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
    {{  Form::hidden ('_method', 'PUT')}}
{{Form::close()}}
</div>
@endsection
