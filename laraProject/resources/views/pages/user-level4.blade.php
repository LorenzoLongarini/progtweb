@extends('layouts.user')

@section('page-title', 'Amministratore')

@section('usernavbar')
    @include('includes.usernavbar.user-nav')
@endsection



@section('form')
    @include('inserts.user-nav-faq')
    @include('inserts.dashboard-livello4')   
    @include('inserts.deleteOrg')
    @include('inserts.deleteClient')
@endsection