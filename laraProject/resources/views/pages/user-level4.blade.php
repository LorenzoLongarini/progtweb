@extends('layouts.user')

@section('page-title', 'Amministratore')

@section('forms')
    @include('inserts.user-nav-faq')
    @include('inserts.dashboard-livello4')   
    @include('inserts.deleteOrg')
    @include('inserts.deleteClient')
@endsection