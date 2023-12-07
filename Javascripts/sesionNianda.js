var mereOption = document.querySelector("#MObilMune");
var Mere = document.querySelector(".conversations.Mobil");
function ClickMobil(event) {
    if(event.target.value.trim() !== '')
    {
        mereOption.classList.add('active');
    }else{
        mereOption.classList.remove('active');
    }
}

function TakenQuestion(event)
{
    let text = event.target.textContent;
    console.log(text);
    let Contenur = document.querySelector("#MobInputNianda");
    textRegenerate(Contenur,text);
    mereOption.classList.remove('active');
    CreateElement(text,Mere) ;
}