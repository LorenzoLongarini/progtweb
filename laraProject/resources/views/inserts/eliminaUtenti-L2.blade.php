@section('content')
@isset($utente2)
@foreach($utente2 as $user2)
<div>
        <div class = "utenti-liv-2">
            <div class = "row-direction">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Nome</div>
            <div style="margin-left:30px; margin-top:10px;">$user2->nome</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Cognome</div>
            <div style="margin-left:30px; margin-top:10px;">$user2->cognome</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">UtenteId</div>
            <div style="margin-left:30px; margin-top:10px;">$user2->utenteId</div>
            </div>
            <div>
            {!!  Form::open(['action' => ['AdminController@eliminaUtente2', $user2->utenteId] , 'files' => true, 'method'=>'POST'])  !!}
                        {!!Form::submit('ELIMINA FAQ', ['class'=>'delete'])!!}
            {!!  Form::close()  !!}
            <a class = "elimina2"> <img src="./img/trash-2.svg" style="width:10%"> </a>
            </div>
            </div>
        </div>
        @endforeach

    @endisset
        @endsection