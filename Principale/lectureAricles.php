<?php
include("otherPrincipale.php");
if($_SERVER['REQUEST_METHOD'] === "POST") 
{
    global $limiteost;
     global $DB;
    $value = decrypt($_POST['value'],$key);
$query = "SELECT * FROM articles  ORDER BY RAND() LIMIT 4";
$result = $DB->read($query);
if ($result) {
    foreach ($result as $ROW) {
        $USERS_ROW = $user->get_user($ROW['owner']);
        $nom_decrypte = decrypt($USERS_ROW['nom'], $key);
        $prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
        $vues = $ROW['vues'];
        $profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
        $image = $ROW['image'];
        $vues = $ROW['vues'];
        $nomArticle = $ROW['nom'];
        include("int_productArticles.php");
    }
}
}
?>

