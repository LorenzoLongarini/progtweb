@extends('layouts.user')

@section('page-title', Auth::user()->nome . " " . Auth::user()->cognome)
    
@section('forms')
    @include('inserts.storico-acquisti')
    @include('inserts.modifyUser')
@endsection