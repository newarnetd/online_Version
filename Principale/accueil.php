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
    <meta charset="UTF-8" />
    <script src="../detecteur/Desk_window.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:site_name" content="NewaRnet">
    <meta property="og:tittle" content="NewaRnet en tant que réseau social mégastucture axé sur Internet pour Tous avec la phrase clé It's time for Africa">
    <meta property="og:description" content="Il est temps pour notre génération maintenant">
    <meta property="og:image" content="../favicon_io/favicon-32x32.png" itemprop="image">
    <meta property="og:url" content="https://newarnet.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../Styles/styleCommun.css" />
    <link rel="stylesheet" href="../Styles/commentaire.css">
    <link rel="stylesheet" href="../Styles/index.css">
    <link rel="stylesheet" href="../Styles/eplaza.css">
    <!-- added  links 17/Janvier/-->
    <link rel="stylesheet" href="../mobile_style/accueil.css">
    <link rel="stylesheet" href="../mobile_style/style_messagePage.css">
    <!-- added  links 17/Janvier/-->
    <link rel="stylesheet" href="../Styles/style_accueil.css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>NewaRnet</title>
  </head>
  <body>
  <div class="commentaireSession">
    <div class="carterCommentaireHomepage">
      <div class="EntetePoste">
        <div class="leftSideComment"onclick="fermeturePost()">
          <i class="fa-solid fa-arrow-left"></i>
        </div>
          <div class="rightSideOption">
          </div>

      </div>
        <div class="carterPosteCoprCommentaire">
          <div class="mereAnimationclique" style="margin:10px"><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary);width: 40px;height:40px"></div></div>
        </div>
      <div class="bottomPoste">
          <form method = "POST" id="PostCommentHomepage" class="sessionInput">
          <div class="leftnav"> 
          <div class="iconeSendComm" onclick="sendComment()"><i class="fa-solid fa-arrow-up"></i></div>
          <input type="text" name="postid" id="postidValue" hidden>
          <input type="text" name="commentaire" id="commentaire" placeholder="Ecrivez votre commentaire ..."oninput="CommenterPoster(event)">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="barrScrolle"><div></div></div>
  <div class="contaneurImage">
    <div class="photoImage"><img src="../images/0000000000000000.png" class=""></div>
    <span>Internet pour Tous</span>
  </div>
  <div class="photoSeen">
    <div class="cartetImageSeen">
      <div class="headerCartetSeenImage">
      <i class="fa-solid fa-download" onclick="Download()"></i>
      <i class="fa-solid fa-xmark" onclick="CancelShw()"></i>
      </div>
      <div class="imageSwo"><img src="../images/Af-1 (8).jpg" alt=""></div>
    </div>
  </div>
  <div class="ConteneurToutepage">
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
            </i><i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher un NewaRnaute..." oninput="RecherCherNewaRnaute(event)">
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
                                            <?php
                        $notificationCount = countNotifications($my_id);
                    ?>
                    <?php if ($notificationCount > 0): ?>
                        <div class="iconcontainerOption" onclick="NotificationSide()">
                            <i class="fa-solid fa-bell">
                                <span class="notification_counteur active">
                                    <?php echo $notificationCount; ?>
                                </span>
                            </i>
                            Notifications
                        </div>
                    <?php else: ?>
                        <div class="iconcontainerOption" onclick="NotificationSide()">
                            <i class="fa-solid fa-bell"></i>
                            Notifications
                        </div>
                    <?php endif; ?>
                    <?php
                        $MessageCount = countMessageseen($my_id);
                    ?>
                    <?php if ($MessageCount > 0): ?>
                      <div class="iconcontainerOption" onclick="MessageSide()">
                      <i class="fa-solid fa-message">
                                <span class="notification_counteur active">
                                    <?php echo $MessageCount; ?>
                                </span>
                            </i>
                            Message
                        </div>
                    <?php else: ?>
                      <div class="iconcontainerOption" onclick="MessageSide()">
                        <i class="fa-solid fa-message"><span class="notification_counteur"></span></i>Message
                      </div>
                    <?php endif; ?>
                        <div class="iconcontainerOption" y="<?php echo encrypt($my_id,$key) ?>" onclick="ProfileHomepage(event)">
                        <i class="fa-solid fa-user-shield"></i>Mon compte
                        </div>
                        <a href="eplaza.php" class="iconcontainerOption">
                          <i class="fa-solid fa-store"><span class="notification_counteur"></span></i>ePlaza Market
                        </a>
                        <div href="Profile.php" class="iconcontainerOption"onclick="MoreEplazaArticlesHomPage()">
                        <i class="fa-solid fa-bag-shopping"></i>Articles eplaza
                        </div>
                        <div class="iconcontainerOption" y="<?php echo encrypt($my_id,$key) ?>" onclick="AlbumPhotoHomPage(event)">
                            <i class="fas fa-images"></i> Galerie
                      </div>
                      <div class="iconcontainerOption" onclick="NiandaChat()">
                        <i class="fa-solid fa-robot"></i>Assistante Nianda
                        </div>
                        <a href="logout.php" class="iconcontainerOption">
                          <i class="fa-solid fa-right-from-bracket"></i>Se déconnecter
                        </a>
                      </div>
                      <div class="swiper-slide sliderLeft">
                        <div class="conversationHomePage">
                          <button class="BoutonsRetoure" onclick="TurnBack()"><i class="fa-solid fa-arrow-left"></i> Retournez au Principal</button>
                          <div class="SearchMessage creationGroupe">
                            <input type="search" name=""  placeholder="Trouver un(e) Ami(e)...">
                          </div>
                          <div class="carterPrinciplale">
                              
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <button class="BoutonsRetoure" onclick="TurnBack()"><i class="fa-solid fa-arrow-left"></i> Retournez au Principal</button>
                        <form action="" method="post" enctype="multipart/form-data" class="PostArticleForm" id="PostFormStory">
                          <input type="file" name="image" id="imagestory" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event,'imageStory')">
                          <label for="imagestory" class="carterPostStory other" id="imageStory">
                            <i class="fa-solid fa-plus"></i>
                            <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
                          </label>
                          <select class="btn timeSelecte" name="temps">
                            <option value="30">30 Minutes d'apparition</option>
                            <option value="1">1 heures d'apparition</option>
                            <option value="6">6 heures d'apparition</option>
                            <option value="12">12 heures d'apparition</option>
                            <option value="24">24 heures d'apparition</option>
                          </select>
                        </form>
                        <div class="erreurImagesStory Text_Norme"></div>
                        <div class="BoutonsRetoure add storyAddBtn" onclick="addStory(event)">Ajouter sur Story</div>
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
                        <div class="BoutonsRetoure add profilePhotoAdd" onclick="ChangerProfile(event)" id="Profile">Modifier mon Profile</div>
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
                        <div class="BoutonsRetoure add modificationPhotociover"onclick="ChangerCouvrture(event)">Modifier Ma couverture</div>
                        <p class="Text_Norme">cette photo donne aux visiteurs une première impression visuelle de votre personnalité sur ton Profile</p>
                      </div>
              <div class="swiper-slide">
                  <button class="BoutonsRetoure" onclick="TurnBack()"><i class="fa-solid fa-arrow-left"></i> Retournez au Principal</button>
                <form action="" method="post" class="PostArticleForm" id="CreationGroupeFormule">
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper CreationGroupe">
                      <div class="swiper-slide groupesideCreation">
                        <div class="leftnav groupeCreation"> 
                            <input type="text" name="name_groupe"id=""placeholder="Entrer le nom du Groupe">
                      </div>
                      <div class="suivantBoutonsGroupe"onclick="SuivantGroupeCreation()">Continuer<i class="fa-solid fa-arrow-right"></i></div>
                        <div class="SearchMessage creationGroupe"><input type="search" name="" id="" placeholder="Qui ajouter dans ce Groupe ?" oninput="searchUser(event, 'RechercherAmis.php', 'FrinedsGroupesAdd')"></div>
                          <!-- Frinds-select -->
                          <div id="FrinedsGroupesAdd"></div>
                      </div>
                      <div class="swiper-slide">
                        <input type="file" name="image" id="imageGroup" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event, 'imagegroupe')">
                        <label for="imageGroup" class="carterPostStory other" id="imagegroupe"><i class="fa-solid fa-image"></i></label>
                      </form>
                      <div class="BoutonsRetoure add createAddBtn" onclick="GroupeNew(event)">Créer ce groupe</div>
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
                <div class="optionMenuHome" y="<?php echo  encrypt($my_id,$key)?>" onclick="NewConversation(event)"><i class="fa-solid fa-message"></i>Nouvelle Conversation</div>
                <div class="optionMenuHome"onclick="PostStory()"> <i class="fa-solid fa-circle-half-stroke"></i> Ajouter un statut</div>
                <div class="optionMenuHome"onclick="ProfilEdite()"><i class="fa-solid fa-user-gear"></i>Editer photo de Profile</div>
                <div class="optionMenuHome"onclick="CouvertureEdite()"><i class="fa-solid fa-user-gear"></i>Editer photo de Couverture</div>
                <div class="optionMenuHome" y="<?php echo  encrypt($my_id,$key)?>"onclick="CreatGroupe(event)"><i class="fa-solid fa-user-group"></i>Créer un groupe</div>
                <div class="optionMenuHome" onclick="Suivies(event)" y="<?php global $my_id; echo encrypt($my_id,$key) ?>"><i class="fa-solid fa-user"></i>Afficher Mes suivis </div>
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
                  <?php include("fil_Actualite.php") ?>
          </div>
          <!--FIN division_posts -->
        </div>
        <!-- la partie_Droite -->
      <div class="droite_session">
        <div class="swiper mySwiper other">
          <div class="swiper-wrapper menuDroiteAll">
            <div class="swiper-slide droiteSession">
              <div class="headerSesionRight">
              <div class="divText"><span>suggestion pour vous</span><span onclick="MoreEplazaArticlesHomPage()">voir Articles <i class="fa-solid fa-caret-down"></i></span></div>
                  <div class="eplazaPromotion">
                  <div class="swiper mySwiper eplazaProposition">
                      <div class="swiper-wrapper">
                        <?php
                          $PropositionBoutique = PropositionBoutiques();
                          if($PropositionBoutique)
                          {
                            foreach($PropositionBoutique as $dataBoutique)
                            {
                                include("PromotionEplaza.php");
                            }
                          }else{

                            echo '<div class="swiper-slide">
                          <div class="headerTopEplazaMarket"></div>
                          <div class="bottomePlazaMarket promotioEplaza">
                            <button>Sabonner</button>
                          </div>
                        </div>';
                          }
                        ?>

                      </div>
                      <div class="swiper-pagination"></div>
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
                  <div class="Suivis menuOptionRight" onclick="OptionDroiteHeader(event)"id="amisDroite" y="<?php echo encrypt($my_id,$key)?>">
                    Amis <i class="fa-solid fa-users"></i>
                  </div>
                  <div class="Suivis menuOptionRight"onclick="OptionDroiteHeader(event)" id="groupeDroite" y="<?php echo encrypt($my_id,$key)?>">
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
                        global $user;
                        $USERS_ROWSFriends = $user->Mesamis($my_id, "amis");
                        
                        if ($USERS_ROWSFriends) {
                            $FriendsIds = array();
                        
                            foreach ($USERS_ROWSFriends as $DataFriends) {
                                $FriendsIds[] = $DataFriends['userid'];
                            }
                        
                            $sql = "SELECT * FROM users
                                    WHERE userid != ? 
                                    AND userid NOT IN (" . implode(',', array_fill(0, count($FriendsIds), '?')) . ")
                                    ORDER BY RAND() LIMIT $limite";
                        
                            $params = array_merge([$my_id], $FriendsIds);
                            $USERS_ROWS = $DB->read($sql, $params);
                        
                            if ($USERS_ROWS) {
                                foreach ($USERS_ROWS as $USERS_ROW) {
                                  include("int_Friends_Add.php");
                                }
                            }
                        } else {
                            $sql = "SELECT * FROM users
                                    WHERE userid != ? ORDER BY RAND() LIMIT $limite";
                            $USERS_ROWS = $DB->read($sql, [$my_id]);
                        
                            if ($USERS_ROWS) {
                                foreach ($USERS_ROWS as $USERS_ROW) {
                                  include("int_Friends_Add.php");
                                }
                            }
                        }
                        
                        ?>
                    </div>
                      <!-- Friends -->
                      <div class="swiper-slide usersAfficher">
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
                        <div class="textCenteNotification groupe">
                          <div class="returnBtn"onclick="OptionDroiteHeader(event)"id="invitationDroite"><i class="fa-solid fa-arrow-left"></i> Retourner</div>
                          <h3><i class="fa-solid fa-users"></i></h3>
                        </div>
                        <div class="SearchMessage creationGroupe notification">
                          <i class="fa-solid fa-magnifying-glass"></i><input type="search" name="" id="" placeholder="Rechercher..."oninput="searchUser(event, 'RechercherMesGroupe.php', 'MesGroupeofUser')">
                        </div>
                         <div id="MesGroupeofUser"></div>
                      </div>
                      <!-- suivis -->
                      <div class="swiper-slide">
                         <div class="ListeSuivi"></div>
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
            <i class="fa-solid fa-magnifying-glass"></i><input type="search" name="" id="" placeholder="Rechercher..." oninput="RecherMessages(event)">
          </div>
                <!-- conversation here -->
                <div class="dataConversationsAll">
                <div class="mereAnimationclique"><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary);width: 40px;height:40px"></div></div>
              </div>
        </div>
        <!-- Notification -->
        <div class="swiper-slide">
          <div class="swiper-slide notif">
            <div class="textCenteNotification groupe">
              <div class="returnBtn"onclick="HommePrinciplae()"><i class="fa-solid fa-arrow-left"></i> Retourner</div>
              <h3>Notifications <i class="fa-solid fa-bell"></i></h3>
            </div>
              <!-- Notifications here -->
              <div class="dataNotificationAll NotificationSide">
              <div class="mereAnimationclique"><span style="color:var(--color-text)">Encours...</span><div class="loading interd" style="border: 3px solid var(--color-blanche-2);border-top:3px solid var(--color-primary)"></div></div>
              </div>
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
          <!-- MoreFriends-->
            <div class="swiper-slide">
            <div class="textCenteNotification">
              <div class="returnBtn"onclick="HommePrinciplae()"><i class="fa-solid fa-arrow-left"></i> Retourner</div>
              <h3><i class="fa-solid fa-users"></i></h3>
            </div>
            <div class="leftnav searchNav"> 
              <i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher un NewaRnaute..."oninput="searchUser(event, 'seachFriedsSpecificale.php', 'dataRechercheUserSecond')">
            </div>
            <div id="dataRechercheUserSecond">
            <div id="dataSearcheContent">
              <?php include("FauxContenusSearch.php") ?>
            </div>
           </div>
          </div>
           <!-- AlbumPhoto -->
           <div class="swiper-slide">
              <div class="dataInfosHomepage">
                <?php
                include('userInfoFaux.php');
                  ?>
              </div>
          </div>
           <div class="swiper-slide">
           <div class="tittreAlbum"><h2>Album photo NewaRnet</h2> </div>
            <div id="dataAlbum"></div>
          </div>
           <!-- AlbumPhoto -->
           <div class="swiper-slide">
           <div class="tittreAlbum"><h2>Récente mise à jour d'Eplaza Market</h2> </div>
            <div class="eplazaMarketHomepage"></div>
          </div>
          <!-- Nianda -->
           <div class="swiper-slide">
           <div class="headerTittre" >
                        <span><i class="fa-solid fa-arrow-left"onclick="HommePrinciplae()"></i></span>
                        <span>Service d'assistance avec Nianda.</span>
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <div class="containeurConversationNianda">
                        <div class="gridItemsProposition">
                          <div class="elemtentItems">comment Marche ePlaza <i class="fa-solid fa-bullhorn"></i></div>
                          <div class="elemtentItems">Pourquoi NewaRnet <i class="fa-solid fa-circle-question"></i></div>
                          <div class="elemtentItems">Lhistoire de NewaRnet <i class="fa-solid fa-circle-question"></i></div>
                          <div class="elemtentItems">Prochaines fontionalite <i class="fa-solid fa-crown"></i></div>
                        </div>
                    </div>
                <div class="contenuDataPrincipeNianda">
                    <div class="bottomCreationNianda">
                        <div class="RecherchSpace">
                            <i class="fa-solid fa-robot"></i>
                            <i class="fa-solid fa-paper-plane"></i>
                            <input type="text" name="" id="" placeholder="Une question sur NewaRnet..." oninput="AddQuestion(event)">
                        </div>
                    </div>
                </div>
          </div>

        </div>
      </main>
      <!-- fint_main -->
</div>
  <script src="../Javascripts/actionLoadingHome.js"></script>
    <script src="../Javascripts/refusActions.js"></script>
    <script src="../JQuery/funtionsLoading.js"></script>
    <script src="../Javascripts/loadingPage.js"></script>
    <script src="../Javascripts/stylepage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../Javascripts/bib.js"></script>
    <script src="../Javascripts/fonctionsAccueil.js"></script>
    <script src="../Javascripts/HomeStructure.js"></script>
    <script src="../Ajax_Functions/functionAjax.js"></script>
    <script src="../JqueryChargement/accueil.js"></script>
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
    var swiper = new Swiper(".mySwiper.PropositionAmisdesAmias", {
       slidesPerView: 1,
      spaceBetween: 0,
      freeMode: true,
     
    });
    
    var swiper = new Swiper(".eplazaProposition.mySwiper", {
      slidesPerView: 3,
      spaceBetween: 5,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
   
  </script>
  <script>
       var swiper = new Swiper(".swiper.mySwiper.profilephotoSuggestion", {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });

  </script>
  </body>
</html>
