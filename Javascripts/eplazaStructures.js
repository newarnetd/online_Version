let menuSwipper = document.querySelector(".swiper-wrapper.menuEplaza");
function SelectArticle(event) {
    document.querySelector(".containeurInputStyle.PhotoUser").style.display = "none";
    document.querySelector(".containeurInputStyle.Image").style.display = "flex";
    const file = event.target.files[0];
    if (!file) {
      return;
    }
  
    const reader = new FileReader();
    reader.onload = (e) => {
      document.querySelector(".containeurInputStyle.Image .ImagPost").src = e.target.result;
    };
    reader.readAsDataURL(file);
  }
  function BoutiqueEplaza()
  {
    document.querySelector(".swiper-wrapper.boutique").style.transform = "TranslateX(0%)";
  }
  function AlboutEplaza()
  {
    document.querySelector(".swiper-wrapper.boutique").style.transform = "TranslateX(-100%)";
  }
 
  function Menueplaza(event)
  {
    let value = event.currentTarget;
    let OptionsBtn = document.querySelectorAll(".optionHome");
    let MereSlides = document.querySelector(".swiper.mySwiper .swiper-wrapper.sessionpage");
    OptionsBtn.forEach(option =>{
        option.classList.remove('active');
    })
    value.classList.add('active');
    if(value.id =="actualite")
    {
        MereSlides.style.transform = 'translateX(0%)';
    }else if(value.id =="Publicites")
    {
      MereSlides.style.transform = 'translateX(-100%)';
    
    }else if(value.id =="Locations")
    {
      MereSlides.style.transform = 'translateX(-200%)';
    
    }else if(value.id =="Boutique")
    {
      MereSlides.style.transform = 'translateX(-300%)';
    }
  }
 

 
function NouvelleBoutique()
{
menuSwipper.style.transform = "TranslateX(-100%)";
}
function rechercherCritere(event)
{
if(event.target.value.trim() !== "")
{
menuSwipper.style.transform = "TranslateX(-400%)";
}else{
menuSwipper.style.transform = "TranslateX(0%)";
}
}
function GroupePargatege()
{
menuSwipper.style.transform = "TranslateX(-500%)";
}
function PublierArticles()
{
menuSwipper.style.transform = "TranslateX(-300%)";
}
function CreerNiuvellBoutique()
{
document.querySelector(".boutonsFromssatrt").style.display = "none";
document.querySelector(".NouvellBoutique").style.maxWidth = "100%";
}
