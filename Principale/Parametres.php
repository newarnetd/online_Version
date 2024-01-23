<?php
include("otherPrincipale.php");
if(($detail_user['ver_profile'] !== 0))
{
  header("Location: ../Principale/accueil.php");
}
authentification(decrypt($_SESSION['ownerConnected'],$key));

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
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
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
.SuivantBoutonNewUserCursor button{
padding:15px;
width:50%;
background:var(--color-primary);
margin:5px auto;
color:#FFF;
box-shadow:var(--boxshadow_section_blanche);
border-radius:5px;
cursor:pointer !important;
display:flex;align-items:center;
justify-content:center;
width:60px;
height:60px;
border-radius:50%
}
.SuivantBoutonNewUserCursor{
    position:absolute;
    bottom:5px;
    display:flex;
    align-items:center;
    right:10px;
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
                <span><?php echo $my_passion ?></span>
            </div>
        </div>
        <div class="InputDouble inputs"onclick="deplacementFuntion(event)" id="tree">
            <button>Compléter mon Profil <i class="fa-solid fa-pen-to-square"></i></button>  
        </div>
        <p class="textEplaza">Bienvenue sur NewaRnet ! Merci pour votre première visite. Explorez davantage de contenus en vous abonnant à des genres qui vous intéressent et en ajoutant des membres comme amis.</p>
        <div class="SuivantBoutonNewUserCursor" onclick="deplacementFuntion(event)" id="one">
          <button><i class="fa-solid fa-arrow-right"></i></button>
        </div>
        </div>
        <div class="swiper-slide">
        <div class="SuivantBoutonNewUserCursor" onclick="deplacementFuntion(event)" id="two">
          <button><i class="fa-solid fa-arrow-right"></i></button>
        </div>
        <div class="leftnav FrinedsNew"> 
        <i class="fa-solid fa-magnifying-glass"></i><input type="search" name="search" id="search" placeholder="Rechercher un NewaRnaute..." oninput="searchUser(event,'ParametreUsersRech.php','datausersFriends')">
        </div>        
        <h3 class="textAjouterFriends">Ajoutez au moins 5 amis pour bénéficier d'un accès élargi à notre contenu.</h3>
        <hr classe="ligneBottom">
          <div id="datausersFriends">
          <?php
                global $my_id;
                $USERS_ROWS = PropositionAmis($my_id);
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
                          <input type="file" name="ProfilePhoto" id="imageProfieutilisateur" hidden accept="image/*" onchange="updateLabelAndDisplayParamettre(this,event, 'imageprofil')">
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
                        <div class="BoutonsRetoure add new" onclick="deplacementFuntion(event)" id="GoPageProfile">suivant <i class="fa-solid fa-arrow-right"></i></div>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- <script src="../Javascripts/refusActions.js"></script> -->
    <script src="../Javascripts/actionLoadingHome.js"></script>
    <script src="../Javascripts/loadingPage.js"></script>
    <script src="../Javascripts/stylepage.js"></script>
    <script src="../Javascripts/bib.js"></script>
    <script src="../Javascripts/fonctionsAccueil.js"></script>
    <script src="../Javascripts/HomeStructure.js"></script>
    <script src="../Javascripts/parametresPageStye.js"></script>
    <script src="../Ajax_Functions/functionAjax.js"></script>

  </body>
</html>
