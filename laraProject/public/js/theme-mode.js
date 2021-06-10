function loadThemeConfig(){
    if (Cookies.get('theme-toggle') == undefined)
        Cookies.set('theme-toggle', 'light');
    
    setThemeMode(Cookies.get('theme-toggle').toString());
    
    $('body').csscss('display', 'block');
}

function setThemeMode(mode) {
    if (mode == "light" || mode == 'dark') {
        $('html').addClass("dark");
    $('#site-logo-header').attr('src', (_, attr) =>
        attr.includes("/images/logos/eticket_logo.svg")
            ? "./images/logos/eticket_logo_light.svg"
                : "./images/logos/eticket_logo.svg");
    }
    else
        window.alert('Errore nelle impostazioni del tema grafico. Controlla lo script theme-mode.js'); 
}

$("#theme-toggle").click(function () {
    $("#theme-toggle").toggleClass("clicked");
});