@extends('layouts.forms')

@section('content')
<div class="form" id = "eventi-section" style = "width: 850px; margin-left: 100px;">
    {{  Form::open(['action' => ['AdminController@updateProd', $product->productsId] , 'files' => true, 'method'=>'POST'])  }}
   
    <h2>Modifica Prodotto</h2>
    <div class="multiple-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('nome', 'Nome Prodotto')}}
            {{  Form::text ('nome', $product-> nome)  }}
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
            {{  Form::text ('prezzo', $product-> prezzo)}}
          @if ($errors->first('prezzo'))
                <ul>
                    @foreach ($errors->get('prezzo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('noteTecniche', 'Note Tecniche')}}
            {{  Form::text ('noteTecniche', $product-> noteTecniche)  }}
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
            {{  Form::text ('modInstallaz', $product-> modInstallaz ) }}
            @if ($errors->first('modInstallaz'))
                <ul>
                    @foreach ($errors->get('modInstallaz') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('problema', 'Problematiche')}}
            {{  Form::text ('problema', $product-> problema)  }}
            @if ($errors->first('problema'))
                <ul>
                    @foreach ($errors->get('problema') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('soluzione', 'Soluzione')}}
            {{  Form::text ('soluzione', $product-> soluzione ) }}
            @if ($errors->first('soluzione'))
                <ul>
                    @foreach ($errors->get('soluzione') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('noteTecniche', 'Note Tecniche')}}
            {{  Form::text ('noteTecniche', $product-> noteTecniche)  }}
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
            {{  Form::text ('modInstallaz', $product-> modInstallaz ) }}
            @if ($errors->first('modInstallaz'))
                <ul>
                    @foreach ($errors->get('modInstallaz') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
     

    <div class="single-input" style = "margin: 10px 0px;">
        <div class="wrap-input" style = "margin: 10px 10px;">
            {{  Form::label ('imgName', 'Copertina' /*class-type*/)  }}
            {{  Form::file ('imgName')   }}
            @if ($errors->first('imgName'))
                <ul>
                    @foreach ($errors->get('imgName') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
    </div>
                <div style = "display:flex; justify-content:center">

    <div>
    {{  Form::submit ('Conferma' /*class-type*/)}}
    {{  Form::hidden ('_method', 'PUT')}}
    </div>

    <div>
    {{  Form::reset ('Annulla' /*class-type*/)}}
    </div>
{{Form::close()}}
</div>
@endsection