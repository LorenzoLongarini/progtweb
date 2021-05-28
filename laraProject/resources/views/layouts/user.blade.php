<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    @include('includes.usernavbar.userAuthHeader')
    <div class="container  flex-rows" >
        <aside id="user-nav" style="">
            
           @yield('usernavbar')
        </aside>
        
        <div class="user-nav-separator"></div>
    
        <section style="width: fit-content" id="user-section">
            @yield('form')
        </section>
    </div>
</body>
</html>



