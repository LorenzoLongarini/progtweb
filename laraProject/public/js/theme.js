$(document).ready(function () {
    $("#theme-toggle").click(function () {
        $("#theme-toggle").toggleClass("clicked");
        $('html').toggleClass("dark");
    });
    $("#user-nav .user-nav-link" ).click(function(){
        $("#user-nav .user-nav-link.actived").removeClass("clicked");
        $this.addClass("clicked");
        $($this.id).toggleClass("actived");



    });
});

