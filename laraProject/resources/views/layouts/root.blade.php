<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('includes/head')

    <body>

        @include('includes/header')

        <main id="page-content">
            @section('page-content')
            @show
        </main>
            
        @include('includes/footer')
    
    </body>
</html>