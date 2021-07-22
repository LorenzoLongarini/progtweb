@php 
use App\Models\Resources\Malfunctions;
$malfunctions = Malfunctions::where('problema','=','bbb')->get();
@endphp
<div id = "malfunzionamenti-section" class = "form" style = "margin-left: 50px;">



@foreach($malfunctions as $malfunction)
        <div class = "utenti-liv-2" style = " padding: 0px 25px; height:300px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div style = "display:inline-block;">
            <div style = "display:inline-block;">
            <div style="margin-left:30px; margin-top:20px;">Problema</div>
            <div style="margin-left:30px; margin-top:10px;">{{$malfunction->problema}}</div>
            </div>
            <div style = "display:inline-block;" >
            <div style="margin-left:30px; margin-top:20px;">Soluzione</div>
            <div style="margin-left:30px; margin-top:10px;">{{$malfunction->soluzione}}</div>
            </div>
            </div>
            <div>
            {!!  Form::open(['action' => ['AdminController@index', $malfunction->utenteId] ,  'method'=>'POST'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA MALFUNZIONAMENTO', ['class'=>'delete'])!!}
            {!!  Form::close()  !!}
            </div>
            </div>
            </div>
            <br>
            @endforeach
        </div>
    

      