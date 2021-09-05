

@extends('layouts.forms')

@section('content')
<div class="form" id = "eventi-section" style = "width: 850px; margin-left: 1px;">
    {{  Form::open(['action' => ['AdminController@updateProd', $product->productsId] , 'files' => true, 'method'=>'POST'])  }}
    <div style = "display:flex;">
   <div>
   {{ link_to_route('admin', 'INDIETRO', $parameters = [],['class'=>'user-btn','style' => 'width: 180px;'] )}}
       
   </div>
   <div style = "margin-left: 80px;">
    <h2>Modifica Prodotto</h2>
    <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('nome', 'Nome Prodotto')}}
            {{  Form::text ('nome', $product->nome )  }}
            @if ($errors->first('nome'))
                <ul>
                    @foreach ($errors->get('nome') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('prezzo', 'Prezzo')  }}
            {{  Form::text ('prezzo', $product->prezzo)}}
          @if ($errors->first('prezzo'))
                <ul>
                    @foreach ($errors->get('prezzo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>
    <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('noteTecniche', 'Note Tecniche')}}
            {{  Form::textarea ('noteTecniche', $product->noteTecniche , ['class'=>'text-area'])  }}
            @if ($errors->first('noteTecniche'))
                <ul>
                    @foreach ($errors->get('noteTecniche') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('modInstallaz', 'Modalità di Installazione')}}
            {{  Form::textarea ('modInstallaz', $product->modInstallaz , ['class'=>'text-area']) }}
            @if ($errors->first('modInstallaz'))
                <ul>
                    @foreach ($errors->get('modInstallaz') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    
</div>
<div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('descrizione', 'Descrizione')}}
            {{  Form::textarea ('descrizione', $product->descrizione, ['class'=>'text-area'] ) }}
            @if ($errors->first('descrizione'))
                <ul>
                    @foreach ($errors->get('descrizione') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
     

    <div class="single-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('imgName', 'Copertina' /*class-type*/)  }}
            {{  Form::file ('imgName')  }}
            @if ($errors->first('imgName'))
                <ul>
                    @foreach ($errors->get('imgName') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
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
</div>
{{  Form::hidden ('_method', 'PUT')}}
{{Form::close()}}
</div>
@endsection