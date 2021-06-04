$(document).ready(function () {

    var searchForm = document.getElementById('search-form');
    var usernNav = document.getElementById('user-nav');
    var searchBtn = document.querySelector('#search-btn.hidden');
    var searchFormCatalog = document.querySelector('#page-content #search-form');
  
    $("#theme-toggle").click(function () {
        $("#theme-toggle").toggleClass("clicked");
        $('html').toggleClass("dark");
    });

    $("#search-btn").click(function () {
        $("#search-box-overlay").toggleClass("opened");
        $('html').css('overflow', 'hidden');
    });

    $("#close-search-box").click(function () {
        $("#search-box-overlay").toggleClass("opened");
        $('html').css('overflow', 'auto');
    });

    $("#user-nav .user-nav-link button").click( function () {
        $("#user-nav .user-nav-link button.active").removeClass("active");
        $(this).addClass("active");
        $('section .form.activated').removeClass('activated');
        $("#" + $(this).attr('id') + ".form").toggleClass("activated");
    });

    window.onscroll = function () {
        let pagePositionY = window.pageYOffset;

        if (searchBtn != undefined) {
            if (pagePositionY > 507) {
                searchBtn.classList.remove('hidden');
                $('#page-content #search-form').addClass('hidden');
            }
            else {
                searchBtn.classList.add('hidden');
                searchFormCatalog.classList.remove('hidden');
            }
        }
    }
});
