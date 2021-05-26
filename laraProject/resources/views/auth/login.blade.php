@extends('layouts.public')

<div style="padding:200px 150px">
<div>
    {{ Form::open(array('route' => 'login')) }}
    {{Form::label('username','USERNAME')}}
    {{ Form::text('username', '', ['id' => 'username']) }}<br>
    @if ($errors->first('username'))
         <ul class="errors">
           @foreach ($errors->get('username') as $message)
        <li>{{ $message }}</li>
         @endforeach
    </ul>
                @endif
    {{Form::label('password','PASSWORD')}}
    {{Form::password('password', [ 'id' => 'password'])}}<br>
    @if ($errors->first('password'))
    <ul class="errors">
        @foreach ($errors->get('password') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
    
    
    {{ Form::submit('Login') }}

    {{ Form::close() }}
</div>
</div>