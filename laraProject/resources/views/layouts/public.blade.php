<!DOCTYPE html>
<html>

    @include('layouts/head')

    <body>

        @include('layouts/header')

        <main id="page-content">
            @yield('content')
        </main>
            
            @yield('event-content')
            @yield('about-content')
            @yield('modifica-dati-content')
            @yield('faq-content')
        </main>
            

        @include('layouts/footer')
    
    </body>
</html>