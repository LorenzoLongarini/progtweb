@php 
use App\Models\Resources\User;
$utente2 = User::where('role','=','cliente')->get();
@endphp
<div id = "clienti-section" class = "form" style = "margin-left:50px;">
@foreach($utente2 as $user2)

        <div class = "utenti-liv-2" style = " padding: 0px 25px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Nome</div>
            <div style="margin-left:30px; margin-top:10px;">{{$user2->nome}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Cognome</div>
            <div style="margin-left:30px; margin-top:10px;">{{$user2->cognome}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">UtenteId</div>
            <div style="margin-left:30px; margin-top:10px;">{{$user2->utenteId}}</div>
            </div>
            <div>
            {!!  Form::open(['action' => ['AdminController@eliminaUtente2', $user2->utenteId] , 'files' => true, 'method'=>'POST'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA FAQ', ['class'=>'delete'])!!}
                    {!!  Form::close()  !!}
            </div>
            </div>
            </div>
       <br>
       
        @endforeach
        </div>