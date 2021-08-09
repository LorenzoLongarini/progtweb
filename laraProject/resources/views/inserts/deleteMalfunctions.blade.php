@php 
use App\Models\Resources\Malfunction;
use Illuminate\Support\Facades\DB;
$malfs = Malfunction::all();
@endphp
<div id = "malf-section" class = "form" style = "margin-left:50px;">
@foreach($malfs as $malf)

        <div class = "utenti-liv-2" style = " padding: 0px 25px; width: 950px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Id prodotto:</div>
            <div style="margin-left:30px; margin-top:10px;">{{$malf->productsId}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Nome</div>
            <div style="margin-left:30px; margin-top:10px;">{{$malf->nomeMalf}}</div>
            </div>
            <div style = "display:flex;">
            <div>
            {!!  Form::open(['action' => ['AdminController@eliminaMalf', $malf->productsId, $malf->malfunctionsId] , 'files' => true, 'method'=>'POST','onsubmit' => 'return ConfirmDelete()'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA', ['class'=>'user-btn'])!!}
                    {!!  Form::close()  !!}
            </div>
            <div>
            {{ link_to_route('modificaMalf', 'MODIFICA', $parameters = ['malfunctionsId' => $malf->malfunctionsId] , ['class'=>'user-btn'])}}
            
            </div>
</div>
            
            </div>
            </div>
       <br>
       
        @endforeach
        </div>