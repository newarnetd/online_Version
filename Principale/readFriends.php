<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $DB;
    global $limite;
    $id = decrypt($_POST['value'],$key);
    $sql = "SELECT * FROM amis WHERE ownerid = ? OR amisid = ?";
    $result = $DB->read($sql, [$id, $id]);
    if($result)
    {
        foreach($result as $_ROW)
        {
            global $key;
            global $user;
            if($_ROW['ownerid'] === $my_id)
            {
                $USERS_ROW =  $user->get_user($_ROW['amisid']);
            }else{
                $USERS_ROW =  $user->get_user($_ROW['ownerid']);
            }
            include("int_mes_amis.php");

        }
    }
    
}
?>