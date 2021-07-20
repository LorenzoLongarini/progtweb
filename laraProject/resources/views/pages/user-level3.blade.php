@extends('layouts.user')

@section('page-title', Auth::user()->ragioneSociale)

@section('forms')
    @include('inserts.insertEvent')
@endsection
