$(document).ready(function () {
    $("#theme-toggle").click(function () {
        $("#theme-toggle").toggleClass("clicked");
        $('html').toggleClass("dark");
    });

    $("#user-nav .user-nav-link button").click(function () {
        $("#user-nav .user-nav-link button.active").removeClass("active");
        $(this).addClass("active");
        $('section .form.activated').removeClass('activated');
        $("#" + $(this).attr('id') + ".form").toggleClass("activated");
    });



    $(" #drop-down-nav").click(function() {
        $("#drop-down-content").toggle();
       
        
       


    });



   
});

