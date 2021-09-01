@php
use App\Models\Resources\Malfunction;
use Illuminate\Support\Facades\DB;
$malfs = Malfunction::where('productsId', '=', $product->productsId)->get();
$pId = $product->productsId;
@endphp
@extends('layouts.public')

@section('page-title', $product->nome)

@section('page-content')
<div class="prod-cover">
    <div class="prod-content" style = "display: flex;
    justify-content: center;">
    <div class="prod-text">
        <div style  = "margin-bottom: 50px;"><h2 style="font-size: 60px">{{$product->nome}}</h2></div>
        <div id= "prodId" style  = "margin-bottom: 50px;"><h2 id="prodd" style="font-size: 60px">{{$product->productsId}}</h2></div>
       <div ><h4 style="font-size: 20px">MALFUNZIONAMENTI</h4></div>
    </div>
</div>
</div>
<div style="display: flex;justify-content:center;align-items: center;gap:20px; margin-top: 40px;">
@can('isAdmin')
            {{ link_to_route('insert-malfunction', 'AGGIUNGI', $parameters = ['productsId' => $product->productsId],['class'=>'user-btn'] )}}
            @endcan
        </div>
@if(count($malfs)==0)
<br>
<br>
<div style = " display: flex;
    justify-content: center;">
   <h2> NON SONO PRESENTI MALFUNZIONAMENTI</h2>
</div>

@else
<div class="multiple-input" style = "display: flex;
    justify-content: center;">
        <div class="wrap-input" style = "width: 50%;">
        <select name="malfunctions" id="malfunctions">
            
            @if(count($malfs)!==0)
            @foreach( $malfs as $malf)
            <option value='{{ $malf->malfunctionsId }}'>{{ $malf->nomeMalf }}</option>
             @endforeach
             @endif
        </select>
            
        </div>
    </div>


<div class="prod-text" style = "padding: 100px 300px;">
<div id = "nomeMalf"><h4 style="font-size: 30px" id = "nomeMalfh"><span></span></h4></div>
</div>
<div class="prod-desc" style = "margin-top: 20px;">

    <h3 style="margin:10px; display:flex; justify-content:center;">PROBLEMA</h3>
    
    <p id = "problema" style="margin:10px"><span></span></p>
</div>
<div class="prod-desc" style = "margin-top: 20px;">
    <h3 style="margin:10px; display:flex; justify-content:center;">SOLUZIONI</h3>
    <p id = "soluzione"style="margin:10px"><span></span></p>
</div>
<div style = "display:flex; justify-content: center;
    margin-top: 40px;">
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
<br>
<br>
@endif
<script>
$(function () {
    $('#malfunctions').change(function () {
        var id = $(this).children("option:selected").val();
        var id2 = $(this).children("#prodId h2#prodd").val();
        $.ajax({
            url: "{{ route('selectMalfunction') }}"+ '/' + id2,
            data: {
                
                "malfunctionsId": id,
                "_token": "{{ csrf_token() }}"
            },
            type: 'POST',
            dataType: 'json',
            success: function (result) {
                $('#nomeMalf h4#nomeMalf span').text(result.nomeMalf);
                $('#prod-desc p#problema span').text(result.problema);
                $('#prod-desc p#soluzione span').text(result.soluzione);
            },
            error: function () {
                alert('error');
            }
        });
    });
});
</script>
 

@endsection