@extends('layouts.public', ["auth" => false, "footerVisible" => false])

@section('page-title', 'Accedi al tuo account')

@section('page-content')

<div class="login-container flex-rows">
    <div class="brand">
        <img src="{{asset('./images/logos/eticket_logo_light.svg')}}"/>
        <h3 style="color: white">Accedi o crea un nuovo account</h3>
    </div>
    <div style="max-width: 373px">
        <div class="alert card">
            <p>Se rappresenti un organizzatore di eventi <a class="link" href="{{ route('lavora-con-noi') }}">leggi le nostre modalità di adesione</a>.</p>
        </div>
        <div class="login-form card">
            <h2>Accedi</h2>
            <div>
                {{ Form::open(array('route' => 'login')) }}

                    <div class="wrap-input">
                        {{ Form::text('username', '', ['placeholder'=>'username','id' => 'username-input']) }}

                        @if ($errors->first('username'))
                            <ul class="errors">
                                @foreach ($errors->get('username') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                         @endif
                    </div>

                    <div class="wrap-input">
                        {{Form::password('password', [ 'placeholder'=>'password','id' => 'password-input'])}}

                        @if ($errors->first('password'))
                            <ul class="errors">
                                @foreach ($errors->get('password') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div style="text-align:center">
                        {{ Form::submit('Accedi',['class'=> 'default-btn']) }}
                    </div>
                    {{ Form::close() }}
                    <div style="text-align:center; margin-top: 20px">
                        <p>Non hai un account? <a class="link" href= "{{route('registraUser')}}" >Registrati</a></p>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection