@extends('layouts.root')

@section('page')

<div class="container user flex-rows">
    <aside id="user-nav">
        @include('includes.usernavbar.user3nav')
    </aside>
    
    <div class="user-nav-separator"></div>

    <section style="width: fit-content" id="user-section">
        @yield('form')
    </section>
</div>

@endsection