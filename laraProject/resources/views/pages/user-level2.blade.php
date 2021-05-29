@extends('layouts.user')

@section('page-title', Auth::user()->nome . " " . Auth::user()->cognome)

@section('content')
    @section('usernavbar')
        @include('includes.usernavbar.user-nav')
    @endsection
    
    @section('form')
        @include('inserts.dashboard-livello2')
    @endsection
@endsection