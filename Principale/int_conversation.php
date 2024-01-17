<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_ROW['suivi'];
$nom_comple_friends = limiterChaine($nom_comple_friends, 20);
if ($suivi != 0) {
    $suivi = $suivi . " suivi(s)";
} else {
    $suivi = "@" . $prenom_decrypte;
}
$infosuser = base64_encode($USERS_ROW['userid']);
$type = base64_encode("message");
$link = "message.php?y=$type&x=$infosuser"; 
$online = $USERS_ROW['enligne'];
?>
<a href="<?php echo $link ?>" class="conteneuramis conversationHomepage">
    <div class="photoamis">
        <img src="<?php echo $profile ?>" />
    </div>
    <div class="nomamis">
        <h3><?php echo $nom_comple_friends ?></h3>
        <p><small><?php echo TempsEcouler($online);?> </small></p>
    </div>
</a>
