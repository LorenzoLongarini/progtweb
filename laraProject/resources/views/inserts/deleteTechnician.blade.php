@php 
use App\Models\Resources\User;
$tecnici = User::where('role','=','tecnico')->get();
@endphp
<div id = "organizzazione-section" class = "form" style = "margin-left: 50px;">



@foreach($tecnici as $tecnico)
        <div class = "utenti-liv-2" style = " padding: 0px 25px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div style = "display:inline-block;">
            <div style = "display:inline-block;">
            <div style="margin-left:30px; margin-top:20px;">Ragione Sociale</div>
            <div style="margin-left:30px; margin-top:10px;">{{$tecnico->ragioneSociale}}</div>
            </div>
            <div style = "display:inline-block;">
            <div style="margin-left:30px; margin-top:20px;">Ragione Sociale</div>
            <div style="margin-left:30px; margin-top:10px;">{{$tecnico->ragioneSociale}}</div>
            </div>
            <div style = "display:inline-block;" >
            <div style="margin-left:30px; margin-top:20px;">UtenteId</div>
            <div style="margin-left:30px; margin-top:10px;">{{$tecnico->utenteId}}</div>
            </div>
            </div>
            <div>
            {!!  Form::open(['action' => ['AdminController@index', $tecnico->utenteId] ,  'method'=>'POST'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA UTENTE', ['class'=>'delete'])!!}
            {!!  Form::close()  !!}
            </div>
            </div>
            </div>
            <br>
            @endforeach
        </div>
    

      