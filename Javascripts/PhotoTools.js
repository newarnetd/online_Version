let mereScrol = document.querySelector(".swiper.mySwiper.second .swiper-wrapper");
let LeftmereScrol = document.querySelector(".leftside .swiper.mySwiper .swiper-wrapper.leftSide");
let LefmereOption = document.querySelector(".leftside .swiper.mySwiper .swiper-wrapper.leftSide_option");
let DroitemereOption = document.querySelector(".droite_icons .swiper.mySwiper .swiper-wrapper.DroiteSession");
function MontagerPhoto()
{
    mereScrol.style.transform="TranslateX(-200%)";
    LeftmereScrol.style.transform="TranslateX(-200%)";
}
function DessinMainLever()
{
    mereScrol.style.transform="TranslateX(-100%)";
    LeftmereScrol.style.transform="TranslateX(-100%)";
}
function TextOption()
{
    LefmereOption.style.transform="TranslateX(0%)";
}

function OptionDessin()
{
    LefmereOption.style.transform="TranslateX(-200%)";
}
function GallerieOption()
{
    LefmereOption.style.transform="TranslateX(-300%)";
}
function LesOutilsDessin()
{
    LefmereOption.style.transform="TranslateX(-100%)";
}

function OutilsPhotoMontage()
{
    DroitemereOption.style.transform="TranslateX(0%)";
}


function GallerieOptionPhoto()
{
    DroitemereOption.style.transform="TranslateX(-200%)";
}
function Importation()
{
    DroitemereOption.style.transform="TranslateX(-100%)";
}
