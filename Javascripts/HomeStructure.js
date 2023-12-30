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
function creationGroupeVerification(event) {
    var checkbox = event.target;
 
    let mere = event.target.closest('.swiper-slide.groupesideCreation');
    let inputCheckboxes = mere.querySelectorAll("input[type='checkbox']");
    
    let shouldDisplay = Array.from(inputCheckboxes).some(input => input.checked);
 
    if (shouldDisplay) {
        document.querySelector(".swiper-slide.groupesideCreation .leftnav.groupeCreation").style.display = 'flex';
        document.querySelector(".swiper-slide.groupesideCreation .suivantBoutonsGroupe").style.display = 'flex';
    } else {
        document.querySelector(".swiper-slide.groupesideCreation .leftnav.groupeCreation").style.display = 'none';
        document.querySelector(".swiper-slide.groupesideCreation .suivantBoutonsGroupe").style.display = 'none';
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

    }else if(value.id =="Livres")
    {
        MereSlides.style.transform = 'translateX(-300%)';
    }
}
function ShowStatut(event)
{
    let MereSlides = document.querySelector(".swiper-wrapper.ScrollPart");
    MereSlides.style.transform = 'translateX(-100%)';
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
    }else{
        event.target.value = '';
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