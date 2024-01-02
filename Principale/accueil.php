<?php
include("otherPrincipale.php");
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
    <link rel="shortcut icon"href="../images/Logo.png"type="image/jpeg"style="width: 300px; height: 300px"/>
    <title>NewaRnet</title>
    <style>
      .photoamis img{
        width:100%;
        height:100%;
        object-fit:cover;
        border-radius:5px;
      }
.allContente{
  width: 100%;
  height: 100%;
  overflow: hidden;
  position: relative;
  display: flex;
  z-index:1;
}
.swiper-wrapper.menuDroiteAll{
  background:var(--color-blanche-1);
  border-radius: 5px;
  height:100vh;
}
span.notification_counteur.active{
  position: absolute;
  width: 25px;
  height: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  color:#FFF;
  font-size: 10px;
  border-radius: 50%;
  background: var(--color-red-1);
  top:-15px;
  border:1px  solid var(--color-blanche-2);
  left:-15px;
}
#invitationDroite span.notification_counteur.active{
  position: absolute;
  width: 30px;
  height: 30px;
  border-radius:5px;
  right:100%;
  left:90%;
  top:-10px;
}
.confirmeBtn.boutonAdmettre.ajouter.attente i{
  color:#FFF;
}
.supprimerBtn.boutonAdmettre.suivre.supresion{
  background:#b45e62;
  color:#FFF;
  border:none;
}
.confirmeBtn.boutonAdmettre.ajouter.attente{
  background:#4d536a;
  color:#FFF;
  border:none;
}
#invitationDroite{
  position:relative;
}
    </style>
  </head>
  <body>
  <div class="allContente">
