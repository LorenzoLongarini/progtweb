$(document).ready(function () {
    let searchForm = document.getElementById('search-form');
    let usernNav = document.getElementById('user-nav');
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

    $("#user-nav .user-nav-link button").click(function () { showSection($(this)) });

    $("#user-nav .user-nav-link button").focus(function () { showSection($(this)) });

    $('#price-id').change(function () {
        let prezzo_totale = $('#prezzo-scontato').text() * $(this).children("option:selected").val();
        $('#prezzo-tot span').text(Math.round(prezzo_totale*100)/100);
    });
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
