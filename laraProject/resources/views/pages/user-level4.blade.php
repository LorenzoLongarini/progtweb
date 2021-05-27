@extends('layouts.user')

@section('usernavbar')
    @include('includes.usernavbar.user4nav')

@endsection
@section('form')
<div id="dashboard" class="form">
    {{  Form::open(array('route' => ['aggiungiEvento.store'], 'id' =>'dashborard-livello4' , 'files' => true /*'class' => some-bollocks*/))  }}
   
    <h2>Informazioni generali</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            {{  Form::label ('bigliettiVenduti', 'Biglietti Venduti' /*class-type*/)}}
            
            @if ($errors->first('titolo'))
                <ul>
                    @foreach ($errors->get('titolo') as $message)
                    <li class="errors">{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        
    </div>
    
{{Form::close()}}
</div>
@endsection