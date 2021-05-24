@extends('layouts.public')

@section('who-content')
<div class="hero flex-center" style="background-image:linear-gradient(0deg, rgba(0,0,0,.8), rgba(0,0,0,0.6)),url('{{asset('/images/who-cover.jpg')}}');background-position:center center;background-size:1500px 800px"> 
    <div class="container flex-rows">
        <div class="content-hero">
            <h2>@yield('title')o</h2>
            <h3>@yield('description')</h3>
        </div>
    </div>
</div>
    {{$url-image}}
@endsection