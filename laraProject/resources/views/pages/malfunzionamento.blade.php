@php
use App\Models\Resources\Malfunction;
use Illuminate\Support\Facades\DB;
$malfs = Malfunction::where('productsId', '=', $product->productsId)->get();
$user = Auth::user();
@endphp
@extends('layouts.public')

@section('page-title', $product->nome)

@section('page-content')

<div class="prod-cover">
    <div class="prod-content" style = "display: flex;
    justify-content: center;">
    <div class="prod-text">
       <div ><h4 style="font-size: 40px">MALFUNZIONAMENTI</h4></div>
       <div style  = "margin-bottom: 50px;margin-top:20vw"><h2 style="font-size: 30px">Nome prodotto: <br>{{$product->nome}}</h2></div>
    </div>
</div>
</div>
<div style="display: flex;justify-content:center;align-items: center;gap:20px; margin-top: 40px;">
@can('isAdmin')
            {{ link_to_route('insert-malfunction', 'AGGIUNGI', $parameters = ['productsId' => $product->productsId],['class'=>'user-btn'] )}}
 @endcan
@can('isStaff')
@if(Auth::user()->sottocategoria == $product->sottocategoria)
            {{ link_to_route('insert-malfunction-staff', 'AGGIUNGI', $parameters = ['productsId' => $product->productsId],['class'=>'user-btn'] )}}
@endif
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
        @can('isStaff')
        <select name="malfunctions" id="malfunctions-staff">
        <option value = 0> ---Seleziona---</option>
            @if(count($malfs)!==0)
            @foreach( $malfs as $malf)
            <option value='{{ $malf->malfunctionsId }}'>{{ $malf->nomeMalf }}</option>
             @endforeach
             @endif
        </select>
        @endcan
        @can('isAdmin')
        <select name="malfunctions" id="malfunctions-admin">
            <option value = 0> ---Seleziona---</option>
                @if(count($malfs)!==0)
                @foreach( $malfs as $malf)
                <option value='{{ $malf->malfunctionsId }}'>{{ $malf->nomeMalf }}</option>
                 @endforeach
                 @endif
            </select>
            @endcan
            @can('isTecn')
            <select name="malfunctions" id="malfunctions-tecn">
                <option value = 0> ---Seleziona---</option>
                    @if(count($malfs)!==0)
                    @foreach( $malfs as $malf)
                    <option value='{{ $malf->malfunctionsId }}'>{{ $malf->nomeMalf }}</option>
                     @endforeach
                     @endif
                </select>
                @endcan
                
            
        </div>
    </div>


<div class="prod-text" style = "padding: 100px 300px;">
<div id = "nomeMalf"><h4 style="font-size: 30px" id = "nomeMalfh"><span></span></h4></div>
</div>
<div class="prod-desc" id="prod-desc1" style = "margin-top: 20px;">

    <h3 style="margin:10px; display:flex; justify-content:center;">PROBLEMA </h3>
    
    <p id = "problema" style="margin:10px"><span></span></p>
</div>
<div class="prod-desc" id="prod-desc2" style = "margin-top: 20px;">
    <h3 style="margin:10px; display:flex; justify-content:center">SOLUZIONI</h3>
    <div style=""><p id = "soluzione" style="margin:10px;text-align:justify"><span></span></p></div>
</div>
<div style = "display:flex; justify-content: center;
    margin-top: 40px;">
            @can('isAdmin')
            <div class= "user-btn" >
            <a href="" id = "modificaMalf">MODIFICA</a>
            </div>
            @endcan
             
</div>
<br>
<br>
@endif
<script>
$(function () {
    $('#malfunctions-staff').change(function () {
        var id = $(this).find("option:selected").val();
        if(id!=='0'){
        $.ajax({
            url: "{{ route('selectMalfunction-staff', ['productsId' => $product->productsId]) }}",
            data: {
                "malfunctionsId": id,
                "_token": "{{ csrf_token() }}"        
            },
            type: 'POST',
            dataType: 'json',
            success: function (result) {
                $('#nomeMalf h4#nomeMalfh span').text(result.nomeMalf);
                $('#prod-desc1 p#problema span').text(result.problema);
                $('#prod-desc2 p#soluzione span').text(result.soluzione);
                $('#modificaMalf').attr('href', "/progtweb/laraProject/public/modify-malf-staff/" + id);
            },
            error: function () {
                alert('error');
            }
        });
    }
    });
});
</script>
<script>
    $(function () {
        $('#malfunctions-admin').change(function () {
            var id = $(this).find("option:selected").val();
            if(id!=='0'){
            $.ajax({
                url: "{{ route('selectMalfunction', ['productsId' => $product->productsId]) }}",
                data: {
                    "malfunctionsId": id,
                    "_token": "{{ csrf_token() }}"        
                },
                type: 'POST',
                dataType: 'json',
                success: function (result) {
                    $('#nomeMalf h4#nomeMalfh span').text(result.nomeMalf);
                    $('#prod-desc1 p#problema span').text(result.problema);
                    $('#prod-desc2 p#soluzione span').text(result.soluzione);
                    
                },
                error: function () {
                    alert('error');
                }
            });
        }
        });
    });
    </script>
    <script>
    $(function () {
        $('#malfunctions-tecn').change(function () {
            var id = $(this).find("option:selected").val();
            if(id!=='0'){
            $.ajax({
                url: "{{ route('selectMalfunction-tecn', ['productsId' => $product->productsId]) }}",
                data: {
                    "malfunctionsId": id,
                    "_token": "{{ csrf_token() }}"        
                },
                type: 'POST',
                dataType: 'json',
                success: function (result) {
                    $('#nomeMalf h4#nomeMalfh span').text(result.nomeMalf);
                    $('#prod-desc1 p#problema span').text(result.problema);
                    $('#prod-desc2 p#soluzione span').text(result.soluzione);
                    
                    
                },
                error: function () {
                    alert('error');
                }
            });
        }
        });
    });
    </script>


@endsection