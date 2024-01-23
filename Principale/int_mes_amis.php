<?php
if (is_array($USERS_ROW) && isset($USERS_ROW['nom']) && isset($USERS_ROW['prenom']) && isset($USERS_ROW['sexe']) && isset($USERS_ROW['ver_profile']) && isset($USERS_ROW['profile']) && isset($USERS_ROW['suivi']) && isset($USERS_ROW['userid'])) {
    $nom_decrypte = decrypt($USERS_ROW['nom'], $key);
    $prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
    $sexe = decrypt($USERS_ROW['sexe'], $key);
    $nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
    $profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
    $timezoneServer = new DateTimeZone(date_default_timezone_get());
    $online = $USERS_ROW['enligne'];
    $infosuser = base64_encode($USERS_ROW['userid']);
    $type = base64_encode("message");
    $link = "message.php?y=$type&x=$infosuser"; 
    ?>
    <a href="<?php echo $link?>" class="conteneuramis"y="<?php echo encrypt($USERS_ROW['userid'],$key) ?>" onclick="ProfileHomepage(event)" style="curso:pointer">
        <div class="photoamis"y="<?php echo encrypt($USERS_ROW['userid'],$key) ?>" onclick="ProfileHomepage(event)" style="curso:pointer">
            <img src="<?php echo $profile ?>" style="border-radius:50%"/>
        </div>
        <div class="nomamis">
            <h3><?php echo $nom_comple_friends ?></h3>
            <p><small><?php echo TempsEcouler($online) ?> </small></p>
        </div>
</a>
<?php
} else {
    echo "Erreur : Données utilisateur invalides.";
}
?>
