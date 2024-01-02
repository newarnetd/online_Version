<?php
include("otherPrincipale.php");
authentification(decrypt($_SESSION['ownerConnected'],$key));
if(($detail_user['ver_profile'] !== 0))
{
  header("Location: ../Principale/accueil.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../Styles/styleCommun.css" />
    <link rel="stylesheet" href="../Styles/commentaire.css">
    <link rel="stylesheet" href="../Styles/index.css">
    <link rel="stylesheet" href="../Styles/eplaza.css">
    <link rel="stylesheet" href="../Styles/style_accueil.css"/>
    <link rel="stylesheet" href="../Styles/paramettres.css"/>
    <link rel="shortcut icon"href="../images/Logo.png"type="image/jpeg"style="width: 300px; height: 300px"/>
    <title>NewaRnet</title>
    <style>
       .leftnav.FrinedsNew{
width:90%;
height:55px;
margin:10px auto;
border-radius:30px;
background:transparent;
border:1px solid var(--color-blanche-2);
box-shadow:none;
}
.swiper-slide{
  max-height:85vh;
  overflow-y:auto !important;
  height:100%;
}
.BoutonsRetoure.add.new{
  width:30%;
  margin:20px auto;
  display:none;
}
    </style>
</head>
<body>

    <div class="swiper mySwiper containeurSession">
            <div class="headerSideCarter">Personnalisez votre expérience utilisateur</div>
        <div class="swiper-wrapper">
    <div class="swiper-slide">
        <div class="UtilisateurInfos">
            <div class="profilephoto"><img src="<?php echo $profile ?>" alt=""></div>
            <div class="nameUserNew">
                <h3><?php echo $nom_comple ?> </h3>
                <span >Lecture et pation</span>
            </div>
        </div>
        <div class="InputDouble inputs"onclick="DecalerLeft(event)" id="tree">
            <button>Compléter mon Profil <i class="fa-solid fa-pen-to-square"></i></button>  
        </div>
        <p class="textEplaza">Bienvenue sur NewaRnet ! Merci pour votre première visite. Explorez davantage de contenus en vous abonnant à des genres qui vous intéressent et en ajoutant des membres comme amis.</p>
        <div class="SuivantBoutonNewUserCursor" onclick="DecalerLeft(event)" id="one">
          <button><i class="fa-solid fa-arrow-right"></i></button>
        </div>
        </div>
        <div class="swiper-slide">
        <div class="swiper-slide">
        <div class="leftnav FrinedsNew"> 
            <i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher un NewaRnaute..." oninput="RecherCherNewaRnaute(event)">
        </div>
        <div class="SuivantBoutonNewUserCursor" onclick="DecalerLeft(event)" id="two">
          <button><i class="fa-solid fa-arrow-right"></i></button>
        </div>
        <h3 class="textAjouterFriends">Ajoutez au moins 5 amis pour bénéficier d'un accès élargi à notre contenu.</h3>
        <hr classe="ligneBottom">
        <?php
                        global $my_id;
                        $USERS_ROWS = getFriends($my_id,'amis');
                        if($USERS_ROWS)
                        {
                          foreach($USERS_ROWS as $USERS_ROW)
                          {
                            include("int_Friends_Add.php");
                          }
                        }
                        
                        ?>
      </div>
        </div>
        <div class="swiper-slide PofilePhotoNew">
                        <form action="" method="post" enctype="multipart/form-data" class="PostArticleForm" id="ModificationProfile">
                          <input type="file" name="ProfilePhoto" id="imageProfieutilisateur" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event, 'imageprofil')">
                          <label for="imageProfieutilisateur" class="carterPostStory profile_cover other" id="imageprofil" onclick="SelectionImageParametre()">
                            <?php
                            $DB = new Database();
                            $user = new User();
                            $image_class = new User();
                            authentification(decrypt($_SESSION['ownerConnected'],$key));
                            $detail_user = $user->get_user(decrypt($_SESSION['ownerConnected'],$key));
                            if($detail_user)
                            {
                               
                                $nom_comple = decrypt($detail_user['nom'], $key) . ' ' . decrypt($detail_user['prenom'], $key);
                                $my_sexe= decrypt($detail_user['sexe'], $key);
                                $profile = ($detail_user['ver_profile'] !== 0) ? decrypt($detail_user['profile'],$key) : ($my_sexe=== "Femme" ? FEMME_IMAGE : HOMME_IMAGE);
                                $my_id = decrypt($_SESSION['ownerConnected'],$key);
                            }
                            ?>
                          <img src="<?php echo  $profile?>" alt="">
                          <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
                          </label>                  
                      </form>
                        <div class="BoutonsRetoure add new" onclick="DecalerLeft(event)" id="GoPageProfile">suivant <i class="fa-solid fa-arrow-right"></i></div>
                        <p class="Text_Norme">Cette photo offre aux NewaRnautes une première impression visuelle de votre personnalité sur votre profil.</p>
                      </div>
                      <form method="POST" class="swiper-slide optionUserMenu allSettigns" id="modificationInfos">
                                <div  class="connexionForm">
                                    <div class="textDemonstrationInscription">D'après les normes de NewaRnet,pour que votre requête soit prise en compte Entrez votre mot de passe </div>
                                    <div class="InputDouble">
                                        <div class="containeurInputStyle">
                                            <input type="text" name="nom"  placeholder="Modifier ton Nom"value="<?php echo decrypt($detail_user['nom'],$key) ?>">
                                        </div>
                                        <div class="containeurInputStyle">
                                            <input type="text" name="prenom"  value="<?php echo decrypt($detail_user['prenom'],$key) ?>">
                                        </div>
                                    </div>
                                    <div class="containeurInputStyle">
                                        <input type="text" name="Profession"  placeholder="Quelle est ta profession ?" value="<?php echo decrypt($detail_user['profession'],$key) ?>">
                                    </div>
                                    <div class="containeurInputStyle">
                                        <input type="text" name="bio"   placeholder="Écris un peu ta biographie" value="<?php echo decrypt($detail_user['bio'],$key) ?>">
                                    </div>
                                    <div class="InputDouble">
                                      <div class="containeurInputStyle">
                                          <input type="text" name="email"  value="<?php echo decrypt($detail_user['email'],$key) ?>">
                                      </div>
                                      <select class="containeurInputStyle" name="statutMatrimonial">
                                        <option value="C'est compliqué">C'est compliqué</option>
                                        <option value="Célibataire">Célibataire</option>
                                        <option value="Marié(e)">Marié(e)</option>
                                        <option value="Divorcé(e)">Divorcé(e)</option>
                                        <option value="Veuf/Veuve">Veuf/Veuve</option>
                                        <option value="En couple">En couple</option>
                                        <option value="Séparé(e)">Séparé(e)</option>
                                        <option value="Union libre">Union libre</option>
                                        <option value="En relation ouverte">En relation ouverte</option>
                                        <option value="Partenaire de vie">Partenaire de vie</option>
                                    </select>
                                  </div>
                                  <div class="textEplaza">Thème de ma page</div>
                                  <select class="containeurInputStyle"  onchange="selectMode(this.value)">
                                      <option value="Mode sombre" id="sunFonction">Mode sombre</option>
                                      <option value="Mode clair" id="darkFonction">Mode clair</option>
                                  </select>

                                <div class="textEplaza">Qui peut me voir en ligne ?</div>
                                  <select class="containeurInputStyle" name="online">
                                    <option value="Mode clair"value="amis">Mes amies</option>
                                    <option value="Mode sombre" value="suivis">Mes Suivis</option>
                                    <option value="Mode clair" value="personne">personne</option>
                                </select>
                                <div class="textEplaza">Qui peut visionner mes détails et consulter mon profil ?</div>
                                  <select class="containeurInputStyle" name="profile">
                                    <option value="Mode sombre" value="tous">Tout le monde</option>
                                    <option value="Mode clair"value="amis">Mes amies</option>
                                    <option value="Mode clair" value="moi">Seulement moi</option>
                                </select>
                                <div class="textEplaza">Activer la réception des notifications ePlaza</div>
                                <div class="InputDouble selection">
                                  <div class="containeurInputStyle genre"><input checked type="radio" name="vue_eplaza"checked value="activer"> <span>Activer</span></div>
                                  <div class="containeurInputStyle genre"><input type="radio" name="vue_eplaza" value="desactive"> <span>desactiver</span></div>
                              </div>
                              <div class="textEplaza">Qui sera informé de mes activités et publications ?</div>
                                <div class="InputDouble selection" >
                                  <div class="containeurInputStyle genre"><input type="radio" name="vues" value="amis" checked> <span>Amie(e)s</span></div>
                                  <div class="containeurInputStyle genre"><input checked type="radio" name="vues" value="suivi"> <span>suivi(e)s</span></div>
                              </div>
                              <div class="erreurMessage"></div>
                                    <div class="boutonOnlymobile suivant" onclick="Modification(event)">Engrestre ces modifications</div>
                               </div>
                          </form>
        <div class="swiper-slide">Slide 5</div>
        </div>
       
        <div class="swiper-pagination"></div>
    </div>
 <!-- <script src="../Javascripts/refusActions.js"></script> -->
 <script src="../Javascripts/actionLoadingHome.js"></script>
    <script src="../Javascripts/loadingPage.js"></script>
    <script src="../Javascripts/stylepage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../Javascripts/bib.js"></script>
    <script src="../Javascripts/fonctionsAccueil.js"></script>
    <script src="../Javascripts/HomeStructure.js"></script>
    <script src="../Ajax_Functions/functionAjax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  function DecalerLeft(event)
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
        document.querySelector('.BoutonsRetoure.add.new').style.display = 'flex';
        let page = "ModificationProfile.php";
        let form = document.querySelector("#ModificationProfile");
          function callback(data)
          {
            if(data.trim() !== 'true')
            {
              //alert("Selectionner une autre image pas celle-ci");
              console.log(data);
              document.querySelector('.BoutonsRetoure.add.new').style.display = 'none';
            }

            
          }
          functionAjax(page, form, callback);
      }
      
    };

    reader.readAsDataURL(fileInput.files[0]);
  }
}
</script>
  </body>
</html>
