@extends('layouts.user')

@section('page-title', Auth::user()->ragioneSociale)

@section('usernavbar')
    @include('includes.usernavbar.user-nav')
@endsection

@section('form')
    @include('inserts.dashboard-livello3')
@endsection
