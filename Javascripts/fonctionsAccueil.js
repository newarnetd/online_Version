const leftMererSlider = document.querySelector(".swiper-wrapper.leftOption");
const suivantGroupe = document.querySelector(".swiper-wrapper.CreationGroupe");
function SuivantGroupeCreation()
{
    suivantGroupe.style.transform = "TranslateX(-100%)" ;
}
function NewConversation()
{
    leftMererSlider.style.transform = "TranslateX(-100%)" ;
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

function CreatGroupe()
{
    leftMererSlider.style.transform = "TranslateX(-500%)" ;
}



function OptionDroiteHeader(event) {
    document.querySelectorAll(".menuOptionRight").forEach(item => {
        item.classList.remove('active');
    });
    event.target.classList.toggle('active');

    switch (event.target.id) {
        case "amisDroite":
            let id  = event.target.getAttribute('y');
            afficherAmisDroite(id);
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

function afficherAmisDroite(id) 
{
    document.querySelector(".swiper.mySwiper.MenuHome .swiper-wrapper").style.transform="TranslateX(-100%)";
    ChargementFriends(id);
}
function afficherCreerGroupe() {
    document.querySelector(".swiper.mySwiper.MenuHome .swiper-wrapper").style.transform="TranslateX(-200%)";
}
function Suivies() {
    document.querySelector(".swiper.mySwiper.MenuHome .swiper-wrapper").style.transform="TranslateX(-300%)"; 
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

function NotificationSide() {
    document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(-200%)";
}

function MessageSide() {
    document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(-100%)";
}
function HommePrinciplae() {
    document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(0%)";
}
function BoutiquesHOmes() {
    document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(-400%)";
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
            alert("Impossible de trouver l'élément parent avec la classe '.PostArticleForm'");
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
    function AddRelation(event) {
        const element = event.currentTarget; 
        element.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
        const page = "Relations.php";
        const value = element.getAttribute('owner');
        function callback(data) {
          if(data.trim() === "true")
          {
            element.innerHTML =`Ami(e) <i class="fa-solid fa-user-check"></i>`;
          }else{
            element.innerHTML =`Ajouter <i class="fa-solid fa-plus"></i>`;
          }
        }
      
        sendValueAjax(page, value, callback);
      }
      function suivreRelation(event) {
        const element = event.currentTarget; 
        element.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
        const page = "suivre.php";
        const value = element.getAttribute('owner');
        function callback(data) {
          if(data.trim() === "true")
          {
            element.innerHTML =`suivi(e) <i class="fa-solid fa-user-check"></i>`;
          }else{
            element.innerHTML =`suivre <i class="fa-solid fa-plus"></i>`;
          }
        }
      
        sendValueAjax(page, value, callback);
      }
      
      function RecherCherNewaRnaute(event)
      {
          if(event.target.value.trim() != '')
          {
              document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(-300%)";
              const page = "searchPage.php";
              let value = event.target.value;
              function callback(data) {
                setTimeout(() => {
                  document.querySelector(".containeurData").innerHTML = data;
                }, 1000);
              }
              sendValueAjax(page, value, callback);
          }else{
              document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(0%)";
          }
      }
 