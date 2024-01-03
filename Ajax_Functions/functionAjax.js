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
function invitation() {
  if (navigator.share) {
    navigator.share({
      title: "Invitation depuis NewaRnet",
      text: "L'heure est venue pour notre génération. Rendez-vous sur NewaRnet.",
      url: "https://NewaRnet.com"
    })
      .then(() => console.log('Partage réussi depuis NewaRnet'))
      .catch((error) => console.error('Erreur lors du partage :', error));
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





        
        