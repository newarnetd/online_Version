                <div class="swiper-slide">
                      <!-- poste -->
                   <div class="PostesOnecoucher"></div>
                      <!-- Propostion_modification -->
                      <?php
global $my_id;
global $user;

$result = $user->AmisRand($my_id, "amis", 20);
$personneTrouvee = false;

ob_start(); // Démarrer la mise en mémoire tampon pour capturer la sortie HTML

if ($result) {
    foreach ($result as $_ROW) {
        $Suivis_friends = $user->Amis_DesAmis($_ROW['userid'], "amis", 3);
        if ($Suivis_friends) {
            foreach ($Suivis_friends as $dataAmis_Friends) {
              if($dataAmis_Friends['userid'] !== $my_id )
              {
                $USERS_ROW = $user->get_user($dataAmis_Friends['userid']);
                $myFriends = $user->Mesamis($my_id, "amis");
                if ($myFriends && !in_array($dataAmis_Friends['userid'], array_column($myFriends, 'userid'))) {
                    include("Int_amis_des_amis.php");
                    $personneTrouvee = true;
                }
              }
            }
        }
    }
}

$output = ob_get_clean(); // Capturer la sortie HTML depuis la mise en mémoire tampon

if ($personneTrouvee) {
    // Afficher le bloc seulement si au moins une personne est trouvée
    echo "<div class='textEplaza'>Dans ton répertoire d'amis, l'un(e)  connaît ces personnes. Peux-tu les reconnaître par hasard ?</div>";
    echo '<div class="carterTargetFrinds">';
    echo '<div class="divText">';
    echo '<span>Suggestions pour vous</span>';
    echo '<span y="' . encrypt($my_id, $key) . '" onclick="MoreFriends(event)">Voir plus <i class="fa-solid fa-caret-down"></i></span>';
    echo '</div>';
    echo '<div class="contaneurPropositions">';
    echo '<div class="carterFriendsPropo">';
    echo '<div class="swiper mySwiper PropositionAmisdesAmias">';
    echo '<div class="swiper-wrapper">';
    
    // Afficher la sortie HTML capturée
    echo $output;

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>

                    <!-- Propostion_modification -->
                    <?php
global $my_id;
global $user;

$result = $user->AmisRand($my_id, "amis", 20);
$personneTrouvee = false;

ob_start();
if ($result && count($result) > 0) {
    ?>
    <div class="textEplaza">
      <?php 
      global $key;
      $nom_comple = decrypt($detail_user['nom'], $key) . ' ' . decrypt($detail_user['prenom'], $key);
      ?>
      Salut <?php echo $nom_comple ?>, l'un de tes amis est également en contact avec ces personnes. Connais-tu l'une d'entre elles ?</div>
    <div class="swiper mySwiper profilephotoSuggestion">
        <div class="swiper-wrapper">
            <?php
            foreach ($result as $_ROW) {
                $Suivis_friends = $user->suivi_DesAmis($_ROW['userid'], "suivre", 3);

                if ($Suivis_friends) {
                      shuffle($Suivis_friends);
                    foreach ($Suivis_friends as $dataAmis_Friends) {
                      if($dataAmis_Friends['userid'] !== $my_id )
                      {
                        $USERS_ROW = $user->get_user($dataAmis_Friends['userid']);
                        $myFriends = $user->Mesamis($my_id, "amis");
                        $myFriends = $user->Mes_suivi($my_id, "suivre");
                        if ($myFriends && !in_array($dataAmis_Friends['userid'], array_column($myFriends, 'userid'))) {
                            include("Proposition_Sivi_Frinds.php");
                            $personneTrouvee = true;
                        } 
                      }
                    }
                }
            }
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <?php
}

$output = ob_get_clean(); // Capture HTML output from output buffer

if ($personneTrouvee) {
    // Display the captured HTML output
    echo $output;
}
?>

                    <!-- suggestion PhotoUsers -->
                   <div class="swiper mySwiper other onlyScroll">
                      <div class="divText"><span>Suggestions pour vous</span><span  y="<?php global $my_id; echo encrypt($my_id,$key) ?>" onclick="MoreFriends(event)">Voir plus <i class="fa-solid fa-caret-down"></i></span></div>
                     <div class="swiper-wrapper containerFriesProposition">
                         <!-- Friends -->
                         <?php
                        global $my_id;
                        global $user;
                        
                        $USERS_ROWSFriends = $user->Mesamis($my_id, "amis");
                        
                        if ($USERS_ROWSFriends) {
                            $FriendsIds = array();
                        
                            foreach ($USERS_ROWSFriends as $DataFriends) {
                                $FriendsIds[] = $DataFriends['userid'];
                            }
                        
                            $sql = "SELECT * FROM users
                                    WHERE userid != ? 
                                    AND userid NOT IN (" . implode(',', array_fill(0, count($FriendsIds), '?')) . ")
                                    ORDER BY RAND() LIMIT $limite";
                        
                            $params = array_merge([$my_id], $FriendsIds);
                            $USERS_ROWS = $DB->read($sql, $params);
                        
                            if ($USERS_ROWS) {
                                foreach ($USERS_ROWS as $USERS_FRIENDS) {
                                    include("Int_Friends_1.php");
                                }
                            }
                        } else {
                            $sql = "SELECT * FROM users
                                    WHERE userid != ? ORDER BY RAND() LIMIT $limite";
                            $USERS_ROWS = $DB->read($sql, [$my_id]);
                        
                            if ($USERS_ROWS) {
                                foreach ($USERS_ROWS as $USERS_FRIENDS) {
                                    include("Int_Friends_1.php");
                                }
                            }
                        }
                        
                        ?>
                     </div>
                   </div>
                   <div class="textEplaza">ePlaza est un lieu virtuel de promotion des produits avec une large diffusion dans l'écosystème NewaRnet</div>
                   <div class="swiper mySwiper other onlyScroll cartePage propositions">
                     <div class="swiper-wrapper">
                         <!-- Eplaza here -->
                   </div>
                   </div>
                 </div>
                 <!-- videosHome -->
                 <div class="swiper-slide">
                      
                 </div>
                 <!-- Statu -->
                   <div class="swiper-slide">
                     <div class="swiper mySwiper status">
                         <div class="swiper-wrapper ScrollPart">
                           <div class="swiper-slide partyOneSatus">
                              <!-- stoys_friends -->
                             <div class="leftnav status"> <i class="fa-solid fa-magnifying-glass"></i><input type="search" name=""id=""placeholder="Rechercher une Statut" oninput="RecherCherNewaRnaute(event)"></div>
                                 <!-- stories proipositions -->
                                 <div class="storiesFrindsData">
                                 <?php include("Faux-contenuAutre.php") ?>
                                 </div>
                           </div>
                           <div class="swiper-slide">
                             <div class="carterPostSatut">
                               <div class="headerSatatus">
                                 <div class="" onclick="BackSatutus()"><i class="fa-solid fa-arrow-left"></i></div>
                                 <div class="carterUsermessage">
                                   <img class="userphoto statut" src="../images/785054-ecommerce-istock-020119-removebg-preview.png" alt=""></div>
                                 <div class="nameUserconversation">
                                     <h3>Jean-luc kashindihj</h3>
                                     <p>12 vues</p>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                     </div>
                   </div>
                 <!-- books -->
                 <div class="swiper-slide boook">
                   <div class="swiper mySwiper other">
                     <div class="gridPhoto">
                       <!-- Livres here -->
                     </div>
                     </div>
                 </div>
                 <!-- Post -->
                 <div class="swiper-slide posteSide">
                   <div class="cartetPosteCreation">
                       <div class="headerPatiesPoste">
                         <span><i class="fa-solid fa-arrow-left" onclick="RetunBackCreatePoste()"></i> Creation de poste</span>
                       </div>
                       <form method="post" class="bottomSidepartiePoste">
                           <div class="leftnav postSession"> 
                             <input type="text" name="poste" id=""placeholder="Écrivez ce que vous désirez poster" oninput="PosteChamps(event)">
                         </div>
                           <div class="swiper mySwiper other posteMenu">
                             <div class="menuHomeChoix">
                               <div class="optionHome active" onclick="PosteFile(event)" id="image">Photo<i class="fa-solid fa-image"></i></div>
                               <div class="optionHome"onclick="PosteFile(event)"id="videos">videos <i class="fa-solid fa-clapperboard"></i></div>
                               <div class="optionHome"onclick="PosteFile(event)" id="document">Document<i class="fa-solid fa-file-pdf"></i></div>
                             </div>
                           <div class="swiper-wrapper homeSessionPost slidpost">
                             <input type="file" name="image" id="imagePost" hidden accept="image/*" onchange="updateLabelAndDisplay(this,event,'imageDisplay')">
                             <input type="file" name="video" id="videomessage" hidden accept="video/*" onchange="updateLabelAndDisplay(this,event, 'videoDisplay')">
                             <input type="file" name="document" id="documents" hidden accept=".pdf, .doc, .docx, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" onchange="updateLabelAndDisplay(this,event, 'documentDisplay')"> 
                             <div class="swiper-slide">
                             <label for="imagePost" id="imageDisplay" class="carterPostStory poste">
                                 <p><div class="selectIcon"><i class="fa-solid fa-cloud-arrow-up"></i></div></p>
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
                             <option value="amis">Mes ami(e)s</option>
                               <option value="moi">Moi seule</option>
                               <option value="tous">À tous les NewaRnautes</option>
                             </select>                                                           
                             <div class="containeurInputStyle poste publication" onclick="poster(event)">Publier <i class="fa-solid fa-paper-plane"></i></div>
                         </div>
                       </form>
                   </div>
                 </div>
             </div>