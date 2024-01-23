<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <script src="../detecteur/Mobile_window.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="../mobile_style/accueil.css">
    <link rel="stylesheet" href="../mobile_style/style_messagePage.css">
    <link rel="stylesheet" href="../mobile_style/eplaza-Mobile.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="../detecteur/Mobile_window.js"></script> -->
    <title>NewaRnet</title>
</head>
<body>
  <body>
    <div class="swiper mySwiper eplazaContaineur">
      <div class="swiper-wrapper MobilEplazaPricipale">
<!-- ------------------------------------------------ -->
        <div class="swiper-slide">
         <div class="topContEplazaMoil">

          <div class="Titre eplaza">
            <h3 class="titre_animation accueil interd">ePlaza</h3>
            <div class="LogoePlaza">
              <img src="../images/Logo_ePlaza.png" alt="">
             </div>
            </div>
            <div class="gridElements">
              <div class="element"></div>
              <div class="element"></div>
              <div class="element"></div>
            </div>
            <div class="contentPropositionsTwo">
              <div class="swiper mySwiper propositionTwoSwipper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">Slide 1</div>
                  <div class="swiper-slide">Slide 2</div>
                  <div class="swiper-slide">Slide 3</div>
                  <div class="swiper-slide">Slide 4</div>
                  <div class="swiper-slide">Slide 5</div>
                  <div class="swiper-slide">Slide 6</div>
                  <div class="swiper-slide">Slide 7</div>
                  <div class="swiper-slide">Slide 8</div>
                  <div class="swiper-slide">Slide 9</div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <!-- troisieme Porposition -->
              <div class="swiper mySwiper troisiemeProposition">
                <div class="swiper-wrapper propotionTroisiemForm">
                  <div class="swiper-slide">Slide 2</div>
                  <div class="swiper-slide">Slide 1</div>
                  <div class="swiper-slide">Slide 3</div>
                  <div class="swiper-slide">Slide 4</div>
                  <div class="swiper-slide">Slide 5</div>
                  <div class="swiper-slide">Slide 6</div>
                  <div class="swiper-slide">Slide 7</div>
                  <div class="swiper-slide">Slide 8</div>
                  <div class="swiper-slide">Slide 9</div>
                </div>
              </div>
            <!-- troisieme Porposition -->
         </div>
<!-- Footer -->
          <div class="FooterMob">
            <div class="containeurOptions">
                <div class="optionMobileIconsBottom"onclick="serchEplaza()">
                  <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Recher</span>
                </div>
                <div class="optionMobileIconsBottom"onclick="Boutique()">
                  <i class="fa-solid fa-shop"></i>
                    <span>Boutique</span>
                </div>
                <div class="optionMobileIconsBottom" onclick="AddArticles()">
                  <i class="fa-solid fa-plus"></i>
                    <span>Ajouter</span>
                </div>
                <div class="optionMobileIconsBottom" onclick="MenuEplaza()">
                  <i class="fa-solid fa-bars"></i>
                    <span>Menu</span>
                </div>
            </div>
        </div>
<!-- fin ici -->
        </div>
<!-- Ajouter Articles -->
        <div class="swiper-slide">
          <div class="headerTittre" >
            <span><i class="fa-solid fa-arrow-left"onclick="eplazaMobile()"></i></span>
            <span>Messager NewaRnet</span>
            <i class="fa-solid fa-comment-dots"></i>
        </div>
          Ajouter Articles
        </div>
<!-- Interfcae Boutique -->
        <div class="swiper-slide">
          <div class="headerTittre" >
            <span><i class="fa-solid fa-arrow-left"onclick="eplazaMobile()"></i></span>
            <span>Messager NewaRnet</span>
            <i class="fa-solid fa-comment-dots"></i>
        </div>
        Boutique interface
        </div>
<!-- Menu ici -->
        <div class="swiper-slide">
          <div class="headerTittre" >
            <span><i class="fa-solid fa-arrow-left"onclick="eplazaMobile()"></i></span>
            <span>Messager NewaRnet</span>
            <i class="fa-solid fa-comment-dots"></i>
        </div>
          Menu ici
        </div>
<!-- Recher Interface -->
        <div class="swiper-slide">
          <div class="headerTittre" >
            <span><i class="fa-solid fa-arrow-left"onclick="eplazaMobile()"></i></span>
            <span>Messager NewaRnet</span>
            <i class="fa-solid fa-comment-dots"></i>
        </div>
        <div class="RecherchSpace">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" name="" id="" placeholder="Rechercher un Message....">
        </div>
        rechercher ici
        </div>
<!-- --------------------------------------------------------- -->
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="../JavascriptMobile/eplazaMobile.js"></script>
<script>
  var swiper = new Swiper(".mySwiper.propositionTwoSwipper", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
  });
 
  var swiper = new Swiper(".mySwiper.troisiemeProposition", {
      slidesPerView: 1,
      spaceBetween: 30,
    });
  
</script>
</body>
</html>