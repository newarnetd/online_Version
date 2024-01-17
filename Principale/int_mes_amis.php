<?php
if (is_array($USERS_ROW) && isset($USERS_ROW['nom']) && isset($USERS_ROW['prenom']) && isset($USERS_ROW['sexe']) && isset($USERS_ROW['ver_profile']) && isset($USERS_ROW['profile']) && isset($USERS_ROW['suivi']) && isset($USERS_ROW['userid'])) {
    $nom_decrypte = decrypt($USERS_ROW['nom'], $key);
    $prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
    $sexe = decrypt($USERS_ROW['sexe'], $key);
    $nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
    $profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
    $suivi = $USERS_ROW['suivi'];
    
    if ($suivi != 0) {
        $suivi = $suivi . " " . "suivi(s)";
    } else {
        $suivi = "@" . $prenom_decrypte;
    }

    $Friendid = encrypt($USERS_ROW['userid'], $key);
    $amisEncommun = nombreAmisCommuns($my_id, $USERS_ROW['userid']);
    ?>
    <div class="conteneuramis">
        <div class="photoamis">
            <img src="<?php echo $profile ?>"/>
        </div>
        <div class="nomamis">
            <h3><?php echo $nom_comple_friends ?></h3>
            <p><small><?php echo $amisEncommun ?> ami(e)s en commun </small></p>
        </div>
        <div class="iconeamis"><i class="fa-solid fa-ellipsis" onclick="OptionUsers()"></i></div>
    </div>
<?php
} else {
    echo "Erreur : Données utilisateur invalides.";
}
?>
