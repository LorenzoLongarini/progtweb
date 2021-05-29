@extends('layouts.blank')

@section('content')

<div class="login-container flex-rows">
    <div class="brand">
        <img src="{{asset('./images/logos/eticket_logo_light.svg')}}"/>
        <h3 style="color: white">Accedi o crea un nuovo account</h3>
    </div>
    <div class="login-form card-box">
        <h2>Accedi</h2>
        <div>
            {{ Form::open(array('route' => 'login')) }}
                {{Form::label('username','USERNAME')}}
                {{ Form::text('username', '', ['placeholder'=>'username','id' => 'username']) }}

                @if ($errors->first('username'))
                    <ul class="errors">
                        @foreach ($errors->get('username') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif

                {{Form::label('password','PASSWORD')}}
                {{Form::password('password', [ 'placeholder'=>'password','id' => 'password'])}}
                
                @if ($errors->first('password'))
                    <ul class="errors">
                        @foreach ($errors->get('password') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
        </div>
        <div >
            {{ Form::submit('Accedi',['class'=> 'login-btn']) }}<br>
            {{ Form::close() }}<br>
            <span>Nuovo utente?</span>
            <a href= "{{route('registraUser')}}" >Registrati</a>
        </div>
    </div>
</div>

@endsection