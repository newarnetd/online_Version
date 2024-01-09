<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $my_id;
    global $user;
    $result=PropositionAmis($my_id);
    if($result)
    {
        foreach($result as $_ROW)
        {
            $USERS_ROW =  $user->get_user($_ROW['userid']);
            include("int_mes_amis.php");
        }
    }
}
?>