var mereOption = document.querySelector("#MObilMune");
var DeskOprion = document.querySelector("#DeskOption");
var Mere = document.querySelector(".conversations.Mobil");
var MereDesk = document.querySelector(".conversations#DeskInputNianda");
var pardefautText = document.querySelector(".divPardefaut");
var pardefautTextMobile = document.querySelector(".divPardefautMobile");
function ClickMobil(event) {
    if(event.target.value.trim() !== '')
    {
        mereOption.classList.add('active');
        pardefautTextMobile.style.display="none";
    }else{
        mereOption.classList.remove('active');
        pardefautTextMobile.style.display="flex";
    }
}
function ClickDesk(event) {
    if(event.target.value.trim() !== '')
    {
        DeskOprion.classList.add('active');
        pardefautText.style.display = "none";
    }else{
        DeskOprion.classList.remove('active');
        pardefautText.style.display = "flex";
    }
}
function TakenQuestion(event)
{
    let text = event.target.textContent;
    let Contenur = document.querySelector("#MobInputNianda");
    let chmpsaisi= document.querySelector(".SessionQuestion.Mob");
    textRegenerate(Contenur,text,chmpsaisi);
    mereOption.classList.remove('active');
    CreateElement(text,Mere) ;
}
function TakenQuestionDesk(event)
{
    let text = event.target.textContent;
    let Contenur = document.querySelector("#DeskInputNianda");
    let chmpsaisi= document.querySelector(".SessionQuestion.Desk");
    textRegenerate(Contenur,text,chmpsaisi);
    DeskOprion.classList.remove('active');
    CreateElement(text,MereDesk) ;
}