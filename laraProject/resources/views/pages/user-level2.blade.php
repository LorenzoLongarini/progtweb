@extends('layouts.user')

@section('page-title', Auth::user()->nome . " " . Auth::user()->cognome)
    
@section('forms')
    @include('inserts.modifyUser')
@endsection