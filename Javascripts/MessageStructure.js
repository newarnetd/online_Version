const menuSwipper = document.querySelector(".swiper-wrapper.LeftSide");
const menuSwipperDroit = document.querySelector(".swiper-wrapper.DroiteSide");
const leftIcon = document.querySelector(".iconsHeader.Returnback");
const leftIconSearch = document.querySelector(".iconsHeader.search");
function Filemenu()
{
    menuSwipperDroit.style.transform = "TranslateX(-100%)";
}
function searchFunction(event)
{
    event.currentTarget.style.display = 'none';
    leftIcon.style.display = 'flex';
    leftIconSearch.style.display = 'none';
    menuSwipper.style.transform = "TranslateX(-100%)";
}
function reutnBack(){
    menuSwipper.style.transform = "TranslateX(0%)";
    leftIcon.style.display = 'none';
    leftIconSearch.style.display = 'flex';
}
function GroupeFunction()
{
    menuSwipper.style.transform = "TranslateX(-200%)";
    leftIcon.style.display = 'flex';
    leftIconSearch.style.display = 'none';
}
function Conversation()
{
    menuSwipper.style.transform = "TranslateX(-300%)";
    leftIcon.style.display = 'flex';
    leftIconSearch.style.display = 'none';
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
function ChampVerifiction(event)
{
    if(event.target.value.trim() !== '')
    {
        document.querySelector(".messagecontent .iconsDroite .sendsMessage").style.display= 'flex';
        document.querySelector("p.EncoursAction").textContent = "Ecris...";
        document.querySelector("p.EncoursAction").style.opacity = 1;
        document.querySelector("p.EncoursAction").style.color ='var(--color-primary)';

    }else{
        document.querySelector(".messagecontent .iconsDroite .sendsMessage").style.display= 'none';
        document.querySelector("p.EncoursAction").textContent = "En ligne";
        document.querySelector("p.EncoursAction").style.opacity = .6;
        document.querySelector("p.EncoursAction").style.color ='var(--color-text)';
    }
}