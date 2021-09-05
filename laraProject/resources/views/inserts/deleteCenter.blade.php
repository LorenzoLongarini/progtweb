@php 
use App\Models\Resources\AssistenceCenter;
$centers = AssistenceCenter::all();
@endphp

<div id = "centri-assistenza-section" class = "form" style = "margin-left:50px;">
    {{ link_to_route('insert-center', 'AGGIUNGI',  $parameters = [], ['class'=>'user-btn', 'style' => 'width: 150px;
        margin-left: 400px;'])}}
    
        
  
    @foreach($centers as $center)
    
            <div class = "utenti-liv-2" style = " padding: 0px 25px; width: 950px;">
                <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
                <div>
                <div style="margin-left:30px; margin-top:20px;">Nome</div>
                <div style="margin-left:30px; margin-top:10px;">{{$center->nome}}</div>
                </div>
                <div>
                <div style="margin-left:30px; margin-top:20px;"></div>
                <div style="margin-left:30px; margin-top:10px;">{{$center->centersId}}</div>
                </div>
                <div>
                <div style="margin-left:30px; margin-top:20px;">UtenteId</div>
                <div style="margin-left:30px; margin-top:10px;">{{$center->via}}</div>
                </div>
                <div style = "display:flex;">
                <div>
                {!!  Form::open(['action' => ['AdminController@eliminaCentro', $center->centersId] , 'files' => true, 'method'=>'POST', 'onsubmit' => 'return ConfirmDelete()'])  !!}
                            {!!Form::hidden('_method','DELETE')!!}
                            {!!Form::submit('ELIMINA', ['class'=>'user-btn'])!!}
                        {!!  Form::close()  !!}
                </div>
                <div>
                {{ link_to_route('modifica-centro', 'MODIFICA', $parameters = ['centerId' => $center->centersId], ['class'=>'user-btn'] )}}
                </div>
    </div>
                </div>
                </div>
           <br>
           
            @endforeach
            </div>