let MereSlide = document.querySelector('.swiper-wrapper.indexpage');
let MereSlideInscription = document.querySelector('.swiper-wrapper.othersideInsc');

function connexion(event) {
    let mere = event.currentTarget.closest('.swiper-slide');
    let slidBare = mere.querySelector('.barrScrolle');
    slidBare.style.display = 'flex';
    event.currentTarget.innerHTML = `<div class="mereAnimationclique"><span style="color:#FFF">Encours...</span><div class="loading interd"></div></div>`;
    setTimeout(() => {
        slidBare.style.display = 'none';
        MereSlide.style.transform = 'translateX(-100%)';
        event.currentTarget.innerHTML = "Se connecter";
    }, 1000);
    
}
function NewCount(event) {
    let mere = event.currentTarget.closest('.swiper-slide');
    let slidBare = mere.querySelector('.barrScrolle');
    slidBare.style.display = 'flex';
    event.currentTarget.innerHTML = `<div class="mereAnimationclique"><span style="color:#FFF">Encours...</span><div class="loading interd"></div></div>`;
    setTimeout(() => {
        slidBare.style.display = 'none';
        MereSlide.style.transform = 'translateX(-200%)';
        event.currentTarget.innerHTML = "Créer un nouveau compte";
    }, 1000);
    
}
function Nianda(event) {
    let mere = event.currentTarget.closest('.swiper-slide');
    let slidBare = mere.querySelector('.barrScrolle');
    slidBare.style.display = 'flex';
    event.currentTarget.innerHTML = `<div class="mereAnimationclique"><span style="color:#FFF">Encours...</span><div class="loading interd"></div></div>`;
    setTimeout(() => {
        slidBare.style.display = 'none';
        MereSlide.style.transform = 'translateX(-300%)';
        event.currentTarget.innerHTML = "Interagir avec Nianda";
    }, 1000);
}
function SuivantMob1(event) {
    let mere = event.currentTarget.closest('.swiper-slide');
    let slidBare = mere.querySelector('.barrScrolle');
    slidBare.style.display = 'flex';
    event.currentTarget.innerHTML = `<div class="mereAnimationclique"><span style="color:#FFF">Encours...</span><div class="loading interd"></div></div>`;
    setTimeout(() => {
        slidBare.style.display = 'none';
        MereSlideInscription.style.transform = 'translateX(-100%)';
        event.currentTarget.innerHTML = "Suivant";
    }, 1000);
}
function SuivantMob2(event) {
    let mere = event.currentTarget.closest('.swiper-slide');
    let slidBare = mere.querySelector('.barrScrolle');
    slidBare.style.display = 'flex';
    event.currentTarget.innerHTML = `<div class="mereAnimationclique"><span style="color:#FFF">Encours...</span><div class="loading interd"></div></div>`;
    setTimeout(() => {
        slidBare.style.display = 'none';
        MereSlideInscription.style.transform = 'translateX(-200%)';
        event.currentTarget.innerHTML = "Suivant";
    }, 1000);
}
function SuivantMob0(event) {
    let mere = event.currentTarget.closest('.swiper-slide');
    let slidBare = mere.querySelector('.barrScrolle');
    slidBare.style.display = 'flex';
    event.currentTarget.innerHTML = `<div class="mereAnimationclique"><span style="color:#FFF">Encours...</span><div class="loading interd"></div></div>`;
    setTimeout(() => {
        slidBare.style.display = 'none';
        MereSlideInscription.style.transform = 'translateX(0%)';
        MereSlide.style.transform = 'translateX(0%)';
        event.currentTarget.innerHTML = "Annuler";
    }, 1000);
    
}
function leftNianda()
{
    MereSlide.style.transform = 'translateX(0%)';
    document.querySelector('.btoun.nianda').innerHTML = "Interagir avec Nianda";
}
