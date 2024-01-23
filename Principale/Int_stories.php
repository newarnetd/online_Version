<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_ROW['suivi'];
$nom_comple_friends = limiterChaine($nom_comple_friends, 17);

if ($suivi != 0) {
    $suivi = $suivi . " " . "suivi(s)";
} else {
    $suivi = "@" . $prenom_decrypte;
}
$Friendid = encrypt($USERS_ROW['userid'], $key);
$friendsResult = $user->Mesamis($USERS_ROW['userid'], "amis");
$NumbFriens = count($friendsResult);
$amisEncommun = nombreAmisCommuns($my_id, $USERS_ROW['userid']);

$temps_defini = decrypt($_ROW['temps_defini'], $key);
$date = decrypt($_ROW['date'], $key);
$date_timestamp = strtotime($date);
$temps_ecoule = time() - $date_timestamp;
$temps_ecoule_en_minutes = $temps_ecoule / 60;

if ($_ROW['status'] != 1) {
    switch ($temps_defini) {
        case 30:
            $temps_defini_en_minutes = $temps_defini;
            break;
        case 60:
        case 360:
        case 720:
        case 1440:
            $temps_defini_en_minutes = $temps_defini * 60;
            break;
        default:
            break;
    }
    if ($temps_ecoule_en_minutes >= $temps_defini_en_minutes) {
        $query = "UPDATE story SET status = 1 WHERE postid = ?";
        $DB->save($query, [$_ROW['postid']]);
    }
}
?>

<div class="conversationuser" onclick="ShowStatut(event)" y="<?php echo encrypt($_ROW['postid'], $key) ?>" x="<?php echo decrypt($_ROW['image'], $key) ?>">
    <div class="carterUsermessage">
        <img class="userphoto" src="<?php echo $profile ?>">
    </div>
    <div class="nameUserconversation">
        <h3><?php if ($_ROW['userid'] == $my_id) {
                echo "Vous";
            } else {
                echo $nom_comple_friends;
            } ?></h3>
        <p><?php echo calcTemps($date) ?></p>
    </div>
    <div class="onlineTime"><?php echo date("H:i", $date_timestamp); ?></div>
</div>
