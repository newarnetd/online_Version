<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
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
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    <link rel="stylesheet" href="../mobile_style/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>NewaRnet</title>
</head>
<body>
<div class="barrScrolle"><div></div></div>
  <div class="contaneurImage">
    <div class="photoImage"><img src="../images/0000000000000000.png" alt=""></div>
    <span style="position:absolute;bottom:20px;opacity:1">NewaRnet, un Monde Nouveau</span>
  </div>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper indexpage">
      <div class="swiper-slide principaleMobile">
        <div class="barrScrolle"><div></div></div>
        <div class="logosIndex">
          <div class="logosNewarnet"><img src="../images/Logo_tran.png" alt=""></div>
        </div>
      <div class="text_coventions">Rejoignez les NewaRnautes, partagez et vivez l'expérience eplaza dans cette mégastructure  accessible à tous</div>
      <div class="InputDouble boutons">
        <div class="btoun"onclick="connexion(event)">Se connecter</div>
        <div class="btoun nianda"onclick="Nianda(event)">Interagir avec Nianda</div>
      </div>
      <div class="btounInscription">
        <div class="btoun"onclick="NewCount(event)">Créer un nouveau compte</div>
      </div>
    </div>  
<!-- connexion -->
      <div class="swiper-slide">
        <div class="barrScrolle"><div></div></div>
        <div  class="connexionForm">
          <div class="text_demos">
            <h2 class="titre_animation interd">NewaRnet</h2>
        </div>
          <div class="containeurInputStyle">
              <input type="text" name="Info_one"  placeholder="Email ou Numéro de téléphone">
          </div>
          <div class="containeurInputStyle password">
              <input type="password" name="Info_two"  placeholder="Mot de passe">
              <i class="fa-solid fa-eye-slash" id="eye-slash" onclick="PasswordToggle(event)"></i>
              <i class="fa-solid fa-eye"onclick="PasswordToggle(event)"></i>
          </div>
          <div class="text_coventions">En vous connectant, vous adhérez à accepter notre politique et nos conditions.</div>
          <div class="connectionBtn login"onclick="connextion(event)">Se connecter</div>
          <div class="erreurMessage"></div>
          <div class="connectionBtn sign_up" onclick="share()"> <i class="fa-solid fa-share-nodes"></i> Invitez vos proches</div>
         
     </div>
      </div>
