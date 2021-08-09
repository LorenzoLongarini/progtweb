@extends('layouts.forms')

@section('content')
<div class="form" id = "eventi-section" style = "width: 850px; margin-left: 1px;">
    {{  Form::open(['action' => ['AdminController@salvaMalf', $product->productsId] ])  }}
    <div style = "display:flex;">
   <div>
   {{ link_to_route('admin', 'INDIETRO', $parameters = [],['class'=>'user-btn','style' => 'width: 180px;'] )}}
       
   </div>
   <div style = "margin-left: 80px;">
   
    <h2>Aggiungi Malfunzionamento</h2>
    <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('nomeMalf', 'Nome')  }}
            {{  Form::text ('nomeMalf', '')}}
          @if ($errors->first('nomeMalf'))
                <ul>
                    @foreach ($errors->get('nomeMalf') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('problema', 'Problema')}}
            {{  Form::textarea ('problema','', ['class'=>'text-area'] )  }}
            @if ($errors->first('problema'))
                <ul>
                    @foreach ($errors->get('problema') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('soluzione', 'Soluzione')  }}
            {{  Form::textarea ('soluzione', '', ['class'=>'text-area'])}}
          @if ($errors->first('soluzione'))
                <ul>
                    @foreach ($errors->get('soluzione') as $message)
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
    </div>

    <div>
    {{  Form::reset ('Annulla' , ['class'=>'default-btn'])}}
    </div>
    </div>
    </div>
</div>
</div>
{{Form::close()}}
</div>
@endsection
