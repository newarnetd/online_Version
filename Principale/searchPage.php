<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
    global $DB;
    global $key;
    $targetMot = nettoyerDonnee($_POST['value']);
    $query = "SELECT * FROM rechercher WHERE nom LIKE ? OR prenom LIKE ?";
    $resultat = $DB->read($query, ["%$targetMot%", "%$targetMot%"]);
    if($resultat)
    {
        foreach($resultat as $ROW)
        {
            $id = decrypt($ROW['userid'],$key);
            $USERS_ROW =  $user->get_user($id);   
            include("int_search_User.php");
        }
    }else{
        echo"<div class='PopositionInvitation'>
        <div class='textEplaza'>Aucun ami trouvé pour le moment, mais notre système propose d'inviter votre cible depuis d'autres réseaux sociaux en cliquant ci-dessous.</div>
        <div class='confirmeBtn boutonAdmettre ajouter'onclick='share()'>Inviter des personnes<i class='fa-solid fa-share-nodes'></i></div>
        </div>";
    }
}
?>
