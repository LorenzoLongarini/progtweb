@extends('layouts.user')


@section('form')
//<h1>{{ Auth::user()->nome()}}</h1>
@include('inserts.insertEvent')
@endsection