<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $my_id;
    global $user;
    $result= $user->Mesamis($my_id,"amis");
    if($result){
        foreach($result as $_ROW)
        {
            $USERS_ROW =  $user->get_user($_ROW['userid']);
            include("int_conversation.php");
        }
    }else{
        echo"<div class='textCent'>Vous ne comptez aucun(e) ami(e) au sein de votre répertoire d'amis sur NewaRnet.</div>";
    } 
}
?>