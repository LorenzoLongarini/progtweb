@php 
use App\User;
$staff = User::where('role','=','tecnico')->get();
@endphp
<div id = "tecnici-section" class = "form" style = "margin-left:50px;">
{{ link_to_route('insert-technician', 'AGGIUNGI',  $parameters = [], ['class'=>'user-btn', 'style' => 'width: 150px;
    margin-left: 400px;'])}}
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
            <div style="margin-left:30px; margin-top:10px;">{{$staf->usersId}}</div>
            </div>
            <div style = "display:flex;">
            <div>
            {!!  Form::open(['action' => ['AdminController@eliminaTecnico', $staf->usersId] , 'files' => true, 'method'=>'POST', 'onsubmit' => 'return ConfirmDelete()'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA', ['class'=>'user-btn'])!!}
                    {!!  Form::close()  !!}
            </div>
            <div>
            {{ link_to_route('modifica-technician', 'MODIFICA', $parameters = ['usersId' => $staf->usersId], ['class'=>'user-btn'] )}}
            </div>
</div>
            </div>
            </div>
       <br>
       
        @endforeach
        </div>