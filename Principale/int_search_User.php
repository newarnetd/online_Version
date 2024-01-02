<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_ROW['suivi'];
if($suivi != 0)
{
  $suivi = $suivi ." "."suivi(s)";
}else{
  $suivi = "@" .$prenom_decrypte;
}
$Friendid = encrypt($USERS_ROW['userid'],$key);
?>
<div class="conteneuramis">
            <div class="photoamis">
              <img src="<?php echo $profile ?>"/>
            </div>
            <div class="nomamis">
              <h3><?php echo $nom_comple_friends ?></h3>
              <p><small>86 ami(e)s en commun </small></p>
            </div>
          </div>