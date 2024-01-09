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
.erreurMessageCreation{
    color:var(--color-red-2);
}
    </style>
</head>
<body>
<div class="barrScrolle"><div></div></div>
  <div class="contaneurImage">
    <div class="photoImage"><img src="../images/Logo.png" alt=""></div>
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
                        <div class="containerOptionMenu"onclick="GrouepShares()">
                            <i class="fa-solid fa-share"></i> <span>Partager dans un Groupe</span>
                        </div>
                        <a href="accueil.php" class="containerOptionMenu">
                            <i class="fa-solid fa-home"></i> <span>Page d'accueil</span>
                        </a>
                        <hr class="ligne">
                        <span class="textEplaza">Connaissez-vous une personne qui a besoin d'une Maison à Louer ?</span>
                       <div class="contaaineurPub leftside">
                        <div class="allcontentpub" >
                            <div class="cartetBup"onclick="visualisation()">
                                <img src="../images/Af-1 (1).jpg" alt="">
                                <div class="contacter">Maisons a...</div>
                            </div>
                            <div class="cartetBup"onclick="visualisation()">
                                <img src="../images/Af-1 (3).jpg" alt="">
                                <div class="contacter">Chambre a...</div>
                            </div>
                        </div>
                       </div>
                    </div>
                    <form class="swiper-slide NouvellBoutique" enctype="multipart/form-data">
                    <div class="mySwiper other EplazaMarket">
                        <div class="swiper-wrapper eplazaMarket">
                    <div class="swiper-slide">
                        <h3 class="tittre">Choisissez une image impeccable pour le profil de votre boutique.</h3>
                        <div action="" method="post" class="Form">
                        <input type="file" name="image" id="imagestory" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event,'imageStory')">
                          <label for="imagestory" class="carterPostStory other" id="imageStory" onclick="ImageSelecedEplaza()">
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
                  <div class="swiper-slide groupsShare">
                    <div class="conteneuramis">
                        <div class="photoamis">
                          <img src="../images/jobIcon.jpg"width="100%"height="100%"/>
                        </div>
                        <div class="nomamis">
                          <h3>BAM</h3>
                          <p><small>86 ami(e)s en commun </small></p>
                        </div>
                        <div class="iconeamis"><i class="fa-solid fa-share"></i></div>
                      </div>
                  </div>
                  <!-- poster une article -->
                  <div class="swiper-slide PosterArticle">
                    <form action="" method="post" class="Form">
                    <h3 class="tittre">Trouver une belle image pour que NewaRnet amplifie la portée de cet article</h3>
                        <input type="file" name="image" id="ArticleImage" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event,'imagarticle')">
                          <label for="ArticleImage" class="carterPostStory other" id="imagarticle">
                            <i class="fa-solid fa-plus"></i>
                            <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
                          </label>
                        <div class="InputDouble">
                            <div class="containeurInputStyle">
                                <input type="text" name=""  placeholder="Nommer ton Article">
                            </div>
                            <div class="containeurInputStyle">
                                <input type="text" name=""  placeholder="Descrivez ton Article">
                            </div>
                        </div>
                        <div class="containeurInputStyle">
                            <input type="number" name=""  placeholder="Estimez un Prix">
                        </div>
                        <div class="boutonOnlymobile suivant">Poster ton Article</div>
                   </form>
                </div>
                <!-- poster une article -->
                <div class="swiper-slide searchCritere">
                    <div class="menuOption"><i class="fa-solid fa-rotate-right"></i>sjsk</div>
                    <div class="menuOption"><i class="fa-solid fa-rotate-right"></i>sjsk</div>
                    <div class="menuOption"><i class="fa-solid fa-rotate-right"></i>sjsk</div>
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
                                    <div class="contaaineurPub">
                                        <div class="allcontentpub">
                                            <div class="cartetBup privilige">
                                                <img src="../images/Af-1 (4).jpg" alt="">
                                                <span class="vues">12 vues</span>
                                            </div>
                                            <div class="cartetBup privilige">
                                                <img src="../images/Af-1 (4).jpg" alt="">
                                                <span class="vues">12 vues</span>
                                            </div>
                                            <div class="cartetBup privilige">
                                                <img src="../images/Af-1 (4).jpg" alt="">
                                                <span class="vues">12 vues</span>
                                            </div>
                                            <div class="cartetBup privilige">
                                                <img src="../images/Af-1 (4).jpg" alt="">
                                                <span class="vues">12 vues</span>
                                            </div>
                                            <div class="moreIcons"><i class="fa-solid fa-retweet"></i></div>
                                        </div>
                                       </div>
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
                                <!-- Publicite -->
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
                                           <div class="imageProfile">
                                               <div class="imageOwner"></div>
                                               <div class="nameBoutique">
                                                   <h3>Boutique Shop</h3>
                                                   <p>Jean-luc kashindi</p>
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
                                                   <h3>0</h3>
                                                   <span>Ami(e)s</span>
                                               </div>
                                               <div class="Numb">
                                                   <h3>0</h3>
                                                   <span>suivi(e)s</span>
                                               </div>
                                           </div>
                                        </div>
                                   </div>
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
    <script src="../JQuery/loadingPage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../Javascripts/stylepage.js"></script>
    <script src="../Javascripts/eplazaStructures.js"></script>
    <script src="../Javascripts/fonctionsAccueil.js"></script>
    <script src="../Ajax_Functions/functionAjax.js"></script>
    <script>
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
        function ImageSelecedEplaza()
        {
            document.querySelector(".containeurInputStyle.poste.publication").style.display='flex';
        }
    </script>
</body>
</html>