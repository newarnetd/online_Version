<?php
$nom_decrypte = decrypt($USERS_FRIENDS['nom'], $key);
$prenom_decrypte = decrypt($USERS_FRIENDS['prenom'], $key);
$sexe = $USERS_FRIENDS['sexe'];
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_FRIENDS['ver_profile'] !== 0) ? decrypt($USERS_FRIENDS['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_FRIENDS['suivi'];
if($suivi != 0)
{
  $suivi = $suivi ." "."suivi(s)";
}else{
  $suivi = "@" .$prenom_decrypte;
}
$Friendid = encrypt($USERS_FRIENDS['userid'],$key);
?>
<div class="carteFriends swiper-slide">
                        <div class="headerImage">
                          <img src="<?php echo $profile ?>"/>
                        </div>
                        <div class="bottomFriendscarte">
                          <div class="namesUser">
                            <h3><?php echo  limiterChaine($nom_comple_friends,17)?></h3>
                            <span><?php echo $suivi?></span>
                          </div>
                          <div class="boutonsActions">
                            <div class="confirmationBoutonsCnter" owner="<?php echo $Friendid ?>" onclick="AddRelation(event)">Ajouter <i class="fa-solid fa-users"></i></div>
                            <div class="confirmationBoutonsCnter suivre"owner="<?php echo $Friendid ?>"onclick="suivreRelation(event)">suivre <i class="fa-solid fa-users"></i></div>
                          </div>
                        </div>
                      </div>
