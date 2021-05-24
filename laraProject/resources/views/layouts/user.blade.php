@extends('layouts.root')

@section('page')

<div class="container user flex-rows">
    <aside id="user-nav">
        @include('layouts.usernav.user2nav')
    </aside>
    <div class="user-nav-separator"></div>
    <section style="width: fit-content" id="user-section">
        <input type="text" value="Nome">
        <input type="submit" value="Submit">
        <input type="reset" value="Annulla">
    </section>
</div>

@endsection