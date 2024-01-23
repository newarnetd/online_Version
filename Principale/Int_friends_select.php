<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_ROW['suivi'];
$nom_comple_friends = limiterChaine($nom_comple_friends, 13);
$amisEncommun = nombreAmisCommuns($my_id, $USERS_ROW['userid']);

if ($USERS_ROW['userid'] == $my_id) {
    $suivi = "Vous";
} elseif ($suivi != 0) {
    $suivi = $suivi . " " . "suivi(s)";
} else {
    $suivi = "@" . $prenom_decrypte;
}
?>

<div class="conteneuramis">
    <div class="photoamis"y="<?php echo encrypt($USERS_ROW['userid'],$key) ?>" onclick="ProfileHomepage(event)" style="curso:pointer">
        <img src="<?php echo $profile ?>"/>
    </div>
    <div class="nomamis">
        <h3><?php echo $nom_comple_friends ?></h3>
        <p><small><?php echo ($amisEncommun > 0) ? $amisEncommun . " amis en commun" : $suivi; ?></small></p>
    </div>
    <div class="iconeamis"><input type="checkbox" name="membre" id="" value="<?php echo $USERS_ROW['userid'] ?>" onchange="creationGroupeVerification(event)"></div>
</div>