<div class="containeurTous">
      <!-- nav_session -->
      <nav>
        <div class="rightnav">
          <div class="iconsNav">
            <h3 class="titre_animation accueil interd">NewaRnet</h3>
            <!-- les icones pour le thème -->
            <div class="iconDiv" onclick="sunFunction()" id="darkFonction"><i class="fa-solid fa-moon" onclick="sunFunction(event)" id="darkFonction"></i></div>
            <div class="iconDiv"onclick="darkFunction()" id="sunFonction"><i class="fa-solid fa-sun"onclick="sunFunction(event)" id="sunFonction"></i></div>
          </div>
        </div>
          <div class="leftnav"> 
            <i class="fa-solid fa-ellipsis-vertical"></i><i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher un NewaRnaute..." oninput="RecherCherNewaRnaute(event)">
        </div>
      </nav>
      <!-- Debut_main -->
      <main>
        
        <!-- cote_gauche_des_icons -->
        <div class="leftmain swiper mySwiper">
          <div class="swiper-wrapper leftOption">
                      <div class="swiper-slide sesionOption">
                        <div class="iconcontainerOption" onclick="HommePrinciplae()">
                          <i class="fa-solid fa-home"></i>Accueil
                        </div>
                        <div class="iconcontainerOption" onclick="NotificationSide()">
                          <i class="fa-solid fa-bell"><span class="notification_counteur"></span></i>Notifications
                        </div>
                        <div class="iconcontainerOption" onclick="MessageSide()">
                          <i class="fa-solid fa-message"><span class="notification_counteur"></span></i>Message
                        </div>
                        <a href="Profile.php" class="iconcontainerOption">
                          <i class="fa-solid fa-user"></i>Profil
                        </a>
                        <a href="eplaza.php" class="iconcontainerOption">
                          <i class="fa-solid fa-store"><span class="notification_counteur"></span></i>ePlaza Market
                        </a>
                        <div class="iconcontainerOption" onclick="Suivies()">
                          <i class="fa-solid fa-users"></i>Suivi(e)s
                        </div>
                        <div class="iconcontainerOption" onclick="Suivies()">
                          <i class="fa-solid fa-users"><span class="notification_counteur"></span></i>Demande D'Ami(e)
                        </div>
                        <div class="iconcontainerOption" onclick="BoutiquesHOmes()">
                          <i class="fa-solid fa-bullhorn"></i>Boutiques ePlaza
                        </div>
                        <a href="logout.php" class="iconcontainerOption">
                          <i class="fa-solid fa-right-from-bracket"></i>Se déconnecter
                        </a>
                      </div>
                      <div class="swiper-slide sliderLeft">
                        <div class="conversationHomePage">
                          <button class="BoutonsRetoure" onclick="TurnBack()"><i class="fa-solid fa-arrow-left"></i> Retournez au Principal</button>
                          <div class="SearchMessage creationGroupe">
                            <input type="search" name="" id="" placeholder="Trouver un(e) Ami(e)">
                          </div>
                          
                          <div class="carterPrinciplale">
                              <!-- Friends seaech -->
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <button class="BoutonsRetoure" onclick="TurnBack()"><i class="fa-solid fa-arrow-left"></i> Retournez au Principal</button>
                        <form action="" method="post" class="PostArticleForm">
                          <input type="file" name="image" id="imagestory" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event,'imageStory')">
                          <label for="imagestory" class="carterPostStory other" id="imageStory">
                            <i class="fa-solid fa-plus"></i>
                            <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
                          </label>
                          <select class="btn" name="temps">
                            <option value="">Temps pour ce Story</option>
                            <option value="30">30 Minutes d'apparition</option>
                            <option value="1">1 heures d'apparition</option>
                            <option value="6">6 heures d'apparition</option>
                            <option value="12">12 heures d'apparition</option>
                            <option value="24">12 heures d'apparition</option>
                          </select>
                        </form>
                        <div class="BoutonsRetoure add">Ajouter sur Story</div>
                      </div>
                      <div class="swiper-slide">
                        <button class="BoutonsRetoure" onclick="TurnBack()"><i class="fa-solid fa-arrow-left"></i> Retournez au Principal</button>
                        <form action="" method="post" enctype="multipart/form-data" class="PostArticleForm" id="ModificationProfile">
                          <input type="file" name="ProfilePhoto" id="imageProfieutilisateur" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event, 'imageprofil')">
                          <label for="imageProfieutilisateur" class="carterPostStory profile_cover other" id="imageprofil">
                          <img src="<?php echo  $profile?>" alt="">
                          <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
                          </label>                  
                      </form>
                        <div class="BoutonsRetoure add" onclick="ChangerProfile(event)" id="Profile">Modifier mon Profile</div>
                        <p class="Text_Norme">Cette photo offre aux NewaRnautes une première impression visuelle de votre personnalité sur votre profil.</p>
                      </div>
                      <div class="swiper-slide">
                        <button class="BoutonsRetoure" onclick="TurnBack()"><i class="fa-solid fa-arrow-left"></i> Retournez au Principal</button>
                        <form action="" method="post" enctype="multipart/form-data"  class="PostArticleForm" id="Modificationcouverture">
                          <input type="file" name="couvertureImage" id="imagecouvert" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event,'imagecouverture')">
                          <label for="imagecouvert" class="carterPostStory profile_cover other" id="imagecouverture">
                              <img src="<?php echo  $couverture?>" alt="">
                            <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
                          </label>
                        </form>
                        <div class="BoutonsRetoure add"onclick="ChangerCouvrture(event)">Modifier Ma couverture</div>
                        <p class="Text_Norme">cette photo donne aux visiteurs une première impression visuelle de votre personnalité sur ton Profile</p>
                      </div>
                      <div class="swiper-slide">
                  <button class="BoutonsRetoure" onclick="TurnBack()"><i class="fa-solid fa-arrow-left"></i> Retournez au Principal</button>
                <form action="" method="post" class="PostArticleForm">
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper CreationGroupe">
                      <div class="swiper-slide groupesideCreation">
                        <div class="leftnav groupeCreation"> 
                            <input type="text" name=""id=""placeholder="Entrer le nom du Groupe">
                      </div>
                      <div class="suivantBoutonsGroupe"onclick="SuivantGroupeCreation()">Continuer<i class="fa-solid fa-arrow-right"></i></div>
                        <div class="SearchMessage creationGroupe"><input type="search" name="" id="" placeholder="Qui ajouter dans ce Groupe ?"></div>
                          <!-- Frinds-select -->
                      </div>
                      <div class="swiper-slide">
                        <input type="file" name="image" id="imageGroup" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event, 'imagegroupe')">
                        <label for="imageGroup" class="carterPostStory other" id="imagegroupe"><i class="fa-solid fa-image"></i></label>
                      </form>
                      <div class="BoutonsRetoure add">Créer ce groupe</div>
                      <p class="Text_Norme">Vous assumerez le rôle d'admin direct dans ce groupe, en accord avec les normes  de NewaRnet.</p>
                      </div>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
          <div class="menuTopLeftBouton"onclick="FunctionMoreOption()">
            <i class="fa-solid fa-plus"></i>
            <div class="menuToogleMore">
              <div class="menuOptionBottom">
                <div class="optionMenuHome" onclick="NewConversation()"><i class="fa-solid fa-message"></i>Nouvelle Conversation</div>
                <div class="optionMenuHome"onclick="PostStory()"> <i class="fa-solid fa-circle-half-stroke"></i> Ajouter une Story</div>
                <div class="optionMenuHome"onclick="ProfilEdite()"><i class="fa-solid fa-user-gear"></i>Modifier Ton Profile</div>
                <div class="optionMenuHome"onclick="CouvertureEdite()"><i class="fa-solid fa-user-gear"></i>Modifier Ta Couverture</div>
                <div class="optionMenuHome"onclick="CreatGroupe()"><i class="fa-solid fa-user-group"></i>Creer Un Groupe</div>
                <a class="optionMenuHome" href="#"><i class="fa-solid fa-user"></i>Afficher mon Profile </a>
              </div>
            </div>
          </div>
        </div>
        <!-- la partie_centrale -->
        <div class="centre_session">
          <!-- postSesion -->
          <div method="post" class="FormPost">
            <div class="formulaire">
              <div class="photoUserOwner"onclick="FunctionMoreOption()">
                <div class="imagageOwnerComp"><img src="<?php echo $profile ?>" alt=""></div>
                <span>Vous</span>
              </div>
              <div class="leftnav postSession"> 
                <i class="fa-solid fa-image" onclick="PostWidthInage()"></i><input type="text" name=""id=""placeholder="Quand dites-vous, <?php echo $nom_comple ?>" oninput="PosteChamps(event)">
            </div>
            </div>
          </div>
          <!-- division_posts -->
          <div class="swiper mySwiper other ">
            <div class="menuHomeChoix">
              <div class="optionHome active" onclick="FilActualite(event)" id="actualite">Fil d'actualités <i class="fa-solid fa-earth-africa"></i></div>
              <div class="optionHome"onclick="FilActualite(event)"id="videos">videos <i class="fa-solid fa-clapperboard"></i></div>
              <div class="optionHome"onclick="FilActualite(event)" id="Statut">Statut <i class="fa-solid fa-paste"></i></div>
              <div class="optionHome"onclick="FilActualite(event)" id="Livres">Livres <i class="fa-solid fa-book"></i></div>
            </div>
              <div class="swiper-wrapper homeSessionPost">
                <!--  Fil Actualite -->
                <div class="swiper-slide">
                   
                    <div class="PostesOnecoucher"></div>
                    <div class="textEplaza">
                      Savez-vous que ces personnes viennent tout juste d'intégrer NewaRnet récemment?
                    </div>
                    <div class="swiper mySwiper other onlyScroll">
                      <div class="swiper-wrapper containerFriesProposition">
                          <!-- Friends -->
                          <?php
                          global $my_sexe;
                          global $my_id;
                          $USERS_ROWS_FIENDS = getRandomFriendsList_prefere($my_id, $my_sexe);
                          foreach($USERS_ROWS_FIENDS as $USERS_FRIENDS)
                          {
                            include("Int_Friends_1.php");
                          }
                          ?>
                      </div>
                    </div>
                    <div class="moreFrieds">voire plus <i class="fa-solid fa-caret-down"></i></div>
                    <div class="textEplaza">ePlaza est un lieu virtuel de promotion des produits avec une large diffusion dans l'écosystème NewaRnet</div>
                    <div class="swiper mySwiper other onlyScroll cartePage propositions">
                      <div class="swiper-wrapper">
                          <!-- Eplaza here -->
                    </div>
                    </div>
                  </div>
                  <!-- videosHome -->
                  <div class="swiper-slide">
                   videoSession
                  </div>
                  <!-- Statu -->
                    <div class="swiper-slide">
                      <div class="swiper mySwiper status">
                          <div class="swiper-wrapper ScrollPart">
                            <div class="swiper-slide partyOneSatus">
                               <!-- stoys_friends -->
                              <div class="leftnav status"> <i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher une Statut" oninput="RecherCherNewaRnaute(event)"></div>
                                  <!-- stories proipositions -->
                            </div>
                            <div class="swiper-slide">
                              <div class="carterPostSatut">
                                <div class="headerSatatus">
                                  <div class="" onclick="BackSatutus()"><i class="fa-solid fa-arrow-left"></i></div>
                                  <div class="carterUsermessage">
                                    <img class="userphoto statut" src="../images/785054-ecommerce-istock-020119-removebg-preview.png" alt=""></div>
                                  <div class="nameUserconversation">
                                      <h3>Jean-luc kashindihj</h3>
                                      <p>12 vues</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  <!-- books -->
                  <div class="swiper-slide boook">
                    <div class="swiper mySwiper other">
                      <div class="gridPhoto">
                        <!-- Livres here -->
                      </div>
                      </div>
                  </div>
                  <!-- Post -->
                  <div class="swiper-slide posteSide">
                    <div class="cartetPosteCreation">
                        <div class="headerPatiesPoste">
                          <span><i class="fa-solid fa-arrow-left" onclick="RetunBackCreatePoste()"></i> Creation de poste</span>
                        </div>
                        <form method="post" class="bottomSidepartiePoste">
                            <div class="leftnav postSession"> 
                              <input type="text" name="poste" id=""placeholder="Écrivez ce que vous désirez poster" oninput="PosteChamps(event)">
                          </div>
                            <div class="swiper mySwiper other posteMenu">
                              <div class="menuHomeChoix">
                                <div class="optionHome active" onclick="PosteFile(event)" id="image">Photo<i class="fa-solid fa-image"></i></div>
                                <div class="optionHome"onclick="PosteFile(event)"id="videos">videos <i class="fa-solid fa-clapperboard"></i></div>
                                <div class="optionHome"onclick="PosteFile(event)" id="document">Document<i class="fa-solid fa-file-pdf"></i></div>
                              </div>
                            <div class="swiper-wrapper homeSessionPost slidpost">
                              <input type="file" name="image" id="imagePost" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event,'imageDisplay')">
                              <input type="file" name="video" id="videomessage" hidden accept="video/*" onchange="updateLabelAndDisplay(this,event, 'videoDisplay')">
                              <input type="file" name="document" id="documents" hidden accept=".pdf, .doc, .docx, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" onchange="updateLabelAndDisplay(this,event, 'documentDisplay')"> 
                              <div class="swiper-slide">
                              <label for="imagePost" id="imageDisplay" class="carterPostStory poste">
                                  <i class="fa-solid fa-image"></i>
                                  <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
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
                            <div class="text_demos">Merci de prendre le temps de sélectionner attentivement le niveau d'intégrité approprié pour ce poste.</div>
                            <div class="InputDouble">
                              <select name="integrite" class="containeurInputStyle integrite">
                              <option value="amis">Mes ami(e)s</option>
                                <option value="moi">Moi seule</option>
                                <option value="tous">À tous les NewaRnautes</option>
                              </select>                                                           
                              <div class="containeurInputStyle poste publication" onclick="poster(event)">Publier <i class="fa-solid fa-paper-plane"></i></div>
                          </div>
                        </form>
                    </div>
                  </div>
              </div>
          </div>
          <!--FIN division_posts -->
        </div>
        <!-- la partie_Droite -->
      <div class="droite_session">
        <div class="swiper mySwiper other">
          <div class="swiper-wrapper menuDroiteAll">
            <div class="swiper-slide droiteSession">
              <div class="headerSesionRight">
                <div class="swiper mySwiper other  onlyScroll cartePage propositions">
                  <div class="swiper-wrapper friendsOnline">
                     <!-- heder-Js -->
                </div>
                </div>
                <div class="menuRight">
                  <div class="Amis menuOptionRight active"onclick="OptionDroiteHeader(event)"id="invitationDroite">
                  <?php
                      $numberInvitation = GetInvitations($my_id);
                      $numberInvitation = ($numberInvitation > 0) ? $numberInvitation : '';

                      $notification_class = ($numberInvitation !== '') ? "notification_counteur active" : "notification_counteur";
                      ?>

                      <?php if ($numberInvitation !== ''): ?>
                          Invitations<span class="<?php echo $notification_class ?>"><?php echo $numberInvitation ?></span> <i class="fa-solid fa-envelope-open-text"></i>
                      <?php else: ?>
                          Invitations<i class="fa-solid fa-envelope-open-text"></i>
                      <?php endif; ?>
                  </div>
                  <div class="Suivis menuOptionRight" onclick="OptionDroiteHeader(event)"id="amisDroite" y="<?php echo  encrypt($my_id,$key)?>">
                    Amis <i class="fa-solid fa-users"></i>
                  </div>
                  <div class="Suivis menuOptionRight"onclick="OptionDroiteHeader(event)" id="groupeDroite">
                    <i class="fa-solid fa-user-group"></i>Groupe
                  </div>
                </div>
                <div class="swiper mySwiper  MenuHome">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <?php 
                      global $my_id;
                        $Invitatons = Mesinvitations($my_id);
                        if($Invitatons)
                        {
                          echo"<div class='textCent'> Des NewaRnautes vous invitent à une amitié sur NewaRnet. En connaissez-vous un(e)?</div>";
                          foreach($Invitatons as $USERS_ROW_INVITATION)
                          {
                            global $key;
                            global $user;
                            $USERS_ROW =  $user->get_user($USERS_ROW_INVITATION['userid']);
                            include("int_invitationsUser.php");
                          }
                          echo '<hr class="ligne">';
                        }
                        
                      ?>
                        <!-- Demmade d'amis -->
                        
                        <div class="textCent">Pour obtenir davantage de contenu, veuillez ajouter plusieurs amis.</div>
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
                      <!-- Friends -->
                      <div class="swiper-slide usersAfficher">
                        <div class="textCenter"><h3>Avec ces amis, vous pouvez discuter et les intégrer dans des groupes.</h3></div>
                          <!-- mes amis -->
                            <div class="mesAmisListe"></div>
                          <div class="menuUsers">
                            <div class="menuOptionusers"onclick="MessageSide()">
                              <i class="fa-solid fa-message" ></i> Nouveau Message
                            </div>
                            <div class="menuOptionusers">
                              <i class="fa-solid fa-user-plus"></i> Ajouter dans un Groupe
                            </div>
                            <div class="menuOptionusers">
                              <i class="fa-solid fa-address-card"></i>Son Profile
                            </div>
                          </div>
                      </div>
                      <!-- Groupes -->
                      <div class="swiper-slide">
                        <div class="textCenteNotification">
                          <div class="returnBtn"onclick="OptionDroiteHeader(event)"id="invitationDroite"><i class="fa-solid fa-arrow-left"></i> Retourner</div>
                          <h3>Groupe<i class="fa-solid fa-users"></i></h3>
                        </div>
                        <div class="SearchMessage creationGroupe notification">
                          <i class="fa-solid fa-magnifying-glass"></i><input type="search" name="" id="" placeholder="Rechercher...">
                        </div>
                         <!-- Mes groupes  here-->
                      </div>
                      <!-- suivis -->
                      <div class="swiper-slide">
                          <div class="textCenter"><h3>Vous êtes suivi(e) par ces personnes sur NewaRnet</h3></div>
                              <!-- Int suivis -->
                        </div>
                        <!-- fin_left slide -->
                    </div>
                    
                  </div>
            </div>
        </div>
         <!-- sms -->
         <div class="swiper-slide sms">
          <div class="textCenteNotification">
            <div class="returnBtn"onclick="HommePrinciplae()"><i class="fa-solid fa-arrow-left"></i> Retourner</div>
            <h3>Messages<i class="fa-solid fa-message"></i></h3>
          </div>
          <div class="SearchMessage creationGroupe notification">
            <i class="fa-solid fa-magnifying-glass"></i><input type="search" name="" id="" placeholder="Rechercher...">
          </div>
                <!-- conversation here -->
        </div>
        <!-- Notification -->
        <div class="swiper-slide">
          <div class="swiper-slide notif">
            <div class="textCenteNotification">
              <div class="returnBtn"onclick="HommePrinciplae()"><i class="fa-solid fa-arrow-left"></i> Retourner</div>
              <h3>Notifications <i class="fa-solid fa-bell"></i></h3>
            </div>
            <div class="SearchMessage creationGroupe notification">
              <i class="fa-solid fa-magnifying-glass"></i><input type="search" name="" id="" placeholder="Rechercher...">
            </div>
              <!-- Notifications here -->
          </div>
        </div>
        <!-- Rechercher -->
        <div class="swiper-slide">
          <div class="containeurData">
            <!-- Recherche user -->
           <div class="Faux-contacte">
             <?php include("FauxContenusSearch.php") ?>
           </div>
           </div>
        </div>
          <!-- Boutiques -->
        </div>
      </main>
      <!-- fint_main -->
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
    <script>
     var swiper = new Swiper(".swiper.mySwiper.MenuHome", {
        allowSlideNext: false,
        allowSlidePrev: false,
        allowTouchMove: false,
      });
        var swiper = new Swiper(".mySwiper.other.onlyScroll", {
      slidesPerView: 1,
      spaceBetween: 0,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    function Confirmer(event)
      {
        const element = event.currentTarget; 
        element.innerHTML = `...`;
        const page = "confirmation.php";
        let value = element.getAttribute('owner');
        function callback(data) {
          if(data.trim() =='true')
          {
            element.innerHTML = `déjà ami(e)`;
          }else{
            alert(data);
          }
        }
        sendValueAjax(page, value, callback);
      }
      function supprimerInvitation(event)
      {
        const element = event.currentTarget; 
        element.innerHTML = `...`;
        const page = "confirmation.php";
        let value = element.getAttribute('owner');
        function callback(data) {
            if(data.trim() =='true')
            {
              element.innerHTML = 'supprimeé(e)';
            }else{
              alert(data);
            }
        }
        sendValueAjax(page, value, callback);
      }
  function ChargementFriends(id)
  {
    
    document.querySelector(".mesAmisListe").innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">Encours...</span><div class="loading interd"></div></div>`;
    let page = "readFriends.php";
    let value = id;
    function callback(data) {
      document.querySelector(".mesAmisListe").innerHTML = data;
      }
      sendValueAjax(page, value, callback);
  } 
  </script>
 
  </body>
</html>
