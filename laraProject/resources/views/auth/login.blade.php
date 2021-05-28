@extends('layouts.public')

<div class="login-container">

    <div class="login-form">
        <h1>Accedi</h1>
        <div class="cont">
        {{ Form::open(array('route' => 'login')) }}
        {{Form::label('username','USERNAME')}}
        {{ Form::text('username', '', ['placeholder'=>'username','id' => 'username']) }}<br><br>
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