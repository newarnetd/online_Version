<?php
$nom_decrypte = decrypt($OWNER['nom'], $key);
$prenom_decrypte = decrypt($OWNER['prenom'], $key);
$sexe = $OWNER['sexe'];
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($OWNER['ver_profile'] !== 0) ? decrypt($OWNER['profile'], $key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $OWNER['suivi'];
$dawload = $all_droits = false;
$idpost = $data_poste['postid'];
$linkComment = "commentaire.php?%i=" . $idpost;
global $my_id;
if ($suivi !== 0) {
    $suivi = $suivi . "amis";
} else {
    $suivi = "@" . $prenom_decrypte;
}
$date = calcTemps(decrypt($data_poste['date'], $key));
if ($data_poste['has_image'] !== 0) {
    $dawload = true;
    $Image = decrypt($data_poste['image'], $key);
}

if ($data_poste['userid'] === $my_id) {
    $all_droits = true;
}
$likes_count = $data_poste['likes'];
$commentaires_count = $data_poste['commentaires'];
$date = calcTemps($data_poste['date']);
?>
<div class="carterPoste">
    <div class="blocHead">
        <div class="left_userpost">
            <div class="cartePhoto" y="<?php echo encrypt($OWNER['userid'], $key) ?>" onclick="ProfileHomepage(event)" style="cursor:pointer">
                <img src="<?php echo $profile ?>" class="userphoto" />
            </div>
            <div class="nameUser">
                <h3><?php echo $nom_comple_friends ?></h3>
                <small><?php echo $date ?>.<i class="fa-solid fa-earth-africa"></i></small>
            </div>
        </div>
        <div class="rightmenu" y="<?php echo $idpost ?>" onclick="commentPost(event)">
            <div class="iconDiv"><i class="fa-solid fa-ellipsis"></i></div>
        </div>
    </div>
    <?php
    $post = decrypt($data_poste['message_poste'], $key);
    if (isset($post)) {
        echo "<div style='width:100%;justify-content:flex-start;padding:10px'>$post</div>";
    }
    ?>
    <div class="corpPost">
        <?= $dawload ? "<img src='$Image' class='imagePost'/>" : '' ?>
    </div>
    <div class="bottomIocnsEmotion">
        <?php
        $background =  "var(--color-blanche-2)";
        $colorNumlike = $color = "var(--color-text)";
        $colorNum = "var(--color-text)";

        if ($likes_count !== 0) {
            $colorLike = "var(--color-primary)";
        }

        if ($commentaires_count !== 0) {
            $color = "var(--color-primary)";
            $colorNum = "var(--color-text)";
        }
        ?>
        <div class="emotionIcons" y="<?php echo $idpost ?>" onclick="likePost(event)" style="background:<?php echo $background; ?>; color:<?php echo $color; ?>">
            <i class="fa-solid fa-thumbs-up" style="color:<?php echo $colorLike; ?>"></i><span class="number" style="color:<?php echo $colorNumlike; ?>"><?php echo ($likes_count ? $likes_count : ""); ?></span>
        </div>
        <div class="emotionIcons" y="<?php echo $idpost ?>" onclick="commentPost(event)" style="background:<?php echo $background; ?>; color:<?php echo $color; ?>">
            <i class="fa-solid fa-comments" style="color:<?php echo $color; ?>"></i><span class="number" style="color:<?php echo $colorNum; ?>"><?php echo ($commentaires_count ? $commentaires_count : ""); ?></span>
        </div>
        <div class="emotionIcons share">
            <i class="fa-solid fa-eye" style="color:<?php echo $colorLike; ?>"></i>
            <?php
            if ($data_poste['vues'] != 0) {
                echo '<span class="number" style="color:' . $colorLike . '">' . $data_poste['vues'] . '</span>';
            }
            ?>
        </div>
    </div>
</div>
