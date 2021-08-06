@extends('layouts.user')

@section('page-title')

@section('forms')
    @include('inserts.deleteProducts')
    @include('inserts.deleteMalfunctions')
@endsection
