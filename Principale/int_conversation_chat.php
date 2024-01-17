
<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_ROW['suivi'];
$nom_comple_friends = limiterChaine($nom_comple_friends, 13);
$dernierMsg = decrypt($conversation['messages'][0]['message'],$key);
$timezoneServer = new DateTimeZone(date_default_timezone_get());
$date = $conversation['messages'][0]['date'];
$dateTime = new DateTime($date, $timezoneServer);
$formattedTime = $dateTime->format('H:i');
$aujourdHui = new DateTime('now', $timezoneServer);
$hier = new DateTime('yesterday', $timezoneServer);

if ($dateTime->format('Y-m-d') == $aujourdHui->format('Y-m-d')) {
    $formattedTime = $dateTime->format('H:i');
} elseif ($dateTime->format('Y-m-d') == $hier->format('Y-m-d')) {
    $formattedTime = 'Hier , ' . $dateTime->format('H:i');
} elseif ($dateTime->format('Y-m-d') == $avantHier->format('Y-m-d')) {
    $formattedTime = 'Avant-hier ' . $dateTime->format('H:i');
} elseif ($dateTime >= $semaineAvant) {
    $formattedTime = 'Il y a ' . $dateTime->diff($aujourdHui)->format('%a jours') . ' ' . $dateTime->format('H:i');
} else {
}

?>
        <div class="conteneuramis">
                        <div class="photoamis">
                        <img class="userphoto" src="<?php echo $profile?>" alt="">
                        </div>
                        <div class="nomamis">
                        <h3><?php echo $nom_comple_friends ?></h3>
                        <p><?php echo $dernierMsg?></p>
                        </div>
                        <div class="onlineTime"><?php echo $formattedTime ?></div>
                      </div>
                      