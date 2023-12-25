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
// Fonction pour partager via l'API Web Share ou une alternative
function partager(donnees, titre, texte) {
  // Vérifier si l'API Web Share est prise en charge par le navigateur
  if (navigator.share) {
    // Appel à l'API Web Share
    navigator.share({
      title: titre,
      text: texte,
      url: donnees
    })
      .then(() => console.log('Partage réussi'))
      .catch(() => afficherAlternative(donnees, titre, texte));
  } else {
    // Si l'API Web Share n'est pas prise en charge, afficher une alternative
    afficherAlternative(donnees, titre, texte);
  }
}

// Fonction alternative de partage basée sur des liens
function afficherAlternative(donnees, titre, texte) {
  // Vous pouvez implémenter votre propre logique alternative ici.
  // Par exemple, créer des liens vers des applications de partage spécifiques ou afficher un message d'invitation à partager.
  console.log("L'API Web Share n'est pas prise en charge par votre navigateur.");
  console.log("Voici des liens alternatifs vers des applications de partage :");

  // Exemple : Twitter
  const lienTwitter = `https://twitter.com/intent/tweet?text=${encodeURIComponent(texte)}&url=${encodeURIComponent(donnees)}&hashtags=VotreHashtag`;
  console.log(`Twitter : ${lienTwitter}`);

  // Exemple : Facebook
  const lienFacebook = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(donnees)}&quote=${encodeURIComponent(texte)}`;
  console.log(`Facebook : ${lienFacebook}`);

  // ... Ajoutez d'autres liens pour d'autres applications de partage

  // Vous pouvez également afficher un message demandant à l'utilisateur de partager manuellement le lien.
}




        
        