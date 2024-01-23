 function BoutonRecher()
 {
    document.querySelector(".iconsHeader.iconSearch").style.display='none';
 }

 function ActionUser(event) {
   var checkbox = event.target;

   let mere = event.target.closest('.swiper-slide.GestionMembre');
   let inputCheckboxes = mere.querySelectorAll("input[type='checkbox']");
   
   let shouldDisplay = Array.from(inputCheckboxes).some(input => input.checked);

   if (shouldDisplay) {
       document.querySelector(".swiper-slide.GestionMembre .InputDouble").style.display = 'flex';
   } else {
       document.querySelector(".swiper-slide.GestionMembre .InputDouble").style.display = 'none';
   }
}
 function Actionblocage(event) {
   var checkbox = event.target;

   let mere = event.target.closest('.swiper-slide.Blocage');
   let inputCheckboxes = mere.querySelectorAll("input[type='checkbox']");
   
   let shouldDisplay = Array.from(inputCheckboxes).some(input => input.checked);

   if (shouldDisplay) {
       document.querySelector(".swiper-slide.Blocage .InputDouble").style.display = 'flex';
   } else {
       document.querySelector(".swiper-slide.Blocage .InputDouble").style.display = 'none';
   }
}


function updateLabelAndDisplayMessage(input, event, displayId) {
  var fileInput = input;
  var displayElement = document.getElementById(displayId);
  displayElement.innerHTML = `<div class="mereAnimationclique"><span>Chargement..</span><div class="loading interd"></div></div>`;

  if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      if (displayId === 'videoDisplay') {
        displayElement.innerHTML = '<video controls autoplay muted><source autoplay src="' + e.target.result + '" type="video/mp4"></video>';
        document.querySelector(".messagecontent .iconsDroite .sendsMessage").style.display= 'flex';
      } else if (displayId === 'documentDisplay') {
        var file = fileInput.files[0];
        var fileName = file.name;
        var documentTitle = fileName.substr(0, fileName.lastIndexOf('.')) || fileName;
        var fileSize = (file.size / 1024).toFixed(2);
        var fileType = file.type || 'Non disponible';
        displayElement.innerHTML = '<div class="document-title"> Nom du Fichier :' + documentTitle + '</div>' +
          '<div class="document-info">Taille: ' + fileSize + ' KB</div>' +
          '<div class="document-info">Type: ' + fileType + '</div>';
          document.querySelector(".messagecontent .iconsDroite .sendsMessage").style.display= 'flex';
      } else {
        displayElement.innerHTML = '<img src="' + e.target.result + '">';
        document.querySelector(".messagecontent .iconsDroite .sendsMessage").style.display= 'flex';
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

function GroupeFunction()
{
    menuSwipper.style.transform = "TranslateX(-200%)";
    leftIcon.style.display = 'flex';
    leftIconSearch.style.display = 'none';
    let value = ""
    let page = "lectureMesGroupes.php";
    function callback(data) 
    {
      document.querySelector(".dataGroupes").innerHTML = data;
    }
    sendValueAjax(page, value, callback);    
}
function searchFunction(event)
{
    event.currentTarget.style.display = 'none';
    leftIcon.style.display = 'flex';
    leftIconSearch.style.display = 'none';
    menuSwipper.style.transform = "TranslateX(-100%)";
    document.querySelector(".dataSerChMessageAnUsers").innerHTML = `<div class="mereAnimationclique"><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary);width: 40px;height:40px"></div></div>`;
    const page = "loadChats.php";
    let value = "";
    function callback(data) {
      document.querySelector(".dataSerChMessageAnUsers").innerHTML = data;
  }
  sendValueAjax(page, value, callback);
}
function Conversation()
{
    menuSwipper.style.transform = "TranslateX(-300%)";
    leftIcon.style.display = 'flex';
    leftIconSearch.style.display = 'none';
    const page = "readFriends.php";
    let value = event.target.value;
    function callback(data) {
      document.querySelector(".dataConversationMessage").innerHTML = data;
  }
  sendValueAjax(page, value, callback);
}

function lectureMessagesChat() {
  document.querySelector(".dataConversation").innerHTML = `<div class="mereAnimationclique"><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary);width: 40px;height:40px"></div></div>`;
  const page = "loadMessagesConversation.php";
  let value = document.querySelector('input#recepteur').value; 
  function callback(data) {
    document.querySelector(".middleSesionMessage.swiper-slide .chatConversationUsers").innerHTML = data;
  }

  sendValueAjax(page, value, callback);
}


function ChampVerifiction(event)
{
    if(event.target.value.trim() !== '')
    {
        document.querySelector(".messagecontent .iconsDroite .sendsMessage").style.display= 'flex';

    }else{
        document.querySelector(".messagecontent .iconsDroite .sendsMessage").style.display= 'none';
    }
}

