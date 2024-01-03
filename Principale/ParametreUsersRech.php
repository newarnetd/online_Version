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
        foreach($resultat as $USERS_ROW)
        {
            $id = decrypt($USERS_ROW['userid'],$key);
            $USERS_ROW =  $user->get_user($id);   
          include("int_Friends_Add.php");
        }
    }
}
?>
