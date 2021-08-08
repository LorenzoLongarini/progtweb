@php
use App\Models\Resources\Malfunction;
use Illuminate\Support\Facades\DB;
$malfs = Malfunction::where('productsId', '=', $product->productsId)->get();
@endphp
@extends('layouts.public')

@section('page-title', $product->nome)

@section('page-content')
<div class="prod-cover">
@foreach($malfs as $malf)
    <div class="prod-content">
    <div class="prod-text">
       <div><h2 style="font-size: 40px">{{$malf->nome}}</h2></div>
    </div>
</div>
</div>
<div class="prod-desc">
    <h3 style="margin:10px">PROBLEMA</h3>
    <p style="margin:10px">{{$malf->descrizione}}</p>
</div>
<div class="prod-desc">
    <h3 style="margin:10px">SOLUZIONI</h3>
    <p style="margin:10px">{{$malf->noteTecniche}}</p>
</div>

@endforeach

           
           
           

        

    
    
    

@endsection