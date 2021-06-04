<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('includes/head')

    <body>
        
        @php
            $authBtn = false;
            $searchBtn = false;

            if(!isset($search) || $search == true)
                $searchBtn = true;

            if(!isset($auth) || $authBtn == true)
                $authBtn = true;
        @endphp

        @if(!isset($headerVisible) ||  $headerVisible == true){
            $withHeaderClass = "class ='withHeader'";
            @include('includes/header', ["searchBtn" => $searchBtn, "toggleThemeBtn" => true ,"authBtn" => $authBtn]) 
        @endif

        <main id="page-content" {{ $withHeaderClass ?? '' }}>
            @yield('page-content')
        </main>
        
        @if(!isset($footerVisible) ||  $footerVisible == true)
            @include('includes/footer') 
        @endif

    </body>

</html>