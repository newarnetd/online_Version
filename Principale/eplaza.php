<?php
include("otherPrincipale.php");
authentification(decrypt($_SESSION['ownerConnected'],$key));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../Styles/index.css">
    <link rel="stylesheet" href="../Styles/style_accueil.css">
    <link rel="stylesheet" href="../Styles/styleCommun.css">
    <link rel="stylesheet" href="../Styles/style_accueil.css" />
    <link rel="stylesheet" href="../Styles/eplaza.css">
    <link rel="shortcut icon" href="../images/Logo.png" type="image/jpeg" style="width:300px;height:300px">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>NewaRnet</title>
    <style>
        .containeurInputStyle.poste.publication{
  display:none;
  background:var(--color-primary) !important;
  color:#FFF;
  width:70%;
  cursor:pointer;
  margin:10px auto;
}
.Affiche {
    width:100% !important;
    height:350px !important;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    flex-direction: column;
}
.Affiche .topArtcle img{
    width:100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
}
.Affiche .topArtcle{
    height: 60%;
    width:100%;
    overflow: hidden;
    border: 1px solid var(--color-bordure-noire);
    background: var(--color-blanche-2);
    border-radius: 10px;
}
.erreurMessageCreation{
    color:var(--color-red-2);
}
.FormPosteArticles{
    padding:5px;
}
.allcontentpub.left{
    justify-content:flex-start;
}
.contacter{
    position: absolute;
    width: 100%;
    background:linear-gradient(transparent 5%, #000000 90%);
    padding: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    bottom: 0;
    color: #FFFF;
}
.textBas{
    width:100%;
    position:absolute;
    bottom:0;height:30%;
    background:linear-gradient(transparent 5%, #000000 90%);
    display:flex;align-items:center;
    justify-content:center;
}
.imageLogoEplaza img{
    width:100%;height:100%;object-fit:cover;
}
.imageLogoEplaza{
    width:60px;height:60px;border-radius:5px;
    background:var(--color-janue);
    display:flex;align-items:center;
}
    </style>
</head>
<body>
<div class="barrScrolle"><div></div></div>
  <div class="contaneurImage">
    <div class="photoImage"><img src="../images/Logo_ePlaza.PNG" alt=""></div>
    <span>Internet pour Tous</span>
  </div>
    <div class="referencePage">
        <div class="lefteplaza">
            <div class="swiper mySwiper MenuUserLafet">
                <div class="swiper-wrapper menuEplaza">
                    <div class="swiper-slide principaleOptions">
                        <div class="textChamps">
                            <i class="fa-solid fa-magnifying-glass"></i><input type="text" name="" id=""placeholder="Trouver un Article une categorie" oninput="rechercherCritere(event)"> 
                        </div>
                        <div class="containerOptionMenu" onclick="NouvelleBoutique()">
                            <i class="fa-solid fa-address-card"></i> <span>Nouvelle Boutique</span>
                        </div>
                        <div class="containerOptionMenu" onclick="PublierArticles()">
                            <i class="fa-solid fa-plus"></i> <span>Publier un article en ligne</span>
                        </div>
                        <div class="containerOptionMenu">
                            <i class="fa-solid fa-cart-shopping"></i> <span>Nouveautés</span>
                        </div>
                        <div class="containerOptionMenu"onclick="GroupePargatege()">
                            <i class="fa-solid fa-share"></i> <span>Partager dans un Groupe</span>
                        </div>
                        <a href="accueil.php" class="containerOptionMenu">
                            <i class="fa-solid fa-home"></i> <span>Page d'accueil</span>
                        </a>
                        <hr class="ligne">
                        <span class="textEplaza">Connaissez-vous une personne qui a besoin de l'une de ces suggestions ?</span>
                       <div class="contaaineurPub leftside">
                        <div class="allcontentpub left" >
                           
                        </div>
                       </div>
                    </div>
                    <form class="swiper-slide NouvellBoutique" enctype="multipart/form-data">
                        <div class="mySwiper other EplazaMarket">
                            <div class="swiper-wrapper eplazaMarket">
                        <div class="swiper-slide">
                            <h3 class="tittre">Choisissez une image impeccable pour le profil de votre boutique.</h3>
                            <div action="" method="post" class="Form">
                            <input type="file" name="image" id="imagestory" hidden accept="image/*" onchange="updateLabelAndDisplayEplaza(this,event,'imageStory')">
                            <label for="imagestory" class="carterPostStory other" id="imageStory">
                                <i class="fa-solid fa-plus"></i>
                                <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
                            </label>
                            <div class="containeurInputStyle poste publication"onclick="SuivantCreationBputique()">suivant</div>
                            </div>
                            <div class="textEplaza">Chez eplaza Un Boutique constitue un espace virtuel offert par NewaRnet à ses NewaRnautes, leur permettant de mener des promotions </div>
                            </div>
                                <div class="swiper-slide inscription">
                                    <div class="InputDouble">
                                    <div class="containeurInputStyle">
                                        <input type="text" name="nomBoutique"  placeholder="Nommer ta boutique">
                                    </div>
                                        <select class="containeurInputStyle password" name="type">
                                            <optgroup label="Mode et Accessoires">
                                            <option value="vente_magasin">Vente en magasin</option>
                                                <option value="boutique_commission">Boutique de la commission</option>
                                                <option value="vente_occasion">Vente d'occasion</option>
                                                <option value="vetements">Vêtements</option>
                                                <option value="bijoux">Bijoux et Montres</option>
                                            </optgroup>
                                            <optgroup label="Nouveaux Ajouts">
                                                <option value="beaute_cosmetiques">Beauté et Cosmétiques</option>
                                                <option value="electronique">Électroménagers</option>
                                                <option value="animaux">Animaux de compagnie</option>
                                                <option value="fournitures_bureau">Fournitures de bureau</option>
                                            </optgroup>
                                            <optgroup label="Électronique">
                                                <option value="high_tech">High-Tech</option>
                                                <option value="photographie">Photographie et Caméras</option>
                                            </optgroup>
                                            <optgroup label="Maison et Loisirs">
                                                <option value="maison_jardin">Maison et Jardin</option>
                                                <option value="sports_loisirs">Sports et Loisirs</option>
                                                <option value="mobilier_decoration">Mobilier et Décoration</option>
                                            </optgroup>
                                            <optgroup label="Culture et Divertissement">
                                                <option value="livres_papeterie">Livres et Papeterie</option>
                                                <option value="instruments_musique">Instruments de Musique</option>
                                                <option value="art_culture">Art et Culture</option>
                                            </optgroup>
                                            <optgroup label="Autres">
                                                <option value="artisanat">Artisanat et Créations faites main</option>
                                                <option value="alimentation_boissons">Alimentation et Boissons</option>
                                                <option value="automobile_moto">Automobile et Moto</option>
                                                <option value="jouets_jeux">Jouets et Jeux</option>
                                                <option value="technologie_innovations">Technologie et Innovations</option>
                                                <option value="fitness_bien_etre">Fitness et Bien-être</option>
                                                <option value="manga_anime">Manga et Anime</option>
                                                <option value="bricolage_outils">Bricolage et Outils</option>
                                                <option value="cadeaux_evenements">Cadeaux et Événements spéciaux</option>
                                                <option value="sante_soins_personnels">Santé et Soins personnels</option>
                                                <option value="equipement_entreprises">Équipement pour Entreprises</option>
                                                <option value="voyages_aventures">Voyages et Aventures</option>
                                                <option value="autre">Autre</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="textEplaza">ePlaza est un intermédiaire entre les boutiques et les clients. Elle ne vend ni n'achète de produits ou de services. Une fois que la vente est conclue, ePlaza n'est pas responsable des problèmes liés aux produits ou services.</div>
                                    <div class="textEplaza erreurMessageCreation"></div>
                                    <div class="boutonOnlymobile suivant" onclick="CreationBoutique(event)">créer une boutique</div>
                                </div>
                            </div>
                        </div>
                    </form>
                  <!-- sharigne -->
                  <div class="swiper-slide"></div>
                  <!-- poster une article -->
                  <div class="swiper-slide PosterArticle">
                    <form action="" method="post" class="FormPosteArticles">
                    <h3 class="tittre">Trouver une belle image pour que NewaRnet amplifie la portée de cet article</h3>
                        <input type="file" name="image" id="ArticleImage" hidden accept="image/*" onchange="updateLabelAndDisplayEplaza(this,event,'imagarticle')">
                          <label for="ArticleImage" class="carterPostStory other" id="imagarticle">
                            <i class="fa-solid fa-plus"></i>
                            <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
                          </label>
                        <div class="InputDouble">
                            <div class="containeurInputStyle">
                                <input type="text" name="nom"  placeholder="Nommer ton Article">
                            </div>
                            <div class="containeurInputStyle">
                                <input type="text" name="description"  placeholder="Décrivez votre article">
                            </div>
                        </div>
                        <div class="containeurInputStyle">
                            <input type="number" name="prix"  placeholder="Établissez une estimation du prix.">
                        </div>
                        <select class="containeurInputStyle password" name="type">
    <optgroup label="Biens Immobiliers">
        <option value="maison_vente">Maison à Vendre</option>
        <option value="appartement_location">Appartement à Louer</option>
        <option value="terrain">Terrain à Vendre</option>
        <option value="colocation">Colocation</option>
        <option value="location_saisonniere">Location Saisonnière</option>
        <option value="immeuble">Immeuble à Vendre</option>
        <option value="bureau_commercial">Bureau/Local Commercial</option>
        <option value="garage_parking">Garage/Place de Parking</option>
        <option value="location_vacances">Location de Vacances</option>
        <option value="loft">Loft à Vendre</option>
        <option value="ferme">Ferme à Vendre</option>
        <option value="studio">Studio à Louer</option>
        <option value="chambre_hotel">Chambre d'Hôtel</option>
        <option value="entrepot">Entrepôt/Stockage</option>
        <option value="propriete_luxe">Propriété de Luxe</option>
        <option value="projet_construction">Projet de Construction</option>
        <option value="echange_maisons">Échange de Maisons</option>
        <option value="chalet">Chalet à Vendre</option>
        <option value="achat_participation">Achat en Participation</option>
        <option value="location_gite">Location Gîte Rural</option>
    </optgroup>
    <optgroup label="Véhicules">
        <option value="voiture_occasion">Voiture d'Occasion</option>
        <option value="moto_vente">Moto à Vendre</option>
        <option value="velo_electrique">Vélo Électrique</option>
        <option value="bateau">Bateau à Vendre</option>
        <option value="camion_utilitaire">Camion/Utilitaire</option>
        <option value="equipement_auto">Équipement Auto/Moto</option>
        <option value="scooter_moto">Scooter/Moto</option>
        <option value="location_vehicule">Location de Véhicules</option>
        <option value="voiture_collection">Voiture de Collection</option>
        <option value="quad">Quad à Vendre</option>
        <option value="remorque">Remorque à Vendre</option>
        <option value="caravane_camping_car">Caravane/Camping-Car</option>
        <option value="piece_auto">Pièces Auto/Moto</option>
        <option value="accessoires_auto">Accessoires Auto</option>
        <option value="suv_crossover">SUV/Crossover</option>
        <option value="voiture_neuve">Voiture Neuve</option>
        <option value="tricycle">Tricycle/Moto Trike</option>
        <option value="velo">Vélo à Vendre</option>
        <option value="accessoires_velo">Accessoires Vélo</option>
    </optgroup>
    <optgroup label="Électronique">
        <option value="electronique_neuf">Produits Électroniques Neufs</option>
        <option value="telephones_accessoires">Téléphones et Accessoires</option>
        <option value="ordinateurs_laptops">Ordinateurs et Laptops</option>
        <option value="appareils_photo">Appareils Photo</option>
        <option value="tv_video">TV et Vidéo</option>
        <option value="audio_casques">Audio et Casques</option>
        <option value="jeux_video_consoles">Jeux Vidéo et Consoles</option>
        <option value="gadgets">Gadgets Électroniques</option>
        <option value="smartwatches">Montres Connectées</option>
        <option value="imprimantes_scanners">Imprimantes et Scanners</option>
        <option value="accessoires_electroniques">Accessoires Électroniques</option>
        <option value="logiciels">Logiciels</option>
        <option value="drones">Drones</option>
        <option value="objets_connectes">Objets Connectés</option>
        <option value="cameras_surveillance">Caméras de Surveillance</option>
        <option value="disques_durs">Disques Durs et Stockage</option>
        <option value="accessoires_telephonie">Accessoires Téléphonie</option>
        <option value="tablettes">Tablettes</option>
        <option value="cables_connectiques">Câbles et Connectiques</option>
        <option value="cartes_memoire">Cartes Mémoire</option>
    </optgroup>
    <optgroup label="Mobilier et Mode">
        <option value="meubles_decoration">Meubles et Décoration Intérieure</option>
        <option value="vetements_femmes">Vêtements pour Femmes</option>
        <option value="vetements_hommes">Vêtements pour Hommes</option>
        <option value="chaussures_accessoires">Chaussures et Accessoires Mode</option>
        <option value="bijoux_montres">Bijoux et Montres</option>
        <option value="sacs_valises">Sacs et Valises</option>
        <option value="beaute_maquillage">Beauté et Maquillage</option>
        <option value="coiffure">Coiffure</option>
        <option value="parfums">Parfums</option>
        <option value="montres">Montres</option>
        <option value="maroquinerie">Maroquinerie</option>
        <option value="vetements_enfants">Vêtements pour Enfants</option>
        <option value="materiel_sport">Matériel de Sport</option>
        <option value="equipement_maternite">Équipement Maternité</option>
        <option value="bagagerie">Bagagerie</option>
        <option value="lingerie_nuit">Lingerie et Nuit</option>
        <option value="vetements_grossesse">Vêtements de Grossesse</option>
        <option value="chapeaux_accessoires">Chapeaux et Accessoires</option>
        <option value="bijoux_enfants">Bijoux pour Enfants</option>
        <option value="costumes">Costumes et Déguisements</option>
    </optgroup>
    <optgroup label="Sports et Loisirs">
        <option value="equipement_sport">Équipement de Sport</option>
        <option value="vetements_sport">Vêtements de Sport</option>
        <option value="activites_exterieures">Activités en Plein Air</option>
        <option value="fitness">Fitness et Musculation</option>
        <option value="camping_randonnee">Camping et Randonnée</option>
        <option value="sports_eau">Sports Nautiques</option>
        <option value="equitation">Équitation</option>
        <option value="ski_snowboard">Ski et Snowboard</option>
        <option value="arts_martiaux">Arts Martiaux</option>
        <option value="jeux_exterieurs">Jeux d'Extérieur</option>
        <option value="instruments_musique">Instruments de Musique</option>
        <option value="livres_loisirs">Livres sur les Loisirs</option>
        <option value="jeux_societe">Jeux de Société</option>
        <option value="collection">Collection et Objets de Collection</option>
        <option value="peche">Pêche</option>
        <option value="billets_evenements">Billets pour Événements</option>
        <option value="voyages_aventures">Voyages et Aventures</option>
        <option value="animaux">Animaux de Compagnie</option>
        <option value="plongee_sous_marine">Plongée Sous-Marine</option>
    </optgroup>
    <optgroup label="aucun choix">
    <option value="Autre">Autre</option>
    </optgroup>
</select>

                        <div class="boutonOnlymobile suivant"onclick="posteArticle(event)">Poster ton Article</div>
                   </form>
                </div>
                <!-- poster une article -->
                <div class="swiper-slide searchCritere">
                    <div class="menuOption"><i class="fa-solid fa-rotate-right"></i>sjsk</div>
                    <div class="menuOption"><i class="fa-solid fa-rotate-right"></i>sjsk</div>
                    <div class="menuOption"><i class="fa-solid fa-rotate-right"></i>sjsk</div>
                </div>
                <div class="swiper-slide">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur pariatur excepturi tempore nihil. Iste provident, consectetur esse vitae, maxime soluta aliquid quidem distinctio corrupti explicabo nesciunt. Placeat deserunt quas ut.
                </div>
                </div>
              </div>
        
    </div>
        <!-- ------------------RIGHT----------- -->
        <div class="rightPlaza">
            <div class="eplaza_title">
                <div class="headermobile">
                    <div class="titre_animation interd"> ePlaza Market</div>
                    <div class="textChamps">
                        <i class="fa-solid fa-magnifying-glass"></i><input type="text" name="" id=""placeholder="Trouver un Article sur eplaza"> 
                    </div>
                    <div class="imageLogoEplaza"><img src="../images/Logo_ePlaza.png" alt=""></div>
                </div>
                <div class="menupourandroidbuttonoptions">
                    <h2>Articles</h2>
                    <h2>Boutique</h2>
                    <h2><i class="fa-solid fa-magnifying-glass"></i>Rech..</h2>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper PeinciplaeSesionPage">
                            <!-- Priciplale_user -->
                    <div class="swiper-slide">
                        <div class="menuHomeChoix">
                            <div class="optionHome active" onclick="Menueplaza(event)" id="actualite">Toutes les Actualites<i class="fa-solid fa-earth-africa"></i></div>
                            <div class="optionHome"onclick="Menueplaza(event)"id="Publicites">Publicites<i class="fa-solid fa-bullhorn"></i></div>
                            <div class="optionHome"onclick="Menueplaza(event)" id="Locations">Locations et vente<i class="fa-solid fa-house-lock"></i></div>
                            <div class="optionHome"onclick="Menueplaza(event)" id="Boutique">Ma Boutique<i class="fa-solid fa-shop"></i></div>
                          </div>
                          <div class="swiper mySwiper">
                            <div class="swiper-wrapper sessionpage">
                                <!-- Actualiters -->
                                <div class="swiper-slide">
                                    <div class="contaaineurPub PubUser">
                                    <div class="allcontentpub">
                                        <?php
                                         global $limiteost;
                                         global $DB;
                                            $query = "SELECT * FROM articles  ORDER BY RAND() LIMIT 4";
                                            $result = $DB->read($query);
                                            if ($result) {
                                                foreach ($result as $ROW) {
                                                    $USERS_ROW = $user->get_user($ROW['owner']);
                                                    $nom_decrypte = decrypt($USERS_ROW['nom'], $key);
                                                    $prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
                                                    $vues = $ROW['vues'];
                                                    $profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
                                                    $image = $ROW['image'];
                                                    include("int_eplaza_preference.php");
                                                }
                                            }
                                        ?>
                                        </div>
                                    </div>
                                    <div class="container_affiches PrincipalePageEplaza">
                                        <!-- articles -->

                                        <!-- articles -->
                                    </div>
                                </div>
                                <!-- Publicite -->
                                <div class="swiper-slide">
                                    <div class="container_affiches">
                                        <!-- articles -->
                                    
                                    </div>
                                </div>
                                <!-- Locations -->
                                <div class="swiper-slide">
                                    <div class="container_affiches">
                                        <!-- articles -->
                                        <div class="Affiche">
                                            <div class="topArtcle">
                                                 <img src="../images/trois-Couloirs.jpg">
                                             </div>
                                             <div class="bottonArticle">
                                                 <div class="topArticlesBottom">
                                                     <div class="photoamis"></div>
                                                     <div class="names">
                                                         <H3>Maison à Louer</H3>
                                                         <p>20k vues <i class="fa-solid fa-eye"></i></p>
                                                     </div>
                                                 </div>
                                                 <div class="BottomArticlesBottom">
                                                     <p>Trois chambres</p>
                                                     <p class="prixArticles">100 000FB</p>
                                                 </div>
                                             </div>
                                             <div class="bottonartpourandroidbutton">
                                                 <div class="names">
                                                     <H3>Maison à Louer</H3>
                                                     <p>20k vues <i class="fa-solid fa-eye"></i></p>
                                                 </div>
                                                 <div class="BottomArticlesBottom">
                                                     <p>Trois chambres</p>
                                                     <p class="prixArticles">100 000FB</p>
                                                 </div>
                                                 <div class="btn">contact</div>
                                             </div>
                                         </div>
                                        <div class="Affiche">
                                            <div class="topArtcle">
                                                 <img src="../images/trois-Couloirs.jpg">
                                             </div>
                                             <div class="bottonArticle">
                                                 <div class="topArticlesBottom">
                                                     <div class="photoamis"></div>
                                                     <div class="names">
                                                         <H3>Maison à Louer</H3>
                                                         <p>20k vues <i class="fa-solid fa-eye"></i></p>
                                                     </div>
                                                 </div>
                                                 <div class="BottomArticlesBottom">
                                                     <p>Trois chambres</p>
                                                     <p class="prixArticles">100 000FB</p>
                                                 </div>
                                             </div>
                                             <div class="bottonartpourandroidbutton">
                                                 <div class="names">
                                                     <H3>Maison à Louer</H3>
                                                     <p>20k vues <i class="fa-solid fa-eye"></i></p>
                                                 </div>
                                                 <div class="BottomArticlesBottom">
                                                     <p>Trois chambres</p>
                                                     <p class="prixArticles">100 000FB</p>
                                                 </div>
                                                 <div class="btn">contact</div>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                                <!-- Boutiques -->
                                <div class="swiper-slide">
                                    <div class="Profiletop">
                                        <div class="TopImageBoutique">
                                            <?php
                                            global $my_id,$user;
                                            $boutiqueidDailles = detailBoutiue($my_id);
                                            if($boutiqueidDailles)
                                            {
                                                $profileBoutique = decrypt($boutiqueidDailles['profile'],$key);
                                                $nom = decrypt($boutiqueidDailles['nom'],$key);
                                                $userid = $boutiqueidDailles['ownerid'];
                                                $userInfos = $user->get_user($userid);
                                                $nom_comple = decrypt($userInfos['nom'], $key) . ' ' . decrypt($userInfos['prenom'], $key);
                                                $amis = $userInfos['amis'];
                                                $suivi = $userInfos['suivi'];
                                            }else{
                                                $nom  = $nom_comple;
                                                global $profile;
                                                $profileBoutique = $profile;
                                            }
                                            ?>
                                           <div class="imageProfile">
                                               <div class="imageOwner"><img src="<?php echo $profileBoutique ?>" style="width:100%;height:100%;object-fit:cover;border-radius:50%"></div>
                                               <div class="nameBoutique">
                                                   <h3><?php echo $nom ?></h3>
                                                   <p><?php echo $nom_comple ?></p>
                                               </div>
                                           </div>
                                           <div class="otherLeft">
                                               <div class="Numb">
                                                   <h3>0</h3>
                                                   <span>Visiteurs</span>
                                               </div> 
                                                <div class="Numb">
                                                   <h3>0</h3>
                                                   <span>Photos</span>
                                               </div>
                                               <div class="Numb">
                                                   <h3><?php echo $amis ?></h3>
                                                   <span>Ami(e)s</span>
                                               </div>
                                               <div class="Numb">
                                                   <h3><?php echo $suivi ?></h3>
                                                   <span>suivi(e)s</span>
                                               </div>
                                           </div>
                                        </div>
                                   </div>
                                   <div class="container_affiches mesprodit">
                                    <!-- articles -->
                                    Mes profuits
                                    <!-- articles -->
                                </div>
                                </div>
                            </div> 
                           </div> 
                    </div>
                        <!-- Articles visualisation -->
                    <div class="swiper-slide">
                        <div class="visualisationArticles">
                            <div class="rightside_vis">
                                <div class="articlesPhoto"></div>
                                <div class="topArticlesBottom">
                                    <div class="photoamis"></div>
                                    <div class="names">
                                        <H3>Maison à Louer</H3>
                                        <p>20k vues <i class="fa-solid fa-eye"></i></p>
                                        <div class="InputDouble">
                                            <div class="boutonOnlymobile suivant"onclick="Suivant_2()">Créez Une Boutique</div>
                                            <div class="boutonOnlymobile suivant"onclick="Suivant_2()">Créez Une Boutique</div>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur officiis similique, velit dolorum sint aspernatur, saepe porro ratione placeat perferendis nihil non natus omnis ut sit incidunt distinctio dolores quibusdam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../JQuery/loadingPage.js"></script>
    <script src="../Javascripts/stylepage.js"></script>
    <script src="../Javascripts/fonctionsAccueil.js"></script>
    <script src="../Ajax_Functions/functionAjax.js"></script>
    <script src="../Javascripts/eplazaStructures.js"></script>
    <script>
function lectirePoste()
{
    let value = "";
    let page = "lectureAricles.php";
    function callback(data) 
    {
        document.querySelector(".container_affiches.PrincipalePageEplaza").innerHTML = data;
    }
sendValueAjax(page, value, callback);
}
function lectirePosteForMy()
{
    let value = "";
    let page = "lectureAriclesOwneArtocles.php";
    function callback(data) 
    {
        document.querySelector(".container_affiches.mesprodit").innerHTML = data;
    }
sendValueAjax(page, value, callback);
}
function preferencePub()
{
    let value = "";
    let page = "lectureAriclesPreference.php";
    function callback(data) 
    {
        document.querySelector(".allcontentpub.left").innerHTML = data;
    }
    sendValueAjax(page, value, callback); 
}
$(document).ready(function () {
lectirePoste();
preferencePub();
lectirePosteForMy();
});
function updateLabelAndDisplayEplaza(input, event, displayId) {
  var fileInput = input;
  var displayElement = document.getElementById(displayId);
  displayElement.innerHTML = `<div class="mereAnimationclique"><span>Chargement..</span><div class="loading interd"></div></div>`;

  if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      if (displayId === 'videoDisplay') {
        displayElement.innerHTML = '<video controls autoplay muted><source autoplay src="' + e.target.result + '" type="video/mp4"></video>';
      } else if (displayId === 'documentDisplay') {
        var file = fileInput.files[0];
        var fileName = file.name;
        var documentTitle = fileName.substr(0, fileName.lastIndexOf('.')) || fileName;
        var fileSize = (file.size / 1024).toFixed(2);
        var fileType = file.type || 'Non disponible';
        displayElement.innerHTML = '<div class="document-title"> Nom du Fichier :' + documentTitle + '</div>' +
          '<div class="document-info">Taille: ' + fileSize + ' KB</div>' +
          '<div class="document-info">Type: ' + fileType + '</div>';
      } else {
        displayElement.innerHTML = '<img src="' + e.target.result + '">';
        document.querySelector(".containeurInputStyle.poste.publication").style.display='flex';
        cliquedImage();
      }
    
    };

    reader.readAsDataURL(fileInput.files[0]);
  }
}
function SuivantCreationBputique()
  {
      document.querySelector('.swiper-wrapper.eplazaMarket').style.transform = 'translateX(-100%)';
  }
  function CreationBoutique(event)
  {
      event.target.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">En train de créer...</span><div class="loading interd"></div></div>`;
      let page = "creationBoutique.php";
      let form = document.querySelector(".swiper-slide.NouvellBoutique");
      let erreur = document.querySelector(".erreurImagesStory");
      function callback(data) 
      {
         if(data.trim() === 'true')
         {
          document.querySelector(".swiper-wrapper.menuEplaza").style.transform = 'translateX(0%)';
          event.target.innerHTML ="";
         }else{
             document.querySelector('.erreurMessageCreation').textCont = data;
         }
      }
      functionAjax(page, form, callback);
  }
  function posteArticle(event)
  {
      event.target.innerHTML = `<div class="mereAnimationclique"><span style="color:#ffff">En train de créer...</span><div class="loading interd"></div></div>`;
      let page = "NewArticles.php";
      let form = document.querySelector(".FormPosteArticles");
      function callback(data) 
      {
        event.target.innerHTML = "Poster ton Article";
        lectirePosteForMy();
      }
      functionAjax(page, form, callback);
  }
  function visualisation(event)
  {
    let MereSlides = document.querySelector(".swiper.mySwiper .swiper-wrapper.PeinciplaeSesionPage");
    MereSlides.style.transform = 'translateX(-100%)';
    
  }
</script>
</body>
</html>