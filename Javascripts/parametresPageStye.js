function deplacementFuntion(event)
  {
    let value = event.currentTarget;
    let MereSlides = document.querySelector(".swiper.mySwiper .swiper-wrapper");
    if(value.id =="one")
    {
        MereSlides.style.transform = 'translateX(-100%)';
    }else if(value.id =="two")
    {
      MereSlides.style.transform = 'translateX(-200%)';

    }else if(value.id =="tree")
    {
        MereSlides.style.transform = 'translateX(-300%)';

    }else if(value.id =="GoPageProfile")
    {
        window.location.href="accueil.php";

    }
  }
  function selectMode(selectedValue) {
    if (selectedValue === "Mode clair") {
        darkFunction();
    } else if (selectedValue === "Mode sombre") {
        sunFunction();
    }
}
function Modification(event)
{
  let Element = event.currentTarget;
    Element.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
    let page = "UpdateInfos.php";
    let form = document.querySelector("#modificationInfos");
    function callback(data)
    {
      if(data.trim() !== 'true')
      {
        document.querySelector('.erreurMessage').textContent = data;
        setTimeout(() => {
                Element.innerHTML ="Engrestre ces modifications";
            }, 3000);
      }else{
        let MereSlides = document.querySelector(".swiper.mySwiper .swiper-wrapper");
        MereSlides.style.transform = 'translateX(0%)';
        window.location.href="Parametres.php";
      }
    }
    functionAjax(page, form, callback);
}

function updateLabelAndDisplayParamettre(input, event, displayId) {
  var fileInput = input;
  var displayElement = document.getElementById(displayId);
  displayElement.innerHTML = `<div class="mereAnimationclique"><span>Chargement..</span><div class="loading interd"></div></div>`;

  if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      if (displayId === 'videoDisplay') {
        displayElement.innerHTML = '<video controls autoplay muted><source autoplay src="' + e.target.result + '" type="video/mp4"></video>';
      } else if (displayId === 'documentDisplay') {
        var file = fileInput.files[0];
        var fileName = file.name;
        var documentTitle = fileName.substr(0, fileName.lastIndexOf('.')) || fileName;
        var fileSize = (file.size / 1024).toFixed(2);
        var fileType = file.type || 'Non disponible';
        displayElement.innerHTML = '<div class="document-title"> Nom du Fichier :' + documentTitle + '</div>' +
          '<div class="document-info">Taille: ' + fileSize + ' KB</div>' +
          '<div class="document-info">Type: ' + fileType + '</div>';
      } else {
        displayElement.innerHTML = '<img src="' + e.target.result + '">';
        document.querySelector('.BoutonsRetoure.add.new').style.display = 'flex';
        let page = "ModificationProfile.php";
        let form = document.querySelector("#ModificationProfile");
          function callback(data)
          {
            if(data.trim() !== 'true')
            {
              alert("Selectionner une autre image pas celle-ci");
              document.querySelector('.BoutonsRetoure.add.new').style.display = 'none';
            }

            
          }
          functionAjax(page, form, callback);
      }
      
    };

    reader.readAsDataURL(fileInput.files[0]);
  }
}