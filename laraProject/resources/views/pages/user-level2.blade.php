@extends('layouts.user')

@section('page-title', Auth::user()->nome . " " . Auth::user()->cognome)

@section('usernavbar')
    @include('includes.usernavbar.user-nav')
@endsection
    
@section('form')
    @include('inserts.modifyUser')
     @include('inserts.dashboard-livello2')
@endsection