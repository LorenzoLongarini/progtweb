@extends('layouts.public')

@section('page-content')
    <div id="user-page-content" class="container flex-rows" >
        <aside id="user-nav" style="">    
           @yield('usernavbar')
        </aside>    
        <div class="user-nav-separator"></div>  
        <section id="data-section">
            @yield('form')
        </section>
    </div>

@endsection



