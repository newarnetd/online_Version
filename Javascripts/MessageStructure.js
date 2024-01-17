const menuSwipper = document.querySelector(".swiper-wrapper.LeftSide");
const menuSwipperDroit = document.querySelector(".swiper-wrapper.DroiteSide");
const leftIcon = document.querySelector(".iconsHeader.Returnback");
const leftIconSearch = document.querySelector(".iconsHeader.search");
const inputFile = document.querySelector("#InputFile");
const inputLeftBack = document.querySelector(".inputLeft.back");

function hideInputFile() {
    inputFile.style.display = 'none';
    inputLeftBack.style.display = 'flex';
    menuSwipperDroit.style.transform = "translateX(-100%)"; 
}

function showInputFile() {
    inputFile.style.display = 'flex';
    inputLeftBack.style.display = 'none';
    menuSwipperDroit.style.transform = "translateX(0%)"; 
}

function PosteFileMessagePage(event)
{
    let value = event.currentTarget;
    let OptionsBtn = document.querySelectorAll(".optionHome");
    let MereSlides = document.querySelector(".swiper.mySwiper .swiper-wrapper.menuFil");
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


function reutnBack(){
    menuSwipper.style.transform = "TranslateX(0%)";
    leftIcon.style.display = 'none';
    leftIconSearch.style.display = 'flex';
}

function OptionMore()
{
    menuSwipper.style.transform = "TranslateX(-400%)";
    leftIcon.style.display = 'flex';
    leftIconSearch.style.display = 'none';
}
function GestionMembresDuGroupe()
{
    menuSwipper.style.transform = "TranslateX(-500%)";
}
function BloquerUser()
{
    menuSwipper.style.transform = "TranslateX(-600%)";
}
function ConditiondUsage()
{
    menuSwipper.style.transform = "TranslateX(-700%)";
}
