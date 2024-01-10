<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_ROW['suivi'];
 $nom_comple_friends = limiterChaine($nom_comple_friends,13);
if($suivi != 0)
{
  $suivi = $suivi ." "."suivi(s)";
}else{
  $suivi = "@" .$prenom_decrypte;
}
?>
<div class="conteneuramis">
    <div class="photoamis">
        <img src="<?php echo $profile ?>"/>
    </div>
    <div class="nomamis">
        <h3><?php echo $nom_comple_friends ?></h3>
        <p><small>
         128 masi 
        </small></p>
        
    </div>
    <div class="iconeamis"><input type="checkbox" name="membre" id=""  value= "<?php echo $USERS_ROW['userid'] ?>" onchange="creationGroupeVerification(event)"></div>
</div>