<!-- Inscription -->
      <div class="swiper-slide">
        <div class="swiper mySwiper ">
          <div class="swiper-wrapper inscriptionSideMobile">

            <div class="swiper mySwiper othersideInsc">
              <div class="swiper-wrapper othersideInsc">
                
                  <div class="swiper-slide">
                    <div class="barrScrolle"><div></div></div>
                    <div class="textDemonstrationInscription">En cliquant sur le bouton 'Suivant', vous commencez votre inscription sur NewaRnet</div>
                    <div  class="connexionForm inscription_Side">
                      <div class="InputDouble">
                          <div class="containeurInputStyle">
                              <input type="text" name="nom" id="nom"  placeholder="Entrer ton Nom">
                          </div>
                          <div class="containeurInputStyle">
                              <input type="text" name="prenom" id="prenom"  placeholder="Entrer ton Prenom">
                          </div>
                      </div>
                      <div class="containeurInputStyle">
                          <input type="text" name="email" id="email"  placeholder="Entrer Ton Adress Email">
                      </div>
                      <div class="boutonOnlymobile suivant" onclick="SuivantMob1(event)">Suivant</div>
                      
                      <div class="erreurMessage"></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="barrScrolle"><div></div></div>
                    <div class="textDemonstrationInscription">À la prochaine connexion, utilisez ces identifiants NewaRnet pour vous connecter.</div>
                    <div class="InputDouble">
                      <div class="containeurInputStyle">
                          <input type="number" name="tel" id="numero"  placeholder="Entrer ton numéro">
                      </div>
                  </div>
                  <div class="containeurInputStyle password">
                      <input type="text" name="password" id="password"  placeholder="Optez pour un mot de passe solide pour ce compte" id="passwordInputDesk">
                      <i class="fa-solid fa-eye-slash" id="eye-slash" onclick="PasswordToggle(event)"></i>
                      <i class="fa-solid fa-eye"onclick="PasswordToggle(event)"></i>
                  </div>
                  <div class="InputDouble">
                  <div class="boutonOnlymobile suivant"onclick="generateStrongPassword(event)">Régénérer</div>
                  <div class="containeurInputStyle password">
                      <input type="text" name="" id="passMotdepasse"placeholder="The%&New!`arnet" value="The%&New!`arnet">
                      <i class="fa-solid fa-copy"  onclick="capierPassword(event)"></i>
                      <i class="fa-solid fa-check"onclick="capierPassword(event)"></i>
                  </div>
              </div>
                  <div class="boutonOnlymobile suivant"onclick="SuivantMob2(event)">Suivant</div>
                  
                  <div class="erreurMessage"></div>
                    </div>
                  <div class="swiper-slide">
                    <div class="barrScrolle"><div></div></div>
                    <div class="textDemonstrationInscription">En tant que nouveau membre, plongez dans une communauté dynamique résolue à explorer les vastes horizons du savoir et de la découverte.</div>
                    <div  class="connexionForm inscription_Side">
                      <div class="InputDouble">
                        <select name="jour" class="containeurInputStyle">
                            <?php
                            $mois = 1; // Janvier
                            $annee = date("Y"); // Année actuelle
                        
                            $nombre_jours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
                        
                            for ($jour = 1; $jour <= $nombre_jours; $jour++) {
                                echo '<option value="' . $jour . '">' . $jour . '</option>';
                            }
                            ?>
                        </select>
                        <select name="mois" class="containeurInputStyle password">
                        <option value="janvier">Janvier</option>
                            <option value="fevrier">Février</option>
                            <option value="mars">Mars</option>
                            <option value="avril">Avril</option>
                            <option value="mai">Mai</option>
                            <option value="juin">Juin</option>
                            <option value="juillet">Juillet</option>
                            <option value="aout">Août</option>
                            <option value="septembre">Septembre</option>
                            <option value="octobre">Octobre</option>
                            <option value="novembre">Novembre</option>
                            <option value="decembre">Décembre</option>                              
                        </select>
                        <select name="annee" class="containeurInputStyle">
                            <?php
                            $annee_actuelle = date("Y");
                            $annee_debut = $annee_actuelle - 40; 
                        
                            for ($annee = $annee_debut; $annee <= $annee_actuelle; $annee++) {
                                echo '<option value="' . $annee . '">' . $annee . '</option>';
                            }
                            ?>
                        </select>
                        </div>
                            <select name="centre_interet" class="containeurInputStyle">
                                <?php
                                $centres_interet = [
                                    "Voyages",
                                    "Photographie",
                                    "Jardinage",
                                    "Cuisine",
                                    "Cinéma",
                                    "Musique",
                                    "Danse",
                                    "Théâtre",
                                    "Arts visuels",
                                    "Littérature",
                                    "Mode",
                                    "Sport",
                                    "Fitness",
                                    "Course à pied",
                                    "Yoga",
                                    "Artisanat",
                                    "Bricolage",
                                    "Jeux vidéo",
                                    "Informatique",
                                    "Programmation",
                                    "Réseaux sociaux",
                                    "Blogging",
                                    "Écriture",
                                    "Poésie",
                                    "BD/Comics",
                                    "Manga/Anime",
                                    "Science-fiction",
                                    "Fantasy",
                                    "Astronomie",
                                    "Psychologie",
                                    "Développement personnel",
                                    "Philosophie",
                                    "Histoire",
                                    "Archéologie",
                                    "Sciences occultes",
                                    "Spiritualité",
                                    "Méditation",
                                    "Vie sauvage",
                                    "Protection de l'environnement",
                                    "Activisme",
                                    "Volontariat",
                                    "Psychologie positive",
                                    "Cryptomonnaies",
                                    "Investissement",
                                    "Camping",
                                    "Randonnée",
                                    "Vélo",
                                    "Plongée sous-marine",
                                    "Ski",
                                    "Surf",
                                    "Arts martiaux",
                                    "Canoë-kayak",
                                    "Équitation",
                                    "Astronomie",
                                    "Chasse au trésor",
                                    "Énigmes",
                                    "Escape games",
                                    "Astrologie",
                                    "Voyance",
                                    "Numérologie",
                                    "Jeux de société",
                                    "Échecs",
                                    "Poker",
                                    "Jeux de cartes",
                                    "Jeux de rôle",
                                    "Jeux de stratégie",
                                    "Cueillette de champignons",
                                    "Oenologie",
                                    "Bières artisanales",
                                    "Cocktails",
                                    "Thé",
                                    "Café",
                                    "Véganisme",
                                    "Cuisine du monde",
                                    "Voyage culinaire",
                                    "Collection de vinyles",
                                    "Concerts",
                                    "Spectacles comiques",
                                    "Musées",
                                    "Expositions d'art",
                                    "Festivals",
                                    "Danse sociale",
                                    "Langues étrangères",
                                    "Véhicules anciens",
                                    "Couture",
                                    "Tricot",
                                    "Crochet",
                                    "Jouets vintage",
                                    "Photographie animalière",
                                    "Course de drones",
                                    "Parapente",
                                    "Modélisme",
                                    "Science des fusées",
                                    "Jardinage vertical",
                                    "Bénévolat",
                                    "Éducation des enfants",
                                    "Parentalité positive",
                                    "Astronomie amateur",
                                    "Photographie urbaine",
                                    "Parkour",
                                    "Méditation en pleine conscience",
                                ];
                            
                                foreach ($centres_interet as $centre) {
                                    echo '<option value="' . $centre . '">' . $centre . '</option>';
                                }
                                ?>
                            </select>
                        <div class="InputDouble">
                            <div class="containeurInputStyle genre" ><input onchange="selectGenre(event)"id="Homme" type="radio" name="genre" value="Homme"> <span>Homme</span><i class="fa-solid fa-person"></i></div>
                            <div class="containeurInputStyle genre"><input onchange="selectGenre(event)" type="radio" name="genre" id="Femme" value="Femme"> <span>Femme</span><i class="fa-solid fa-person-dress"></i></div>
                        </div>
                        <div class="boutonOnlymobile suivant" onclick="EnregistrerInscription(event)">Enregistrez l'inscription</div>
                        <div class="boutonOnlymobile seconncter" onclick="SuivantMob0(event)">Annuler</div>
                        <div class="erreurMessage"></div>
                    </div>
                  </div>

              </div>
              <!-- <div class="swiper-pagination"></div> -->
            </div>
         

          </div>
        </div>
      </div>
<!-- Nianda sessio -->
      <div class="swiper-slide nianda">
        <div class="barrScrolle"><div></div></div>
        <div class="headerTittre" >
          <span><i class="fa-solid fa-arrow-left"onclick="leftNianda()"></i></span>
          <span>Chat avec Nianda</span>
          <i class="fa-solid fa-robot"></i>
      </div>
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellat molestiae officiis culpa cum? Assumenda saepe, quasi porro adipisci nemo necessitatibus enim, tempora quisquam pariatur obcaecati cupiditate, tempore veritatis esse?
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
<!-- Fin Nianda -->
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="../JQuery/funtionsLoading.js"></script>
  <script src="../JavascriptMobile/styleMob.js"></script>
  <script src="../JavascriptMobile/indexJs.js"></script>
  <script src="../Ajax_Functions/functionAjax.js"></script>
  <script src="../Ajax_Functions/FunctionsJs.js"></script>
</body>
</html>
