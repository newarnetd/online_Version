const MereContent = document.querySelector(".swiper-wrapper.Desk");
const MereContentMobile = document.querySelector(".swiper-wrapper.Mobile");
function InscriptionFunctionDesk()
{
    MereContent.style.transform='translateX(-200%)';
}
function InscriptionFunctionMobile()
{
    MereContentMobile.style.transform='translateX(-300%)';
}
function connectionMobile()
{
    MereContentMobile.style.transform='translateX(-100%)';
}
function NiandaMobile()
{
    MereContentMobile.style.transform='translateX(-0%)';
}

function SuivantMob_1(event)
{
    
    let mere = event.currentTarget.closest('.swiper-slide');
    let nom = mere.querySelector('input#Mobnom');
    let prenom = mere.querySelector('input#Mobprenom');
    let email = mere.querySelector('input#Mobemail');
    let erreurMessage = mere.querySelector('.erreurMessage');

    if (nom.value.trim() === '' || prenom.value.trim() === '' || email.value.trim() === '') {
        erreurMessage.textContent = "Veuillez remplir tous les champs.";
        return;
    }
    if (!isNaN(nom.value.trim()) || !isNaN(prenom.value.trim())) {
        erreurMessage.textContent = "Le nom et le prénom ne doivent pas être des nombres.";
        return;
    }
    let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email.value.trim())) {
    erreurMessage.textContent = "L'adresse e-mail est incorrecte ";
    return;
    }
    MereContentMobile.style.transform='translateX(-400%)';
}
function SuivantMob_2(event)
{
    let mere = event.currentTarget.closest('.swiper-slide');
    let password= mere.querySelector('input#passwordInputMob');
    let numero = mere.querySelector('input#numeroMob');
    let erreurMessage = mere.querySelector('.erreurMessage');
    if (numero.value.trim() === '' || password.value.trim() === '') {
        erreurMessage.textContent = "Veuillez remplir tous les champs.";
        return;
    }
    MereContentMobile.style.transform='translateX(-500%)';
}
function SuivantMob_3(event)
{
   
    MereContentMobile.style.transform='translateX(100%)';
}
function SuivantMob_0(event)
{
    let mere = event.currentTarget.closest('.swiper-slide.fin');
    let Homme = mere.querySelector('input#Homme');
    let Femme = mere.querySelector('input#Femme');
    let erreurMessage = mere.querySelector('.erreurMessage');

    if (!Femme.checked && !Homme.checked) {
        erreurMessage.textContent = "Sélectionnez votre Genre";
        return;
    }
    MereContentMobile.style.transform='translateX(-200%)';
}
function Suivant_1(event) {
    let mere = event.currentTarget.closest('.swiper-slide');
    let nom = mere.querySelector('input#nom');
    let prenom = mere.querySelector('input#prenom');
    let email = mere.querySelector('input#email');
    let erreurMessage = mere.querySelector('.erreurMessage');

    if (nom.value.trim() === '' || prenom.value.trim() === '' || email.value.trim() === '') {
        erreurMessage.textContent = "Veuillez remplir tous les champs.";
        return;
    }
    if (!isNaN(nom.value.trim()) || !isNaN(prenom.value.trim())) {
        erreurMessage.textContent = "Le nom et le prénom ne doivent pas être des nombres.";
        return;
    }
    let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email.value.trim())) {
    erreurMessage.textContent = "L'adresse e-mail est incorrecte";
    return;
    }

    MereContent.style.transform = 'translateX(-300%)';
}


function Suivant_2()
{
    let mere = event.currentTarget.closest('.swiper-slide');
    let password= mere.querySelector('input#password');
    let numero = mere.querySelector('input#numero');
    let erreurMessage = mere.querySelector('.erreurMessage');
    if (numero.value.trim() === '' || password.value.trim() === '') {
        erreurMessage.textContent = "Veuillez remplir tous les champs.";
        return;
    }

    MereContent.style.transform='translateX(-400%)';
}
function Suivant_3(event) {
    let mere = event.currentTarget.closest('.swiper-slide');
    let Homme = mere.querySelector('input#Homme');
    let Femme = mere.querySelector('input#Femme');
    let erreurMessage = mere.querySelector('.erreurMessage');

    if (!Femme.checked && !Homme.checked) {
        erreurMessage.textContent = "Sélectionnez votre Genre";
        return;
    }

    MereContent.style.transform = 'translateX(0%)';
}

function Suivant_0()
{
    let mere = event.currentTarget.closest('.swiper-slide');
    let Homme = mere.querySelector('input#Homme');
    let Femme = mere.querySelector('input#Femme');
    let erreurMessage = mere.querySelector('.erreurMessage');

    if (!Femme.checked && !Homme.checked) {
        erreurMessage.textContent = "Sélectionnez votre Genre";
        return;
    }

    MereContent.style.transform='translateX(-100%)';
}