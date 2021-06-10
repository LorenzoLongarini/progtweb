$(document).ready(function () {
    let searchForm = document.getElementById('search-form');
    let searchBtn = document.querySelector('#search-btn.hidden');
    let searchFormCatalog = document.querySelector('#page-content #search-form');

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

    $("#search-btn").click(function () {
        $("#search-box-overlay").toggleClass("opened");
        $('html').css('overflow', 'hidden');
    });

    $("#close-search-box").click(function () {
        $("#search-box-overlay").toggleClass("opened");
        $('html').css('overflow', 'auto');
    });

    $("#user-nav .user-nav-link button").click(function () { showSection($(this)) });

    $("#user-nav .user-nav-link button").focus(function () { showSection($(this)) });
    
    $(".dropdown").click(function () { 
        $(".dropdown-nav").toggle();
    });
});


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

