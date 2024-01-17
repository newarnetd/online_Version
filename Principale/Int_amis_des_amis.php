<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_ROW['suivi'];
$nom_comple_friends = limiterChaine($nom_comple_friends, 13);
if($suivi != 0)
{
  $suivi = $suivi ." "."suivi(s)";
}else{
  $suivi = "@" .$prenom_decrypte;
}
$amisEncommun = nombreAmisCommuns($my_id, $USERS_ROW['userid']);
$Friendid = encrypt($USERS_ROW['userid'],$key);
?>
<div class="swiper-slide">
    <div class="photoProfileUser"><img src="<?php echo $profile ?>"></div>
    <div class="namesFriendPropo">
        <h3><?php echo $nom_comple_friends ?></h3>
        <span><?php echo $amisEncommun ?> amis en commun</span>
    </div>
    <div class="BoutonsRetoure user" owner="<?php echo $Friendid ?>" onclick="AddRelation(event)">Ajouter <i class="fa-solid fa-user-plus"></i></div>
</div>
