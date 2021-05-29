@extends('layouts.root')

@section('page-body')

    @include('includes/header')    
    
    <main id="public-page-content">
        @yield('content')
    </main>

    @include('includes/footer')

@endsection
