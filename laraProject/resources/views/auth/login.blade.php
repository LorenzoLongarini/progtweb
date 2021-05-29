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
                {{ Form::submit('Accedi',['class'=> 'default-btn']) }}<br>
                <span>Non hai un account?</span>
                <a href= "{{route('registraUser')}}" >Registrati</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection