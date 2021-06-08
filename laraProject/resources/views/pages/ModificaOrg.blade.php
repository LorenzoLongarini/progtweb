@extends('layouts.forms')
@section('page-title', 'Modifica Organizzazione')
@section('content')
@include('inserts.modifyOrg')
<br>
    <br>
    <a href="{{ route('admin') }}" >Torna alla Dashboard</a>
@endsection