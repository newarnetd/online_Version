document.addEventListener("DOMContentLoaded", function() {
    
});
function PosteFile(event)
{
    let value = event.currentTarget;
    let OptionsBtn = document.querySelectorAll(".optionHome");
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost.slidpost");
    OptionsBtn.forEach(option =>{
        option.classList.remove('active');
    })
    value.classList.add('active');
    if(value.id =="image")
    {
        MereSlides.style.transform = 'translateX(0%)';
    }else if(value.id =="videos")
    {
        MereSlides.style.transform = 'translateX(-100%)';

    }else if(value.id =="document")
    {
        MereSlides.style.transform = 'translateX(-200%)';

    }
}
function ReturnShare(event)
{
    let mere = event.target.closest('.carterPoste');
    mere.querySelector(".menuOptionPartager.GroupeFrindsSelect").classList.remove('active')
}
function OptionMorePost(event)
{
    let mere = event.target.closest('.carterPoste');
    mere.querySelector(".menuOptionPartager.moreoption").classList.toggle('active')
}
function GroupeFriendsShare(event)
{
    let mere = event.target.closest('.carterPoste');
    mere.querySelector(".menuOptionPartager.GroupeFrindsSelect").classList.toggle('active')
}
function VerificationChecked(event) {
    var checkbox = event.target;
    let mere = event.target.closest('.menuOptionPartager.GroupeFrindsSelect');
    let inputCheckboxes = mere.querySelectorAll("input[type='checkbox']");
    let shouldDisplay = Array.from(inputCheckboxes).some(input => input.checked);
 
    if (shouldDisplay) {
        mere.querySelector(".InputDouble .BoutonsAction:nth-child(2)").style.display = 'flex';
    } else {
        mere.querySelector(".InputDouble .BoutonsAction:nth-child(2)").style.display = 'none';
    }
}

 function BoutiquesFile(event)
 {
    let value = event.currentTarget;
    let OptionsBtn = document.querySelectorAll(".optionHome");
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.Boutique");
    OptionsBtn.forEach(option =>{
        option.classList.remove('active');
    })
    value.classList.add('active');
    if(value.id =="boutique")
    {
        MereSlides.style.transform = 'translateX(0%)';
    }else if(value.id =="artcles")
    {
        MereSlides.style.transform = 'translateX(-100%)';

    }
 }
 function FilActualite(event)
 {
     let value = event.currentTarget;
     let OptionsBtn = document.querySelectorAll(".optionHome");
     let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost");
     OptionsBtn.forEach(option =>{
         option.classList.remove('active');
     })
     value.classList.add('active');
     if(value.id =="actualite")
     {
         MereSlides.style.transform = 'translateX(0%)';
     }else if(value.id =="videos")
     {
         MereSlides.style.transform = 'translateX(-100%)';
 
     }else if(value.id =="Statut")
     {
         MereSlides.style.transform = 'translateX(-200%)';
         readSoris();
 
     }else if(value.id =="Livres")
     {
         MereSlides.style.transform = 'translateX(-300%)';
     }
 }
 function CreatGroupe(event)
    {
      document.querySelector('#FrinedsGroupesAdd').innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
      leftMererSlider.style.transform = "TranslateX(-500%)" ;
      let value = event.currentTarget.getAttribute('y');
      let page = "AmisGroupesAdd.php";
      function callback(data) {
      document.querySelector('#FrinedsGroupesAdd').innerHTML = data;
      }
      sendValueAjax(page, value, callback);
    }
  
    function readSoris()
    {
      let value = "";
      let page = "readStatut.php";
      function callback(data) {
      setTimeout(() => {
        document.querySelector('.storiesFrindsData').innerHTML = data;
      }, 2000);
      }
      sendValueAjax(page, value, callback);
    }
function ShowStatut(event)
{
    let MereSlides = document.querySelector(".swiper-wrapper.ScrollPart");
    MereSlides.style.transform = 'translateX(-100%)';
}
function LecturesPoste()
  {
    let page = "lecturePostes.php";
    let value ="";
    function callback(data)
    {
      document.querySelector('.PostesOnecoucher').innerHTML = data;
    }
    sendValueAjax(page, value, callback)
  }
