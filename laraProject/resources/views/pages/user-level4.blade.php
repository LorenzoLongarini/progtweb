@extends('layouts.user')

@section('page-title', 'Amministratore')

@section('usernavbar')
    @include('includes.usernavbar.user-nav')
@endsection

@section('form')
    @include('inserts.dashboard-livello4')
@endsection