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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Balises meta pour le partage sur les réseaux sociaux -->
    <meta property="og:title" content="NewaRnet">
    <meta property="og:description" content="NewaRnet for Africa, arborant fièrement la devise Internet pour Tous, incarne la simplicité à son apogée.">
    <meta property="og:image" content="../images/Logo.png">
    <meta property="og:url" content="https://newarnet.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../Styles/styleCommun.css" />
    <link rel="stylesheet" href="../Styles/commentaire.css">
    <link rel="stylesheet" href="../Styles/index.css">
    <link rel="stylesheet" href="../Styles/eplaza.css">
    <link rel="stylesheet" href="../Styles/style_accueil.css"/>
    <link rel="shortcut icon"href="../images/Logo.png"type="image/jpeg"style="width: 300px; height: 300px"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>NewaRnet</title>
    <style>
      .mobileMenu,.bottomMenusIcons{
        display:none;
      }
      .emotionIcons{
    box-shadow:none;
   }
      @media screen and (max-width: 480px) 
      {
        .leftmain.swiper.mySwiper,.centre_session ,.droite_session,nav .leftnav, nav .rightnav,.menuTopLeftBouton{
          display:none !important;
        }
        .photoImage{
        width:50px;height:50px;border-radius:5px;
        background:#FFF;
        margin-bottom:20px;
        overflow:hidden;
        box-shadow:var(--boxshadow_section_blanche);
        }
        .bottomMenusIcons{
          width:100%;
          height:10vh;
          position:fixed;
          bottom:0;
          display:flex;
          border-top:1px solid var(--color-blanche-2);
        }
        nav {
        width: 100%;
        height: 20vh;
        display: flex;
        align-items:start;
        justify-content: space-between;
        position: fixed;
        top: 0px;
        border:none;
        padding:0;
        z-index: var(--z-index-1);
        background:var(--color-blanche-1);
      }
      .mobileMenu{
        display:block;
        width:100%;
        height:100%;
        padding:5px 10px;
        background:transparent;
      }
      .topMenuTitre{
        display:flex;
        justify-content:space-between;
        width:100%;
      }
      .titre_animation.accueil.interd{
        font-size: 25px;
        -webkit-text-stroke: 2.5px var(--color-titre) !important;
      }
      .bottomMenuIcons{
        width:100%;
      }
      .IconsMeuRight i{
        font-size:18px;
      }
      .IconsMeuRight{
        display:flex;align-items:center;
        gap:30px;
      }
      .iconcontainerOption{
        flex-direction:column;
        gap:2px;
      }
      .menuMoibile i{
        font-size:14px;
      }
      .menuMoibile{
        display:flex;
        align-items:center;
        justify-content:center;
        gap:5px;
      }
      .optionHome.active::before{
        content: '';
        width: 100%;
        height: 1px;
        border-radius: 40px;
        background: var(--color-icons_Theme_noire);
        position: absolute;
        bottom: -12px;
        transition: all .5s ease;

        }
      .menuHomeChoix{
        justify-content:space-between;
        width:100%;
      }
      body{
        background:var(--color-blanche-1);
      }
      .parentIconsMobile{
        width:100%;
        display:flex;
        align-items:center;
        justify-content:space-around;
        height:100%;
        background:var(--color-blanche-1);
      }
      .menuIconsPrincipale span{
        font-size:12px;
        opacity:.5;
        font-weight:100;
      }
      .centre_session{
        width:100%;
        margin:0;
      }
      .menuIconsPrincipale{
        display:flex;
        align-items:center;
        flex-direction:column;
        gap:5px;
      }
      .leftnav.postSession{
        background:var(--color-blanche-2);
        display:flex;
      }
      .PosteCarteInterface input{
        width:90%;
        height:100%;
        background:transparent;
      }
      .PosteCarteInterface i{
        padding-right:10px;
      }
      .PosteCarteInterface{
        width:100%;
        margin:5px auto;
        border-radius:25px;
        height:47px;
        display:flex;align-items:center;
        justify-content:center;
        padding:10px;
        font-size:15px;
        background:var(--color-blanche-2);
      }
      .boutonOptionsMobile{
        position:fixed;
        bottom:14vh;
        left:10px;
      }
      .iconsBoutonMobilePlus{
        background:var(--color-primary);
        color:#FFF;
        box-shadow: var(--boxshadow_section_blanche);
        border-radius:50%;
        display:flex;align-items:center;
        justify-content:center;
        width:55px;
        height:55px
      }
      .MobileDataPrincipale{
        width:100vw;
        max-height:70vh;
        height:100%;
        overflow:auto;
        margin-top:20vh;
        padding-bottom:10px;
      }
      
      }
    </style>
  </head>
  <body>
  <div class="barrScrolle"><div></div></div>
  <div class="contaneurImage">
    <div class="photoImage"><img src="../images/0000000000000000.png" class=""></div>
    <span>Internet pour Tous</span>
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
        <div class="mobileMenu">
          <div class="topMenuTitre">
          <div class="leftMenuMobile"><h3 class="titre_animation accueil interd">NewaRnet</h3></div>
          <div class="IconsMeuRight">
            <!-- <i class="fa-solid fa-moon" onclick="sunFunction(event)" id="darkFonction"></i>
            <i class="fa-solid fa-sun"onclick="sunFunction(event)" id="sunFonction"></i> -->
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-ellipsis-vertical"></i>
          </div>
          </div>
          <div class="bottomMenuIcons">
              <div class="PosteCarteInterface"><i class="fa-solid fa-image" onclick="PostWidthInage()"></i><input type="text" name=""id=""placeholder="Quand dites-vous, <?php echo $nom_comple ?>" oninput="PosteChamps(event)"></div>
          </div>
        </div>
      </nav>
      <div class="MobileDataPrincipale">
        
      </div>
      <div class="boutonOptionsMobile">
        <div class="iconsBoutonMobilePlus"><i class="fa-solid fa-plus"></i></div>
      </div>
      <div class="bottomMenusIcons">
        <div class="parentIconsMobile">
          <div class="menuIconsPrincipale">
            <i class="fa-solid fa-message"></i>
            <span>Message</span>
          </div>
          <div class="menuIconsPrincipale">
            <i class="fa-solid fa-bell"></i>
            <span>Notifications</span>
          </div>
          <div class="menuIconsPrincipale">
          <i class="fa-solid fa-user-group"></i>
            <span>Groupes</span>
          </div>
          <div class="menuIconsPrincipale">
            <i class="fa-solid fa-user"></i>
            <span>Profile</span>
          </div>
        </div>
      </div>
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
                        <div class="iconcontainerOption" onclick="Suivies(event)" y="<?php global $my_id; echo encrypt($my_id,$key) ?>">
                          <i class="fa-solid fa-users"></i>Suivi(e)s
                        </div>
                        <div class="iconcontainerOption" onclick="Suivies(event)">
                          <i class="fa-solid fa-users"><span class="notification_counteur"></span></i>Demande D'Ami(e)
                        </div>
                        <div class="iconcontainerOption" onclick="Suivies(event)">
                        <i class="fa-regular fa-image"></i>album photo
                        </div>
                        <a href="logout.php" class="iconcontainerOption">
                          <i class="fa-solid fa-right-from-bracket"></i>Se déconnecter
                        </a>
                      </div>
                      <div class="swiper-slide sliderLeft">
                        <div class="conversationHomePage">
                          <button class="BoutonsRetoure" onclick="TurnBack()"><i class="fa-solid fa-arrow-left"></i> Retournez au Principal</button>
                          <div class="SearchMessage creationGroupe">
                            <input type="search" name=""  placeholder="Trouver un(e) Ami(e)">
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
                            <option value="24">12 heures d'apparition</option>
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
                          <div id="FrinedsGroupesAdd"></div>
                      </div>
                      <div class="swiper-slide">
                        <input type="file" name="image" id="imageGroup" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event, 'imagegroupe')">
                        <label for="imageGroup" class="carterPostStory other" id="imagegroupe"><i class="fa-solid fa-image"></i></label>
                      </form>
                      <div class="BoutonsRetoure add createAddBtn">Créer ce groupe</div>
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
                <div class="optionMenuHome"onclick="PostStory()"> <i class="fa-solid fa-circle-half-stroke"></i> Ajouter une Story</div>
                <div class="optionMenuHome"onclick="ProfilEdite()"><i class="fa-solid fa-user-gear"></i>Modifier Ton Profile</div>
                <div class="optionMenuHome"onclick="CouvertureEdite()"><i class="fa-solid fa-user-gear"></i>Modifier Ta Couverture</div>
                <div class="optionMenuHome" y="<?php echo  encrypt($my_id,$key)?>"onclick="CreatGroupe(event)"><i class="fa-solid fa-user-group"></i>Creer Un Groupe</div>
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
              <div class="divText"><span>Besoin d'une Maison a vendre  ?</span><span>plus <i class="fa-solid fa-caret-down"></i></span></div>
              <div class="swiper mySwiper partiePropositionEplazacarte">
                <div class="swiper-wrapper">
                          <div class="swiper-slide profilePhoto eplaza proposition">
                            <div class="headerSide">
                              <div class="divText PropositionEplaza">
                                <span class="nombVuesHomepage">12 vues</span>
                                    <span>Message</span>
                                </div>
                              </div>
                            </div>
                          <div class="swiper-slide profilePhoto eplaza proposition">
                            <div class="headerSide">
                              <div class="divText PropositionEplaza">
                                <span class="nombVuesHomepage">12 vues</span>
                                    <span>Message</span>
                                </div>
                              </div>
                            </div>
                          <div class="swiper-slide profilePhoto eplaza proposition">
                            <div class="headerSide">
                              <div class="divText PropositionEplaza">
                                <span class="nombVuesHomepage">12 vues</span>
                                    <span>Message</span>
                                </div>
                              </div>
                            </div>
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
                        global $user;
                        $USERS_ROWSFiends= $user->Mesamis($my_id,"amis");
                        if($USERS_ROWSFiends)
                        {
                            foreach($USERS_ROWSFiends as  $DataFriends)
                            {
                              $FriendsIds =  $DataFriends['userid'];
                            }
                            $sql = "SELECT * FROM users
                            WHERE userid != ? 
                            AND userid != ? ORDER BY RAND()  LIMIT $limite";
                            $USERS_ROWS = $DB->read($sql, [$my_id, $FriendsIds]);
                          
                            if($USERS_ROWS)
                            {
                              foreach($USERS_ROWS as $USERS_ROW)
                              {
                                include("int_Friends_Add.php");
                              }
                            }
                        }else{
                          $sql = "SELECT * FROM users
                            WHERE userid != ? ORDER BY RAND()  LIMIT $limite";
                            $USERS_ROWS = $DB->read($sql, [$my_id]);
                          
                            if($USERS_ROWS)
                            {
                              foreach($USERS_ROWS as $USERS_ROW)
                              {
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
          <div class="swiper-slide">
          <div class="leftnav searchNav"> 
            </i><i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher un NewaRnaute..."oninput="searchUser(event, 'seachFriedsSpecificale.php', 'dataRechercheUserSecond')">
        </div>
            <div id="dataRechercheUserSecond">
          <div id="dataSearcheContent">
             <?php include("FauxContenusSearch.php") ?>
           </div>
           </div>
          </div>
        </div>
      </main>
      <!-- fint_main -->
</div>
    <!-- <script src="../Javascripts/refusActions.js"></script> -->
    <script src="../JQuery/funtionsLoading.js"></script>
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
    var swiper = new Swiper(".mySwiper.PropositionAmisdesAmias", {
       slidesPerView: 1,
      spaceBetween: 0,
      freeMode: true,
     
    });
    
    var swiper = new Swiper(".partiePropositionEplazacarte.mySwiper", {
      slidesPerView: 1,
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
    function likePost(event) {
  let value = event.currentTarget.getAttribute('y');
  let page = "likePoste.php";
  let numberElement = event.currentTarget.querySelector('.number');

  function callback(data) {
    if (data.trim() !== '') {
      numberElement.textContent = data;
      numberElement.style.color = "var(--color-primary)";
      event.currentTarget.style.border = "1px solid var(--color-primary)";
    } else {
      numberElement.textContent = data;
      numberElement.style.color = "var(--color-icons_Theme_blanche)";
      event.currentTarget.style.border = "none";
    }
  }

  sendValueAjax(page, value, callback);
}


  </script>
  </body>
</html>
