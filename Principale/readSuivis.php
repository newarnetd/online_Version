<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $my_id;
    global $user;
    $result= $user->Mes_suivi($my_id,"suivre");
    if($result){
        shuffle($result);
        foreach($result as $_ROW)
        {
            $USERS_ROW =  $user->get_user($_ROW['userid']);
            include("int_mes_amis.php");
        }
    }else{
        echo"<div class='textCent'>Vous ne comptez actuellement aucun(e) suivi(e) dans votre répertoire de suivi sur NewaRnet.</div>";
    } 
}
?>