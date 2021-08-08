@php
use App\Models\Resources\Malfunction;
use Illuminate\Support\Facades\DB;
$malfs = Malfunction::where('productsId', '=', $product->productsId)->get();
@endphp
@extends('layouts.public')

@section('page-title', $product->nome)

@section('page-content')
<div class="prod-cover">
    <div class="prod-content" style = "display: flex;
    justify-content: center;">
    <div class="prod-text">
       <div><h2 style="font-size: 40px">MALFUNZIONAMENTI</h2></div>
    </div>
</div>
</div>

@foreach($malfs as $malf)
<div class="prod-text" style = "padding: 100px 300px;">
<div><h4 style="font-size: 30px">{{$malf->nomeMalf}}</h4></div>
</div>
<div class="prod-desc" style = "margin-top: 20px;">
    <h3 style="margin:10px">PROBLEMA</h3>
    <p style="margin:10px">{{$malf->problema}}</p>
</div>
<div class="prod-desc" style = "margin-top: 20px;">
    <h3 style="margin:10px">SOLUZIONI</h3>
    <p style="margin:10px">{{$malf->soluzione}}</p>
</div>
<br>
<br>

@endforeach

           
           
           

        

    
    
    

@endsection