<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="../Styles/styleCommun.css" />
        <link rel="stylesheet" href="../Styles/message.css">
        <link rel="stylesheet" href="../Styles/eplaza.css">
        <link rel="stylesheet" href="../Styles/style_accueil.css"/>
        <link rel="stylesheet" href="../Styles/newarnetphoto.css">
        <link rel="stylesheet" href="../Styles/index.css">
        <link rel="stylesheet" href="../Styles/Profile.css">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
        <link rel="manifest" href="../favicon_io/site.webmanifest">
        <title>NewaRnet</title>
      </head>
<body>
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
      </nav>
      <div class="ParentDivs">
        <div class="centerParent">
          <div class="headerParent">
            <div class="coverphotoUser"><img src="../images/Af-1 (2).jpg" alt=""></div>
          </div>
          <div class="infosUsercarte">
            <div class="leftInfosusers">
                <div class="profilePhotoUsers"><img src="../images/Af-1 (2).jpg" alt=""></div>
              <div class="detailInfoProfileUsers">
                <h3>Jean-luyc kashindi</h3>
                <span>12k Amis 18 en commun</span>
                <div class="amisEncommun">
                  <div class="image"><img src="../images/Af-1 (2).jpg" alt=""></div>
                  <div class="image"><img src="../images/Af-1 (2).jpg" alt=""></div>
                  <div class="image"><img src="../images/Af-1 (2).jpg" alt=""></div>
                  <div class="image"><img src="../images/Af-1 (2).jpg" alt=""></div>
                </div>
              </div>
            </div>
            <div class="rightSideProfile">
              <div class="topSide">
                <div class="bouton"><i class="fa-solid fa-user-plus"></i> Amis</div>
              <div class="bouton"><i class="fa-solid fa-user-plus"></i>suivis</div>
              </div>
              <div class="bottomside">
                <div class="bouton message"><i class="fa-solid fa-message"></i> Message</div>
                <div class="bouton ellipsis"><i class="fa-solid fa-ellipsis"></i></div>
              </div>
            </div>
          </div>
          <div class="otherInformationUser">
            <div class="leftSideInformations">
              <div class="topInforBio">
                <h3>Bio</h3>
                <div class="textEplaza">Salut les NewaRnautes, je suis ravi de constater que vous consultez mon profil sur NewaRnet</div>
                <div class="carterImageAlbum">
                  <div class="textes">
                    <h3>Album Photos</h3>
                    <span>voir plus</span>
                  </div>
                  <div class="cartePhotoGallery">
                      <div class="imageGalleryUser"><img src="../images/linkedin.png" alt=""></div>
                      <div class="imageGalleryUser"><img src="../images/linkedin.png" alt=""></div>
                      <div class="imageGalleryUser"><img src="../images/trois-Couloirs.jpg" alt=""></div>
                      <div class="imageGalleryUser"><img src="../images/linkedin.png" alt=""></div>
                      <div class="imageGalleryUser"><img src="../images/linkedin.png" alt=""></div>
                  </div>
                </div>
              </div>
              <hr class="ligne">
              <div class="textes"><h3>A propos du compte</h3><h3><i class="fa-solid fa-user-tie"></i></h3></div>
              <div class="InfosAccademique">
                <div class="infoAbout">
                  <span>Nom</span> <span>Jean-luc </span>
                </div>
                <div class="infoAbout">
                  <span>Prenom</span> <span>Kashindi</span>
                </div>
                <div class="infoAbout">
                  <span>Email</span> <span>luc@gmail.com</span>
                </div>
                <div class="infoAbout">
                  <span>Actif depuis</span> <span>l12,Janvier 2023</span>
                </div>
                <div class="infoAbout">
                  <span class="textInfodemo">l12,Janvier 2023</span> est la dernier mis a jour 
                </div>
                <div class="infoAbout">
                  <span>Hobies</span> <span>sport</span>
                </div>
                <div class="infoAbout">
                  <span class="textEplaza">le compte dispose 12photo et 12 amis aisnssi que 10 suivi il y a environ 12jour</span>
                </div>
                
              </div>
            </div>
            <div class="RightSideInformations">
              <div class="SearchMessage creationGroupe">
                <input type="search" name=""  placeholder="Trouver un(e) Ami(e)">
              </div>
              <div class="carterPrinciplale">
                <div class="conteneuramis">
                  <div class="photoamis">
                      <!-- <img src="<?php echo $profile ?>"/> -->
                  </div>
                      <div class="nomamis">
                          <h3> echo $nom_comple_friends</h3>
                          <p><small>86 ami(e)s en commun </small></p>
                      </div>
                  </div>   
                <div class="conteneuramis">
                  <div class="photoamis">
                      <!-- <img src="<?php echo $profile ?>"/> -->
                  </div>
                      <div class="nomamis">
                          <h3> echo $nom_comple_friends</h3>
                          <p><small>86 ami(e)s en commun </small></p>
                      </div>
                  </div>   
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- Debut_main -->
  <!-- <script src="../Javascripts/refusActions.js"></script> -->
  <script src="../Javascripts/stylepage.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="../Javascripts/loadingPage.js"></script>
  <script  src="../Javascripts/bib.js"></script>
  <script src="../Javascripts/fonctionsAccueil.js"></script>
  <script src="../Javascripts/HomeStructure.js"></script>
  <script src="../Ajax_Functions/functionAjax.js"></script>
  <script src="../Javascripts/Structureprofile.js"></script>
    <script src="../Ajax_Functions/FunctionsJs.js"></script>
  <script src="../Javascripts/indexStyle.js"></script>
  <script src="../Javascripts/sesionNianda.js"></script>
  <script src="../Javascripts/conectionFunctions.js"></script>
</body>
</html>
