
@extends('layouts.user')

@section('form')
<h1>{{Auth::id()}}</h1>

@include('inserts.dashboard-livello3')
@endsection
