document.body.addEventListener('keydown', function (event) {
    if (event.key === 'Tab' || event.key === 'Enter') {
        event.preventDefault();
    }
});
const forms = document.querySelectorAll('form');
forms.forEach(form => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    });
});
function gestionnaireRaccourcis(e) {
    if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.keyCode === 73) {
        e.preventDefault();
        alert("NewaRnet a ses normes et principes d'utilisation de sa plateforme. Vous n'avez pas le droit de faire ce qui vous vient à l'esprit. Veuillez consulter sa documentation officielle");
    }
    if ((e.ctrlKey || e.metaKey) && e.keyCode === 85) {
        e.preventDefault();
        alert("NewaRnet a ses normes et principes d'utilisation de sa plateforme. Vous n'avez pas le droit de faire ce qui vous vient à l'esprit. Veuillez consulter sa documentation officielle");
    }
}
document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('keydown', gestionnaireRaccourcis);
});





