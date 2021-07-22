@extends('layouts.user')

@section('page-title', 'Amministratore')

@section('forms')
    @include('inserts.deleteProducts')   
    @include('inserts.deleteMalfunctions')
    @include('inserts.deleteTechnician')
    @include('inserts.deleteStaff')
    
@endsection