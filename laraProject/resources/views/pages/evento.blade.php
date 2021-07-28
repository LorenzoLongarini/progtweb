
@extends('layouts.public')

@section('page-title', $prodotto->nome)

@section('page-content')

<div style="display:flex;justify-content:space-between;padding:100px;align-items:center">

    <div class="container block">
        <div style="display: flex;flex-direction:column;">
            <div>
            <p style="font-size: 35px">{{$prodotto->nome}}</p>
        <div style="margin-top:20px;display:flex;align-items:center;gap:30px">

        </div>
           </div>
        </div>
    </div>
           
           
           
           

        

    
    
    

@endsection