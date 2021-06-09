@extends('layouts.public', ['footerVisible' => false, 'auth' => false])

@section('page-content')
    @include('inserts.registerUser')
@endsection