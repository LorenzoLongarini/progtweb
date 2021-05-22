<!DOCTYPE html>
<html>

    @include('layouts/head')

    <body>

        @include('layouts/header')

        <main id="page-content">
            @yield('content')
        </main>
        
        @include('layouts/footer')
    
    </body>
</html>