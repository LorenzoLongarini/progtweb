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
});