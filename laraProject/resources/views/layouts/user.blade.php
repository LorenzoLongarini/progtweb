@extends('layouts.public')

@section('page-content')
    <div id="user-page-content" class="container flex-rows" >
        <aside id="user-nav" style="">    
            @include('includes.usernavbar.user-nav')
        </aside>    
        <div class="user-nav-separator"></div>  
        <section id="data-section">
            @yield('forms')
        </section>
    </div>

@endsection

@section('js-scripts')
<script>
    window.onload = function () {
    loadSection();
    };

    function loadSection() {
        let hashUrl = window.location.hash.replace('-panel', "");

        if (hashUrl != "") {
            showSection($(hashUrl));
        }
    }

    function showSection(e) {
        $("#user-nav .user-nav-link button.active").removeClass("active");
        e.addClass("active");
        $('section .form.activated').removeClass('activated');
        $("#" + e.attr('id') + "-section.form").toggleClass("activated");
        window.location.hash = `${e.attr('id')}-panel`;
    };

    $("#user-nav .user-nav-link button").click(function () { showSection($(this)) });
    $("#user-nav .user-nav-link button").focus(function () { showSection($(this)) });

</script>
@endsection



