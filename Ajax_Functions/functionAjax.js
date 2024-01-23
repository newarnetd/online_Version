function functionAjax(page, form, callback) {
  let ajax = new XMLHttpRequest();
  ajax.open("POST", page, true);
  ajax.onreadystatechange = function() {
      if (ajax.readyState === XMLHttpRequest.DONE) {
          if (ajax.status === 200) {
              let data = ajax.responseText;
              callback(data);
          }
      }
  };
  ajax.send(new FormData(form));
}

function sendValueAjax(page, value, callback) {
  let ajax = new XMLHttpRequest();
  ajax.open("POST", page, true);
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.onreadystatechange = function() {
      if (ajax.readyState === XMLHttpRequest.DONE) {
          if (ajax.status === 200) {
              let data = ajax.responseText;
              callback(data);
          }
      }
  };
  ajax.send("value=" + encodeURIComponent(value));
}

function updateLabelAndDisplay(input, event, displayId) {
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
        cliquedImage();
      }
      var boutonSend = document.querySelector('.InputDouble .containeurInputStyle.poste.publication');
      if (boutonSend) {
        boutonSend.style.display = 'flex';
      }
    };

    reader.readAsDataURL(fileInput.files[0]);
  }
}

function partager(donnees, titre, texte) {
  if (navigator.share) {
    navigator.share({
      title: titre,
      text: texte,
      url: donnees
    })
      .then(() => console.log('Partage réussi depuis NewaRnet'))
  }
}
function share() {
  let data = 'https://newarnet.com';
  let titre = "NewaRnet for Africa - le nouveau slogan circule sur la toile. L'heure est venue pour notre génération. Rendez-vous sur NewaRnet.";
  let ogDescription = "Il s'agit d'un système de chat basé sur l'interconnexion entre utilisateurs, un système aussi puissant créé par un étudiant.";
  partager(data, titre, ogDescription);
}

function partager(data, titre, ogDescription) {
  if (navigator.share) {
    let partagerDetails = {
      title: titre,
      text: ogDescription,
      url: data,
      ogImage: "https://newarnet.com/images/Logo.png",
      ogUrl: "https://newarnet.com"
    };
    navigator.share(partagerDetails)
      .catch((erreur) => alert('Erreur lors du partage : ' + erreur));
  } else {
    alert("La fonction de partage n'est pas prise en charge dans ce navigateur.");
  }
}

function TextReg(conteneur, text) {
  duration = 50,
  conteneur.textContent = "";
  let index = 0;
  const intervalId = setInterval(() => {
    const valeur = text.trim().charAt(index);
    requestAnimationFrame(() => {
      conteneur.textContent += valeur;
    });
    index++;
  } , duration);
}
function RecherMessages(event) {
  var searchValue = event.target.value.toLowerCase();
  var conteneursAmis = document.querySelectorAll('.voirgroupe');
  conteneursAmis.forEach(function (conteneurAmi) {
      var nomCompletAmi = conteneurAmi.querySelector('.nomamis h3').textContent.toLowerCase();
      var message = conteneurAmi.querySelector('.nomamis p').textContent.toLowerCase();
      if (nomCompletAmi.includes(searchValue) || message.includes(searchValue)) {
          conteneurAmi.style.display = 'flex';
      } else {
          conteneurAmi.style.display = 'none';
      }
  });
}




        
        