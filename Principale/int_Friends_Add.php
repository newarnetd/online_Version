<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$amisEncommun = nombreAmisCommuns($my_id, $USERS_ROW['userid']);
$nom_comple_friends = limiterChaine($nom_comple_friends, 13);

$Friendid = encrypt($USERS_ROW['userid'], $key);
global $my_id;
$terme = verificationInvitation($my_id, $USERS_ROW['userid']);
$suivre = verificationRelation($my_id, $USERS_ROW['userid']);
$termeSuivre = ($suivre) ? "suivi(e)" : "suivre";

$termeHtml = ($terme) ?
    "<div class='boutonsUserConfirme'>
        <div class='confirmeBtn boutonAdmettre ajouter' style='background:var(--color-blanche-2);border:none' owner='$Friendid' onclick='OtherFontionAdd(event)'>En attente...</div>
    </div>" :
    "<div class='boutonsUserConfirme'>
        <div class='confirmeBtn boutonAdmettre ajouter' owner='$Friendid' onclick='OtherFontionAdd(event)'>Ajouter <i class='fa-solid fa-user-plus'></i></div>
        <div class='supprimerBtn boutonAdmettre suivre' owner='$Friendid' onclick='suivreRelation(event)'>$termeSuivre<i class='fa-solid fa-user-plus'></i></div>
    </div>";

?>

<div class="containerFriends">
    <div class="identiteUse">
        <div class="userPhotoCarte">
            <img onclick="VoirImageClicked(event)" src="<?php echo $profile ?>" class="userphoto" />
        </div>
        <div class="nameUser">
            <a href="profile.php?&u=<?php echo $Friendid ?>"><h3><?php echo limiterChaine($nom_comple_friends, 20) ?></h3></a>
            <?php 
                if ($amisEncommun > 0) {
                    echo "<span>{$amisEncommun} amis en commun</span>";
                }
            ?>
            <?php echo $termeHtml ?>
        </div>
    </div>
</div>
