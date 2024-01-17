<?php
include("otherPrincipale.php");
if($_SERVER['REQUEST_METHOD'] === "POST") 
{
     global $DB;
    global $my_id;
    $resultat = getMesGrouepr();
    if(is_array($resultat))
    {
        foreach($resultat as $ROW)
        {
            
            $dataGroupe = detailGriupe($ROW['groupe']);
             include("int_mes_groupes.php");
        }
    }else{
        echo "<div class='textCent'>Actuellement, vous n'avez aucun groupe. Cependant, vous pouvez toujours en créer autant que vous le souhaitez, uniquement pour vos propres intérêts.</div>";
    }
}
?>