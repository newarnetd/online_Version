<?php
$nomDecrypte = decrypt($USERS_ROW['nom'], $key);
$prenomDecrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nomCompletFriends = limiterChaine($nomDecrypte . ' ' . $prenomDecrypte, 20);
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_ROW['suivi'];
$dernierMsg = decrypt($conversation['messages'][0]['message'], $key);
$timezoneServer = new DateTimeZone(date_default_timezone_get());
$date = $conversation['messages'][0]['date'];
$dateTime = new DateTime($date, $timezoneServer);
$formattedTime = formatMessageTime($dateTime);
$infosUser = base64_encode($USERS_ROW['userid']);
$type = base64_encode("message");
$link = "message.php?y=$type&x=$infosUser";
$online = $USERS_ROW['enligne'];
$seen = countMessageseenChat($conversation['messages'][0]['messageid']);
?>
<a href="<?= $link ?>" class="voirgroupe">
   <div class="photoamis">
      <img class="userphoto" src="<?= $profile ?>"style="width:100%;height:100%;border-radius:50%">
   </div>
   <div class="nomamis">
      <h3 style="font-weight:500;font-size:17px;"><?= $nomCompletFriends ?></h3>
      <p style="font-size:15px;opacity:.6;">
         <?php
         $message = ($conversation['messages'][0]['owner'] == $my_id)
            ? limiterChaine("vous : " . $dernierMsg, 37)
            : limiterChaine($dernierMsg, 37);
         echo $message;
         ?>
      </p>
   </div>
   <?php
   if ($seen != 0) {
      echo '<div class="onlineTime messageColor">' . $seen . '</div>';
   } else {
      echo '<div class="onlineTime">' . $formattedTime . '</div>';
   }
   ?>
</a>
