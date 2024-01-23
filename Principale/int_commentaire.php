<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$nom_comple_friends = limiterChaine($nom_comple_friends, 17);
$commentire = decrypt($_ROW['commentaire'],$key);
$date = calcTemps($_ROW['date']);
?>
<div class="commentaireUser">
            <div class="leftImageComment"><img src="<?php echo  $profile?>" style="width:100%;height:100%;object-fit:cover;border-radius:50%"></div>
            <div class="rightCommentaire">
              <div class="topCommentaire">
                <h3><?php echo $nom_comple_friends ?></h3>
                <p class="commantaire"><?php echo $commentire ?></p>
              </div>
              <div class="botomCommentaore">
                <span><?php echo $date ?></span>
              </div>
            </div>
          </div>