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
        <link rel="stylesheet" href="../Styles/modificationPoste.css">
        <link rel="shortcut icon"href="../images/Logo.png"type="image/jpeg"style="width: 300px; height: 300px"/>
        <title>NewaRnet</title>
    </head>
</head>
<body>
    <div class="carterposteCommentaire">
        <div class="cartetPosteCreation">
            <div class="headerPatiesPoste">
              <span><i class="fa-solid fa-arrow-left" onclick="RetunBackCreatePoste()"></i> Creation de poste</span>
            </div>
            <form method="post" class="bottomSidepartiePoste">
                <div class="leftnav postSession"> 
                  <input type="text" name=""id=""placeholder="Écrivez ce que vous désirez poster" oninput="PosteChamps(event)">
              </div>
                <div class="swiper mySwiper other posteMenu">
                  <div class="menuHomeChoix">
                    <div class="optionHome active" onclick="PosteFile(event)" id="image">Photo<i class="fa-solid fa-image"></i></div>
                    <div class="optionHome"onclick="PosteFile(event)"id="videos">videos <i class="fa-solid fa-clapperboard"></i></div>
                    <div class="optionHome"onclick="PosteFile(event)" id="document">Document<i class="fa-solid fa-file-pdf"></i></div>
                  </div>
                <div class="swiper-wrapper homeSessionPost slidpost">
                  <input type="file" name="image" id="imagePost" hidden accept="image/*" onchange="updateLabelAndDisplay(this, 'imageDisplay')">
                  <input type="file" name="video" id="videomessage" hidden accept="video/*" onchange="updateLabelAndDisplay(this, 'videoDisplay')">
                  <input type="file" name="document" id="documents" hidden accept=".pdf, .doc, .docx, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" onchange="updateLabelAndDisplay(this, 'documentDisplay')"> 
                  <div class="swiper-slide">
                  <label for="imagePost" id="imageDisplay" class="carterPostStory poste">
                      <i class="fa-solid fa-image"></i>
                      <p>Cliquez pour sélectionner une image</p>
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
                    <option value="moi seule">Moi seule</option>
                    <option value="amis">Mes ami(e)s</option>
                    <option value="NewaRnet">À tous les NewaRnautes</option>
                  </select>                                                           
                  <div class="containeurInputStyle poste publication">Publier <i class="fa-solid fa-paper-plane"></i></div>
              </div>
            </form>
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