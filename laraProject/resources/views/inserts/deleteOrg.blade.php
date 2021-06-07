
@php 
use App\models\user;
$utente3 = User::where('role','=','organizzatore')->get();
@endphp
<div id = "organizzazione" class = "form">
@foreach($utente3 as $user3)
        <div class = "utenti-liv-2" style = " padding: 0px 25px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div style = "display:inline-block;">
            <div style = "display:inline-block;">
            <div style="margin-left:30px; margin-top:20px;">Ragione Sociale</div>
            <div style="margin-left:30px; margin-top:10px;">{{$user3->ragioneSociale}}</div>
            </div>
            <div style = "display:inline-block;" >
            <div style="margin-left:30px; margin-top:20px;">UtenteId</div>
            <div style="margin-left:30px; margin-top:10px;">{{$user3->utenteId}}</div>
            </div>
            </div>
            <div>
            {!!  Form::open(['action' => ['AdminController@eliminaUtente3', $user3->utenteId] ,  'method'=>'POST'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA UTENTE', ['class'=>'delete'])!!}
            {!!  Form::close()  !!}
            </div>
            </div>
            </div>
            @endforeach
        </div>
    

      