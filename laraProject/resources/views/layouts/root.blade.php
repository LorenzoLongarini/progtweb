<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('includes/head')

    <body>
            
        @include('includes/header')

        <main id="page-content">
            @yield('page')
        </main>
            
        @include('includes/footer')
    
    </body>
</html>