<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_OwnerAction = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$nom_OwnerAction = limiterChaine($nom_OwnerAction,20);
$date = decrypt($data_notif['date'],$key);
$date = calcTemps($date);
$type = $data_notif['type'];
$seen = $data_notif['seen'];
$id_notid = decrypt($data_notif['notif_id'],$key);
$emmeteur = decrypt($data_notif['userid'],$key);
$contentid = $data_notif['contentid'];
if($seen == 0)
{
  $background= "var(--color-verter_claire)";
  $color="#212121";
}else{
  $background= "var(--color-blanche-1)";
  $color="var(--color-text)";
}
if($type == "accepter")
{
  $msg_type = "Confirmation del'invitation";
  $textNotification = $nom_OwnerAction ."  vient d'accepeer votre Invitaionenvoye recement,vous etes maintenant ami(e)sur NewaRnaet il y a " . $date;
  
}
if($type == "abonnement")
{
  $msg_type = "Boutique ePlaza";
  $textNotification = "Bravo, " . $nom_OwnerAction . " vient de s'abonner à votre boutique eplza sur NewaRnaet. Cela s'est produit i y " . $date;
}
if ($type == "aimer") {
  $msg_type = "expression de like";
  $textNotification = $nom_OwnerAction . " vient d'exprimer son appréciation sur votre poste il y a " . $date;
}

?>
<div class="cartecommentaire notification" style="background:<?php echo $background?>;color:<?php echo $color ?>;margin-bottom:0">

              <div class="imagePhoto">
                  <div class="photoEplaza"y="<?php echo encrypt($USERS_ROW['userid'],$key) ?>" onclick="ProfileHomepage(event)" style="curso:pointer"> <img src="<?php echo $profile ?>" alt=""></div>
                  <div class="DetailArtcle">
                    <h3 style="color:<?php echo $color ?>;"><?php echo $nom_OwnerAction ?></h3>
                    <small style="color:<?php echo $color ?>;"><?php echo $msg_type?></small>
                  </div>
                </div>
                <p style="width:100%;display:flex;font-size:15px;opacity:.9;color:<?php echo $color ?>"><?php echo $textNotification?></p>
            </div>