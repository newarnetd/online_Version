<?php
$nom_decrypte = decrypt($USERS_FRIENDS['nom'], $key);
$prenom_decrypte = decrypt($USERS_FRIENDS['prenom'], $key);
$sexe = $USERS_FRIENDS['sexe'];
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_FRIENDS['ver_profile'] !== 0) ? $USERS_FRIENDS['profile'] : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
?>
<div class="carteFriends swiper-slide">
                        <div class="headerImage">
                          <img src="<?php echo $profile ?>"/>
                        </div>
                        <div class="bottomFriendscarte">
                          <div class="namesUser">
                            <h3><?php echo  $nom_comple_friends?></h3>
                            <span>12k amis</span>
                          </div>
                          <div class="boutonsActions">
                            <div class="confirmationBoutonsCnter">Ajouter</div>
                            <div class="confirmationBoutonsCnter suivre">suivre</div>
                          </div>
                        </div>
                      </div>