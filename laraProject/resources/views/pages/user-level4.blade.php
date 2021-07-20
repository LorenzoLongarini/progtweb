@extends('layouts.user')

@section('page-title', 'Amministratore')

@section('forms')
    @include('inserts.insertMalfunction')   
    @include('inserts.deleteStaff')
    @include('inserts.deleteTechnician')
@endsection