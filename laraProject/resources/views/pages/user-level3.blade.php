@extends('layouts.user')

@section('page-title', Auth::user()->ragioneSociale)

@section('forms')
    @include('inserts.dashboard-livello3')
    @include('inserts.insertEvent')
@endsection
