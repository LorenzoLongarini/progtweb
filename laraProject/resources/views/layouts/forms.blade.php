@extends('layouts.public')

@section('page-content')
<div class="container flex-rows">
    <section style="width: fit-content" id="user-section">
        @yield('content')
    </section>
</div>

@endsection