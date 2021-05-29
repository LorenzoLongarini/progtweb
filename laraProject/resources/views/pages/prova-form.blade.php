@extends('layouts.user')


@section('form')
<h1>{{ Auth::user()}}</h1>
@include('inserts.insertEvent')
@endsection