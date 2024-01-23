<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$suivi = $USERS_ROW['suivi'];
$nom_comple_friends = limiterChaine($nom_decrypte, 13);
$dernierMsg = decrypt($lastMessage['message'], $key);

$timezoneServer = new DateTimeZone(date_default_timezone_get());
$date = $lastMessage['date'];
$dateTime = new DateTime($date, $timezoneServer);
$formattedTime = formatMessageTime($dateTime);

$nom_groupe = ucfirst(decrypt($dataGroupe['nom'], $key));
$profile = decrypt($dataGroupe['profil'], $key);
$infosuser = base64_encode($lastMessage['groupeid']);
$type = base64_encode("groupe");
$link = "message.php?y=$type&x=$infosuser";
$seen = countMessageGroupe($lastMessage['groupeid']);
?>

<a href="<?php echo $link ?>" class="voirgroupe">
<div class="photoamis">
        <img class="userphoto" src="<?php echo $profile ?>" style="width=100%,height:100%;border-radius:50%"/>
    </div>
    <div class="nomamis">
        <h3 style="font-weight:500;font-size:17px"><?php echo $nom_groupe ?></h3>
        <p style="font-size:15px;opacity:.8"><?php echo limiterChaine("$nom_comple_friends : $dernierMsg", 37) ?></p>
    </div>
    <?php
   if ($seen != 0) {
      echo '<div class="onlineTime messageColor">' . $seen . '</div>';
   } else {
      echo '<div class="onlineTime">' . $formattedTime . '</div>';
   }
   ?>
</a>

