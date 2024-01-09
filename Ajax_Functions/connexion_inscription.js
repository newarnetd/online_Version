function EnregistrerInscription(event)
{
   
    MereContentMobile.style.transform='translateX(-200%)';
    const MereContent = document.querySelector(".swiper-wrapper.Desk");
    let mere = event.currentTarget.closest('.swiper-slide');
    let erreurMessage = mere.querySelector('.erreurMessage');
    let inscription = mere.querySelector('.connectionBtn.sign_up');
    let Element = event.currentTarget;
    let form = document.querySelector('.swiper-wrapper.Desk');
    let Homme = mere.querySelector('input#Homme');
    let Femme = mere.querySelector('input#Femme');

    if (!Femme.checked && !Homme.checked) {
        erreurMessage.textContent = "Sélectionnez votre Genre";
        return;
    }
    function callback(data)
    {
        if(data.trim() === 'true')
        {
            Element.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Bienvenue parmi nous.</span><div class="loading interd"></div></div>`;
            window.location.href="index.php";

        }else{
            Element.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Vérifications en cours</span><div class="loading interd"></div></div>`;
            erreurMessage.textContent = data;
            erreurMessage.textContent = '';
            Element.innerHTML = "Enregistrez l'inscription";
        }
    }
    functionAjax('Principale/inscription.php', form, callback);
}
function connextion(event)
{
    let mere = event.currentTarget.closest('.swiper-slide');
    let erreurMessage = mere.querySelector('.erreurMessage');
    let inscription = mere.querySelector('.connectionBtn.sign_up');
    let Element = event.currentTarget;
    Element.innerHTML = `<div class="mereAnimationclique"><span>En cours</span><div class="loading interd"></div></div>`;
    let form = document.querySelector('.swiper-wrapper.Desk');
    function callback(data)
    {
        if(data.trim() === 'true')
        {
            window.location.href ="Principale/Parametres.php";
        }else{
            erreurMessage.textContent = data;
            inscription.style.display = 'none';
            setTimeout(() => {
                inscription.style.display = 'flex';
                erreurMessage.textContent = "";
                Element.innerHTML ="Se connecter";
            }, 3000);
        }
    }
    functionAjax('Principale/Connection.php', form, callback);
}
