function gestionRedirectionDesk() {
    var largeurFenetre = $(window).width();
    if (largeurFenetre < 576) {
        window.location.href = 'mobile/';
    } else if (largeurFenetre >= 576 && largeurFenetre < 768) {
        window.location.href = 'mobile/';
    }    
}
var largeurFenetre = window.innerWidth;
$(window).resize(function () {
    gestionRedirectionDesk();
});

gestionRedirectionMobile();