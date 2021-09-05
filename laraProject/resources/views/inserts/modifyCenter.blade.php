
@extends('layouts.forms')
@section('content')
<div class="form" id = "eventi-section" style = "width: 850px; margin-left: 1px;">
    {{  Form::open(['action' => ['AdminController@updateCentro', $centers->centersId] ,'method'=>'POST'])  }}

    <div style = "display:flex;"> 
   {{ link_to_route('admin', 'INDIETRO', $parameters = [$centers->centersId],['class'=>'user-btn','style' => 'width: 180px;'] )}}
       
   </div>
   <div style = "margin-left: 80px;">
   
    <h2>Modifica centro assistenza</h2>
    <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('nome', 'Nome')  }}
            {{  Form::text ('nome', $centers->nome)}}
          @if ($errors->first('nome'))
                <ul>
                    @foreach ($errors->get('nome') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('email', 'Email')  }}
            {{  Form::text ('email', $centers->email)}}
          @if ($errors->first('email'))
                <ul>
                    @foreach ($errors->get('email') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('via', 'Via')  }}
            {{  Form::text ('via', $centers->via)}}
          @if ($errors->first('via'))
                <ul>
                    @foreach ($errors->get('via') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('telefono', 'Telefono')  }}
            {{  Form::text ('telefono', $centers->telefono)}}
          @if ($errors->first('telefono'))
                <ul>
                    @foreach ($errors->get('telefono') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    
    </div>
    <div style = "display: flex;
    justify-content: center;">
        <div>
    {{  Form::submit ('Conferma' , ['class'=>'default-btn'])}}
    {{  Form::hidden ('_method', 'PUT')}}
    </div>

    <div>
    {{  Form::reset ('Annulla' , ['class'=>'default-btn'])}}
    </div>
</div>
    </div>
    </div>
    </div>
    {{  Form::hidden ('_method', 'PUT')}}
{{Form::close()}}
</div>
@endsection
