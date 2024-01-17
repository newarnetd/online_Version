<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
    global $DB;
    global $key;
   
        $targetMot = nettoyerDonnee($_POST['value']);
        $query = "SELECT * FROM mesgroupes WHERE (nom LIKE ?) AND (userid = ? OR owner = ?) GROUP BY nom";
        $resultat = $DB->read($query, ["%$targetMot%", $my_id, $my_id]);
        if($resultat)
        {
            foreach($resultat as $ROW)
            {
                $dataGroupe = detailGriupe($ROW['groupe']);
                include("int_mes_groupes.php");
            }
        }else{
            echo "<div class='textCent'>vous n'avez aucun Groupe avec cette description.</div>";
        }
    
}
?>
