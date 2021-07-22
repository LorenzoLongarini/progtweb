@php 
use App\Models\Resources\User;
$staff = User::where('role','=','staff')->get();
@endphp
<div id = "clienti-section" class = "form" style = "margin-left:50px;">
@foreach($staff as $staf)

        <div class = "utenti-liv-2" style = " padding: 0px 25px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Nome</div>
            <div style="margin-left:30px; margin-top:10px;">{{$staf->nome}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Cognome</div>
            <div style="margin-left:30px; margin-top:10px;">{{$staf->cognome}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">UtenteId</div>
            <div style="margin-left:30px; margin-top:10px;">{{$staf->utenteId}}</div>
            </div>
            <div>
            {!!  Form::open(['action' => ['AdminController@index', $staf->utenteId] , 'files' => true, 'method'=>'POST'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA MEMBRO STAFF', ['class'=>'delete'])!!}
                    {!!  Form::close()  !!}
            </div>
            </div>
            </div>
       <br>
       
        @endforeach
        </div>