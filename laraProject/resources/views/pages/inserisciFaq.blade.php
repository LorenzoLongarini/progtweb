@extends('layouts.forms')

@section('page-title', 'Inserisci FAQ')

@section('content')
    @include('inserts.insertFaq')
    <br>
    <br>
    <a href="{{ route('faq') }}" >Torna alle FAQ</a>
@endsection