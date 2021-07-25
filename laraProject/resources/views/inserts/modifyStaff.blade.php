@php
use App\Models\Enums\Sottocategoria;
@endphp

@extends('layouts.forms')

@section('content')
<div class="form" id = "eventi-section" style = "width: 850px; margin-left: 100px;">
{{  Form::open(['action' => ['AdminController@updateStaff', $users->usersId] , 'files' => true, 'method'=>'POST'])  }}

    <h2>Modifica un membro dello Staff</h2>
        <div class="multiple-input">
            <div class="wrap-input blank">
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
             {{  Form::label ('nome', 'Nome ')  }}
             {{  Form::text ('nome', $users->nome)  }}
                  @if ($errors->first('nome'))
                      <ul>
                         @foreach ($errors->get('nome') as $message)
                         <li class="errors">{{ $message }}</li>
                          @endforeach
                     </ul>
                      @endif
             </div>
        
        
             <div class="wrap-input blank">
                 {{  Form::label ('cognome', 'Cognome')  }}
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
        <div class="wrap-input blank">
            {{  Form::label ('ivacf', 'Partita IVA' )}}
            {{  Form::text ('ivacf', $users->ivacf ) }}
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
            <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('sottocategoria', 'Ruolo' )}}
            {{  Form::select ('sottocategoria', Sottocategoria::sottocat)  }}
            @if ($errors->first('sottocategoria'))
                <ul>
                    @foreach ($errors->get('sottocategoria') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="multiple-input" style = "margin: 10px 0px;">
            <div class="wrap-input blank" style = "margin: 10px 10px;">
            {{  Form::label ('dataNascita', 'Data di Nascita' )}}
            {{  Form::date ('dataNascita', $users->dataNascita )  }}
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
            {{  Form::label ('email', 'Email' /*class-type*/)}}
            {{  Form::text ('email', $users->email) }}
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
            {{  Form::text ('telefono', $users->telefono ) }}
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
            {{  Form::text ('via',$users->via)  }}
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
            {{  Form::text ('città', $users->città)}}
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
            {{  Form::text ('cap', $users->cap)}}
           
        </div>
    </div>

    <div>
    {{  Form::submit ('Conferma', ['class'=>''])}}
    {{  Form::hidden ('_method', 'PUT')}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>
@endsection
