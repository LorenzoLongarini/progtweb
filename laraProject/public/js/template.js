function stickyElement(element, pageY, className) {
    
    let pagePositionY = window.pageYOffset;

    if (element != undefined) {
        if (pagePositionY > pageY)
            element.classList.add(className);
        else
            element.classList.remove(className);
    }
}

$(document).ready(function () {

    var searchForm = document.getElementById('search-form');
    var usernNav = document.getElementById('user-nav');
  
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
        stickyElement(usernNav, 100, 'sticky');
    };
});


