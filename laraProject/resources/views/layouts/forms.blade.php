@extends('layouts.root')

@section('page')
<div class="container flex-rows">
    <section style="width: fit-content" id="user-section">
        @yield('form')
    </section>
</div>

@endsection