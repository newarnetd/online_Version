<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $my_id, $key;
    $value = decrypt($_POST['value'], $key);
    $USERS_ROW = $user->get_user($value);

    if ($USERS_ROW) {
        $nom_decrypte = decrypt($USERS_ROW['nom'], $key);
        $prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
        $sexe = decrypt($USERS_ROW['sexe'], $key);
        $nom_comple_friends = limiterChaine($nom_decrypte . ' ' . $prenom_decrypte, 16);
        $profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
        $tel = decrypt($USERS_ROW['tel'], $key);
        $email = decrypt($USERS_ROW['email'], $key);
        $preference = limiterChaine(decrypt($USERS_ROW['preference'], $key),17);
        $date = calcTemps(decrypt($USERS_ROW['date'], $key));
        $Friendid = encrypt($USERS_ROW['userid'], $key);
        $amisEncommun = nombreAmisCommuns($my_id, $USERS_ROW['userid']);
        $infosuser = base64_encode($USERS_ROW['userid']);
        $link = "Profil.php?u=$infosuser"; 
        if($USERS_ROW['userid'] !== $my_id)
        {
            AddDatahyperSync($my_id, $USERS_ROW['userid'], "profile");
        }
    }
}
?>

<div class="headerFriends">
    <div class="photoOwnerConnected" ><img onclick="VueImage(event)" src="<?php echo $profile ?>" style="width:100%;height:100%;border-radius:50%;object-fit:cover"></div>
    <div class="nameOwnerConnected">
        <h3><?php echo $nom_comple_friends; ?></h3>
        <span>intéressé par <?php echo $preference; ?></span>
    </div>
    <div class="menuOptionsProfile">
        <span><i class="fa-solid fa-users"></i><?php echo $USERS_ROW['amis']; ?> Amis</span>
        <span><a href="<?php echo $link ?>"style="color:#FFF"><i class="fa-solid fa-user"></i>Profil</a></span>
    </div>
    <div class="otherDetailUser">
        <div><span><i class="fa-solid fa-user-shield"></i></span> <span>Devenu NewaRnaute il y a <?php echo $date; ?></span></div>
        <div><span><i class="fa-solid fa-heart"></i></span> <span>célibataire</span></div>
        <div><span><i class="fa-solid fa-face-kiss-wink-heart"></i></span> <span><?php echo $preference; ?></span></div>
        <div><span><i class="fa-solid fa-phone"></i></span> <span><?php echo $tel; ?></span></div>
        <div style="cursor:pointer" y="<?php echo encrypt($USERS_ROW['userid'],$key) ?>" onclick="AlbumPhotoHomPage(event)"><span><i class="fa-solid fa-image"></i></span> <span>Album Photo</span></div>
    </div>
</div>
