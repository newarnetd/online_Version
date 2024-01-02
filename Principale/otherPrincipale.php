<?php
session_start();
$key="07c2870e0e749bb82b00cc03e166aafb";
include("../connectionsBD/connexion.php");
include("../class/Message.php");
include("../class/post.php");
include("../class/image.php");
include("../class/user.php");
include("../functions/functions.php");
$DB = new Database();
$user = new User();
$image_class = new User();
authentification(decrypt($_SESSION['ownerConnected'],$key));
$detail_user = $user->get_user(decrypt($_SESSION['ownerConnected'],$key));
if($detail_user)
{
    define('FEMME_IMAGE', '../images/femme.jpg');
    define('HOMME_IMAGE', '../images/homme.jpg');
    define('PLACEHOLDER_IMAGE', '../images/placeholder.jpg');
    $nom_comple = decrypt($detail_user['nom'], $key) . ' ' . decrypt($detail_user['prenom'], $key);
    $my_sexe= decrypt($detail_user['sexe'], $key);
    $profile = ($detail_user['ver_profile'] !== 0) ? decrypt($detail_user['profile'],$key) : ($my_sexe=== "Femme" ? FEMME_IMAGE : HOMME_IMAGE);
    $couverture = ($detail_user['ver_couverture'] !== 0) ? decrypt($detail_user['couverture'],$key) : PLACEHOLDER_IMAGE;
    $my_id = decrypt($_SESSION['ownerConnected'],$key);
}

?>