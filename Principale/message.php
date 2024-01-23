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
    <link rel="stylesheet" href="../mobile_style/accueil.css">
    <link rel="stylesheet" href="../mobile_style/style_messagePage.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../Styles/message.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    <title>NewaRnet</title>
    <style>
        .Message .messageContextText.image img,.Message .messageContextText.image  video,
.FriendMessage  .messageContextText.image img, .FriendMessage  .messageContextText.image video{
    border-radius: 5px;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
        .textDefautMessage{
            width:100%;display:flex;
            align-items:center;
            justify-content:center;margin-top:100px;
        }
        .ChoixAttachement{
            position:fixed;
            top:10%;
            width:65%;
            background:rgba(255,255,255,.2);
            height:75%;
            z-index:100000;
            display:none;
        }
        
        
        .contentAttachement{
            width:50%;
            margin:10px auto;
            height:85%;
            border-radius:5px;
            background:#BDBDBD;
            
            
        }
        .swiper-wrapper.Filles .swiper-slide{
            background:#BDBDBD;
            cursor:pointer;
            width:100%;
            height:100%;
            display:flex;align-items:center;
            justify-content:center;
            border-radius:5px;
            color:#414141;
        }
        label i{
            font-size:120px;
            color:#414141;
        }
        label div,label span,label p{
            color:#414141;
        }
        .swiper.mySwiper.Filles label img, .swiper.mySwiper.Filles label video{
            width:100%;
            height:100%;
            object-fit:cover;
        }
        label{
            color:#414141;
            display:flex;
            flex-direction:column;
            gap:10px;
            width:100%;height:100%;
            justify-content:center;
            align-items:center;
        }
        .swiper.mySwiper.Filles,
.swiper-wrapper.Filles {
    width: 100%;
    background:#BDBDBD;
    border-radius: 5px;
    height: 100%;

}



        .menuHomeChoix .optionHome, .menuHomeChoix i{
            color:#FFF;
        }
        .menuHomeChoix{
            background :var(--color-primary);
            color:#FFF;
            height:70px !important;
            border-radius:5px 5px 0 0;
            margin:0;

        }
        .NiandaSession{
            position:fixed;
            top:10%;right:0%;
            width:30%;
            background:var(--color-blanche-1);
            height:75%;
            display:none;
        }
        .swiper.mySwiper.OptionMenus .swiper-slide{
            flex-direction:column;
            display:flex;
        }
        .ContentOptioption,.swiper.mySwiper.OptionMenus, .swiper.mySwiper.OptionMenus .swiper-wrapper,.swiper.mySwiper.OptionMenus .swiper-slide{
            width:100%;
            height:100%;
            position:relative;
        }
        .menuOptionBouton .fa-solid.fa-xmark{
            display:none;
        }
        .bottomCreationNianda{
position: fixed;
bottom: 0%;
display: flex;
align-items: center;
justify-content: center;
width: 100%;

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
                    <a href="accueil.php" class="iconsHeader">
                            <i class="fa-solid fa-home"></i>
                    </a>
                    <div class="iconsHeader"onclick="GroupeFunction()">
                        <i class="fa-solid fa-robot"></i>
                    </div>
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
                        <i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher un dernier Message ou un par Nom..." oninput="RecherMessages(event)">
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
           <div class="topSesionSideMessage">
                <div class="ContentTopSessionMessage">
                <?php
    if (isset($_GET['x'], $_GET['y'])) {
        global $key, $user;

        $type = nettoyerDonnee(base64_decode($_GET['y']));
        if ($type == "message") {
            $data = nettoyerDonnee(base64_decode($_GET['x']));
            $verifi = $user->get_user($data);
            $query = "UPDATE message set seen = ? WHERE (owner = ?  AND userid = ?) OR (owner = ?  AND userid = ?) ";
            $data = $DB->save($query, [1, $data, $my_id,$my_id,$data]); 
            if ($verifi) {
                $nom_comple_recever = decrypt($verifi['nom'], $key) . ' ' . decrypt($verifi['prenom'], $key);
                $my_sexe_recever = decrypt($verifi['sexe'], $key);
                $profile_recever = ($verifi['ver_profile'] !== 0) ? decrypt($verifi['profile'], $key) : ($my_sexe === "Femme" ? "../images/femme.jpg" : "images/homme.jpg");
                $online = $verifi['enligne'];
            }
        } elseif ($type == "groupe") {
            $data = nettoyerDonnee(base64_decode($_GET['x']));
            $verifi = detailGroupe($data);
            $query = "UPDATE groupeseen set seen = ? WHERE (groupeId = ? AND userid = ?) ";
            $data = $DB->save($query, [1, $data, $my_id]); 
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
        <div class="menuOptionBouton">
            <i class="fa-solid fa-bars"onclick="MenuMessage(event)"></i>
            <i class="fa-solid fa-xmark"onclick="MenuMessageCancel(event)"></i>
        </div>
            </div>
           </div>
           <div class="chatsContent">
                <div class="textDefautMessage">En cours de chargement...</div>
           </div>
           <div class="NiandaSession">
                    <div class="ContentOptioption">
                    <div class="swiper mySwiper OptionMenus">
                        <div class="swiper-wrapper menuOptionMessage">
                        <div class="swiper-slide">
                            <div class="optionUserMenu">
                            <div class="menuSettigns" onclick="SessionChatNianda()">
                                <i class="fa-solid fa-robot"></i>Assistence avec Nianda
                            </div>
                            <div class="menuSettigns" onclick="GestionMembresDuGroupe()">
                                <i class="fa-solid fa-users"></i>Membres du Groupe
                            </div>
                            <div class="menuSettigns" onclick="ModifierProfilGroupe()">
                                <i class="fa-solid fa-cog"></i>parametre du Groupe
                            </div>
                            <div class="menuSettigns" onclick="AjouterNouvelUtilisateur()">
                                <i class="fa-solid fa-user-plus"></i>Ajouter un Nouvel Utilisateur
                            </div>

                            <div class="menuSettigns" onclick="RetireMembre()">
                            <i class="fa-solid fa-user-minus"></i> Retirer un Membre
                            </div>
                            <div class="menuSettigns" onclick="QuitterLeGroupe()">
                                <i class="fa-solid fa-sign-out"></i>Quitter le Groupe
                            </div>

                            <div class="menuSettigns" onclick="SupprimerLeGroupe()">
                                <i class="fa-solid fa-trash"></i>Supprimer le Groupe
                            </div>

                            </div>      
                        </div>
                        <!-- nianda -->
                        <div class="swiper-slide">
                            <div class="headerTittre" >
                                <span><i class="fa-solid fa-arrow-left"onclick="HommePrinciplae()"></i></span>
                                <span>Service d'assistance avec Nianda.</span>
                                <i class="fa-solid fa-robot"></i>
                            </div>
                            <div class="contentText"></div>
                            <div class="contenuDataPrincipeNianda">
                                    <div class="bottomCreationNianda" >
                                        <div class="RecherchSpace">
                                            <i class="fa-solid fa-robot"></i>
                                            <i class="fa-solid fa-paper-plane"></i>
                                            <input type="text" name="" id="" placeholder="Une question sur NewaRnet..." oninput="AddQuestion(event)">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- paremtre Groupe -->
                        <div class="swiper-slide">
                            <div class="optionsUtilisateur">
                            <div class="menuSettigns" onclick="gererMembresGroupe()">
                                    <i class="fas fa-users"></i> Modifier le Nom du Groupe
                                </div>
                                <div class="menuSettigns" onclick="GestionAdminsDuGroupe()">
                                    <i class="fa-solid fa-users-cog"></i>Gestion des Admins
                                </div>
                                <div class="menuSettigns" onclick="modifierProfilGroupe()">
                                    <i class="fas fa-user-edit"></i> Modifier la Photo de Profil du Groupe
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                                    <label for="imagePost" id="imageDisplay">
                                        <p><i class="fa-regular fa-image"></i></p>
                                    </label>
                        </div>
                        <div class="swiper-slide">
                            <div class="leftnav"> 
                                <i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher un dernier Message ou un par Nom..." oninput="RecherMessages(event)">
                            </div>
                            <div class="conteneuramis">
                            <div class="photoamis">
                            <img src="../images/jobIcon.jpg"width="100%"height="100%"/>
                            </div>
                            <div class="nomamis">
                            <h3>arsene cirhuza</h3>
                            <p><small>86 Membres </small></p>
                            </div>
                            <div class="iconeamis"><input type="checkbox" name="" id="" onchange="ActionUser(event)"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            membres
                        </div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- attachement --> 
                <div class="ChoixAttachement">
                        <div class="contentAttachement">
                            <div class="menuHomeChoix">
                                <div class="optionHome" onclick="slideTo(0)" id="actualite">photo<i class="fa-solid fa-image"></i></div>
                                <div class="optionHome"onclick="slideTo(1)"id="videos">videos <i class="fa-solid fa-clapperboard"></i></div>
                                <div class="optionHome"onclick="slideTo(2)" id="Statut">document<i class="fa-solid fa-file-pdf"></i></div>
                            </div>
                            <div class="swiper mySwiper Filles">
                                <div class="swiper-wrapper Filles">
                                <div class="swiper-slide">
                                    <label for="imagePost" id="imageDisplay">
                                        <p><i class="fa-regular fa-image"></i></p>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label for="videomessage" id="videoDisplay">
                                    <i class="fa-solid fa-clapperboard"></i>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label for="documents" id="documentDisplay">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </label>
                                </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                </div>
                <!-- attachement -->
           <div class="bottomMessageSide">
           <form class="bottomSession" method="POST" id="MessageSend">
    <input type="file" name="image" id="imagePost" hidden accept="image/*" onchange="updateLabelAndDisplayMessage(this,event, 'imageDisplay')">
    <input type="file" name="video" id="videomessage" hidden accept="video/*" onchange="updateLabelAndDisplayMessage(this,event, 'videoDisplay')">
    <input type="file" name="document" id="documents" hidden accept=".pdf, .doc, .docx, .xls, .xlsx, .csv, .txt, .rtf," onchange="updateLabelAndDisplayMessage(this, event, 'documentDisplay')">
<?php
$type = nettoyerDonnee(base64_decode($_GET['y']));
if (isset($_GET['x'])) {
    global $key, $user;
    if ($type == "message") {
      $data = nettoyerDonnee(base64_decode($_GET['x']));
    if ($user->get_user($data)) {
      $id = nettoyerDonnee(base64_decode($_GET['x']));
      $id = encrypt($id,$key);
        echo "<input type='text' id='recepteur' name='u' value='$id' hidden>";
    }
  } elseif ($type == "groupe") {
    $data = decrypt($_GET['x'], $key);
    $data = nettoyerDonnee(base64_decode($_GET['x']));
    $verifi = detailGroupe($data);
    $id = nettoyerDonnee(base64_decode($_GET['x']));
    $id = encrypt($id,$key);
    echo "<input type='text' id='recepteur' name='u' value='$id' hidden>";
  }else {
    exit;
}
}
?>


    <div class="messagecontent">
      <div class="chempsDesaisi">
          <div id="InputFile" class="inputLeft" onclick="hideInputFile()"><i class="fa-solid fa-paperclip"></i></div>
          <div class="inputLeft back" onclick="showInputFile()"><i class="fa-solid fa-arrow-left"></i></div>
          <input type="text" name="message"id="messageInpt"placeholder="Message..." oninput="ChampVerifiction(event)">
      </div>
      <div class="iconsDroite">
         <?php
          $type = nettoyerDonnee(base64_decode($_GET['y']));

          echo ($type === "groupe")
              ? "<div class='iconsHeader sendsMessage' onclick='GrouepSend(event)'><i class='fa-solid fa-arrow-up'></i></div>"
              : (($type === "message")
                  ? "<div class='iconsHeader sendsMessage' onclick='MessageSend(event)'><i class='fa-solid fa-arrow-up'></i></div>"
                  : exit);
                                 
         ?>
          <div class="iconsHeader chatBot"onclick="SessionChatNianda()">
              <i class="fa-solid fa-robot"></i>
          </div>
      </div>
</form>
           </div>
            <!-- Fin messages -->
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
          slidesPerView: 6,
          spaceBetween: 2,
          freeMode: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
let MereMenuSession = document.querySelector(".menuOptionMessage");
function SessionChatNianda() {
    MereMenuSession.style.transform = 'translateX(-100%)';
}


function GestionMembresDuGroupe()
{
    MereMenuSession.style.transform = 'translateX(0%)';
}
function ModifierProfilGroupe()
{
    MereMenuSession.style.transform = 'translateX(-200%)';
}
function AjouterNouvelUtilisateur()
{
    MereMenuSession.style.transform = 'translateX(-400%)';
}
function RetireMembre()
{
    MereMenuSession.style.transform = 'translateX(-400%)';
}
function QuitterLeGroupe()
{
    MereMenuSession.style.transform = 'translateX(0%)';
}
function SupprimerLeGroupe()
{
    
    MereMenuSession.style.transform = 'translateX(0%)';
}
    function MenuMessage(event) {
    let mere = event.currentTarget;
    let menuBare = document.querySelector(".fa-bars");
    let menuCancel = document.querySelector(".fa-xmark");
    document.querySelector(".NiandaSession").style.display = 'flex';
    menuBare.style.display = 'none';
    menuCancel.style.display = 'flex';
}
function MenuMessageCancel(event) {
    let MereMenuSession = document.querySelector(".menuOptionMessage");
    MereMenuSession.style.transform = 'translateX(0%)';
    let mere = event.currentTarget;
    let menuBare = document.querySelector(".fa-bars");
    let menuCancel = document.querySelector(".fa-xmark");
    document.querySelector(".NiandaSession").style.display = 'none';
    menuBare.style.display = 'flex';
    menuCancel.style.display = 'none';
}

function GrouepSend(event) {
    let page = "sendMessageGroupe.php";
    let form = document.querySelector("#MessageSend");
    function callback(data) {
        document.querySelector("#messageInpt").value = "";
        document.querySelectorAll(".iconsHeader.sendsMessage").forEach(item => {
            item.style.display = 'none';
        });
        document.querySelector(".ChoixAttachement").style.display = 'none';
        let inputFileleft = document.querySelector(".inputLeft.back");
        inputFileleft.style.display = 'none';
        loadChatsGroupes();
        loadConversationGroupes();
    }
    functionAjax(page, form, callback);
}
function MessageSend(event)
{
  let page = "sendMessage.php";
  let form = document.querySelector("#MessageSend");
  function callback(data) 
  {
    document.querySelector("#messageInpt").value = "";
        document.querySelectorAll(".iconsHeader.sendsMessage").forEach(item => {
            item.style.display = 'none';
        });
        document.querySelector(".ChoixAttachement").style.display = 'none';
        let inputFileleft = document.querySelector(".inputLeft.back");
        inputFileleft.style.display = 'none';
    loadChats();
    loadConversation();
  }
  functionAjax(page, form, callback);
}
function verification(callback) {
    const urlParams = new URLSearchParams(window.location.search);
    const value = urlParams.get('y');  
    const page = "verificationGet.php";
    sendValueAjax(page, value, function(data) {
        callback(data);
    });  
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
function loadChatsGroupes() {
    const page = "loadChatsGroupes.php";
            let value = document.querySelector("#recepteur").value;
            sendValueAjax(page, value, function(data) {
                document.querySelector(".dataConversation").innerHTML = data;
            });
}
function loadConversationGroupes()
{
    const page = "loadMessagesConversationGroupe.php";
  let value = document.querySelector('input#recepteur').value; 
  function callback(data) {
    var chatsContent = document.querySelector(".chatsContent");
    chatsContent.innerHTML = data;
    chatsContent.scrollTop = chatsContent.scrollHeight;
    var chatsContent = document.querySelector(".chatsContent");
    chatsContent.innerHTML = data;
  }

  sendValueAjax(page, value, callback);
}
function loadConversation()
{
  const page = "loadMessagesConversation.php";
  let value = document.querySelector('input#recepteur').value; 
  function callback(data) {
    var chatsContent = document.querySelector(".chatsContent");
    chatsContent.innerHTML = data;
    chatsContent.scrollTop = chatsContent.scrollHeight;
    var chatsContent = document.querySelector(".chatsContent");
    chatsContent.innerHTML = data;
  }

  sendValueAjax(page, value, callback);
}
$(document).ready(function(){
    verification(function(verificationResult) {
if(verificationResult == "groupe")
{
    loadChatsGroupes();
    loadConversationGroupes();
}else{
    loadChats();
    loadConversation();
}
});
});
var mySwiperMenu = new Swiper(".mySwiper.Filles", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
});
function slideTo(index) {
    mySwiperMenu.slideTo(index);
}
var mySwiper= new Swiper(".mySwiper.OptionMenus", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
});



function hideInputFile() {
    const inputFile = document.querySelector("#InputFile");
    let inputFileleft = document.querySelector(".inputLeft.back");
    inputFile.style.display = 'none';
    inputFileleft.style.display = 'flex';
    document.querySelector(".ChoixAttachement").style.display = 'flex';
}

function showInputFile() {
    const inputFile = document.querySelector("#InputFile");
    let inputFileleft = document.querySelector(".inputLeft.back");
    inputFile.style.display = 'flex';
    inputFileleft.style.display = 'none';
    document.querySelector(".ChoixAttachement").style.display = 'none';
}
function AddQuestion(event) {
    let container = event.currentTarget.closest('.bottomCreationNianda');
    let iconSend = container.querySelector('.fa-solid.fa-paper-plane');
    let robot = container.querySelector('.fa-solid.fa-robot');

    if (event.target.value.trim() !== '') {
        iconSend.style.display = 'flex';
        robot.style.display = 'none';
    } else {
        iconSend.style.display = 'none';
        robot.style.display = 'flex';
    }
}

      </script>
    </body>
</html>
    