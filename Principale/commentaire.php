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
    <style>
      .leftnav.comentaireInoput{
    position: sticky;
    top: 0;
    width: 100%;
    height: 50px;
    background:transparent !important;
    padding-right:0;
   
}
.sessionComentaireSide{
    width: 95%;
    margin: 5px auto;
    position: relative;
    display: flex;
    align-items: center;
    height: 50px;
    justify-content: center;
    background:transparent !important;
    border:1px solid  var(--color-blanche-2);
    border-radius: 20px;
}
   .commentaireDefaut{
    width:100%;
    height:50%;
    display:flex;align-items:center;justify-content:center;
    flex-direction:column;
   }
   .iconeComment span{
    
   }
   .iconeComment i{
    font-size:55px;
   }
   .iconeComment{
    width:100%;
    display:flex;align-items:center;justify-content:center;
   }
   .sendIc i{
    color:var(--color-text);
   }
   .sendIc{
    background:var(--color-blanche-2);
    color:#FFF;
    padding:12px 20px;
    border-radius:3px 20px 20px 3px;
    height:50px;
    display:flex;align-items:center;justify-content:center;

   }
   .emotionIcons{
    box-shadow:none;
   }
   .bottomIocnsEmotion{
    border-bottom:1px solid var(--color-blanche-2);
    margin-bottom:10px;
   }
    </style>
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
             <div class="commentaireDefaut">
              <div class="iconeComment"><i class="fa-regular fa-comments"></i></div>
              <span class="textEplaza">Cette publication n'a actuellement aucun commentaire.</span>
             </div>
            </div>
           <div class="sessionComentaireSide">
            <div class="leftnav comentaireInoput"> 
                <input type="text" name=""id=""placeholder="Écris ton commentaire..."oninput="ComentaiPOST(event)">
                <div class="sendIc"><i class="fa-solid fa-arrow-up"></i></div>
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