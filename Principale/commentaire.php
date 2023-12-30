<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../Styles/styleCommun.css" />
    <!-- <link rel="stylesheet" href="../Styles/message.css"> -->
    <link rel="stylesheet" href="../Styles/index.css">
    <link rel="stylesheet" href="../Styles/eplaza.css">
    <link rel="stylesheet" href="../Styles/style_accueil.css"/>
    <link rel="stylesheet" href="../Styles/commentaire.css">
    <link rel="shortcut icon"href="../images/Logo.png"type="image/jpeg"style="width: 300px; height: 300px"/>
    <title>NewaRnet</title>
</head>
<body>
    <div class="carterposteCommentaire">
        <div class="carterPoste">
            <div class="blocHead">
              <div class="left_userpost">
                <div class="cartePhoto">
                  <img src="../images/Af-1 (7).jpg" class="userphoto" />
                </div>
                <div class="nameUser">
                  <h3>Jean-luc kashindi</h3>
                  <small
                    >Il y 2 min.<i class="fa-solid fa-earth-africa"></i
                  ></small>
                </div>
              </div>
              <div class="rightmenu">
                <div class="iconDiv"><i class="fa-solid fa-ellipsis"></i></div>
              </div>
            </div>
            <div class="corpPost">
              <img src="../images/Af-1 (6).jpg" class="imagePost" />
              <div class="menuOptionPartager">
                <div class="menuchoix"onclick="partager('link', 'NewaRnet', 'okay')"><i class="fa-solid fa-share-nodes"></i><span>Partager sur d'autres réseaux sociaux</span></div>
                <div class="menuchoix"><i class="fa-solid fa-share-from-square"></i> <span>Partager sur NewaRnet</span></div>
                <div class="menuchoix"onclick="GroupeFriendsShare(event)"><i class="fa-solid fa-retweet"></i> <span>Partager comme message</span></div>
                <div class="menuchoix"onclick="GroupeFriendsShare(event)"> <i class="fa-solid fa-share"></i> <span>Partager dans un groupe</span></div>
            </div>
            <!-- Friends et Groupes Sharing -->
            <div class="menuOptionPartager GroupeFrindsSelect">
              <div class="InputDouble">
                <div class="BoutonsAction" onclick="ReturnShare(event)"><i class="fa-solid fa-arrow-left"></i>Retourner</div>
                <div class="BoutonsAction">Partager<i class="fa-solid fa-share"></i></div>
              </div>
              <div class="SearchMessage creationGroupe">
                <i class="fa-solid fa-magnifying-glass"></i><input type="search" name="" id="" placeholder="Trouver un(e) Ami(e)">
              </div>
              <div class="conteneuramis">
                <div class="photoamis">
                  <img src="../images/Af-1 (5).jpg"width="100%"height="100%"/>
                </div>
                <div class="nomamis">
                  <h3>arsene cirhuza</h3>
                  <p><small>86 ami(e)s en commun </small></p>
                </div>
                <div class="iconeamis"><input type="checkbox" name="" id=""onchange="VerificationChecked(event)"></div>
            </div>
            </div>
            <!-- Friends et Groupes Sharing -->
            </div>
            <div class="bottomIocnsEmotion">
              <div class="emotionIcons">
                <i class="fa-solid fa-thumbs-up"></i><span class="number">1234</span>
              </div>
              <div class="emotionIcons">
                <i class="fa-solid fa-comments"></i><span class="number">1234</span>
              </div>
              <div class="emotionIcons share" onclick="sharePost(event)">
                <i class="fa-solid fa-share"></i>
                <span class="number">120</span>
              </div>
            </div>
            <div class="commentaireUsers">
              <div class="cartecommentaire">
                <div class="imagePhoto">
                    <div class="photoEplaza"></div>
                    <div class="DetailArtcle">
                      <span>Bousness Shop</span>
                      <small>ily 2j</small>
                    </div>
                  </div>
                  <p>Bonjour c'est correcter</p>
              </div>
            </div>
           <div class="sessionComentaireSide">
            <div class="leftnav comentaireInoput"> 
                <input type="text" name=""id=""placeholder="Écris ton commentaire..."oninput="ComentaiPOST(event)"><i class="fa-solid fa-paper-plane"></i>
            </div>
           </div>
          </div>
    </div>
    <script src="../Javascripts/stylepage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../Javascripts/loadingPage.js"></script>
    <script src="../Javascripts/bib.js"></script>
    <script src="../Javascripts/fonctionsAccueil.js"></script>
    <script src="../Javascripts/HomeStructure.js"></script>
    <script src="../Ajax_Functions/functionAjax.js"></script>
    <script src="../Javascripts/commentaire.js"></script>
</body>
</html>