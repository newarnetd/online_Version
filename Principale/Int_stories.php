<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $USERS_ROW['suivi'];
$nom_comple_friends = limiterChaine($nom_comple_friends,17);
if($suivi != 0)
{
  $suivi = $suivi ." "."suivi(s)";
}else{
  $suivi = "@" .$prenom_decrypte;
}
$Friendid = encrypt($USERS_ROW['userid'],$key);
$friendsResult = $user->Mesamis($USERS_ROW['userid'], "amis");
$NumbFriens = count($friendsResult);
$Amis_currentUser = $user->Mesamis($my_id, "amis");

if ($Amis_currentUser) {
    $amis_communs_array = array();

    foreach ($result as $_ROW) {
        $USERS_ROW = $user->get_user($_ROW['userid']);
        $Amis_de_l_utilisateur_actuel = $user->Mesamis($USERS_ROW['userid'], "amis");
        $amis_communs = array_intersect($Amis_currentUser, $Amis_de_l_utilisateur_actuel);
        if (!empty($amis_communs)) {
            count($amis_communs_array[$USERS_ROW['userid']]) = $amis_communs;
        }
    }
}

?>
<div class="conversationuser" onclick="ShowStatut(event)">
                                <div class="carterUsermessage">
                                  <img class="userphoto" src="<?php echo $profile?>" >
                                </div>
                                <div class="nameUserconversation">
                                <h3><?php if ($USERS_ROW['userid'] == $my_id) {echo "Vous";} else {echo $nom_comple_friends;}?></h3>
                                    <p><?php echo $amis_communs ?> amis en communs</p>
                                </div>
                                <div class="onlineTime">Aujourdiu, 13:45</div>
                            </div>