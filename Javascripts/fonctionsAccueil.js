function OptionDroiteHeader(event) {
    document.querySelectorAll(".menuOptionRight").forEach(item => {
        item.classList.remove('active');
    });
    event.target.classList.toggle('active');

    switch (event.target.id) {
        case "amisDroite":
            afficherAmisDroite();
            break;

        case "groupeDroite":
            afficherCreerGroupe();
            break;

        case "invitationDroite":
            afficherFirndsCartes();
            break;
        default:
            break;
    }
}

function afficherAmisDroite() {
    document.querySelector(".firndscartes").style.display = "none";
    document.querySelector(".containeruAmisDroite").style.display = "flex";
    document.querySelector(".creergroupe").style.display = "none";
}

function afficherCreerGroupe() {
    document.querySelector(".firndscartes").style.display = "none";
    document.querySelector(".containeruAmisDroite").style.display = "none";
    document.querySelector(".creergroupe").style.display = "flex";
}

function afficherFirndsCartes() {
    document.querySelector(".firndscartes").style.display = "flex";
    document.querySelector(".containeruAmisDroite").style.display = "none";
    document.querySelector(".creergroupe").style.display = "none";
}

function setDisplayStyle(className, displayValue) {
    document.querySelector(".sessionNotifications").style.display = "none";
    document.querySelector(".sessionMessage").style.display = "none";
    document.querySelector(".droite_session").style.display = "none";

    document.querySelector(className).style.display = displayValue;
}

function NotificationSide() {
    setDisplayStyle(".sessionNotifications", "flex");
}

function MessageSide() {
    setDisplayStyle(".sessionMessage", "flex");
}

function HomeSide() {
    setDisplayStyle(".droite_session", "flex");
}
