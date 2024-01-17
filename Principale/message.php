<?php
include("otherPrincipale.php");
authentification(decrypt($_SESSION['ownerConnected'],$key));
if(($detail_user['ver_profile'] == 0))
{
  header("Location: ../Principale/Parametres.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../Styles/styleCommun.css" />
    <link rel="stylesheet" href="../Styles/message.css">
    <link rel="stylesheet" href="../Styles/eplaza.css">
    <link rel="stylesheet" href="../Styles/Profile.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../Styles/message.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    <title>NewaRnet</title>
  <style>
  .menuOptionBouton{
    position:absolute;
    right:20px;
    font-size:20px;
  }
  .menuOptionBouton.first{
    right:100px;
  }
.ReferencePage .topSesion{
  position:relative;
  display:flex;align-items:center;
}
  </style>
</head>
<body>
    <div class="ReferencePage">
        <div class="gauche">
            <div class="headerMessage">
                <div class="iconsHeader search" onclick="searchFunction(event)">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="iconsHeader Returnback" onclick="reutnBack()">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div class="rightIcons">
                    <div class="iconsHeader"onclick="GroupeFunction()">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="iconsHeader moreOpion"onclick="Conversation()">
                        <i class="fa-solid fa-message"></i>
                    </div>
                </div>
            </div>
            <div class="swiper mySwiper other">
                <div class="swiper-wrapper friendsOnline">
                      <?php
                      global $my_id;
                         $result= $user->Mesamis($my_id,"amis");
                         if($result)
                         {
                             foreach($result as $_ROW)
                             {
                                 $USERS_ROW =  $user->get_user($_ROW['userid']);
                                 include("int_Online_friend.php");
                             }
                         }
                      ?>

                </div>
            </div>  
            <div class="swiper mySwiper ">
                 <div class="swiper-wrapper LeftSide">
                    <div class="conversationAlllMessages swiper-slide">
                        <!-- messages -->
                        <div class="dataConversation">
                        <div class="mereAnimationclique"><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary);width: 40px;height:40px"></div></div>                      
                      </div>
                   </div>
                   <!-- rechercher -->
                   <div class="swiper-slide">
                    <div class="leftnav"> 
                        <i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher un NewaRnaute..." oninput="RecherCherNewaRnaute(event)">
                    </div>
                      <div class="dataSerChMessageAnUsers"></div>
                   </div>
                   <!-- Groupes -->
                   <div class="swiper-slide">
                        <!-- Groupes -->
                        <div class="dataGroupes">
                        <div class="mereAnimationclique"><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary);width: 40px;height:40px"></div></div>                      
                      </div>
                   </div>
                   <!-- Conersations -->
                   <div class="swiper-slide">
                   <div class="dataConversationMessage">
                        <div class="mereAnimationclique"><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary);width: 40px;height:40px"></div></div>                      
                   </div>
                   </div>
                  
                 </div>
            </div>
        </div>
        <div class="droite">
            <div class="topSesion">
            <?php
