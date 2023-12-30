<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? $USERS_ROW['profile'] : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
?>
<div class="containerFriends">
  <div class="identiteUse">
    <div class="userPhotoCarte">
      <img src="<?php echo $profile?>" class="userphoto" />
    </div>
    <div class="nameUser">
        <h3><?php echo  limiterChaine($nom_comple_friends,20)?></h3>
        <span><?php echo $suivi?></span>
      <div class="boutonsUserConfirme">
        <div class="confirmeBtn boutonAdmettre ajouter">Ajouter <i class="fa-solid fa-user-plus"></i></div>
        <div class="supprimerBtn boutonAdmettre suivre">suivre <i class="fa-solid fa-user-plus"></i></div>
      </div>
    </div>
  </div>
</div>