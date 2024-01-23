<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
?>
<div class="containerFriends">
  <div class="identiteUse">
    <div class="userPhotoCarte"y="<?php echo encrypt($USERS_ROW['userid'],$key) ?>" onclick="ProfileHomepage(event)" style="curso:pointer">
      <img src="<?php echo $profile?>" class="userphoto" />
    </div>
    <div class="nameUser">
        <h3><?php echo  limiterChaine($nom_comple_friends,20)?></h3>
        <span><?php echo $suivi?></span>
      <div class="boutonsUserConfirme">
        <div class="confirmeBtn boutonAdmettre ajouter attente" owner="<?php echo $USERS_ROW_INVITATION['invitationId'] ?>" onclick="Confirmer(event)">Confirmer<i class="fa-solid fa-user-check"></i></div>
        <div class="supprimerBtn boutonAdmettre suivre supresion"owner="<?php echo $USERS_ROW_INVITATION['invitationId'] ?>" onclick="supprimerInvitation(event)">Supprimer<i class="fa-solid fa-user-xmark"></i></div>
      </div>
    </div>
  </div>
</div>