if (isset($_GET['x'], $_GET['y'])) {
    global $key, $user;

    $type = nettoyerDonnee(base64_decode($_GET['y']));

    if ($type == "message") {
        $data = nettoyerDonnee(base64_decode($_GET['x']));
        $verifi = $user->get_user($data);

        if ($verifi) {
            $nom_comple_recever = decrypt($verifi['nom'], $key) . ' ' . decrypt($verifi['prenom'], $key);
            $my_sexe_recever = decrypt($verifi['sexe'], $key);
            $profile_recever = ($verifi['ver_profile'] !== 0) ? decrypt($verifi['profile'], $key) : ($my_sexe === "Femme" ? "../images/femme.jpg" : "images/homme.jpg");
            $online = $verifi['enligne'];
        }
    } elseif ($type == "groupe") {
        $data = nettoyerDonnee(base64_decode($_GET['x']));
        $verifi = detailGriupe($data);

        if ($verifi) {
            $nom = decrypt($verifi['nom'], $key);
            $nom_comple_recever = ucfirst($nom);
            $membres = json_decode($verifi['membres'], true);
            $NumberMembres = count($membres);
            $profile_recever = decrypt($verifi['profil'], $key);
        }
    }else {
        exit;
    }
}
?>


                <div class="carterUsermessage"><img class="userphoto" src="<?php echo $profile_recever ?>" alt=""></div>
                <div class="nameUserMessage">
                <h3 style="font-weight:500"><?php echo ($type == "message") ? $nom_comple_recever : $nom_comple_recever; ?></h3>
                <p class="EncoursAction"><?php echo ($type == "message") ? TempsEcouler($online) : "Vous et " . $NumberMembres . " personnes"; ?></p>
                </div> 
              <div class="menuOptionBouton first"><i class="fa-solid fa-users"></i></div>
              <div class="menuOptionBouton"><i class="fa-solid fa-bars"></i></div>
            </div>
            <!-- Debut messages -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper DroiteSide">
                <div class="middleSesion swiper-slide">
                    <!-- messages_conversations -->
                    <div class="chatConversationUsers"></div>
                </div>
                <div class="middleSesion swiper-slide Fil" >
                  <div class="menuHomeChoix">
                    <div class="optionHome active" onclick="PosteFileMessagePage(event)" id="image">Photo<i class="fa-solid fa-image"></i></div>
                    <div class="optionHome"onclick="PosteFileMessagePage(event)"id="videos">videos <i class="fa-solid fa-clapperboard"></i></div>
                    <div class="optionHome"onclick="PosteFileMessagePage(event)" id="document">Document<i class="fa-solid fa-file-pdf"></i></div>
                  </div>
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper menuFil">
                        <div class="swiper-slide">
                        <label for="imagePost" id="imageDisplay" class="carterPostStory poste">
                            <i class="fa-solid fa-image"></i>
                            <p>Cliquez pour sélectionner une image</p>
                          </label>
                        </div>
                          <div class="swiper-slide">
                          <label for="videomessage" id="videoDisplay" class="carterPostStory poste">
                            <i class="fa-solid fa-clapperboard"></i>
                            <p>Cliquez pour sélectionner une video</p>
                          </label>
                        </div>
                          <div class="swiper-slide">
                          <label for="documents" id="documentDisplay" class="carterPostStory poste">
                            <i class="fa-solid fa-file-pdf"></i>
                            <p>Cliquez pour sélectionner une Document</p>
                          </label>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            <!-- Fin messages -->
            <form class="bottomSession" method="POST" id="MessageSend">
                  <input type="file" name="image" id="imagePost" hidden accept="image/*" onchange="updateLabelAndDisplayMessage(this,event, 'imageDisplay')">
                  <input type="file" name="video" id="videomessage" hidden accept="video/*" onchange="updateLabelAndDisplayMessage(this,event, 'videoDisplay')">
                  <input type="file" name="document" id="documents" hidden accept=".pdf, .doc, .docx, .xls, .xlsx, .csv, .txt, .rtf," onchange="updateLabelAndDisplayMessage(this, event, 'documentDisplay')">
              <?php
              if (isset($_GET['x'])) {
                  global $key, $user;
                  if ($type == "message") {
                  $data = decrypt($_GET['x'], $key);
                  if ($user->get_user($data)) {
                    $id = decrypt($_GET['x'],$key);
                      echo "<input type='text' id='recepteur' name='u' value='$id' hidden>";
                  }
                } elseif ($type == "groupe") {
                  $data = decrypt($_GET['x'], $key);
                  $data = nettoyerDonnee(base64_decode($_GET['x']));
                  $verifi = detailGriupe($data);
                  if ($user->get_user($data)) {
                    $id = decrypt($_GET['x'],$key);
                      echo "<input type='text' id='recepteur' name='u' value='$id' hidden>";
                  }
                }else {
                  exit;
              }
              }
              ?>


                  <div class="messagecontent">
                    <div class="chempsDesaisi">
                        <div id="InputFile" class="inputLeft" onclick="hideInputFile()"><i class="fa-solid fa-paperclip"></i></div>
                        <div class="inputLeft back" onclick="showInputFile()"><i class="fa-solid fa-arrow-left"></i></div>
                        <input type="text" name="message"id=""placeholder="Message..." oninput="ChampVerifiction(event)">
                    </div>
                    <div class="iconsDroite">
                       <?php
                        $type = nettoyerDonnee(base64_decode($_GET['y']));

                        echo ($type === "groupe")
                            ? "<div class='iconsHeader sendsMessage' onclick='GrouepSend(event)'><i class='fa-arrow-up'></i></div>"
                            : (($type === "message")
                                ? "<div class='iconsHeader sendsMessage' onclick='MessageSend(event)'><i class='fa-solid fa-arrow-up'></i></div>"
                                : exit);
                                               
                       ?>
                        <div class="iconsHeader chatBot">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                    </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../Javascripts/stylepage.js"></script>
    <script src="../Javascripts/MessageStructure.js"></script>
    <script src="../Javascripts/Message.js"></script>
    <!-- <script src="../Javascripts/refusActions.js"></script> -->
    <script src="../Javascripts/stylepage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../Javascripts/loadingPage.js"></script>
    <script src="../Javascripts/bib.js"></script>
    <script src="../Javascripts/fonctionsAccueil.js"></script>
    <script src="../Javascripts/HomeStructure.js"></script>
    <script src="../Ajax_Functions/functionAjax.js"></script>
    <script>
        var swiper = new Swiper(".swiper.mySwiper.MenuHome", {
      allowSlideNext: false,
      allowSlidePrev: false,
      allowTouchMove: false,
    });
            var swiper = new Swiper(".mySwiper.other", {
          slidesPerView: 4,
          spaceBetween: 2,
          freeMode: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
        function ChampVerifiction(event)
{
    if(event.target.value.trim() !== '')
    {
        document.querySelector(".messagecontent .iconsDroite .sendsMessage").style.display= 'flex';

    }else{
        document.querySelector(".messagecontent .iconsDroite .sendsMessage").style.display= 'none';
    }
}
function MessageSend(event)
{
  event.target.innerHTML = `<div class="mereAnimationclique"><div class="loading interd"></div></div>`;
  let page = "sendMessage.php";
  let form = document.querySelector("#MessageSend");
  function callback(data) 
  {
    loadChats();
  }
  functionAjax(page, form, callback);
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
function loadChats()
{
  document.querySelector(".dataConversation").innerHTML = `<div class="mereAnimationclique"><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary);width: 40px;height:40px"></div></div>`;
    const page = "loadChats.php";
    let value = "";
    function callback(data) {
      document.querySelector(".dataConversation").innerHTML = data;
  }
  sendValueAjax(page, value, callback);
}
function lectureMessagesChat() {
  document.querySelector(".dataConversation").innerHTML = `<div class="mereAnimationclique"><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary);width: 40px;height:40px"></div></div>`;
  const page = "loadMessagesConversation.php";
  let value = document.querySelector('input#recepteur').value; 
  function callback(data) {
    document.querySelector(".middleSesion.swiper-slide .chatConversationUsers").innerHTML = data;
  }

  sendValueAjax(page, value, callback);
}

$(document).ready(function(){
        loadChats();
        //lectureMessagesChat();
});
        </script>
      </body>
    </html>
    