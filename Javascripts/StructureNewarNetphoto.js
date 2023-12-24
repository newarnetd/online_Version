function EnterText(event)
{
    let value = event.target.value;
    let Paragraphe = document.querySelector(".textReponse");
    if(value.trim() !== '')
    {
        Paragraphe.textContent = value;
    }else{
        Paragraphe.textContent = "";
    }
}