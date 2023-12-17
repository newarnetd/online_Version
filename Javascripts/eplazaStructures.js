let menuSwipper = document.querySelector(".swiper-wrapper.menuEplaza");

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
function GrouepShares()
{
  menuSwipper.style.transform = "TranslateX(-200%)";
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