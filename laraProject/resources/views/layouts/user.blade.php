<!DOCTYPE html>
<html lang="en">
@include('includes.head')
@include('includes.usernavbar.userAuthHeader')
<body>
<div class="container  flex-rows" >
    <aside id="user-nav" style="">
        @include('includes.usernavbar.user3nav')
    </aside>
    
    <div class="user-nav-separator"></div>

    <section style="width: fit-content" id="user-section">
        @yield('form')
    </section>
</div>


</body>
</html>