@php 
use App\Models\Resources\Malfunction;
$malfs = Malfunction::all();
@endphp
<div id = "malf-section" class = "form" style = "margin-left:50px;">
@foreach($malfs as $malf)

        <div class = "utenti-liv-2" style = " padding: 0px 25px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Prodotto</div>
            <div style="margin-left:30px; margin-top:10px;">{{$malf->productsId}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Problema</div>
            <div style="margin-left:30px; margin-top:10px;">{{$malf->problema}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Soluzione</div>
            <div style="margin-left:30px; margin-top:10px;">{{$malf->soluzione}}</div>
            </div>
            <div>
            {!!  Form::open(['action' => ['AdminController@eliminaMalf', $malf->malfunctionsId] , 'files' => true, 'method'=>'POST','onsubmit' => 'return ConfirmDelete()'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA MALFUNZIONAMENTO', ['class'=>'delete'])!!}
                    {!!  Form::close()  !!}
            </div>
            <div>
            {{ link_to_route('modificaMalf', 'MODIFICA MALFUNZIONAMENTO', $parameters = ['malfunctionsId' => $malf->malfunctionsId] )}}
            
            </div>
            </div>
            </div>
       <br>
       
        @endforeach
        </div>