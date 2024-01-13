function gestionRedirectionMobile() {
    var largeurFenetre = $(window).width();
    if (largeurFenetre >= 992) {
        window.location.href = '../index.php';
    } else {
        window.location.href = '../index.php';
    }
}
var largeurFenetre = window.innerWidth;
$(window).resize(function () {
    gestionRedirectionMobile();
});
gestionRedirectionMobile();