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
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
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

function updateLabelAndDisplay(input, displayId) {
    var fileInput = input;
    var displayElement = document.getElementById(displayId);

    if (fileInput.files && fileInput.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        if (displayId === 'videoDisplay') {
          displayElement.innerHTML = '<video controls autoplay muted><source autoplay src="' + e.target.result + '" type="video/mp4"></video>';
        } else if (displayId === 'documentDisplay') {
        } else {
          displayElement.innerHTML = '<img src="' + e.target.result + '">';
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





        
        