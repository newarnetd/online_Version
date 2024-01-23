<?php
include("otherPrincipale.php");
if($_SERVER['REQUEST_METHOD'] === "POST") 
{
    global $limiteost;
     global $DB;
    $value = decrypt($_POST['value'],$key);
$query = "SELECT * FROM story WHERE postid = ? LIMIT 1";
$result = $DB->read($query, [$value]);

if ($result) {
    foreach ($result as $ROW) {
        $USERS_ROW = $user->get_user($ROW['userid']);
        $nom_decrypte = decrypt($USERS_ROW['nom'], $key);
        $prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
        $vues = $ROW['vues'];
        $profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
        $image = decrypt($ROW['image'], $key);
        include("Int_oneStory.php");
    }
}
}
?>

