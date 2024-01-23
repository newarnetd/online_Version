const leftMererSlider = document.querySelector(".swiper-wrapper.leftOption");
const suivantGroupe = document.querySelector(".swiper-wrapper.CreationGroupe");
function SuivantGroupeCreation()
{
    suivantGroupe.style.transform = "TranslateX(-100%)" ;
}

function PostStory()
{
    leftMererSlider.style.transform = "TranslateX(-200%)" ;
}
function TurnBack()
{
    leftMererSlider.style.transform = "TranslateX(0%)" ;
}
function ProfilEdite()
{
    leftMererSlider.style.transform = "TranslateX(-300%)" ;
}
function CouvertureEdite()
{
    leftMererSlider.style.transform = "TranslateX(-400%)" ;
}
function GroupeNew(event)
{
  const element = event.currentTarget; 
    element.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Création en cours...</span><div class="loading interd"></div></div>`;
    const page = "newgroupe.php";
    let value = element.getAttribute('owner');
    let form = document.querySelector('#CreationGroupeFormule');
    function callback(data) {
      element.innerHTML ="Terminé !";
    }
    functionAjax(page, form, callback);
}
function creationGroupeVerification(event) {
var checkbox = event.target;

let mere = event.target.closest('.swiper-slide.groupesideCreation');
let inputCheckboxes = mere.querySelectorAll("input[type='checkbox']");

var selectedMembers = [];
inputCheckboxes.forEach(input => {
if (input.checked) {
    selectedMembers.push(input.value);
}
});
let shouldDisplay = selectedMembers.length > 0;
if (shouldDisplay) {
document.querySelector(".swiper-slide.groupesideCreation .leftnav.groupeCreation").style.display = 'flex';
document.querySelector(".swiper-slide.groupesideCreation .suivantBoutonsGroupe").style.display = 'flex';
} else {
document.querySelector(".swiper-slide.groupesideCreation .leftnav.groupeCreation").style.display = 'none';
document.querySelector(".swiper-slide.groupesideCreation .suivantBoutonsGroupe").style.display = 'none';
}


document.querySelectorAll("#CreationGroupeFormule input[type='hidden']").forEach(input => input.remove());

selectedMembers.forEach(userId => {
let input = document.createElement("input");
input.type = "hidden";
input.name = "membre[]";
input.value = userId;
document.querySelector("#CreationGroupeFormule").appendChild(input);
});
}
function afficherCreerGroupe(id) 
{
document.querySelector(".swiper.mySwiper.MenuHome .swiper-wrapper").style.transform="TranslateX(-200%)";
document.querySelector("#MesGroupeofUser").innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
ChargementGroupes(id);
}
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
    let value = event.currentTarget.getAttribute('y');
    afficherCreerGroupe(value);
    break;

case "invitationDroite":
    afficherFirndsCartes();
    break;
default:
    break;
}
}

function ChargementGroupes(value)
{
let page = "lectureMesGroupes.php";
function callback(data) 
{
    document.querySelector("#MesGroupeofUser").innerHTML = data;
}
sendValueAjax(page, value, callback);    
}
function afficherAmisDroite() 
{
    document.querySelector(".swiper.mySwiper.MenuHome .swiper-wrapper").style.transform="TranslateX(-100%)";
    ChargementFriends();
}

function afficherFirndsCartes() {
    document.querySelector(".swiper.mySwiper.MenuHome .swiper-wrapper").style.transform="TranslateX(0%)";
}
function OptionUsers() {
    const menuUsers = document.querySelector(".menuUsers");
  menuUsers.classList.toggle("active");
}

function setDisplayStyle(className, displayValue) {
    document.querySelector(".sessionNotifications").style.display = "none";
    document.querySelector(".sessionMessage").style.display = "none";
    document.querySelector(".droite_session").style.display = "none";

    document.querySelector(className).style.display = displayValue;
}


function HommePrinciplae() {
    document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(0%)";
}

function HomeSide() {
    setDisplayStyle(".droite_session", "flex");
}
function functionAnimerBTN(e)
{
    var Element  = e.target;
    Element.textContent = "Ami(e) déjà";
    Element.style.background = "var(--color-blanche-2)";
}
function FunctionMoreOption()
{
    document.querySelector(".menuTopLeftBouton").classList.toggle('active');
}
function appliquerImageDeFond(event) {
        var input = event.target;
        var form = input.closest('.PostArticleForm');

        if (!form) {
            return;
        }

        var label = form.querySelector(".carterPostStory");

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                label.style.backgroundImage = 'url(' + e.target.result + ')';
                label.innerHTML = '';
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
   
function MoreEplazaArticlesHomPage()
    {
      document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(-700%)";
      document.querySelector('.eplazaMarketHomepage').innerHTML = `<div class="conteneuramis album"></div><div class="conteneuramis album"></div><div class="conteneuramis album"></div><div class="conteneuramis album"></div><div class="conteneuramis album"></div><div class="conteneuramis album"></div><div class="conteneuramis album"></div><div class="conteneuramis album"></div><div class="conteneuramis album"></div><div class="conteneuramis album"></div>`;
    }
   
    function MoreFriends(event) {
let value = event.target.getAttribute('y');
document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(-400%)";
let contenteneur = document.getElementById('dataRechercheUserSecond');
let page = "moreFriends.php";
function callback(data) {
setTimeout(() => {
  contenteneur.innerHTML = data;
}, 1500);
}
sendValueAjax(page, value, callback);
}
function Mesamis(value)
{
HommePrinciplae();
document.querySelector("#FrinedsGroupesAdd").innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
let page = "AmisGroupesAdd.php";
function callback(data) {
document.querySelector("#FrinedsGroupesAdd").innerHTML = data;
}
sendValueAjax(page, value, callback);
} 
function Suivies(event) {
HommePrinciplae();
let id = event.currentTarget.getAttribute('y');
document.querySelector(".swiper.mySwiper.MenuHome .swiper-wrapper").style.transform="TranslateX(-300%)"; 
Chargementsuivis(id);

}
function NiandaChat()
{
document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(-800%)";
}

     