function BackSatutus()
{
    let MereSlides = document.querySelector(".swiper-wrapper.ScrollPart");
    MereSlides.style.transform = 'translateX(0%)';
}
function GroupePostShare(event) {
    let cardPost = event.currentTarget.closest(".carterPoste");
    let mereSlide = cardPost.querySelector(".swiper.mySwiper.other .swiper-wrapper.cartePosteCorp");
    mereSlide.style.transform = "translateX(-300%)";
}
function sharePost(event) {
    let cardPost = event.currentTarget.closest(".carterPoste");
    cardPost.querySelector(".menuOptionPartager.shareFiles").classList.toggle('active');
}
function CommentPoste(event) {
    let cardPost = event.currentTarget.closest(".carterPoste");
    let mereSlide = cardPost.querySelector(".swiper.mySwiper.other .swiper-wrapper.cartePosteCorp");
    mereSlide.style.transform = "translateX(-400%)";
}
function  MorePosteMenu(event) {
    let cardPost = event.currentTarget.closest(".carterPoste");
    let mereSlide = cardPost.querySelector(".swiper.mySwiper.other .swiper-wrapper.cartePosteCorp");
    mereSlide.style.transform = "translateX(-100%)";
}
function TurnBackCreation(event)
{
    let cardPost = event.currentTarget.closest(".carterPoste");
    
    if (cardPost) {
        let shareMenu = cardPost.querySelector('.menuOptionPartager.GroupeShare');
        
        if (shareMenu) {
            shareMenu.classList.remove('active');
        } else {
            console.error('Menu de partage introuvable dans la carte de poste.');
        }
    }
}
function PostWidthInage()
{
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost");
        MereSlides.style.transform = 'translateX(-400%)';
        document.querySelector(".menuHomeChoix").style.display='none';
        document.querySelector(".FormPost").style.display='none';
}
function PosteChamps(event)
{
    if(event.target.value.trim() != '')
    {
        let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost");
        MereSlides.style.transform = 'translateX(-400%)';
        document.querySelector(".menuHomeChoix").style.display='none';
        document.querySelector(".FormPost").style.display='none';
        document.querySelector(".InputDouble .containeurInputStyle.poste.publication").style.display='flex';
    }else{
        event.target.value = '';
        document.querySelector(".InputDouble .containeurInputStyle.poste.publication").style.display='none';
        RetunBackCreatePoste();
    }
}
function RetunBackCreatePoste()
{
    
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost");
    MereSlides.style.transform = 'translateX(0%)';
    document.querySelector(".menuHomeChoix").style.display='flex';
    document.querySelector(".FormPost").style.display='block';   
}
function documentFormat(event)
{
    
    let value = event.currentTarget;
    let OptionsBtn = document.querySelectorAll(".swiper-slide.boook .menuHomeChoix .optionHome");
    let MereSlidesBook = document.querySelector(".swiper-wrapper.document");
    OptionsBtn.forEach(option =>{
        option.classList.remove('active');
    })
    value.classList.add('active');
    if(value.id == "photoBook")
    {
        MereSlidesBook.style.transform = 'translateX(0%)';
    }else if(value.id =="pdf"){
        MereSlidesBook.style.transform = 'translateX(-100%)';
    }
}
function MenuUserPost(event)
{
    let value = event.currentTarget;
    value.classList.toggle('active');
}
function poster(event)
  {
    let Element = event.currentTarget;
    Element.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
    let form = document.querySelector(".bottomSidepartiePoste");
    let page = "poster.php";
    function callback(data)
    {
      if(data.trim() === 'true')
      {
        RetunBackCreatePoste();
        Element.innerHTML = `Publier <i class="fa-solid fa-paper-plane"></i>`;
        document.querySelector(".InputDouble .containeurInputStyle.poste.publication").style.display='none';
        LecturesPoste();
      }else{
        Element.innerHTML = `Publier <i class="fa-solid fa-paper-plane"></i>`;
        alert(data);
      }
    }
    functionAjax(page, form, callback);
  }

  function ChangerProfile(event) {
    let Element = event.currentTarget;
    Element.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">En cours...</span><div class="loading interd"></div></div>`;
  
    let pageactuel = window.location.href; 
    let page = "ModificationProfile.php";
    let form = document.querySelector("#ModificationProfile");
  
    function callback(data) {
      if (data.trim() == 'true') {
        window.location.href = pageactuel;
      } else {
        alert("Ce fichier n'est pas pris en compte dans notre système");
      }
    }
    functionAjax(page, form, callback);
  }
  
  function ChangerCouvrture(event)
  {
    let Element = event.currentTarget;
    Element.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
    let page = "ModificationProfile.php";
    let form = document.querySelector("#Modificationcouverture");
    let pageactuel = window.location.href; 
    function callback(data) {
        if (data.trim() == 'true') {
          window.location.href = pageactuel;
        } else {
          alert("Ce fichier n'est pas pris en compte dans notre système");
        }
      }
    functionAjax(page, form, callback);
        
  }  
  
  function ChargementFriends(id)
  {
    document.querySelector(".mesAmisListe").innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
    let page = "readFriends.php";
    let value = id;
    function callback(data) {
      document.querySelector(".mesAmisListe").innerHTML = data;
      }
      sendValueAjax(page, value, callback);
  } 
  
  function AddRelation(event) {
    const element = event.currentTarget; 
    element.innerHTML =  "....";
    const page = "Relations.php";
    const value = element.getAttribute('owner');
    function callback(data) {
        if (data.trim() === "true") {
            element.innerHTML = `Invitation envoyée <i class="fa-solid fa-user-check"></i>`;
            element.style.color = "#FFF";
            element.style.background = 'var(--color-addRelation)';
            
            const parentWithSibling = element.closest('.supprimerBtn.boutonAdmettre.suivre');
            if (parentWithSibling) {
                const siblingToDelete = parentWithSibling.querySelector('.boutonsUserConfirme');
                if (siblingToDelete) {
                    siblingToDelete.style.display = 'none';
                }
            }
        } else {
            element.innerHTML = `Ajouter <i class="fa-solid fa-plus"></i>`;
        }
    }
    sendValueAjax(page, value, callback);
}


  function OtherFontionAdd(event)
  {
    const element = event.currentTarget; 
    element.innerHTML =  "....";
    const page = "Relations.php";
    const value = element.getAttribute('owner');
    function callback(data) {
      if(data.trim() === "true")
      {
        element.innerHTML =`Envoyée`;
        element.style.color= "#FFF";
        element.style.background= 'var(--color-addRelation)';
      }else{
        element.innerHTML =`Ajouter <i class="fa-solid fa-plus"></i>`;
      }
    }
  
    sendValueAjax(page, value, callback);
  }
  function cliquedImage()
{
document.querySelector(".BoutonsRetoure.add.storyAddBtn").style.display = 'flex';
document.querySelector(".BoutonsRetoure.add.createAddBtn").style.display = 'flex';
document.querySelector(".BoutonsRetoure.add.modificationPhotociover").style.display = 'flex';
document.querySelector(".BoutonsRetoure.add.profilePhotoAdd").style.display = 'flex';
}

