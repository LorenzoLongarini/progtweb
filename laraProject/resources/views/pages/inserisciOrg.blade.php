@extends('layouts.forms')

@section('content')
@include('inserts.insertOrg')
<br>
    <br>
    <a href="{{ route('admin') }}" >Torna alla Dashboard</a>
@endsection