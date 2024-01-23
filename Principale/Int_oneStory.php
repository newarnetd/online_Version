<div class="headerSatatus">
<div class="" onclick="BackSatutus()"><i class="fa-solid fa-arrow-left" style="color:#FFF"></i></div>
<div class="carterUsermessage"y="<?php echo encrypt($USERS_ROW['userid'],$key) ?>" onclick="ProfileHomepage(event)" style="curso:pointer">
  <img class="userphoto statut" src="<?php echo $profile ?>" style="color:#FFF">
</div>
<div class="nameUserconversation">
    <h3 style="color:#FFF"><?php echo $prenom_decrypte ?></h3>
    <p style="color:#FFF"><?php
    $date = decrypt($ROW['date'],$key);
    echo calcTemps($date) ?></p>
</div>
</div>