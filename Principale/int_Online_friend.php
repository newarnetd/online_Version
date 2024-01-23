<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$amisEncommun = nombreAmisCommuns($my_id, $USERS_ROW['userid']);
$nom_comple_friends = limiterChaine($nom_decrypte, 15);

$Friendid = encrypt($USERS_ROW['userid'], $key);
global $my_id;
$terme = verificationInvitation($my_id, $USERS_ROW['userid']);
$suivre = verificationRelation($my_id, $USERS_ROW['userid']);
$termeSuivre = ($suivre) ? "suivi(e)" : "suivre";
$infosuser = base64_encode($USERS_ROW['userid']);
$type = base64_encode("message");
$link = "message.php?y=$type&x=$infosuser"; 
$online = $USERS_ROW['enligne'];
?>
<a href="<?php echo $link ?>" class="carterUsersOnline swiper-slide">
                      <div class="imageUser"><img src="<?php echo $profile ?>"></div>
                      <div class="nameUseronine"><?php echo $nom_comple_friends?></div>
</a>