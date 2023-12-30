<?php
$nom_decrypte = decrypt($USERS_FRIENDS['nom'], $key);
$prenom_decrypte = decrypt($USERS_FRIENDS['prenom'], $key);
$sexe = $USERS_FRIENDS['sexe'];
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_FRIENDS['ver_profile'] !== 0) ? $USERS_FRIENDS['profile'] : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_FRIENDS['suivi'];
if($suivi !== 0)
{
  $suivi = $suivi ."amis";
}else{
  $suivi = "@" .$prenom_decrypte;
}
?>
<div class="carteFriends swiper-slide">
                        <div class="headerImage">
                          <img src="<?php echo $profile ?>"/>
                        </div>
                        <div class="bottomFriendscarte">
                          <div class="namesUser">
                            <h3><?php echo  limiterChaine($nom_comple_friends,14)?></h3>
                            <span><?php echo $suivi?></span>
                          </div>
                          <div class="boutonsActions">
                            <div class="confirmationBoutonsCnter">Ajouter <i class="fa-solid fa-plus"></i></div>
                            <div class="confirmationBoutonsCnter suivre">suivre <i class="fa-solid fa-plus"></i></div>
                          </div>
                        </div>
                      </div>
