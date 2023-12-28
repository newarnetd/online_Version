<?php
include("Principale/others.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Styles/styleCommun.css">
    <link rel="stylesheet" href="Styles/index.css">
    <link rel="shortcut icon" href="images/Logo.png" type="image/jpeg" style="width:300px;height:300px">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>NewaRnet</title>
</head>
<body>
    <div class="barrScrolle">
        <div class="counteurBare"></div>
    </div>
    <div class="ReferencePage">
            <!-- Gauche_side -->
            <article class="leftside">
                <div class="image_newarnet">
                    <img src="Images/0000.webp" alt="" class="interd image_word">
                </div>
                <div class="text_demos">
                    <h2 class="titre_animation interd">NewaRnet</h2>
                </div>
                    <!-- text_newarnet -->
                <div class="text_the_newaRnet interd">NewaRnet, basé sur le principe d'Internet Pour Tous, invitez donc vos proches à vous rejoindre dès maintenant.</div>
                <div class="block_boutons">
                    <div class="class_boutons_asisstence"onclick="Suivant_3()">Assistente Nianda ? <i class="fa-solid fa-clipboard-question"></i></div>
                    <div class="class_boutons_asisstence invitationsUsers"onclick="invitation()">Invitez vos proches<i class="fa-solid fa-users"></i></div>
                </div>
            </article>
            <!-- Fin des Blocks -->
            <article class="Right_side">
                    <!-- sectionInscription -->
                    <div class="FormConnexion swiper mySwiper">
                        <form method="POST" class="swiper-wrapper Desk">
                            <!-- Ninada -->
                            <div class="swiper-slide nianda">
                                <div class="optionPhrase" id="DeskOption">
                                        <!-- Questions sur NewaRnet -->
                                    <div class="menuTitre" onclick="TakenQuestionDesk(event)">Que represente Nianda sur NewaRnete</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Qu'est-ce que NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Objectifs de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Comment rejoindre NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Fonctionnalités principales de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Personnaliser mon profil sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Options de confidentialité sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Groupes communautaires sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Ajouter des amis sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Options de messagerie sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Fonctionnement des commentaires et likes sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Histoire de la création de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Fondateur de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Valeurs fondamentales de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Évolution de NewaRnet au fil du temps?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Dernières mises à jour sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Événements communautaires sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Contribuer à la communauté NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Contacter le support de NewaRnet?</div>

                                    <!-- Questions sur les couleurs panafricaines -->
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Pourquoi NewaRnet utilise-t-il les couleurs panafricaines?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Signification des couleurs rouge, verte et jaune sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Comment les couleurs panafricaines symbolisent-elles l'unité sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Autres significations derrière le choix de ces couleurs?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Comment NewaRnet célèbre-t-il la diversité culturelle à travers ces couleurs?</div>
                                    <!-- Questions sur NewaRnet -->
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Fonctionne sur quels types d'appareils NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Quels types de contenus puis-je partager sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Est-ce que NewaRnet propose des fonctionnalités de streaming vidéo?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Comment fonctionne le système de notifications sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Existe-t-il une fonction de recherche avancée sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Y a-t-il des options de personnalisation pour le fil d'actualité?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Comment signaler du contenu inapproprié sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">NewaRnet propose-t-il des outils de modération de communauté?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Peut-on planifier des événements sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Comment fonctionne le système de recommandation d'amis sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Est-ce que NewaRnet a une politique de protection des données?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Quelles sont les options de personnalisation pour les profils utilisateurs?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Y a-t-il une limite de caractères pour les publications sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Comment fonctionne le système de trending topics sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Est-ce que NewaRnet propose des fonctionnalités de traduction?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Comment supprimer mon compte sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Existe-t-il des programmes d'ambassadeurs ou d'influenceurs sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Comment NewaRnet prévient-il le harcèlement en ligne?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Y a-t-il des fonctionnalités de géolocalisation sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Quelles sont les options de personnalisation pour les notifications?</div>
                                    <div class="menuTitre"onclick="TakenQuestionDesk(event)">Est-ce que NewaRnet propose des filtres pour les photos?</div>
    
                                </div>
                                <div class="conversations" id="DeskInputNianda">
                                    <div class="divPardefaut">
                                        <div class="text_demos">
                                            <h2 class="titre_animation interd">Nianda</h2>
                                        </div>
                                        Il s'agit d'un chatbot, dirigé par l'equipe NewaRnet, qui répond à toute interrogation, quelle qu'elle soit, mais uniquement sur les sujets relatifs à NewaRnet
                                    </div>
                                </div>
                                <div class="botoomSessionNianda">
                                    <div class="SessionQuestion Desk"><input type="text" name=""  placeholder="Que veux-tu Savoir sur NewaRnet...." oninput="ClickDesk(event)"></div>
                                </div>
                              </div>
                              <!-- Ninada -->
                          <div class="swiper-slide connectionPage">
                            <div  class="connexionForm">
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
                                <div class="connectionBtn sign_up" onclick="InscriptionFunctionDesk()">Créez un nouveau compte </div>
                                <div class="bottom_text">
                                    <div class="text_coventions">Avec sa phrase célèbre Un monde à l'unisson,  Tout le concept de NewaRnet est d'être accessible au plus grand nombre</div>
                                </div>
                                <div class="erreurMessage"></div>
                           </div>
                          </div>
                          <div class="swiper-slide">
                            <div  class="connexionForm">
                                <div class="textDemonstrationInscription">En cliquant sur le bouton ci-dessous, vous continuez  votre inscription sur NewaRnet</div>
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
                                <div class="boutonOnlymobile suivant" onclick="Suivant_1(event)">Suivant</div>
                                
                                <div class="erreurMessage"></div>
                           </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="textDemonstrationInscription">Lors de votre prochaine connexion, utilisez cet e-mail ou ce numéro , ainsi que votre mot de passe NewaRnet.</div>
                            <div  class="connexionForm">
                                <div class="InputDouble">
                                    <div class="containeurInputStyle">
                                        <input type="number" name="numero" id="numero"  placeholder="Entrer ton numéro">
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
                                <div class="boutonOnlymobile suivant"onclick="Suivant_2(event)">Suivant</div>
                                
                                <div class="erreurMessage"></div>
                           </div>
                          </div>
                          <div class="swiper-slide">
                            <div  class="connexionForm">
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
                                            <?php
                                            for ($mois = 1; $mois <= 12; $mois++) {
                                                $nom_mois = date("F", mktime(0, 0, 0, $mois, 1));
                                                echo '<option value="' . $mois . '">' . $nom_mois . '</option>';
                                            }
                                            ?>                                        
                                        </select>
                                        <select name="annee" class="containeurInputStyle">
                                            <?php
                                            $annee_actuelle = date("Y");
                                            $annee_debut = $annee_actuelle - 40; // Vous pouvez ajuster le nombre d'années en arrière
                                        
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
                                    <div class="containeurInputStyle genre" ><input onchange="selectGenre(event)"id="Homme" type="radio" name="genre"> <span>Homme</span><i class="fa-solid fa-person"></i></div>
                                    <div class="containeurInputStyle genre"><input onchange="selectGenre(event)" type="radio" name="genre" id="Femme"> <span>Femme</span><i class="fa-solid fa-person-dress"></i></div>
                                </div>
                                <div class="boutonOnlymobile suivant">Enregistrez l'inscription</div>
                                <div class="text_coventions">C'est avec une immense joie que nous vous souhaitons la bienvenue au sein de notre communauté NewaRnet.</div>
                                <div class="boutonOnlymobile seconncter" onclick="Suivant_0(event)">Retournez à l'interface principale</div>
                                <div class="erreurMessage"></div>
                           </div>
                          </div>
                        </form>
                      </div>
                    <!-- section_connextion_Fin -->
            </article>
            <!-- Droite_side -->
                <div class=" onlyMobile swiper mySwiper">
                    <form class="swiper-wrapper Mobile">
                         <!-- Ninada -->
                         <div class="swiper-slide nianda">
                            <div class="optionPhrase" id="MObilMune">
                                    <!-- Questions sur NewaRnet -->
                                    <div class="menuTitre" onclick="TakenQuestion(event)">Que represente Nianda sur NewaRnete</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Qu'est-ce que NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Objectifs de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Comment rejoindre NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Fonctionnalités principales de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Personnaliser mon profil sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Options de confidentialité sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Groupes communautaires sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Ajouter des amis sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Options de messagerie sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Fonctionnement des commentaires et likes sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Histoire de la création de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Fondateur de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Valeurs fondamentales de NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Évolution de NewaRnet au fil du temps?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Dernières mises à jour sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Événements communautaires sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Contribuer à la communauté NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Contacter le support de NewaRnet?</div>

                                    <!-- Questions sur les couleurs panafricaines -->
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Pourquoi NewaRnet utilise-t-il les couleurs panafricaines?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Signification des couleurs rouge, verte et jaune sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Comment les couleurs panafricaines symbolisent-elles l'unité sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Autres significations derrière le choix de ces couleurs?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Comment NewaRnet célèbre-t-il la diversité culturelle à travers ces couleurs?</div>
                                    <!-- Questions sur NewaRnet -->
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Fonctionne sur quels types d'appareils NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Quels types de contenus puis-je partager sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Est-ce que NewaRnet propose des fonctionnalités de streaming vidéo?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Comment fonctionne le système de notifications sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Existe-t-il une fonction de recherche avancée sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Y a-t-il des options de personnalisation pour le fil d'actualité?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Comment signaler du contenu inapproprié sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">NewaRnet propose-t-il des outils de modération de communauté?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Peut-on planifier des événements sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Comment fonctionne le système de recommandation d'amis sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Est-ce que NewaRnet a une politique de protection des données?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Quelles sont les options de personnalisation pour les profils utilisateurs?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Y a-t-il une limite de caractères pour les publications sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Comment fonctionne le système de trending topics sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Est-ce que NewaRnet propose des fonctionnalités de traduction?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Comment supprimer mon compte sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Existe-t-il des programmes d'ambassadeurs ou d'influenceurs sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Comment NewaRnet prévient-il le harcèlement en ligne?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Y a-t-il des fonctionnalités de géolocalisation sur NewaRnet?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Quelles sont les options de personnalisation pour les notifications?</div>
                                    <div class="menuTitre"onclick="TakenQuestion(event)">Est-ce que NewaRnet propose des filtres pour les photos?</div>

                            </div>
                                <div class="conversations Mobil">
                                    <div class="divPardefautMobile">
                                        <div class="text_demos">
                                            <h2 class="titre_animation interd">Nianda</h2>
                                        </div>
                                         Il s'agit d'un chatbot, dirigé par l'equipe NewaRnet, qui répond à toute interrogation, quelle qu'elle soit, mais uniquement sur les sujets relatifs à NewaRnet
                                    </div>
                                </div>
                            <div class="botoomSessionNianda">
                                <div class="SessionQuestion Mob"><input type="text" name="" id="MobInputNianda"  placeholder="Que veux-tu Savoir sur NewaRnet...." oninput="ClickMobil(event)"></div>
                            </div>
                            
                          </div>
                          <!-- Ninada -->
                          <div class="swiper-slide connectionPage">
                            <div class="text_demos">
                                <h2 class="titre_animation interd">NewaRnet</h2>
                            </div>
                            <div  class="connexionForm">
                                <div class="containeurInputStyle">
                                    <input type="text" name="EmailConnexion"  placeholder="Email ou Numéro de téléphone">
                                </div>
                                <div class="containeurInputStyle password">
                                    <input type="password" name="passwordConnexion"  placeholder="Mot de passe">
                                    <i class="fa-solid fa-eye-slash"id="eye-slash" onclick="PasswordToggle(event)"></i>
                                    <i class="fa-solid fa-eye"onclick="PasswordToggle(event)"></i>
                                </div>
                                <div class="text_coventions">En vous connectant, vous adhérez à accepter notre politique et nos conditions.</div>
                                <div class="connectionBtn login" onclick="connextion(event)">Se connecter</div>
                                <div class="erreurMessage"></div>
                                <div class="bottom_text">
                                    <div class="text_coventions">Tout le concept de NewaRnet est d'être accessible au plus grand nombre</div>
                                </div>
                           </div>
                          </div>
                      <div class="swiper-slide">
                            <div class="contentItemsConnectio">
                                <div class="image_newarnet">
                                    <img src="Images/0000.webp" alt="" class="interd image_word">
                                </div>
                                <div class="text_demos">
                                    <h2 class="titre_animation interd">NewaRnet</h2>
                                </div>
                                <div class="containeBoutonsOnlyBoutons">
                                    <div class="boutonOnlymobile boutonsActions" onclick="connectionMobile()">Se connecter</div>
                                    <div class="boutonOnlymobile boutonsActions" onclick="InscriptionFunctionMobile()">Créez un compte</div>
                                </div>
                                <div class="text_demos">
                                    <div class="boutonOnlymobile signup" onclick="NiandaMobile()">Assistente Nianda<i class="fa-solid fa-clipboard-question"></i></div>
                                </div>
                            <div class="text_coventions interd">NewaRnet, basé sur le principe d'Internet Pour Tous, invitez donc vos proches à vous rejoindre dès maintenant.</div>
                            <div class="bottomLink" onclick="invitation()">
                                <div class="boutonOnlymobile boutonsActions share">Invitez vos proches<i class="fa-solid fa-users"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div  class="connexionForm">
                            <div class="textDemonstrationInscription">En cliquant sur le bouton ci-dessous, vous continuez  votre inscription sur NewaRnet</div>
                            <div class="InputDouble">
                                <div class="containeurInputStyle">
                                    <input type="text" name="nom" id="Mobnom"  placeholder="Entrer ton Nom">
                                </div>
                                <div class="containeurInputStyle">
                                    <input type="text" name="prenom" id="Mobprenom"  placeholder="Entrer ton Prenom">
                                </div>
                            </div>
                            <div class="containeurInputStyle">
                                <input type="text" name="email" id="Mobemail"  placeholder="Entrer Ton Adress Email">
                            </div>
                            <div class="boutonOnlymobile suivant" onclick="SuivantMob_1(event)">Suivant</div>
                            <div class="erreurMessage"></div>
                       </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="textDemonstrationInscription">Lors de votre prochaine connexion, utilisez votre adresse e-mail ou numéro de téléphone, ainsi que votre mot de passe NewaRnet.</div>
                        <div  class="connexionForm">
                            <div class="InputDouble">
                                <div class="containeurInputStyle">
                                    <input type="number" name="numero" id="numeroMob" placeholder="Entrer ton numéro de téléphone.l">
                                </div>
                                <div class="containeurInputStyle password">
                                    <input type="password" name="password" id="passwordInputMob" placeholder="Mot de passe">
                                    <i class="fa-solid fa-eye-slash" id="eye-slash" onclick="PasswordToggle(event)"></i>
                                    <i class="fa-solid fa-eye"onclick="PasswordToggle(event)"></i>
                                </div>
                            </div>
                            <div class="InputDouble">
                                <div class="boutonOnlymobile suivant"onclick="generateStrongPassword(event)">Régénérer</div>
                                <div class="containeurInputStyle password">
                                    <input type="text" name="" id="passMotdepasseMobile"placeholder="The%&New!`arnet" value="The%&New!`arnet">
                                    <i class="fa-solid fa-copy"  onclick="capierPasswordMobile(event)"></i>
                                    <i class="fa-solid fa-check"onclick="capierPasswordMobile(event)"></i>
                                </div>
                            </div>
                            <div class="boutonOnlymobile suivant"onclick="SuivantMob_2(event)">Suivant</div>
                       </div>
                       <div class="erreurMessage"></div>
                      </div>
                      <div class="swiper-slide fin">
                        <div class="InputDouble">
                            <select name="jour" class="containeurInputStyle">
                                <?php
                                    $mois = 1; // Janvier
                                    $annee = date("Y"); // Année actuelle

                                    $nombre_jours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);

                                    for ($jour = 1; $jour <= $nombre_jours; $jour++) {
                                    $timestamp = strtotime("$annee-$mois-$jour");
                                    $nom_mois = strftime("%B", $timestamp); // %B donne le nom du mois en toutes lettres
                                    echo '<option value="' . $jour . '">' . $nom_mois . '</option>';
                                    }
                                    ?>
                            </select>
                            <select name="mois" class="containeurInputStyle password">
                                <?php
                                for ($mois = 1; $mois <= 12; $mois++) {
                                    $nom_mois = date("F", mktime(0, 0, 0, $mois, 1));
                                    echo '<option value="' . $mois . '">' . $nom_mois . '</option>';
                                }
                                ?>                                        
                            </select>
                            <select name="annee" class="containeurInputStyle">
                                <?php
                                $annee_actuelle = date("Y");
                                $annee_debut = $annee_actuelle - 40; // Vous pouvez ajuster le nombre d'années en arrière
                            
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
                        <div class="containeurInputStyle genre"><input type="radio" name="genre" onchange="selectGenre(event)"id="Homme"> <span>Homme</span><i class="fa-solid fa-person"></i></div>
                        <div class="containeurInputStyle genre"><input type="radio" name="genre"onchange="selectGenre(event)" id="Femme"> <span>Femme</span><i class="fa-solid fa-person-dress"></i></div>
                    </div>
                           
                            <div class="boutonOnlymobile suivant">Enregistre L'inscription</div>
                            <div class="boutonOnlymobile seconncter" onclick="SuivantMob_0(event)">Retournez pour se connecter</div>
                        <div class="erreurMessage"></div>
                       </div>
                      </div>
                </div>
    </div>
    <div class="animationload interd">
        <div class="containeurpage interd">
            <div class="headerphoto interd"><img src="images/linkedin.png" alt=""></div>
            <div class="animationMere interd">
                <p>NewaRnet est en cours...</p>
                <div class="loading interd"></div>
            </div>
        </div>
    </div>
<script src="JQuery/functions.js"></script>
<script src="Javascripts/loadingPage.js"></script>               
<script src="Ajax_Functions/FunctionsJs.js"></script>
<script src="Ajax_Functions/functionAjax.js"></script>
<script src="Javascripts/refusActions.js"></script>
<script src="Javascripts/stylepage.js"></script>
<script src="Javascripts/indexStyle.js"></script>
<script src="Javascripts/sesionNianda.js"></script>
<script src="Javascripts/conectionFunctions.js"></script>
  <script>
    function connextion(event)
    {
        let Element = event.currentTarget;
        Element.innerHTML = "";
        Element.innerHTML = `<div class="mereAnimationclique"><span>En cours</span><div class="loading interd"></div></div>`;
        let form = document.querySelector('.swiper-wrapper.Desk');
        function callback(data)
        {
            alert(data);
        }
        functionAjax('Principale/Connection.php', form, callback);
    }
  </script>
</body>
</html>