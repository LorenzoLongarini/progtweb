@extends('layouts.public')

@section('page-content')
    <div id="user-page-content" class="container flex-rows" >
        <aside id="user-nav" style="">    
            @include('includes.usernavbar.user-nav')
        </aside>    
        <div class="user-nav-separator"></div>  
        <section id="data-section">
            @yield('forms')
        </section>
    </div>

@endsection



