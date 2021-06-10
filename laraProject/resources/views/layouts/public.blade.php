<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('includes/head')

    <body>
        
        @php
            $authBtn = false; $searchBtn = false; $withHeaderClass;

            if(!isset($search) || $search == true)
                $searchBtn = true;

            if(!isset($auth) || $authBtn == true)
                $authBtn = true;

            if(!isset($headerVisible) ||  $headerVisible == true){
                $withHeaderClass = "withHeader";
            } 
        @endphp

        @include('includes/header', ["searchBtn" => $searchBtn, "toggleThemeBtn" => true ,"authBtn" => $authBtn])

        <main id="page-content" class="{{ $withHeaderClass ?? '' }}">
            @yield('page-content')
        </main>
        
        @if(!isset($footerVisible) ||  $footerVisible == true)
            @include('includes/footer') 
        @endif

    </body>

    @yield('js-scripts')

</html>