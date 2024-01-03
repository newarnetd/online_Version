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
    <title>NewaRnet</title>
</head>
<body>
    <div class="referencePage">
        <div class="lefteplaza">
            <div class="textChamps">
                <i class="fa-solid fa-magnifying-glass"></i><input type="text" name="" id=""placeholder="Trouver un Article une categorie" oninput="rechercherCritere(event)"> 
            </div>
            <div class="swiper mySwiper MenuUserLafet">
                <div class="swiper-wrapper menuEplaza">
                    <div class="swiper-slide principaleOptions">
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
                    <div class="swiper-slide NouvellBoutique">
                        <h3 class="tittre">Qu'est-ce qu'une boutique ?</h3>
                        <div class="textEplaza">Chez eplaza Un Boutique constitue un espace virtuel offert par NewaRnet à ses NewaRnautes, leur permettant de mener des promotions </div>
                        <form action="" method="post" class="Form">
                            <div class="InputDouble">
                                <div class="containeurInputStyle">
                                    <input type="text" name=""  placeholder="Nommer ta Boutique">
                                </div>
                                <select class="containeurInputStyle password">
                                    <optgroup label="Mode et Accessoires">
                                        <option value="vetements">Vêtements</option>
                                        <option value="bijoux">Bijoux et Montres</option>
                                    </optgroup>
                                    <optgroup label="Électronique">
                                        <option value="electronique">High-Tech</option>
                                        <option value="photographie">Photographie et Caméras</option>
                                    </optgroup>
                                    <optgroup label="Maison et Loisirs">
                                        <option value="maison">Maison et Jardin</option>
                                        <option value="sport">Sports et Loisirs</option>
                                        <option value="mobilier">Mobilier et Décoration</option>
                                    </optgroup>
                                    <optgroup label="Culture et Divertissement">
                                        <option value="livres">Livres et Papeterie</option>
                                        <option value="musique">Instruments de Musique</option>
                                        <option value="art">Art et Culture</option>
                                    </optgroup>
                                    <optgroup label="Autres">
                                        <option value="artisanat">Artisanat et Créations faites main</option>
                                        <option value="alimentation">Alimentation et Boissons</option>
                                        <option value="auto">Automobile et Moto</option>
                                        <option value="jouets">Jouets et Jeux</option>
                                        <option value="technologie">Technologie et Innovations</option>
                                        <option value="fitness">Fitness et Bien-être</option>
                                        <option value="anime">Manga et Anime</option>
                                        <option value="bricolage">Bricolage et Outils</option>
                                        <option value="cadeaux">Cadeaux et Événements spéciaux</option>
                                        <option value="sante">Santé et Soins personnels</option>
                                        <option value="entreprise">Équipement pour Entreprises</option>
                                        <option value="voyages">Voyages et Aventures</option>
                                        <option value="autre">Autre</option>
                                    </optgroup>
                                </select>
                                
                            </div>
                            <div class="containeurInputStyle">
                                <input type="text" name=""  placeholder="Descrivez ta Boutique un peu">
                            </div>
                            <div class="boutonOnlymobile suivant"onclick="Suivant_2()">Créez Une Boutique</div>
                            <h3 class="tittre secon">Comment utiliser NewaRnet à ton avantage ?</h3>
                            <div class="textEplaza">Optez pour ePlaza et créez votre boutique pour présenter et commercialiser vos produits de manière optimale !</div>
                       </form>
                    </div>
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
                  <div class="swiper-slide PosterArticle">
                    <form action="" method="post" class="Form">
                        <input type="file" name="" id="imagarticle" hidden onchange="SelectArticle(event)" accept="image/*">
                        <label for="imagarticle" class="containeurInputStyle PhotoUser">
                            Selectionner une image <i class="fa-solid fa-image"></i>
                        </label>
                        <label for="imagarticle"  class="containeurInputStyle Image" onchange="SelectArticle(event)">
                            <img src="" class="ImagPost" >
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
                                                <div class="menuPublicite">
                                                    <div class="headerColor">Publicite ePlaza <i class="fa-solid fa-bullhorn"></i></div>
                                                    <div class="InputDouble">
                                                        <button>Message <i class="fa-solid fa-envelope"></i></button>
                                                        <button>12 vues<i class="fa-solid fa-eye"></i></button>
                                                    </div>
                                                    <div class="contentPublicite">
                                                        <div class="topArticlesBottom">
                                                            <div class="photoamis"></div>
                                                            <div class="names">
                                                                <H3>Maison à Louer</H3>
                                                                <p>il y a 3h <i class="fa-solid fa-clock"></i></p>
                                                            </div>
                                                        </div>
                                                        <hr class="ligne">
                                                        <div class="textEplaza">Cette publicité s'apprête à disparaître dans un délai assez bref.</div>
                                                    </div>
                                                </div>
                                                <span class="vues">12 vues</span>
                                            </div>
                                            <div class="cartetBup privilige">
                                                <img src="../images/Af-1 (4).jpg" alt="">
                                                <div class="menuPublicite">
                                                    <div class="headerColor">Publicite ePlaza <i class="fa-solid fa-bullhorn"></i></div>
                                                    <div class="InputDouble">
                                                        <button>Message <i class="fa-solid fa-envelope"></i></button>
                                                        <button>12 vues<i class="fa-solid fa-eye"></i></button>
                                                    </div>
                                                    <div class="contentPublicite">
                                                        <div class="topArticlesBottom">
                                                            <div class="photoamis"></div>
                                                            <div class="names">
                                                                <H3>Maison à Louer</H3>
                                                                <p>il y a 3h <i class="fa-solid fa-clock"></i></p>
                                                            </div>
                                                        </div>
                                                        <hr class="ligne">
                                                        <div class="textEplaza">Cette publicité s'apprête à disparaître dans un délai assez bref.</div>
                                                    </div>
                                                </div>
                                                <span class="vues">12 vues</span>
                                            </div>
                                            <div class="cartetBup privilige">
                                                <img src="../images/Af-1 (4).jpg" alt="">
                                                <div class="menuPublicite">
                                                    <div class="headerColor">Publicite ePlaza <i class="fa-solid fa-bullhorn"></i></div>
                                                    <div class="InputDouble">
                                                        <button>Message <i class="fa-solid fa-envelope"></i></button>
                                                        <button>12 vues<i class="fa-solid fa-eye"></i></button>
                                                    </div>
                                                    <div class="contentPublicite">
                                                        <div class="topArticlesBottom">
                                                            <div class="photoamis"></div>
                                                            <div class="names">
                                                                <H3>Maison à Louer</H3>
                                                                <p>il y a 3h <i class="fa-solid fa-clock"></i></p>
                                                            </div>
                                                        </div>
                                                        <hr class="ligne">
                                                        <div class="textEplaza">Cette publicité s'apprête à disparaître dans un délai assez bref.</div>
                                                    </div>
                                                </div>
                                                <span class="vues">12 vues</span>
                                            </div>
                                            <div class="cartetBup privilige">
                                                <img src="../images/Af-1 (4).jpg" alt="">
                                                <div class="menuPublicite">
                                                    <div class="headerColor">Publicite ePlaza <i class="fa-solid fa-bullhorn"></i></div>
                                                    <div class="InputDouble">
                                                        <button>Message <i class="fa-solid fa-envelope"></i></button>
                                                        <button>12 vues<i class="fa-solid fa-eye"></i></button>
                                                    </div>
                                                    <div class="contentPublicite">
                                                        <div class="topArticlesBottom">
                                                            <div class="photoamis"></div>
                                                            <div class="names">
                                                                <H3>Maison à Louer</H3>
                                                                <p>il y a 3h <i class="fa-solid fa-clock"></i></p>
                                                            </div>
                                                        </div>
                                                        <hr class="ligne">
                                                        <div class="textEplaza">Cette publicité s'apprête à disparaître dans un délai assez bref.</div>
                                                    </div>
                                                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../Javascripts/stylepage.js"></script>
    <script src="../Javascripts/eplazaStructures.js"></script>
</body>
</html>