<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $my_id, $user, $key, $DB;
    $friends = $user->Mesamis($my_id, "amis");

    if ($friends) {
        $targetMot = nettoyerDonnee($_POST['value']);
        $query = "SELECT * FROM rechercher WHERE nom LIKE ? OR prenom LIKE ?";
        $resultat = $DB->read($query, ["%$targetMot%", "%$targetMot%"]);

        if ($resultat) {
            foreach ($resultat as $ROW) {
                $id = decrypt($ROW['userid'], $key);
                $USERS_ROW = $user->get_user($id); 
                if (in_array($id, array_column($friends, 'userid'))) {
                    include("Int_friends_select.php");
                }
            }
        } else {
            echo "<div class='textCent'>Ce NewaRnaute n'est pas ton ami(e). Veuillez vérifier l'orthographe.</div>";
        }
    } else {
        echo "<div class='textCent'>Vous ne comptez aucun(e) ami(e) au sein de votre répertoire d'amis sur NewaRnet.</div>";
    }
}
?>
