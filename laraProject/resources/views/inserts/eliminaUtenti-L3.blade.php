@section('content')
@isset($utente3)
@foreach($utente3 as $user3)
<div>
        <div class = "utenti-liv-2">
            <div class = "row-direction">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Nome</div>
            <div style="margin-left:30px; margin-top:10px;">$user3->ragioneSociale</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">UtenteId</div>
            <div style="margin-left:30px; margin-top:10px;">$user3->utenteId</div>
            </div>
            <div>
            {!!  Form::open(['action' => ['AdminController@eliminaUtente2', $user3->utenteId] , 'files' => true, 'method'=>'POST'])  !!}
                        {!!Form::submit('ELIMINA FAQ', ['class'=>'delete'])!!}
            {!!  Form::close()  !!}
            <a class = "elimina2"> <img src="./img/trash-2.svg" style="width:10%"> </a>
            </div>
            </div>
        </div>
        @endforeach

    @endisset
        @endsection