function Chargementsuivis(value)
{
  document.querySelector(".ListeSuivi").innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
let page = "readSuivis.php";
function callback(data) {
  document.querySelector(".ListeSuivi").innerHTML = data;
  }
  sendValueAjax(page, value, callback);
}
function NewConversation(event)
{   
leftMererSlider.style.transform = "TranslateX(-100%)" ;
  document.querySelector(".carterPrinciplale").innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
  let id = event.currentTarget.getAttribute('y');
  let page = "NewConversationFriends.php";
  let value = id;
  function callback(data) {
    document.querySelector(".carterPrinciplale").innerHTML = data;
    }
    sendValueAjax(page, value, callback);
  
}

function searchUser(event, page, Cont) {
let contenteneur = document.getElementById(Cont);
if (event.target.value.trim() != '') {
  let value = event.target.value;
  contenteneur.innerHTML = '';
  function callback(data) {
    contenteneur.innerHTML = data;
  }
  sendValueAjax(page, value, callback);
}
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
function addStory(event)
{
  event.target.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
  let page = "addStoty.php";
  let form = document.querySelector("#PostFormStory");
  let erreur = document.querySelector(".erreurImagesStory");
  function callback(data) 
  {
    if(data.trim() === 'true')
    {
      TurnBack();
    }else{
      erreur.innerHTML = data;
      event.target.innerHTML ="Ajouter sur Story";
      setTimeout(() => {
        erreur.innerHTML = "";
      }, 10000);
    }
  }
  functionAjax(page, form, callback);
}
function likePost(event) {
  let value = event.currentTarget.getAttribute('y');
  let page = "likePoste.php";
  let numberElement = event.currentTarget.querySelector('.number');

  function callback(data) {
    if (data.trim() !== '') {
      numberElement.textContent = data;
      numberElement.style.color = "var(--color-primary)";
      event.currentTarget.style.border = "1px solid var(--color-primary)";
    } else {
      numberElement.textContent = data;
      numberElement.style.color = "var(--color-icons_Theme_blanche)";
      event.currentTarget.style.border = "none";
    }
  }

  sendValueAjax(page, value, callback);
}
function suivreRelation(event) {
    const element = event.currentTarget; 
    element.innerHTML =  "....";
    const page = "suivre.php";
    const value = element.getAttribute('owner');
    function callback(data) {
      if(data.trim() === "true")
      {
        element.innerHTML =`suivi(e) <i class="fa-solid fa-user-check"></i>`;
        element.style.color= "#FFF";
        element.style.color= 'var(--color-addRelation)';
      }else{
        element.innerHTML =`suivre <i class="fa-solid fa-plus"></i>`;
      }
    }
  
    sendValueAjax(page, value, callback);
  }
  function Confirmer(event)
      {
        const element = event.currentTarget; 
        element.innerHTML = `...`;
        const page = "confirmation.php";
        let value = element.getAttribute('owner');
        function callback(data) {
          element.innerHTML = `déjà ami(e)`;
        }
        sendValueAjax(page, value, callback);
      }
      function supprimerInvitation(event)
      {
        const element = event.currentTarget; 
        element.innerHTML = `...`;
        const page = "confirmation.php";
        let value = element.getAttribute('owner');
        function callback(data) {
          element.innerHTML = 'supprimeé(e)';
        }
        sendValueAjax(page, value, callback);
      }
      function NotificationSide() {
          document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(-200%)";
          let page = "readNotification.php";
          let value = "";
          function callback(data) {
            document.querySelector('.dataNotificationAll').innerHTML = data;
          }
          sendValueAjax(page, value, callback);
        }

        function MessageSide() {
            document.querySelector(".swiper.mySwiper .swiper-wrapper.menuDroiteAll").style.transform="TranslateX(-100%)";
        }
        